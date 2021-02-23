<?php 
 session_start();
 if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { 
 	echo json_encode(0);
}else{
	include 'config/connection.php'; 
	$product_id=$_POST['id'];
	$customerid=$_SESSION['customerid'];
	
	if ($conn->query("SELECT customer_id from customer_wishlist where customer_id = '$customerid' and product_id = '$product_id'")->num_rows > 0) {
		if ($conn->query("DELETE FROM customer_wishlist WHERE customer_id = '$customerid' and product_id = '$product_id'")) {
			echo json_encode(2);
		}
	}else{
		$submitteddate=date("D dS M,Y h:i a");
		if ($conn->query("INSERT INTO `customer_wishlist`(`customer_id`, `product_id`, `date_added`) VALUES ('$customerid','$product_id','$submitteddate')")) { 
			echo json_encode(1);
	     }
	 }	
}                                


?>
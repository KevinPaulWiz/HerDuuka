<?php
	
    $product_id = $_POST["id"]; 
    if (!empty($product_id)) {
    	include 'config/connection.php';
    	$colors = array();
		$results = $conn->query("SELECT color, id from product_color where product_id = '$product_id'");
		while ($rows = $results->fetch_assoc()) {
			$colors[] = $rows;
		}
		echo json_encode($colors);
    }
	
 ?>
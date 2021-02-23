<?php
session_start();
include("config/connection.php");
include_once("inc/config.inc.php");
setlocale(LC_MONETARY,"en_US");



if(isset($_POST["product_id"])) {


foreach($_POST as $key => $value){
$product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
}
$statement = $conn->prepare("SELECT product_name, Price FROM products WHERE product_id=? LIMIT 1");
$statement->bind_param('s', $product['product_id']);
$statement->execute();
$statement->bind_result($product_name, $product_price);
while($statement->fetch()){
$product["product_name"] = $product_name;
$product["Price"] = $product_price;
if(isset($_SESSION["products"])){
if(isset($_SESSION["products"][$product['product_id']])) {
$_SESSION["products"][$product['product_id']]["product_quantity"] = $_SESSION["products"][$product['product_id']]["product_quantity"] + $_POST["product_quantity"];
} else {
$_SESSION["products"][$product['product_id']] = $product;

}
} else {
$_SESSION["products"][$product['product_id']] = $product;
}
}
$total_product = count($_SESSION["products"]);
// Part 1
$filename = "orderNo.txt";
$count = file_get_contents($filename);
if ($count == null)
$count = 0;
$count++;
$handle = fopen($filename, "w+");
fwrite($handle, $count);
fclose($handle);
$max=rand(10000, 1000000);
$orderNo=date('Y').($max);
$_SESSION["order_No"]=$orderNo;
die(json_encode(array('products'=>$total_product)));
}
# Remove products from cart
if(isset($_GET["remove_code"]) && isset($_SESSION["products"])) {
	$product_id  = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING);
	if(isset($_SESSION["products"][$product_id]))	{
// sql to delete a record
$conn->query("DELETE FROM orderdetails WHERE product_id='$product_id' AND order_number='".$_SESSION["order_No"]."'");
		unset($_SESSION["products"][$product_id]);
	}	
 	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}

# Update cart product quantity
if(isset($_GET["update_quantity"]) && isset($_SESSION["products"])) {	
	if(isset($_GET["quantity"]) && $_GET["quantity"]>0) {		
		$_SESSION["products"][$_GET["update_quantity"]]["product_quantity"] = $_GET["quantity"];	
	}
	$total_product = count($_SESSION["products"]);
	die(json_encode(array('products'=>$total_product)));
}	

 ?>
<?php
session_start();
include("config/connection.php");
include_once("inc/config.inc.php");
setlocale(LC_MONETARY,"en_US");
?>
     <?php       
    if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) { 
    // Order No
$orderNo=$_SESSION['order_No'];
// echo $order_No;
$cart_box = '<ul class="cart-products-loaded">';
$total = 0;
foreach($_SESSION["products"] as $product){                 
    $product_name = $product["product_name"]; 
    $product_price = $product["Price"];
    $product_id = $product["product_id"];
    $product_quantity = $product["product_quantity"];
    $product_color = $product["product_color"];                 
    $subtotal = ($product_price * $product_quantity);
    $total = ($total + $subtotal);
    include("config/connection.php");
    // Seller query
    $seller = $conn->query("SELECT shop_id, product_id FROM products WHERE product_id='$product_id'");
    $row = $seller->fetch_assoc();
    $shop_id=$row['shop_id'];
    // conditional query
    $sql = "SELECT * FROM orderdetails WHERE product_id='$product_id' AND order_number='".$_SESSION["order_No"]."'";
	$result = $conn->query($sql);
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if ($result->num_rows > 0) {
   $sql = "UPDATE `orderdetails` SET `quantity`='$product_quantity' WHERE product_id='$product_id' AND order_number='".$_SESSION["order_No"]."'";
    // echo "FOund";
	}else{
 $sql = "INSERT INTO `orderdetails`(`shop_id`, `product_id`, `order_number`, `price`, `quantity`, `size`, `color`) VALUES ('$shop_id','$product_id','".$_SESSION["order_No"]."','$product_price','$product_quantity','$product_size','$product_color')";
  // use exec() because no results are returned
    // echo $_SESSION["order_No"];
	}
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
<?php }
            } ?>
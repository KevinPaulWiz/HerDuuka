<?php
// session_start();
include_once("inc/config.inc.php");
setlocale(LC_MONETARY,"en_US");

 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
 //  if (isset($_POST['shipping_method'])) {
    $shipping_method=$_POST['shipping_method'];
    $count=$_POST['count'];
    $customerid=$_POST['customerid'];
    $orderno=$_POST['ordernumber'];
    $grand_total=$_POST['grand_total'];
    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $stat_date=date('Y-m-d');
include("config/connection.php");
     try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `orders`(`customer_id`, `ordernumber`,`orderdate`, `shippingdate`) VALUES ('".$customerid."','".$orderno."','".$submitteddate."','".$shipping_method."')";
    // use exec() because no results are returned
    $conn->exec($sql);
    // echo $_COOKIE[$cookie_order_id];
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//   }
// }
 ?>
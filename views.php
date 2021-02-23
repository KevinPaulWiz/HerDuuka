<?php 
 // session_start();
 include 'config/connection.php'; 
$id = $_POST["id"];
$sql = "SELECT ranking, product_id FROM `products`  WHERE product_id = '$id'";
$result = $conn->query($sql);
// output data of each row
$row = $result->fetch_assoc();
$views= $row["ranking"];
$new_views=$views+1;

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE `products` SET `ranking`='$new_views' WHERE product_id = '$id'";
// Prepare statement
$stmt = $conn->prepare($sql);
// execute the query
$stmt->execute();
// call the function
// echo a message to say the UPDATE succeeded
echo $stmt->rowCount() . " records UPDATED successfully";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
?>
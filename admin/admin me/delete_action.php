<?php
include_once("config/connection.php");
if(isset($_POST['emp_id'])) {
$emp_id = trim($_POST['emp_id']);
$sql = "DELETE FROM products WHERE product_id in ($emp_id)"
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
echo $emp_id;
}
?>
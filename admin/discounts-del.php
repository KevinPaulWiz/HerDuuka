<?php 
 session_start();
        
include 'config/connection.php';
        $email = $_SESSION['email'];
        $user_id = $_SESSION['id'];
        $id = $_POST["id"];
        $stat_date=date('Y-m-d');
        $date=date("D dS M, Y h:i a");
        $year=date("Y");
        $month=date("M");
        $sql = "SELECT * FROM `product_discount` WHERE product_discount_id='$id'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $product_discount_id=$row['product_discount_id'];
    }
} else {
    echo "0 results";
}
 $action="Delete a Product of id <b>$product_discount_id</b>";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql_logs = "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`, `month`, `year`) VALUES ('$user_id','$action','$date','$stat_date','$month','$year')";
    $sql = "DELETE FROM product_discount WHERE product_discount_id='$id'";
    // use exec() because no results are returned
    $conn->exec($sql_logs);
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
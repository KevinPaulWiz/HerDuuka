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
        $sql = "SELECT * FROM `orders` WHERE order_id='$id'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $ordernumber=$row['ordernumber'];
        $customer_id=$row['customer_id'];
    }
} else {
    echo "0 results";
}
 $action="Order <b>$ordernumber</b> for customer under <b>$customer_id </b>";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql_logs = "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`, `month`, `year`) VALUES ('$user_id','$action','$date','$stat_date','$month','$year')";
    $sql = "UPDATE orders SET status = 'in-delivery' WHERE order_id = '$id'";
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
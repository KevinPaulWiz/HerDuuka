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
        $sql = "SELECT * FROM `customers` WHERE customerid='$id'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $product_id=$row['customerid'];
        $name=$row['fname']." ".$row['lname'];
    }
} else {
    echo "0 results";
}
 $action="Delete a customers of id <b>$product_id</b> and Name <b>$name </b>";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql_logs = "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`, `month`, `year`) VALUES ('$user_id','$action','$date','$stat_date','$month','$year')";
    $sql = "DELETE FROM customers WHERE customerid='$id'";
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
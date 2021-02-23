<?php 
 // session_start();
        
include 'config/connection.php';
        // $email = $_SESSION['email'];
        // $user_id = $_SESSION['id'];
        $id = $_POST["id"];
 //        $stat_date=date('Y-m-d');
 //        $date=date("D dS M, Y h:i a");
 //        $year=date("Y");
 //        $month=date("M");
 // $action="Size <b>$id</b> for product size table deleted </b>";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    // $sql_logs = "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`, `month`, `year`) VALUES ('$user_id','$action','$date','$stat_date','$month','$year')";
    $sql = "DELETE FROM product_size WHERE id = '$id'";
    // use exec() because no results are returned
    // $conn->exec($sql_logs);
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
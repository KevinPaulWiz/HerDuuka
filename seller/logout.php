<?php
session_start();

 $submitteddate=date("D dS M,Y h:i a");
 $date=date("D dS M,Y");
 $time=date("h:i a");
$user_id = $_SESSION['id'];
$action="ID no. <b>$user_id</b> Signed-Out on <b>$date</b> at <b>$time</b>  ";
include 'config/connection.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement
    $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`) VALUES ('$user_id','$action','$submitteddate')";
// $check =  $conn->exec();
    // execute the query
    $check =  $conn->exec($log_sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

//Include GP config file
// session_start();
//Unset token and user data from session
unset($_SESSION['shop_id']);
unset($_SESSION['Companyemail']);
unset($_SESSION['active']);
//Redirect to homepage
header("Location:index");
?>


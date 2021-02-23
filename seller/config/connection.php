<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lifehasn_alipata";

// $servername = "localhost";
// $username = "lifehasn_user";
// $password = "ypN4W5rJeD;!";
// $dbname = "lifehasn_alipata";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//set timezones
date_default_timezone_set('Africa/Nairobi');
// Turn off all error reporting
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
error_reporting(0);
?>
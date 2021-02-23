<?php 
 session_start();
        
include 'config/connection.php';
        $date=date("D dS M, Y h:i a");
        $email = $_SESSION['email'];
        $user_id = $_SESSION['id'];
        $id = $_POST["id"];
        $stat_date=date('Y-m-d');
        
        $sql = "SELECT * FROM visitors WHERE id='$id'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $fullname=$row['fullname'];
    }
} else {
    echo "0 results";
}
 $action="Delete a user account of id <b>$id</b> and Name <b>$fullname </b>";

        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$date','$stat_date')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM users WHERE id='$id'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
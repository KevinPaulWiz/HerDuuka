
<?php 
include 'config/connection.php';
if (isset($_POST['Email_newsletter'])) {
// echo "connected";
date_default_timezone_set('Africa/Nairobi');
//display the date and time
$date=date("D dS M,Y h:i a");
$Email_newsletter= $_POST['Email_newsletter'];
$year=date("Y");
$month=date("M");
$stat_date=date("Y-m-d"); 
$token = md5(sha1(uniqid(mt_rand())));
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO `subscription`(`email`, `token`, `created`, `stat_date`, `month`, `year`) VALUES ('$Email_newsletter','$token','$date','$stat_date','$month','$year')";
// use exec() because no results are returned
$conn->exec($sql);
// echo "New record created successfully";

    
// /*-------Sennd email to the sender-------*/
// $to = "kevinpaulwiz@gmail.com";
// $subject = "Welcome to Abercom (U) Technologies";
// // Other variabkles
// $htmlContent = "This is the email For new subscriber $Email_newsletter";
// // Set content-type header for sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// // Additional headers
// $headers .= 'From:  Abercom (U) Technologies<info@abercomtechnologies.com>' . "\r\n";
// $headers .= 'Cc: info@abercomtechnologies.com' . "\r\n";
// $headers .= 'Bcc: info@asbtradesolutions.com' . "\r\n";
// // Send email
// if(mail($to,$subject,$htmlContent,$headers)):
// $successMsg = 'Email has sent successfully.';
// else:
// $errorMsg = 'Email sending fail.';
// endif;
// /*-------Sennd email to the sender-------*/

    }
catch(PDOException $e)
    {
 echo $sql . "<br>" . $e->getMessage();
    }
  }
?>
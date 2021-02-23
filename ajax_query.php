
<?php 
 include 'config/connection.php';
 if (isset($_POST['Email_newsletter'])) {
  // echo "connected";
date_default_timezone_set('Africa/Nairobi');
//display the date and time
$date=date("D dS M,Y h:i a");
// # code...
// echo "Sent";
 // Name of the ip address log.
  $outputWebBug = 'iplog.csv';

  // Get the ip address and info about client.
  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  // Get the query string from the URL.
  $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
  
  // Write the ip address and info to file.
  @ $fileHandle = fopen($outputWebBug, "a");
  if ($fileHandle)
  {
    $string ='"'.$QUERY_STRING.'","' // everything after "?" in the URL
      .$_SERVER['REMOTE_ADDR'].'","' // ip address
      .$hostname.'","' // hostname
      .$_SERVER['HTTP_USER_AGENT'].'","' // browser and operating system
      .$_SERVER['HTTP_REFERER'].'","' // where they got the link for this page
      .$details->loc.'","' // latitude, longitude
      .$details->org.'","' // internet service provider
      .$details->city.'","'  // city
      .$details->region.'","' // state
      .$details->country.'","' // country
      .date("D dS M,Y h:i a").'"' // date
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }
 $Coordinates=$details->loc;
  $ISP=$details->org;
  $city=$details->city;
  $region=$details->region;
  $country=$details->country;
  $Email_newsletter= $_POST['Email_newsletter'];
  $year=date("Y");
  $month=date("M");
  $stat_date=date("Y-m-d"); 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `subscription`(`email`, `created`, `stat_date`, `month`, `year`) VALUES ('$Email_newsletter','$date','$month','$year')";
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
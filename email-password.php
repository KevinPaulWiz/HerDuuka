<?php 
$to = "kevinpaulwiz@gmail.com";
$subject = "Reset your Password";
$htmlContent = "
Hello";



// Set content-type header for sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// Additional headers

$headers .= 'From: Youth Skilling Organization Uganda<info@youthskillingorg.com>' . "\r\n";

$headers .= 'Cc: info@youthskillingorg.com' . "\r\n";

$headers .= 'Bcc: info@youthskillingorg.com' . "\r\n";



// Send email

if(mail($to,$subject,$htmlContent,$headers)):

    $Error = 'Email has been sent successfully.';

else:

    $Error = 'Email sending failed.';

endif;

/*-------Sennd email to the sender-------*/
echo $Error;
 ?>
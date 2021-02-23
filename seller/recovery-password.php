<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/recovery-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recovery Password - Alipata</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../admin/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="../admin/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="../admin/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- end::preloader -->

<div class="form-wrapper">
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['recovery_password'])) {
        $token = md5(sha1(uniqid(mt_rand())));
        $companyemail=$_POST['companyemail'];
include '../admin/config/connection.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE shops SET password_token='$token' WHERE CompanyEmail='$companyemail'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
     /*Send confirmation email*/
    $to = "$CompanyEmail, ";
$subject = "Welcome to Alipata.com";
$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/';

$verifyLink = $siteURL.'admin/verify_email?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&verify_email='.$token; 
$htmlContent = "
    <html>

    <head>

        <title>$subject </title>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <style type='text/css'>
  table {

    text-align: left;
    padding: 0;
    font-family: Google Sans,Roboto,Helvetica,Arial,sans-serif;
    font-size: 15px;
    line-height: 1.5em;
    color: #444444;
    padding: 25px 30px 35px 30px;
}
</style>
    </head>

    <body > 
    <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='m_6132091085501966376bodyTable' style='border-collapse:collapse;height:100%;margin:0;padding:0;width:100%;background-color:#fafafa'>
                <tbody><tr>
                    <td align='center' valign='top' id='m_6132091085501966376bodyCell' style='height:100%;margin:0;padding:10px;width:100%;border-top:0'>
                        
                        
                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='m_6132091085501966376templateContainer' style='border-collapse:collapse;border:0;max-width:600px!important'>
                            <tbody><tr>
                                <td valign='top' id='m_6132091085501966376templatePreheader' style='background:#fafafa none no-repeat center/cover;background-color:#fafafa;background-image:none;background-repeat:no-repeat;background-position:center;background-size:cover;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:9px'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse:collapse'>
    <tbody class='m_6132091085501966376mcnImageGroupBlockOuter'>
        
            <tr>
                <td valign='top' style='padding:9px' class='m_6132091085501966376mcnImageGroupBlockInner'>
                    
                    <table align='left' width='253' border='0' cellpadding='0' cellspacing='0' class='m_6132091085501966376mcnImageGroupContentContainer' style='border-collapse:collapse'>
                            <tbody><tr>
                                <td class='m_6132091085501966376mcnImageGroupContent' valign='top' style='padding-left:9px;padding-top:0;padding-bottom:0'>
                                
                                    
                                        <img alt='' src='http://alipata.com/store/images/media/unnamed123.png' width='264' style='max-width:100%;padding-bottom:0;border:0;height:auto;outline:none;text-decoration:none;vertical-align:bottom' class='m_6132091085501966376mcnImage CToWUd'>
                                    
                                
                                </td>
                            </tr>
                        </tbody></table>
                    


                    <table align='right' width='293' border='0' cellpadding='0' cellspacing='0' class='m_6132091085501966376mcnImageGroupContentContainer' style='border-collapse:collapse'>
                            <tbody><tr>
                                <td align='center' class='m_6132091085501966376mcnImageGroupContent' valign='top' style='padding-right:9px;padding-top:0;padding-bottom:0; float: right;'>
                                
                                    
                                        <img alt=''src='http://alipata.com/store/images/media/unnamed1.png' width='128' style='max-width:100%;padding-bottom:0;border:0;height:auto;outline:none;text-decoration:none;vertical-align:bottom' class='m_6132091085501966376mcnImage CToWUd'><br>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/store/images/media/fb.png'></a>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/store/images/media/tw.png'></a>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/store/images/media/ist.png'></a>
                                    
                                
                                </td>
                            </tr>
                        </tbody></table>
                    
                </td>
            </tr>
        
    </tbody>
</table>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#656565;text-align:left'>
                        
                            <div style='text-align:center'><a href='' style='color:#656565;font-weight:normal;text-decoration:underline' target='_blank' data-saferedirecturl=''>Seller Center</a> &nbsp;| &nbsp;<a href='' style='color:#656565;font-weight:normal;text-decoration:underline' target='_blank' data-saferedirecturl=''>Alipata.com Website</a>&nbsp; | <a href='' style='color:#656565;font-weight:normal;text-decoration:underline' target='_blank' data-saferedirecturl=''>Facebook</a>&nbsp;&nbsp;</div>

                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign='top' id='m_6132091085501966376templateHeader' style='background:#ffffff none no-repeat center/cover;background-color:#ffffff;background-image:none;background-repeat:no-repeat;background-position:center;background-size:cover;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:0'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
            <tr>
                <td valign='top' style='padding:9px'>
                    <table align='left' width='100%' border='0' cellpadding='0' cellspacing='0' style='min-width:100%;border-collapse:collapse'>
                        <tbody><tr>
                            <td valign='top' style='padding-right:9px;padding-left:9px;padding-top:0;padding-bottom:0;text-align:center'>
                                
                                    
                                        <img align='center' alt=''src='http://alipata.com/store/images/media/unnamed.png' width='564' style='max-width:600px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;height:auto;outline:none;text-decoration:none' class='m_6132091085501966376mcnImage CToWUd a6T' tabindex='0'><div class='a6S' dir='ltr' style='opacity: 0.01; left: 544px; top: 434px;'><div id=':4y' class='T-I J-J5-Ji aQv T-I-ax7 L3 a5q' role='button' tabindex='0' aria-label='Download attachment ' data-tooltip-class='a1V' data-tooltip='Download'><div class='aSK J-J5-Ji aYr'></div></div></div>
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='m_6132091085501966376mcnDividerBlock' style='min-width:100%;border-collapse:collapse;table-layout:fixed!important'>
    <tbody>
        <tr>
            <td style='min-width:100%;padding:18px'>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-top:2px solid #eaeaea;border-collapse:collapse'>
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#202020;text-align:left'>
                        
                            <div style='text-align:center'><br>
<span style='color:#ff4d01'><span style='font-size:25px'><strong>Become an E-commerce Expert!</strong></span></span><br>
&nbsp;</div>

                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign='top' id='m_6132091085501966376templateBody' style='background:#ffffff none no-repeat center/cover;background-color:#ffffff;background-image:none;background-repeat:no-repeat;background-position:center;background-size:cover;border-top:0;border-bottom:2px solid #eaeaea;padding-top:0;padding-bottom:9px'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#6e6e6e;text-align:left'>
                        
                            <p style='margin:10px 0;padding:0;color:#6e6e6e;font-size:16px;'>Hello <b><?php echo $shopname; ?> Ultech Africa</b> ,<br>
<strong>Welcome to Alipata Uganda! Your Seller Center account has been successfully created</strong><br>
<br>
To comfirm your registration, please click the following link below;<br>
<div align='center'>
<a style='background-color: #b01d21; border-radius:5px; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;' href='$verifyLink' title='Verify email address' target='_blank' data-saferedirecturl=''>Verify email address</a>
</div>
<br></p>

<table style='border-collapse:collapse'>
  <colgroup>
    <col width='474'>
  </colgroup>
  <tbody>
    <tr>
      <td>
      <p dir='ltr' style='margin:10px 0;padding:0;color:#6e6e6e;line-height:150%;text-align:left'><strong id='m_6132091085501966376docs-internal-guid-87a02d8e-7fff-f14b-034b-23e6395dad69'>An Agent&nbsp;will call you to make an appointment to fill out the form of payment and proxy if necessary.</strong></p>
      </td>
    </tr>
  </tbody>
</table>

                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#6e6e6e;text-align:left'>
                        
                            
                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#6e6e6e;text-align:left'>
                        
                            <div style='text-align:justify'><strong id='m_6132091085501966376docs-internal-guid-87a02d8e-7fff-f14b-034b-23e6395dad69'>Your dedicated Alipata team.</strong><br>
<br>
For further inquiries, Please&nbsp;contact us via email <strong><a href='mailto:vendor@alipata.com' style='color:#007c89;font-weight:normal;text-decoration:underline' target='_blank'>vendor@alipata.com</a></strong> &nbsp;or call us on&nbsp;<strong>  +256 702 978 248.</strong></div>

                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign='top' id='m_6132091085501966376templateFooter' style='background:#fafafa none no-repeat center/cover;background-color:#fafafa;background-image:none;background-repeat:no-repeat;background-position:center;background-size:cover;border-top:0;border-bottom:0;padding-top:9px;padding-bottom:9px'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;border-collapse:collapse'>
    <tbody>
        <tr>
            <td valign='top' style='padding-top:9px'>
                
          
        
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%;min-width:100%;border-collapse:collapse' width='100%' class='m_6132091085501966376mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='m_6132091085501966376mcnTextContent' style='padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#656565;text-align:center'>
                        
                            <table align='left' border='0' cellpadding='0' cellspacing='0' style='min-width:100%;border-collapse:collapse' width='100%'>
  <tbody>
    <tr>
      <td style='padding-top:9px;padding-right:18px;padding-bottom:9px;padding-left:18px;word-break:break-word;color:#656565;text-align:center' valign='top'><em>Copyright © 2016 Alipata, All rights reserved.</em><br>
      <br>
      Want to change how you receive these emails?<br>
      You can <a href='http://info.Alipata.com/c/r?ACTION=ri&amp;EMID=09005RV03O9LF0021NJ12&amp;UID=SJFCQKATBWKFWWW3K44A' style='color:#656565;font-weight:normal;text-decoration:underline' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.Alipata.com/c/r?ACTION%3Dri%26EMID%3D09005RV03O9LF0021NJ12%26UID%3DSJFCQKATBWKFWWW3K44A&amp;source=gmail&amp;ust=1587479809833000&amp;usg=AFQjCNEp9cbhUC1jsOGz7ReXMkTJYeHXaw'>update your preferences</a> or <a href='http://info.Alipata.com/c/r?ACTION=ri&amp;EMID=09005RV03O9LG00ORQCML&amp;UID=SJFCQKATBWKFWWW3K44A' style='color:#656565;font-weight:normal;text-decoration:underline' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.Alipata.com/c/r?ACTION%3Dri%26EMID%3D09005RV03O9LG00ORQCML%26UID%3DSJFCQKATBWKFWWW3K44A&amp;source=gmail&amp;ust=1587479809833000&amp;usg=AFQjCNFG9Hhc3Z1e9476tedB0EZuT_UK3A'>unsubscribe from this list</a></td>
    </tr>
  </tbody>
</table>

                        </td>
                    </tr>
                </tbody></table>
        
                
        
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                        </tbody></table>
                        
                        
                    </td>
                </tr>
            </tbody></table>
    </body>

    </html>";



// Set content-type header for sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// Additional headers

$headers .= 'From: Alipata.com<info@alipata.com>' . "\r\n";

$headers .= 'Cc: info@alipata.com' . "\r\n";

$headers .= 'Bcc: info@alipata.com' . "\r\n";



// Send email

if(mail($to,$subject,$htmlContent,$headers)):

    // $successMsg = 'Email has sent successfully.';
  $Error= "<div class='alert alert-success'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-check-square'></i></b> We have sent a link to your Email Address click on it to reset your Password. <br> Thank you.</div>";
else:

    $errorMsg = 'Email sending fail.';

endif;

/*-------Sennd email to the sender-------*/
    }
catch(PDOException $e)
    {
   $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> '".$e->getMessage()."'</div>";
    }
  }
}
     ?>
    
    <!-- logo -->
    <div id="logo">
        <img class="logo" src="../admin/assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="../admin/assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Reset password</h5>

    <!-- form -->
 <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
        <div class="form-group">
            <input type="email" name="companyemail" class="form-control" placeholder="Email Address" required autofocus>
        </div>
        <button type="Submit" name="recovery_password" class="btn btn-primary btn-block">Submit</button>
        <hr>
        <p class="text-muted">Take a different action.</p>
        <a href="alipata.com/sell-center" class="btn btn-sm btn-outline-light mr-1">Register now!</a>
        or
        <a href="index" class="btn btn-sm btn-outline-light ml-1">Login!</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="../admin/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="../admin/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/recovery-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
</html>

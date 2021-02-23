
<?php 
if (isset($_POST['login'])) {
$email=$_POST['email'];
$pwd='!?<3@l^Ai:&I';
$pwd1='!?<3o/]{iI0O';
$new_pswd=crypt(md5(crypt(sha1(md5(crypt(sha1($pwd.$_POST['password'].$pwd1),AP))),YU)),AA);

include 'config/connection.php';
$sql = "SELECT * FROM `customers` WHERE email='$email' AND password='$new_pswd' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// echo "Found"; 
while($row = $result->fetch_assoc()) {
$customerid =$row["customerid"];
$email = $row["email"];
}
// session_start();
$_SESSION['customer_email']=$email;
$_SESSION['customerid']=$customerid;
$_SESSION['active'] = 1;
 setcookie($cookie_customerid, $cookie_email, time() + (86400 * 30), "/");
echo "<script type=\"text/javascript\">
window.location = \"account-profile\"
</script>";
}else{
     $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> Wrong Email Address or Password...!</div>";
}
}
?>


<?php 
if (isset($_POST['login_checkout'])) {
$email=$_POST['email'];
$pwd='!?<3@l^Ai:&I';
$pwd1='!?<3o/]{iI0O';
$new_pswd=crypt(md5(crypt(sha1(md5(crypt(sha1($pwd.$_POST['password'].$pwd1),AP))),YU)),AA);

include 'config/connection.php';
$sql = "SELECT * FROM `customers` WHERE email='$email' AND password='$new_pswd' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// echo "Found"; 
while($row = $result->fetch_assoc()) {
$customerid =$row["customerid"];
$email = $row["email"];
}
// session_start();
$_SESSION['customer_email']=$email;
$_SESSION['customerid']=$customerid;
$_SESSION['active'] = 1;
 setcookie($cookie_customerid, $cookie_email, time() + (86400 * 30), "/");
echo "<script type=\"text/javascript\">
window.location = \"\"
</script>";
}else{
     $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> Wrong Email Address or Password...!</div>";
}
}
?>



<!-- Add customer Detials -->
<?php     
  if (isset($_POST['add_customers'])) {
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    $stat_date=date('Y-m-d');
    $pwd='!?<3@l^Ai:&I';
    $pwd1='!?<3o/]{iI0O';
    $new_pswd=crypt(md5(crypt(sha1(md5(crypt(sha1($pwd.$_POST['password'].$pwd1),AP))),YU)),AA);



    include 'admin/config/connection.php';
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `customers`(`fname`, `lname`, `email`, `phone`, `password`, `stat_date`, `month`, `year`, `submittedby`, `date_entered`) VALUES ('$fname','$lname','$email','$phone','$new_pswd','$stat_date','$month','$year','$submittedby','$submitteddate')";
        // use exec() because no results are returned
        $conn->exec($sql);
         // move_uploaded_file($filetmp, $filepath);
        // $Error= "New record created successfully";
          
include 'config/connection.php';
$sql = "SELECT * FROM `customers` WHERE email='$email' AND password='$new_pswd' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
      // echo "Found"; 
      while($row = $result->fetch_assoc()) {
                        $customerid =$row["customerid"];
                        $email = $row["email"];
                }
        // session_start();
        $_SESSION['customer_email']=$email;
        $_SESSION['customerid']=$customerid;
        $_SESSION['active'] = 1;
}
 echo "<script type=\"text/javascript\">
                  window.location = \"\"
                </script>";
        }
    catch(PDOException $e)
        {
            // $sql . "<br>" . $e->getMessage();
        $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
                            <b>Error:</b> '".$e->getMessage()."'
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <i class='ti-close'></i>
                            </button>
                        </div>";
        }
}
?>

    <!-- Update cutomer Details -->
<?php 
if (isset($_POST['update_customer_details'])) {
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $phone2=$_POST['phone2'];
    $address_1=$_POST['address_1'];
    $other_information=$_POST['address_2'];
    $address_1=$_POST['address_1'];
    $Region=$_POST['Region'];
    $State=$_POST['State'];
    $customerid=$_SESSION['customerid'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "UPDATE `customers` SET `fname`='$fname',`lname`='$lname',`address`='$address_1',`address2`='$address_2',`city`='$State',`region`='$Region',`phone`='$phone',`addtionalphone`='$phone2',`email`='$email' WHERE customerid='".$_SESSION['customerid']."'";
$sql = "INSERT INTO `addresses`(`fname`, `lname`, `region`, `customerid`, `address`, `other_information`, `city`, `postcode`, `phone`, `additionalphone`, `default_address`) 
VALUES ('$fname','$lname','$Region','".$_SESSION['customerid']."','$address_1','$other_information','$City','$postcode','$phone','$phone2','1')";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    // $Error= $stmt->rowCount() . " records UPDATED successfully";
    echo "<script type=\"text/javascript\">
    window.location = \"Delivery-Method\"
    </script>";
    }
catch(PDOException $e)
    {
    $Error= $sql . "<br>" . $e->getMessage();
    }

    // $Error= "string";
}
?>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_seller'])) {
     $fname=addslashes($_POST['fname']);
     $lname=addslashes($_POST['lname']);
     $shopname=addslashes($_POST['shopname']);
     $refferedby_email=addslashes($_POST['refferedby_email']);
     $email=addslashes($_POST['email']);
     $contact=$_POST['contact'];
     /*Pasword Cryprtion*/
        $pswdcrypt='^%#?&}^*?!1I/]';
        $pswrd = $pswdcrypt.$_POST['password'].$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $password1= md5(crypt($pswrd2,RM));
     /*Pasword Cryprtion*/
     $agree_on_terms=addslashes($_POST['agree_on_terms']);
     $LegalForm=addslashes($_POST['LegalForm']);
     $CompanyAddress1=addslashes($_POST['CompanyAddress1']);
     $CompanyAddress2=addslashes($_POST['CompanyAddress2']);
     // $ShopLogo=addslashes($_POST['ShopLogo']);
     $Country=addslashes($_POST['Country']);
     $City=addslashes($_POST['City']);
     $ZipCode=addslashes($_POST['ZipCode']);
     $reg_doc_details=addslashes($_POST['reg_doc_details']);
     $CompanyEmail=$_POST['CompanyEmail'];
     $TaxIdentificationNumber=addslashes($_POST['TaxIdentificationNumber']);
     $VATInformationFile=addslashes($_POST['VATInformationFile']);
     $SKUCategory=addslashes($_POST['SKUCategory']);
     $NumberofSKU=addslashes($_POST['NumberofSKU']);
     $AccountName=addslashes($_POST['AccountName']);
     $IBAN=addslashes($_POST['IBAN']);
     $SWIFT=addslashes($_POST['SWIFT']);
     $MMRN=addslashes($_POST['MMRN']);
     $BankAccount=addslashes($_POST['BankAccount']);
     $BankName=addslashes($_POST['BankName']);
     $RegistratedMTNNumber=addslashes($_POST['RegistratedMTNNumber']);
     $submittedby=addslashes($_POST['submittedby']);
     // $submiteddate=addslashes($_POST['submiteddate']);
     // $stat_date=addslashes($_POST['stat_date']);
     // $year=addslashes($_POST['year']);

    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    $stat_date=date('Y-m-d');
    $token = md5(uniqid(mt_rand()));
include 'config/connection.php';
$result = $conn->query("SELECT email FROM shops WHERE CompanyEmail='$CompanyEmail'");
if ($result->num_rows > 0) {
     $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b> Error:</b> </b> Email Address already exists, Please use another Email Address and try again.</div>";

}else{
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `shops`(`fname`, `lname`, `shopname`, `CompanyEmail`, `refferedby_email`, `contact`, `password`,  `verify_token`, `agree_on_terms`, `LegalForm`,`submittedby`, `submiteddate`, `month`, `stat_date`, `year`) 
        VALUES ('$fname','$lname','$shopname','$CompanyEmail','$refferedby_email','$contact','$password1','$token','$agree_on_terms','$LegalForm','$submittedby','$submitteddate','$month','$stat_date','$year')";
   
    /*Send confirmation email*/
    $to = "$CompanyEmail, ";
$subject = "Welcome to Alipata.com";
$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/';

$verifyLink = $siteURL.'sell-center-business-information?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&verify_email='.$token; 
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
                                
                                    
                                        <img alt='' src='http://alipata.com/images/media/unnamed123.png' width='264' style='max-width:100%;padding-bottom:0;border:0;height:auto;outline:none;text-decoration:none;vertical-align:bottom' class='m_6132091085501966376mcnImage CToWUd'>
                                    
                                
                                </td>
                            </tr>
                        </tbody></table>
                    


                    <table align='right' width='293' border='0' cellpadding='0' cellspacing='0' class='m_6132091085501966376mcnImageGroupContentContainer' style='border-collapse:collapse'>
                            <tbody><tr>
                                <td align='center' class='m_6132091085501966376mcnImageGroupContent' valign='top' style='padding-right:9px;padding-top:0;padding-bottom:0; float: right;'>
                                
                                    
                                        <img alt=''src='http://alipata.com/images/media/unnamed1.png' width='128' style='max-width:100%;padding-bottom:0;border:0;height:auto;outline:none;text-decoration:none;vertical-align:bottom' class='m_6132091085501966376mcnImage CToWUd'><br>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/images/media/fb.png'></a>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/images/media/tw.png'></a>
       <a href=''><img width='25' style='padding-bottom: 10px; text-align: center;' src='http://alipata.com/images/media/ist.png'></a>
                                    
                                
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
                                
                                    
                                        <img align='center' alt=''src='http://alipata.com/images/media/unnamed.png' width='564' style='max-width:600px;padding-bottom:0;display:inline!important;vertical-align:bottom;border:0;height:auto;outline:none;text-decoration:none' class='m_6132091085501966376mcnImage CToWUd a6T' tabindex='0'><div class='a6S' dir='ltr' style='opacity: 0.01; left: 544px; top: 434px;'><div id=':4y' class='T-I J-J5-Ji aQv T-I-ax7 L3 a5q' role='button' tabindex='0' aria-label='Download attachment ' data-tooltip-class='a1V' data-tooltip='Download'><div class='aSK J-J5-Ji aYr'></div></div></div>
                                    
                                
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
                        
                    <p style='margin:10px 0;padding:0;color:#6e6e6e;font-size:16px;'>Hello <b> $fname </b> ,<br>
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







   $to_seller = "kevinpaulwiz@gmail.com, ";
$subject_seller = "New Seller Registered";
$seller_email = "
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div class=''><div class='aHl'></div>
<div id=':1qb' tabindex='-1'></div>
<div id=':1r4' class='ii gt'>
    <div id=':1r3' class='a3s aXjCH msg-4380193512371063790'>
        <u></u>

    <div style='width:100%;margin:10px 0 0 0'>
        <div style=' background-color:#e2e8e9 !important;'>
        <table width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#e2e8e9' style='font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:13px;'>
            <tbody><tr>
                <td bgcolor='#e2e8e9' width='100%'>

                    <table width='600' cellpadding='0' cellspacing='0' border='0' align='center' class='m_-4380193512371063790tablewrapper' style='padding: 20px;'>
                        <tbody><tr>
                            <td width='600' style=' background-color:#f1f6fa !important; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6); border-radius: 10px;'>

                                
                                <table class='m_-4380193512371063790tableheader' width='100%' cellspacing='0' cellpadding='0' style='vertical-align:middle; border-top: 2px solid #ff4d01;  border-radius: 10px;'>
                                    <tbody>
                                        <tr  style='border-radius: 10px;'>
                                        <td class='m_-4380193512371063790header' align='center' style='max-width:100%;text-align:center;vertical-align:middle'>
                                            <div style='height:100%;width:100%;vertical-align:middle;display:table;text-align:center' valign='center'>
                                                <span style='display:table-cell;vertical-align:middle;text-align:center'> <a href='http://email.mg.alipata.com/c/eJwtj0FrwzAMhX-NcykJslKnzSGHdFm7S9lg62WXotle6jWOQ2ovsF8_uxSEEE-feHqqkQKglplpEBBAACKIimPBC8GrLQrcrsuy6rpux9Zg--InWEOFdDa7NERfAr4FKKXkpq7XxEsl4kmNxGtOmA3NxfuJlS3DfaxlWR73oU9KuR_d5OK-83PQDKvg7dlqZYKNmrZkhod4c2GW-g7SeCPpjRtpOCfiFpEHJclOZPoxcilNDiIH_ECID4gqNs4_H6TXc7I4HXImdkx0-ctzG9tbNjdX_WvGicKwmL8YuU8e97y-eXLWhtFISvaro1Nh0FF-Pb5nijw1bLNj0K5WDHHUfnHzNU7RNwmnQ5qhZZvuH1crb_Y' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtj0FrwzAMhX-NcykJslKnzSGHdFm7S9lg62WXotle6jWOQ2ovsF8_uxSEEE-feHqqkQKglplpEBBAACKIimPBC8GrLQrcrsuy6rpux9Zg--InWEOFdDa7NERfAr4FKKXkpq7XxEsl4kmNxGtOmA3NxfuJlS3DfaxlWR73oU9KuR_d5OK-83PQDKvg7dlqZYKNmrZkhod4c2GW-g7SeCPpjRtpOCfiFpEHJclOZPoxcilNDiIH_ECID4gqNs4_H6TXc7I4HXImdkx0-ctzG9tbNjdX_WvGicKwmL8YuU8e97y-eXLWhtFISvaro1Nh0FF-Pb5nijw1bLNj0K5WDHHUfnHzNU7RNwmnQ5qhZZvuH1crb_Y&amp;source=gmail&amp;ust=1590576057621000&amp;usg=AFQjCNEnPw2ImCjWkTn7WgOxKouSk6elRg'>                                         
                                                <img width='450' style='padding:20px;' class='m_-4380193512371063790imageheader CToWUd' valign='center' src='http://alipata.com/images/icon/logo.png'>
                                                </a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody></table>
                                <table class='m_-4380193512371063790promocat' width='100%' cellspacing='0' cellpadding='0' style='background:#fff;padding-left:5px;font-size:11px; '>
                                    <tbody>
                                        <tr border='0'>
                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%; background: #ff4d01;border-radius: 50px; color: white;'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMFugzAMhp8mXCqQCQ2FAwfatN2hVQ9dL7ugEALNSgiCZGh7-iUVkmXZvz47f9wUnADkPJAFBgxAAGMgaYyjOCJxmmGCs22SpJTSPdqC6qJvqySLuFbBs-AiaUWbpywhdZ2nCWkhg6wVGdlts7whQV88jRlRUiJ8crEsyzpvO9e2bH5KPYT1b_hWPZScBj1qN0LNZAXCqTWqUqKRVjlNKCb7VZy1nbh4g2yYGTduFesrT8wrwpkamewGB_nfhUBCwJ8YnCGSuhTHXytpxOT3P84hIvtjdThV9HivPo4ldf3hcqvKy-WOCA2m4iV-5DAy2y_yz52k8w--72GKg1bKDpIz72Vz1Y3thZNv13vQMMMKtNsjKDcbhPEgzKKnl6ucDy88zr6GEu3oP1owe0Q' style='text-decoration:none;color:inherit;' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMFugzAMhp8mXCqQCQ2FAwfatN2hVQ9dL7ugEALNSgiCZGh7-iUVkmXZvz47f9wUnADkPJAFBgxAAGMgaYyjOCJxmmGCs22SpJTSPdqC6qJvqySLuFbBs-AiaUWbpywhdZ2nCWkhg6wVGdlts7whQV88jRlRUiJ8crEsyzpvO9e2bH5KPYT1b_hWPZScBj1qN0LNZAXCqTWqUqKRVjlNKCb7VZy1nbh4g2yYGTduFesrT8wrwpkamewGB_nfhUBCwJ8YnCGSuhTHXytpxOT3P84hIvtjdThV9HivPo4ldf3hcqvKy-WOCA2m4iV-5DAy2y_yz52k8w--72GKg1bKDpIz72Vz1Y3thZNv13vQMMMKtNsjKDcbhPEgzKKnl6ucDy88zr6GEu3oP1owe0Q&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNFJYIG2SiQRz8yXHuPsh96nGLUVhQ'><p>Daily deals</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNoqAePGhpu5u06aHby14Mi6xlK2AU1mR__UJjQsi8l4-Zx_Q1xxBWPJI1gghCDBGCmKQoSROckhJhVOZZRiilLcihGpIfpyRLuFHRoy7ZN6wqXjBWcliWhAiY93nJsyJjFSmKaKwf1k4gawA6-rOu6_beDV4q8yVHEU8Po8USiOyozWQ8T-3sBEDEWdUp0UunvCcUk-NmLsbNXLxAphfGrTSajV0glg3hTE1MDtpD4WsxxDFEHwj6NJj4K00_N9KKOfS_n2KA20O3P3b0cOveDg31-nJt37vmfL4BTKO5fopfqSfmxlX--YUMYeJrG7beG6WclpyFMLuL6d0ovH293KKeWVaDogWw2e0AQlrY1cxPX_kgwbifQg0bUNB_yxp6JQ' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNoqAePGhpu5u06aHby14Mi6xlK2AU1mR__UJjQsi8l4-Zx_Q1xxBWPJI1gghCDBGCmKQoSROckhJhVOZZRiilLcihGpIfpyRLuFHRoy7ZN6wqXjBWcliWhAiY93nJsyJjFSmKaKwf1k4gawA6-rOu6_beDV4q8yVHEU8Po8USiOyozWQ8T-3sBEDEWdUp0UunvCcUk-NmLsbNXLxAphfGrTSajV0glg3hTE1MDtpD4WsxxDFEHwj6NJj4K00_N9KKOfS_n2KA20O3P3b0cOveDg31-nJt37vmfL4BTKO5fopfqSfmxlX--YUMYeJrG7beG6WclpyFMLuL6d0ovH293KKeWVaDogWw2e0AQlrY1cxPX_kgwbifQg0bUNB_yxp6JQ&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNGrOoDzQfTGxb2FCTIgEjxsHPlWiA'><p>Phones</p></a>
                                        </td>

                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNGwMRSekKn39d4EfE0VQHp_wdrn6g'><p>Computers</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMFuwjAMhp8mvaBWjtsEOPRQaGEH0A5sl12qkEYlo2mqklBpT78EIVmW_euz88ddKRnAVia6REAABojAOMWMZozyDTLcFHnO67rekQJMn_16o0UmrUluJQUu15wVUKii67DYInJawFaBul43FJOhvDk3kbwieAixLMt73vehdc9U-E7b9Kk7ZSOSH0Y72TBQu9krgtw70xrVaW-CpozQw1t8WD9L9QLF-BDSaTuKoY3E441IYSah-zFA8W8psBTwCyHYYTwkSn_epFNz3P99TAnbNe3-0NbNpf1oqjr2p2bfVqfThbA6mcu7eupxEn5Y9F-4SB9ffJ3DlXtrjB-1FNHM6mw7P6ggf54vSSecKMl6R6BarQjiqNxi53uogpEofB9jDRVZ1_90QXnM' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMFuwjAMhp8mvaBWjtsEOPRQaGEH0A5sl12qkEYlo2mqklBpT78EIVmW_euz88ddKRnAVia6REAABojAOMWMZozyDTLcFHnO67rekQJMn_16o0UmrUluJQUu15wVUKii67DYInJawFaBul43FJOhvDk3kbwieAixLMt73vehdc9U-E7b9Kk7ZSOSH0Y72TBQu9krgtw70xrVaW-CpozQw1t8WD9L9QLF-BDSaTuKoY3E441IYSah-zFA8W8psBTwCyHYYTwkSn_epFNz3P99TAnbNe3-0NbNpf1oqjr2p2bfVqfThbA6mcu7eupxEn5Y9F-4SB9ffJ3DlXtrjB-1FNHM6mw7P6ggf54vSSecKMl6R6BarQjiqNxi53uogpEofB9jDRVZ1_90QXnM&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNH_Io52Kmnmmod51nNE_5Fjg0zjPA'><p>Electronics</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkEGPgjAQhX9NuRjIMLWoBw5oUQ8aD66XvZACBbtSSrBdkv31WwxJM5n38rV9M3VaMYBdFagUAQEYIAJLYoziiMXJFhlu15QmnPM9WYNuox-nlYgqo4NnumElgiiTZkepqHe0KUFCk0AjJNISMejSp7UDoRnBoz_TNC33Xevl02gZdupX9bMi9NibwXia29FJgomzutCyVk57T2qhusV8GzdW8gOK_i0qq0wvumIm3gtSCT0I1fYemgcLgYWAXwg-C0t8iePvhbRynN9_nELC9nlxOBY8vxfnPONen2_XvMgulzthPBjTl_RhB-G6Sf35dbTzj59d2PRgtHa9qsQcZnU1teukt2_Xe1ALK1Ky2RPIViuC2Es7mfHlOx9kNh6nuYeMbPg_WHp56A' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkEGPgjAQhX9NuRjIMLWoBw5oUQ8aD66XvZACBbtSSrBdkv31WwxJM5n38rV9M3VaMYBdFagUAQEYIAJLYoziiMXJFhlu15QmnPM9WYNuox-nlYgqo4NnumElgiiTZkepqHe0KUFCk0AjJNISMejSp7UDoRnBoz_TNC33Xevl02gZdupX9bMi9NibwXia29FJgomzutCyVk57T2qhusV8GzdW8gOK_i0qq0wvumIm3gtSCT0I1fYemgcLgYWAXwg-C0t8iePvhbRynN9_nELC9nlxOBY8vxfnPONen2_XvMgulzthPBjTl_RhB-G6Sf35dbTzj59d2PRgtHa9qsQcZnU1teukt2_Xe1ALK1Ky2RPIViuC2Es7mfHlOx9kNh6nuYeMbPg_WHp56A&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNH9g4OifnG9GaQPnb-BIchdgJPMog'><p>Home appliances</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocat' style='text-align:center;width:15%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMGOgyAQhp8GL40Gx4L24MGWtnto00O3l70YRGrZihiFNdmnX9iYkMnMn4-Zf6YtBcF4JyJVAgaMCQbAhKaQpAlJaQEEim2WUcbYHm2x7pJvpxVPhNHRq2wa_Cx2hOYUBBWA0zSHVjYAuwKKNn9GffmydpxRViE4-bcsy9rAdb6cRykU7-NxUkIGIjsNZjQjypidnFeos7rWslVOe01qrvpVnI2b_J8A8mHmwioz8L4OxLwiguuRq27wUNgtxiTG8AnYuyHUhzT9Wkkrp9D_cY4R2R_rw6lmx3v9cayYr9mN1dXlckeERVP5lj9qGLnrF_XrD9KFgf_XsOXBaO0GJXjwsrma1vXSy7frPWq55SXK9whXmw0CGKRdzPT2mfcRhMc55LhCOfsDxcZ6JQ' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMGOgyAQhp8GL40Gx4L24MGWtnto00O3l70YRGrZihiFNdmnX9iYkMnMn4-Zf6YtBcF4JyJVAgaMCQbAhKaQpAlJaQEEim2WUcbYHm2x7pJvpxVPhNHRq2wa_Cx2hOYUBBWA0zSHVjYAuwKKNn9GffmydpxRViE4-bcsy9rAdb6cRykU7-NxUkIGIjsNZjQjypidnFeos7rWslVOe01qrvpVnI2b_J8A8mHmwioz8L4OxLwiguuRq27wUNgtxiTG8AnYuyHUhzT9Wkkrp9D_cY4R2R_rw6lmx3v9cayYr9mN1dXlckeERVP5lj9qGLnrF_XrD9KFgf_XsOXBaO0GJXjwsrma1vXSy7frPWq55SXK9whXmw0CGKRdzPT2mfcRhMc55LhCOfsDxcZ6JQ&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNFHHe8j3qATqfAvzryoznAw_fuK2g'><p>Fashion</p></a>
                                        </td>
                                    </tr>
                                </tbody></table>
                                <table class='m_-4380193512371063790promocatmobile' width='100%' cellspacing='0' cellpadding='0' style='background:#fff;padding-left:5px;font-size:0px;border-bottom:1px solid lightgrey;border-top:1px solid lightgrey;display:none;overflow:hidden'>
                                    <tbody><tr>
                                        <td class='m_-4380193512371063790promocatmobile' style='text-align:center;width:19%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMFugzAMhp8mXCqQCQ2FAwfatN2hVQ9dL7ugEALNSgiCZGh7-iUVkmXZvz47f9wUnADkPJAFBgxAAGMgaYyjOCJxmmGCs22SpJTSPdqC6qJvqySLuFbBs-AiaUWbpywhdZ2nCWkhg6wVGdlts7whQV88jRlRUiJ8crEsyzpvO9e2bH5KPYT1b_hWPZScBj1qN0LNZAXCqTWqUqKRVjlNKCb7VZy1nbh4g2yYGTduFesrT8wrwpkamewGB_nfhUBCwJ8YnCGSuhTHXytpxOT3P84hIvtjdThV9HivPo4ldf3hcqvKy-WOCA2m4iV-5DAy2y_yz52k8w--72GKg1bKDpIz72Vz1Y3thZNv13vQMMMKtNsjKDcbhPEgzKKnl6ucDy88zr6GEu3oP1owe0Q' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMFugzAMhp8mXCqQCQ2FAwfatN2hVQ9dL7ugEALNSgiCZGh7-iUVkmXZvz47f9wUnADkPJAFBgxAAGMgaYyjOCJxmmGCs22SpJTSPdqC6qJvqySLuFbBs-AiaUWbpywhdZ2nCWkhg6wVGdlts7whQV88jRlRUiJ8crEsyzpvO9e2bH5KPYT1b_hWPZScBj1qN0LNZAXCqTWqUqKRVjlNKCb7VZy1nbh4g2yYGTduFesrT8wrwpkamewGB_nfhUBCwJ8YnCGSuhTHXytpxOT3P84hIvtjdThV9HivPo4ldf3hcqvKy-WOCA2m4iV-5DAy2y_yz52k8w--72GKg1bKDpIz72Vz1Y3thZNv13vQMMMKtNsjKDcbhPEgzKKnl6ucDy88zr6GEu3oP1owe0Q&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNFJYIG2SiQRz8yXHuPsh96nGLUVhQ'><p>Fashion</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocatmobile' style='text-align:center;width:19%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNoqAePGhpu5u06aHby14Mi6xlK2AU1mR__UJjQsi8l4-Zx_Q1xxBWPJI1gghCDBGCmKQoSROckhJhVOZZRiilLcihGpIfpyRLuFHRoy7ZN6wqXjBWcliWhAiY93nJsyJjFSmKaKwf1k4gawA6-rOu6_beDV4q8yVHEU8Po8USiOyozWQ8T-3sBEDEWdUp0UunvCcUk-NmLsbNXLxAphfGrTSajV0glg3hTE1MDtpD4WsxxDFEHwj6NJj4K00_N9KKOfS_n2KA20O3P3b0cOveDg31-nJt37vmfL4BTKO5fopfqSfmxlX--YUMYeJrG7beG6WclpyFMLuL6d0ovH293KKeWVaDogWw2e0AQlrY1cxPX_kgwbifQg0bUNB_yxp6JQ' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNoqAePGhpu5u06aHby14Mi6xlK2AU1mR__UJjQsi8l4-Zx_Q1xxBWPJI1gghCDBGCmKQoSROckhJhVOZZRiilLcihGpIfpyRLuFHRoy7ZN6wqXjBWcliWhAiY93nJsyJjFSmKaKwf1k4gawA6-rOu6_beDV4q8yVHEU8Po8USiOyozWQ8T-3sBEDEWdUp0UunvCcUk-NmLsbNXLxAphfGrTSajV0glg3hTE1MDtpD4WsxxDFEHwj6NJj4K00_N9KKOfS_n2KA20O3P3b0cOveDg31-nJt37vmfL4BTKO5fopfqSfmxlX--YUMYeJrG7beG6WclpyFMLuL6d0ovH293KKeWVaDogWw2e0AQlrY1cxPX_kgwbifQg0bUNB_yxp6JQ&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNGrOoDzQfTGxb2FCTIgEjxsHPlWiA'><p>Phones</p></a>
                                        </td>

                                        <td class='m_-4380193512371063790promocatmobile' style='text-align:center;width:19%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTxV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNGwMRSekKn39d4EfE0VQHp_wdrn6g'><p>Computers</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocatmobile' style='text-align:center;width:19%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMFuwjAMhp8mvaBWjtsEOPRQaGEH0A5sl12qkEYlo2mqklBpT78EIVmW_euz88ddKRnAVia6REAABojAOMWMZozyDTLcFHnO67rekQJMn_16o0UmrUluJQUu15wVUKii67DYInJawFaBul43FJOhvDk3kbwieAixLMt73vehdc9U-E7b9Kk7ZSOSH0Y72TBQu9krgtw70xrVaW-CpozQw1t8WD9L9QLF-BDSaTuKoY3E441IYSah-zFA8W8psBTwCyHYYTwkSn_epFNz3P99TAnbNe3-0NbNpf1oqjr2p2bfVqfThbA6mcu7eupxEn5Y9F-4SB9ffJ3DlXtrjB-1FNHM6mw7P6ggf54vSSecKMl6R6BarQjiqNxi53uogpEofB9jDRVZ1_90QXnM' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMFuwjAMhp8mvaBWjtsEOPRQaGEH0A5sl12qkEYlo2mqklBpT78EIVmW_euz88ddKRnAVia6REAABojAOMWMZozyDTLcFHnO67rekQJMn_16o0UmrUluJQUu15wVUKii67DYInJawFaBul43FJOhvDk3kbwieAixLMt73vehdc9U-E7b9Kk7ZSOSH0Y72TBQu9krgtw70xrVaW-CpozQw1t8WD9L9QLF-BDSaTuKoY3E441IYSah-zFA8W8psBTwCyHYYTwkSn_epFNz3P99TAnbNe3-0NbNpf1oqjr2p2bfVqfThbA6mcu7eupxEn5Y9F-4SB9ffJ3DlXtrjB-1FNHM6mw7P6ggf54vSSecKMl6R6BarQjiqNxi53uogpEofB9jDRVZ1_90QXnM&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNH_Io52Kmnmmod51nNE_5Fjg0zjPA'><p>Electronics</p></a>
                                        </td>
                                        <td class='m_-4380193512371063790promocatmobile' style='text-align:center;color:#f49719;width:19%'>
                                            <a href='http://email.mg.alipata.com/c/eJwtkMGOgyAQhp8GL40Gx4L24MGWtnto00O3l70YRGrZihiFNdmnX9iYkMnMn4-Zf6YtBcF4JyJVAgaMCQbAhKaQpAlJaQEEim2WUcbYHm2x7pJvpxVPhNHRq2wa_Cx2hOYUBBWA0zSHVjYAuwKKNn9GffmydpxRViE4-bcsy9rAdb6cRykU7-NxUkIGIjsNZjQjypidnFeos7rWslVOe01qrvpVnI2b_J8A8mHmwioz8L4OxLwiguuRq27wUNgtxiTG8AnYuyHUhzT9Wkkrp9D_cY4R2R_rw6lmx3v9cayYr9mN1dXlckeERVP5lj9qGLnrF_XrD9KFgf_XsOXBaO0GJXjwsrma1vXSy7frPWq55SXK9whXmw0CGKRdzPT2mfcRhMc55LhCOfsDxcZ6JQ' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkMGOgyAQhp8GL40Gx4L24MGWtnto00O3l70YRGrZihiFNdmnX9iYkMnMn4-Zf6YtBcF4JyJVAgaMCQbAhKaQpAlJaQEEim2WUcbYHm2x7pJvpxVPhNHRq2wa_Cx2hOYUBBWA0zSHVjYAuwKKNn9GffmydpxRViE4-bcsy9rAdb6cRykU7-NxUkIGIjsNZjQjypidnFeos7rWslVOe01qrvpVnI2b_J8A8mHmwioz8L4OxLwiguuRq27wUNgtxiTG8AnYuyHUhzT9Wkkrp9D_cY4R2R_rw6lmx3v9cayYr9mN1dXlckeERVP5lj9qGLnrF_XrD9KFgf_XsOXBaO0GJXjwsrma1vXSy7frPWq55SXK9whXmw0CGKRdzPT2mfcRhMc55LhCOfsDxcZ6JQ&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNFHHe8j3qATqfAvzryoznAw_fuK2g'><p>Daily deals</p></a>
                                        </td>
                                    </tr>
                                </tbody></table>

                                <table class='m_-4380193512371063790bodycontent' width='100%' cellspacing='0' style='padding-top:15px'>
                                    <tbody><tr>
                                        <td class='m_-4380193512371063790bodycontent_cell' style='background-color:#ffffff;color:#565656;padding:15px 15px 15px 15px; font-size: 15px;' width='100% text-transformation:center;'>
                                     <h3>New Seller Application</h3></p>
<p>
<p><b>Shop Name:</b> $shopname</p> 
<b>Name:</b> $fname $lname</p> 
<p><b>Email Address:</b> $CompanyEmail</p> 
<b>Contact:</b> $contact 
</p><p>
    
                                                                                              </p>

  
<table width='100%' cellspacing='0' style='padding:0 0 1% 0.5%!important'>
                                    <tbody><tr>
                                        <td>                                          
                                        </td>
                                    </tr>
                                </tbody></table>
                                <table class='m_-4380193512371063790footer' width='96%' cellspacing='0' style='margin-bottom:15px;padding:0 0 0 4%!important'>
                                    <tbody><tr style='display:block'>
                                        <td style='width:50%'>
                                            
                                        <td style='width:25%;text-align:center;padding-left:5px'>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody>
                    </table>



</div>
</div>
</div>
<div style='background-color:#eeeeee'>
<div class='m_8374035248417847319block-grid' style='Margin:0 auto;min-width:320px;max-width:600px;word-wrap:break-word;word-break:break-word;background-color:#ffffff'>
<div style='border-collapse:collapse;display:table;width:100%;background-color:#ffffff'>


<div class='m_8374035248417847319col' style='min-width:320px;max-width:600px;display:table-cell;vertical-align:top;width:600px'>
<div style='width:100%!important'>

<div style='border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:5px;padding-right:20px;padding-left:20px'>

<table border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%' role='presentation' valign='top'>
<tbody>
<tr style='vertical-align:top' valign='top'>
<td style='word-break:break-word;vertical-align:top;min-width:100%;padding-top:5px;padding-right:0px;padding-bottom:10px;padding-left:0px' valign='top'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;border-top:2px solid #eeeeee;height:0px;width:100%' align='center' role='presentation' height='0' valign='top'>
<tbody>
<tr style='vertical-align:top' valign='top'>
<td style='word-break:break-word;vertical-align:top' height='0' valign='top'><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse' valign='top'>
<tbody>
<tr style='vertical-align:top' valign='top'>
<td style='word-break:break-word;vertical-align:top;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px' valign='top'>
<table align='center' cellpadding='0' cellspacing='0' role='presentation' style='table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse' valign='top'>
<tbody>
<tr style='vertical-align:top;display:inline-block;text-align:center' align='center' valign='top'>
<td style='word-break:break-word;vertical-align:top;padding-bottom:5px;padding-right:10px;padding-left:10px' valign='top'><a href='https://www.facebook.com/AlipataGlobal/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL0JyaWdodGVyTW9uZGF5VUc_dXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cB3c923a54&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNFOvHXp-i9rpp-E8mg7FL6AdIPiuQ'><img width='32' height='32' src='https://ci3.googleusercontent.com/proxy/fKRMRu5YHtOsX4g8QjulXayAWPG30Wqmxsp099ERcTznTvGDOyoGvnHKxjPvJ6UOpLlc-gNIpoYQUTH0-34TdgsDeYXyO-qJqQ8YuDUr3nqKRyXTnetzNgIhKG3JUva-YqJKbu_FxDj6skuPd_oxHBZ8w0jQAxCNA2BUIUHRi6P3vJqS=s0-d-e1-ft#https://d2fi4ri5dhpqd1.cloudfront.net/public/resources/social-networks-icon-sets/circle-dark-gray/facebook@2x.png' alt='Facebook' title='Facebook' style='text-decoration:none;height:auto;border:0;display:block' class='CToWUd'></a></td>
<td style='word-break:break-word;vertical-align:top;padding-bottom:5px;padding-right:10px;padding-left:10px' valign='top'>

<a href='https://twitter.com/AlipataC' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly90d2l0dGVyLmNvbS9icmlnaHRlcm1vbnVnP3V0bV9zb3VyY2U9bmV3c2xldHRlciZ1dG1fbWVkaXVtPWVtYWlsJnV0bV9jYW1wYWlnbj1qb2JzZWVrZXItdHJpd2Vla2x5LTIwMjAtMDYtMjY/5a61bb50e9a8a2425b8b4d7cB9f8e54d7&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNHnN8Ew0wRJ7Nu2zxS-vroubSQloA'><img width='32' height='32' src='https://ci5.googleusercontent.com/proxy/FQX5qL7jcfdz_qAdNtRn8hjS-ZAVnV0Ou_EaOUxbN6dVErXW8GpF62I0lRauVpxgge1wEvULzs-oPMKPqRlaKWPRSmbukLrJTrBA6vu-HoGmUm3w_PUYW-SU8O_IzasjFYSDvD5Pob77dugFWdBiihoElv6Cy_gUVxCsV5VBDRSr3D0=s0-d-e1-ft#https://d2fi4ri5dhpqd1.cloudfront.net/public/resources/social-networks-icon-sets/circle-dark-gray/twitter@2x.png' alt='Twitter' title='Twitter' style='text-decoration:none;height:auto;border:0;display:block' class='CToWUd'></a></td>
<td style='word-break:break-word;vertical-align:top;padding-bottom:5px;padding-right:10px;padding-left:10px' valign='top'><a href='https://www.instagram.com/alipataug/?hl=en' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2NvbXBhbnkvYnJpZ2h0ZXJtb25kYXktdWdhbmRhL2Fib3V0Lz91dG1fc291cmNlPW5ld3NsZXR0ZXImdXRtX21lZGl1bT1lbWFpbCZ1dG1fY2FtcGFpZ249am9ic2Vla2VyLXRyaXdlZWtseS0yMDIwLTA2LTI2/5a61bb50e9a8a2425b8b4d7cB1f0e1356&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNHm5kegRp4CF0pVDs5bv3D6EW611w'><img width='32' height='32' src='https://ci4.googleusercontent.com/proxy/q8UvzCVv-18Mi0t5UjvqxW28L1BIzOSG-SvwSP6Y_bwGfhgsXQX6m_-tM12BJvHKqRpLKeXWlaHv9rJHo0lI2aHWg28nrkwygxLRsB6-vhIc7t5ipTY8MlRh7r49lB7CH3qReZCV62qTU0DErwm5jQBF_tzUFDcvODjQUzVnm9HJ8lDe=s0-d-e1-ft#https://d2fi4ri5dhpqd1.cloudfront.net/public/resources/social-networks-icon-sets/circle-dark-gray/linkedin@2x.png' alt='LinkedIn' title='LinkedIn' style='text-decoration:none;height:auto;border:0;display:block' class='CToWUd'></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

<div style='color:#747474;font-family:'Roboto',Tahoma,Verdana,Segoe,sans-serif;line-height:2;padding-top:5px;padding-right:0px;padding-bottom:10px;padding-left:0px'>
<div style='font-family:'Roboto',Tahoma,Verdana,Segoe,sans-serif;font-size:12px;line-height:2;color:#747474'>
<p style='font-size:14px;line-height:2;text-align:center;word-break:break-word;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;margin:0'><span style='font-size:14px'>&nbsp;You are receiving this email because you are a registered user on Alipata.</span><br><span style='font-size:14px'><a href='http://link.brightermonday.co.ug/view/5a61bb50e9a8a2425b8b4d7ccc4jg.1p1n/8a3f4e76' rel='noopener' style='color:#747474' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/view/5a61bb50e9a8a2425b8b4d7ccc4jg.1p1n/8a3f4e76&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNGKI09Ji1wb7HBXfBYZW5LUk7OMHw'>View Online</a>&nbsp; |&nbsp;<a style='text-decoration:underline;color:#747474' href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cB84784baf' rel='noopener' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cB84784baf&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNH2oI8v6acPwm1b10P6pdBk1OnRTg'>Update Preferences</a>&nbsp;|&nbsp; <a style='text-decoration:underline;color:#747474' href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cC84784baf' rel='noopener' target='_blank' >Unsubscribe</a>&nbsp; </span><br><span style='font-size:14px'>© Alipata &nbsp; 2020</span></p>
</div>
</div>


</div>

</div>
</div>


</div>
</div>
</div>

</td>
</tr>
</tbody>
</body>











                </td>
            </tr>
        </tbody>

        </table>

        <div class='yj6qo'></div><div class='adL'>

    </div></div><div class='adL'>


</div></div></div><div id=':1q6' class='ii gt' style='display:none'><div id=':1q7' class='a3s aXjCH undefined'></div></div><div class='hi'></div></div>

</html>";













// Set content-type header for sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// Additional headers

$headers .= 'From: Alipata.com<info@alipata.com>' . "\r\n";

$headers .= 'Cc: info@alipata.com' . "\r\n";

$headers .= 'Bcc: info@alipata.com' . "\r\n";



// Send email

if(mail($to,$subject,$htmlContent,$headers) && mail($to_seller,$subject_seller,$seller_email,$headers) ):

     // use exec() because no results are returned
    $conn->exec($sql);
    // logo upload
    move_uploaded_file($filetmp_ShopLogo, $filepath_ShopLogo);
    // reg_doc_details
    move_uploaded_file($filetmp_reg_doc_details, $filepath_reg_doc_details);
        // VAT Information File
    move_uploaded_file($filetmp_reg_VATInformationFile, $filepath_reg_VATInformationFile);
  
    /*Send confirmation email*/
    // $successMsg = 'Email has sent successfully.';
  $Error= "<div class='alert alert-success'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-check-square'></i></b> Account Information was submitted successfully. <br> We have sent a Confirmation Email to your Email Address, Please Confirm it and continue with the Registration.</div>";
else:

   $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> Something went Wrong, Please try again later...!</div>";

endif;

/*-------Sennd email to the sender-------*/
    }
catch(PDOException $e)
    {
    // $Error= $sql . "<br>" . $e->getMessage();
    $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> '".$e->getMessage()."'</div>";
    }
}

  }
}


 if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_manafacturer'])) {
    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $fullnames=$_POST['fullnames'];
    
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `acount_bal`(`Ac_No`, `actual_bal`, `total_bal`) VALUES ('$Ac_No','$actual_Bal','$Total_Bal')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $Error= "New record created successfully";
    }
catch(PDOException $e)
    {
    $Error= $sql . "<br>" . $e->getMessage();
    }
}
}


// <!-- Manufacturers -->
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_manafacturer'])) {
    $name=$_POST['name'];
    $sort_order=$_POST['sort_order'];
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename =  time() . "_" .$_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "assets/media/image/manufactures/".$filename;
    $target_file = $filepath . basename($_FILES["file_img"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    $stat_date=date('Y-m-d');
    
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `manufacturer`( `name`, `image`, `sort_order`, `stat_date`, `month`, `year`, `submittedby`, `submitteddate`) VALUES ('$name','$filepath','$sort_order','$stat_date','$month','$year','$submittedby','$submitteddate')";
    // use exec() because no results are returned
    $conn->exec($sql);
    move_uploaded_file($filetmp, $filepath);
    // $Error= "New record created successfully";
       echo "<script type=\"text/javascript\">
              alert(\"Record has been added successfully.\");
              window.location = \"\"
            </script>";
    }
catch(PDOException $e)
    {
        // $sql . "<br>" . $e->getMessage();
    $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <b>Error:</b> '".$e->getMessage()."'
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='ti-close'></i>
                        </button>
                    </div>";
    }
}
// }
?>
<!-- //Manufacturers -->
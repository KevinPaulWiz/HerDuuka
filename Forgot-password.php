<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/recovery-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password - Alipata</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="admin/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="admin/assets/css/app.min.css" type="text/css">
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
if (isset($_POST['forgot_password'])) {
$token = sha1(md5(uniqid(mt_rand())));
$email=$_POST['email'];
include 'admin/config/connection.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE customers SET password_token='$token' WHERE email='$email'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
     /*Send confirmation email*/
    $to = "$email, ";
$subject = "Reset your Password";
$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/';

$verifyLink = $siteURL.'new_password?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&new_password='.$token; 
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
    <div class=''><div></div><div id=':1d0' tabindex='-1'></div><div id=':1cp' class='ii gt'><div id=':1co' class='a3s aXjCH msg-389997758209711806'><u></u>










<div bgcolor='#ffffff' style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#333333;text-align:left'><img src='https://ci4.googleusercontent.com/proxy/CHA4ycCHxKR2YgaBDJAbjVC7Py1i79Sw1ZU8DS22UVwjkS_aDHfnbeCCEYurrXPoPKk6GCssLMR8k7yc-c0_UkJwkZ8CBPzsxHSSVnd04-QpoXv7R5IXsW4FQorerAiUAcwSaRdoaeg=s0-d-e1-ft#http://info.jumia.com/c/r?ACTION=hi&amp;EMID=0A005RV4VAO00NDDQDQ&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' border='0' width='1' height='1' class='CToWUd'>


<table width='100%' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000000;text-align:left'>
    <tbody><tr>
        <td align='center'>


            
            <table width='600' cellpadding='0' cellspacing='0'>
                <tbody><tr>
                    <td align='center'>


<table width='100%' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#aaaaaa'>
    <tbody><tr>
        <td align='right' style='padding-bottom:3px'>
        <a href='http://info.jumia.com/c/dc?t=ol&amp;p=177f.6NZSQ3PVFWXPCQG7FNAQ.Z1A99FYUWW' style='color:#aaaaaa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/dc?t%3Dol%26p%3D177f.6NZSQ3PVFWXPCQG7FNAQ.Z1A99FYUWW&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNFYw2x9Djx07QvgGHe9q-0vUX4m5Q'>Click here</a> if this message doesn't display correctly         </td>
    </tr>
</tbody></table>

          

<table width='100%' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#000000;border-bottom:1px solid #cccccc'>
    <tbody><tr>
        <td width='200' height='50' align='left' valign='middle'>
            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0801PFLS0A&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0801PFLS0A%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNF17TbkKllcgc89Ki3nb6ex4ftJYA'>
            <img src='https://ci3.googleusercontent.com/proxy/NadBaAELimJVTY-pkXmG17aJrmxlE0Ovw6vIyMMpZrfmPxev3jgHIGRD8zdjbXK582Uav6TWhpu5aouciNEDIyPM3QD6pt842GURM4ORlilTroTKNLmY_KhWmL2H6WCpql1h=s0-d-e1-ft#https://www.jumia.co/nl-templates-ghana/template-design-elements/logo_header.png' border='0' alt='Jumia' class='CToWUd'></a>
        </td>
        <td width='100' height='50' align='right' valign='middle'>
            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0900GUH49P&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0900GUH49P%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNEDE8qG0Q7IQ7cRY4k7dnZ6UTJhLw'>
            <img src='https://ci3.googleusercontent.com/proxy/XkWNUgAmcMfvf9kC7_7JhaxLX3gyufouMtGnLsIorKGpLDB31SJ-yTa53FtBw0-A5vAYoDjKZVeO_Uf2grpZ-pD6z71JDOwMeCiEJJDZVGRrFVyXaRTqphlsK44=s0-d-e1-ft#https://www.jumia.co/nl-templates-ghana/template-design-elements/USP3.png' border='0' alt='Pay on Delivery' class='CToWUd'></a>
        </td>
        <td width='90' height='50' align='right' valign='middle'>
            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0A007K0PF8&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0A007K0PF8%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNEsC5IpRtA002uL7adySEbZ2NqRIQ'>
            <img src='https://ci4.googleusercontent.com/proxy/Ym1Pq_UvoAspP4F77Ml1adxBS9v2m8pExrDHz0tK2FOC5C7CCM7VNeC91DTw9jXboEqBDeA4gk0-GNdZlNAQfSHPqBWeXkr0-XPRAttB2vYBU50_q63ZRhgU4Yk=s0-d-e1-ft#https://www.jumia.co/nl-templates-ghana/template-design-elements/USP4.png' border='0' alt='Secured Website' class='CToWUd'></a>
        </td>
        <td width='80' height='50' align='right' valign='middle'>
            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0B00UIOGJE&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0B00UIOGJE%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNH_GSgcZwlIYchWTg-ty2Usy76Mlg'>
            <img src='https://ci5.googleusercontent.com/proxy/RN4DURrZuNHRstZAmPW8dB0pJNLsIbcpG74Cj_JXAo-URE-pOeT5oOhz0tYirNp3RzgMu0m0dlI3p24EyYZKk0cMVkSwG-mElGWErtuS8JaYUiR-nDSIIHTQnA0=s0-d-e1-ft#https://www.jumia.co/nl-templates-ghana/template-design-elements/USP5.png' border='0' alt='100% Authentic' class='CToWUd'></a>
        </td>
        
    </tr>
</tbody></table>








<table align='center' width='600' border='0' cellspacing='0' cellpadding='0'>
    <tbody><tr>
        <td width='600px' align='left' style='background-color:#ffffff;color:#333333;font-size:14px;font-family:'Arial','Helvetica',Sans-serif'>
        <span style='display:block;font-size:24px'><b><br>Reset your  Password</b></span><br>
        <table cellspacing='0' cellpadding='0' hspace='0' vspace='0' align='left'>
          <tbody><tr>
            <td valign='top' align='left'>Oops! Did you forget your password? That's okay.<br>
              <br>
                Click on the button below to change your password.  If you did not ask to have your password    reset, just ignore this email, and nothing will change.<br></td>
          </tr>
        </tbody></table></td>
    </tr>
    <tr>
      <td height='80' align='center' valign='middle' style='color:#333333;font-family:'Arial','Helvetica',Sans-serif;text-decoration:none;font-size:14px'>
        <a href='$verifyLink' target='_blank' data-saferedirecturl='$verifyLink'><img src='https://ci5.googleusercontent.com/proxy/nXf58SQEvT7dZtLHH-2Yk7x7-a9d9mL4pbX8MmZh9_0nLROeOzeT2kTjr6wxDAgMtYJjzCaaMO2GHiUPjxcetymb_LvAUldmlFWgrlxgEMzebOE6vinhrWjSSW4Wpya-TEwWnHxUZvGHrTty=s0-d-e1-ft#https://www.jumia.co/nl-templates-nigeria/template-design-elements/reset_password_btn.png' alt='Reset my Password' border='0' class='CToWUd'></a>
      </td>
    </tr>
</tbody></table>

﻿﻿ 



<table width='600' cellpadding='3' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#ff3300;border-bottom:5px solid #000000'>
    <tbody><tr>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0C01LCF6EU&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0C01LCF6EU%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNEo8Kk6lt6e3fzYgLoCFcJe93Mpxg'>Mobile Phones</a></td>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0D00CHA32E&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0D00CHA32E%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNHNN29UrplpUx_DchJSWAL2xaKApA'>Tablets</a></td>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0E013HKCIK&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0E013HKCIK%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNGhI4PfF2mf3_v18LapwlyO-CquRw'>Computing</a></td>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0F01Q5ML1I&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0F01Q5ML1I%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNF0jd_H_WgO_hwBK0WyKXLMedvcuQ'>Televisions</a></td>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0G00H4QFU9&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0G00H4QFU9%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819252000&amp;usg=AFQjCNFyedQYjLzvtHUZpyYq3H4LNfj51Q'>Appliances</a></td>
        <td width='100' align='center' valign='middle'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0H0183K7R6&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='color:#000000;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0H0183K7R6%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNEfu24hnRNgxHHDXPtRAZSZNoSQ7A'>Kitchen</a></td>
    </tr>
</tbody>
</table>  

<table width='600' align='center' cellspacing='0' bgcolor='#FFFFFF' style='margin-top:2px;padding-top:12px;font-family:Arial,Helvetica,sans-serif;font-size:16px;color:#030303;text-transform:uppercase'>

<tbody><tr><td align='center'><img src='https://ci5.googleusercontent.com/proxy/ZJCn-EQ0uG5yMrzZrbtBWE76TSuYhb_r8HEPLnejOnjvR8BIVZJ7nbhw6vt0N7cFICd_bAf91Vmtct63La_tkdCjb85CuS1x9o02q3IT-vfWLXUqx6qcQ_ARCJVrow=s0-d-e1-ft#http://surveygizmolibrary.s3.amazonaws.com/library/294439/Jumiapromise1.png' alt='jumia promise' class='CToWUd a6T' tabindex='0'><div class='a6S' dir='ltr' style='opacity: 0.01; left: 553px; top: 503px;'><div id=':1fc' class='T-I J-J5-Ji aQv T-I-ax7 L3 a5q' role='button' tabindex='0' aria-label='Download attachment ' data-tooltip-class='a1V' data-tooltip='Download'><div class='aSK J-J5-Ji aYr'></div></div></div></td>

    </tr></tbody><tbody><tr>
        <td align='center'><b>DISCOVER OUR GREAT PRODUCT RANGE</b></td>
    </tr>
</tbody></table>



<table width='600' align='center' cellpadding='0' cellspacing='0' border='0' style='padding-bottom:4px' bgcolor='#FFFFFF'>
    <tbody><tr>
        <td align='center'>
            <table width='592' border='0' cellpadding='0' cellspacing='0'>
                <tbody><tr>
                    <td width='296' align='center' valign='top'>
                        <table cellspacing='0' border='0'>
                            <tbody><tr>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0J01M4M4O3&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0J01M4M4O3%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNGAyklcwwa-2KOHxAzLX9aNhajL-A'>
                                            <img src='https://ci3.googleusercontent.com/proxy/dJ5GcdneHqnDFOOl1oqSF0gE6uExIv3goL_7K2-3XfiTxJe2to3QxL55wq7UDXAgZs23-p9OB8BDietgTYNAq02UTqM-l6o1oMXyUsQnvAd3TYof6h9CRFdn8TX7mCm4Xjlo3dEi8kp2jBCt1PhPPw=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_02.jpg' width='100%' style='display:block' alt='MOBI_APHO_ALLB' class='CToWUd'></a>
                                </td>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0L013T4TJP&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0L013T4TJP%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNEkBfSW5FDytFCW44IviVktMS9YUg'>
                                            <img src='https://ci4.googleusercontent.com/proxy/iCrtq4LwhbX-lRRZyp7RZmtB5seMfwDVVwo9N2yrBXiy7z98OIjGwox59YoexOkGlj1ta3BO4zPXz_fEbltXhrx1qb5vkPt3AHENq574JCdux8cujP1zhWGUFlojrFjW_3w9EGHOkVQpkcviJT_G_Q=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_06.jpg' width='100%' style='display:block' alt='COMP_TABL_ALLB' class='CToWUd'></a>
                                </td>
                            </tr>
    <tr>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03D55M01O3OR3F&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03D55M01O3OR3F%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNHF9mj-fN_Ria8tpx-W2pZg07xgYQ'>
                                            <img src='https://ci3.googleusercontent.com/proxy/a56iQH2e9hFXkNIzy0nwCBWUS5zb74fZhVVvseF7npeSbpv6JAI1kUvTpxvK0inKFHZ53YR9r90dMtNpxikCJq3jjBiYN7h-icpA8lsISMlK5gzU4I_lxxaKO09biizhcJjDP4EhaI4WbCEnign5BQ=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_07.jpg' width='100%' style='display:block' alt='HOME_ALLS_ALLB' class='CToWUd'></a>
                                </td>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03D55N00F3CP39&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03D55N00F3CP39%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNG9Z6qkIaCykI3kCK4wh3ljMK5fIA'> <img src='https://ci4.googleusercontent.com/proxy/mTiCP-FsCtj1Nns_4FUSJIMpeTsOCZHvVnQO0iFex-kZtxqsWfRUUjKcyJ1qJ47Ig8EdjdDG8dqyEWGd1JIV5MM7G3BVUHCkcHT7aOH8ssqMdxq0oIm-o5LdaErPpdzfS_tLvnKkXETwAs3VrTTbyA=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_01.jpg' width='100%' style='display:block' alt='MCLO_ALLS_ALLB' class='CToWUd'></a>
                                </td>
                            </tr>
                            
                        </tbody></table>
                    </td>
                    <td width='296' align='center' valign='top'>
                        <table cellspacing='0' border='0'>
                        
<tbody><tr>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
<a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03D55O0064J1ES&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03D55O0064J1ES%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNFSjModc3Z-4x2LCoITSuNLDJqxWQ'><img src='https://ci5.googleusercontent.com/proxy/U4ypxsE10fNlJL7d3DjLobe1gJhgyAgjK47YjusUuvqPd0TYtI94vtT7aHH-kzSxYqnutLmxDaapZv2Lug43tkA7nKMpvmcj8RGAHkdnDMrGApJLq8_iJTKAbB2uSexVLgK1F62mg60Bv9U4r5tDqQ=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_03.jpg' width='100%' style='display:block' alt='VIDE_TELE_ALLB' class='CToWUd'></a>
</td>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'><a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0N00HKQ5N1&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0N00HKQ5N1%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNFA159nCIGlqLpdK8EJlEZ3bGPPjQ'><img src='https://ci5.googleusercontent.com/proxy/3ZGg3jQT9B5d2jiNBcf_OD5axJ4okINmvJ1mn6ZWtullxEaalywfacLx1kO8G3yvd9T8NgrVuvCLzqrubbeL43-uP2P6vGpncnJClLOrQZqMSbWdgbpu08fXNxgJFdVdCHcanbj0UqKz0aKxpDujHw=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_04.jpg' width='100%' style='display:block' alt='COMP_LAPT_ALLB' class='CToWUd'></a></td>
                            </tr>
                            <tr>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03D55P01TA1DOK&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03D55P01TA1DOK%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNGMFtc0_dUHHYQdCNq7uQpOpidkkg'> <img src='https://ci3.googleusercontent.com/proxy/CWRocQicHJOYpdprzp0fDtvkG9CDhat4kTZlsT5rOS_AWxcG0dnmoH9AaKExtHFpBUtuTEOVFkLJChNirKIuO7WQHZQRlUIM32XJT7WIckO1bL1TBHdaDJYVx-ZqGTX4joOzpJ-1aU9AK0IYGMSNkQ_2WfU=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/female/female_portfolio_05.jpg' width='100%' style='display:block' alt='WCLO_ALLS' class='CToWUd'></a>                           </td>
                                <td width='148' align='center' valign='top' bgcolor='#FFFFFF'>
                                            <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0P00VO7GB7&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' style='text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0P00VO7GB7%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNElAk0j-YvbEWHZvOSIQUYhedvd_A'>
                                            <img src='https://ci6.googleusercontent.com/proxy/tCLjx206YGFjhx7O_nvA_PnDl08bQzZlllAhkRDkL4FFr9g6YAnZWTh34zkuqRhn8dtRuhc5pwyVmmVtr6xwniRQXiOpRS75zquCg_80S93i63KT9rX1lvMHhiZ9TQdfF_Pnv9SqeinF0xtPEHcHqw=s0-d-e1-ft#https://jumia.co/nl-templates-nigeria/banners/december14/portfolio/male/male_portfolio_08.jpg' width='100%' style='display:block' alt='PROM_DOTD' class='CToWUd'></a>                               </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>






<table align='center' width='600' border='0' cellpadding='10' cellspacing='0'>
<tbody><tr>
 <td align='center' style='font-family:Arial,Helvetica,sans-serif;font-size:11px;color:#666666'><p>We would like to hear from you. For any questions, suggestions or comments please contact us at:<br>
 Customer Service Team: 0800222888 (Toll Free) 
 or visit the <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0Q01N0CTC6&amp;UID=6NZSQ3PVFWXPCQG7FNAQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0Q01N0CTC6%26UID%3D6NZSQ3PVFWXPCQG7FNAQ&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNEc95alTRkQzduY4yb6mNxh9eSqZA'>Contact</a> page<br>
 <br>
Please note that product prices and availability are subject to change. <br>Prices and availability were accurate at the time this newsletter was sent however, <br> they may differ from those you see when you visit <a href='https://www.jumia.ug' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.jumia.ug&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNGiYD5P4khM0QG_DwWknVP_JPj8Dw'>https://www.jumia.ug</a><br>Click <a href='http://info.jumia.com/c/r?ACTION=ri&amp;EMID=09005RV03CH0R01D80VJ2&amp;UID=6NZSQ3PVFWXPCQG7FNAQ&amp;email=kevinpaulwiz%40gmail%2Ecom' style='color:#666666;font-family:'Arial','Helvetica',Sans-serif;text-decoration:underline;font-size:11px' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://info.jumia.com/c/r?ACTION%3Dri%26EMID%3D09005RV03CH0R01D80VJ2%26UID%3D6NZSQ3PVFWXPCQG7FNAQ%26email%3Dkevinpaulwiz%2540gmail%252Ecom&amp;source=gmail&amp;ust=1589540819253000&amp;usg=AFQjCNHhdheOsIu_45Ptypf4hztCMauRHA'> <u>here</u></a> if you no longer want to receive this email. 
     <br>
         </p></td>
</tr>
</tbody></table>



                    
            </td></tr></tbody></table>
            

        </td>
    </tr>
</tbody></table><div class='yj6qo'></div><div class='adL'>


</div></div><div class='adL'>


   </div></div></div><div id=':1d5' class='ii gt' style='display:none'><div id=':1d4' class='a3s aXjCH undefined'></div></div><div class='hi'></div></div>";



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
        <img class="logo" src="admin/assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="admin/assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Reset password</h5>

    <!-- form -->
 <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
    <p>
Please enter the e-mail address associated with your Alipata account. We will send you a link to this e-mail address to reset your password.
    </p>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
        </div>
        <button type="Submit" name="forgot_password" class="btn btn-primary btn-block">Submit</button>
        <hr>
        <p class="text-muted">Take a different action.</p>
        <a href="alipata.com/sell-center" class="btn btn-sm btn-outline-light mr-1">Register now!</a>
        or
        <a href="account-login" class="btn btn-sm btn-outline-light ml-1">Login!</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="admin/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="admin/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/recovery-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
</html>

<?php 
include 'assets/header.php'; 
//include 'config/controller.php'; 
?>      
<?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_payment_details'])) {
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
     

    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    $stat_date=date('Y-m-d');
        $token = md5(uniqid(mt_rand()));

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // All of them empty
    
    $sql = "UPDATE `shops` SET `AccountName`='$AccountName',`IBAN`='$IBAN',`SWIFT`='$SWIFT',`MMRN`='$MMRN',`BankAccount`='$BankAccount',`BankName`='$BankName',`RegistratedMTNNumber`='$RegistratedMTNNumber',`modified`='$submitteddate'  WHERE verify_token='".$_SESSION['verified_token']."'";
   
$to = "$CompanyEmail, kevinpaulwiz@gmail.com";
$subject = "Thank you For applying";
$htmlContent = "
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
                                                <img width='450' style='padding:20px;' class='m_-4380193512371063790imageheader CToWUd' valign='center' src='images/icon/logo.png'>
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
                                        <td class='m_-4380193512371063790bodycontent_cell' style='background-color:#ffffff;color:#565656;padding:15px 15px 15px 15px; font-size: 15px;' width='100%'>
                                       <span style='font-size: 1.2em;'>Welcome $shop_name <img width='25' style='' src='images/icon/cm1.png'></span>
<p style='font-size: 1.2em;'>
Thank you for applying as a vendor on Alipata!. <br>Your application <b style='color:blue;'>&#8470; :$ship_id</b>, has been successfully received.
</p><p>
We will contact you and send a link to access your Shop as soon as possible. Once the information submittted is confirmed you will receive a notification from us.
</p><p>
Thank you for Choosing Alipata.
    
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











                    <div style='background-color:#eeeeee'>
<div class='m_8374035248417847319block-grid m_8374035248417847319two-up' style='Margin:0 auto;min-width:320px;max-width:600px;word-wrap:break-word;word-break:break-word;background-color:#ffffff'>
<div style='border-collapse:collapse;display:table;width:100%;background-color:#ffffff'>


<div class='m_8374035248417847319col m_8374035248417847319num6' style='max-width:320px;min-width:300px;display:table-cell;vertical-align:top;width:300px'>
<div style='width:100%!important'>

<div style='border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:5px;padding-bottom:0px;padding-right:0px;padding-left:0px'>

<div align='center' style='padding-right:0px;padding-left:0px'>
<a href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9hcHBseS51bmljYWYub3JnL3VuaWNhZi1tdWx0aXBhcnRuZXIvdXUtdW9zLWxqbXUvdWdhbmRhPyZ1dG1fc291cmNlPW5ld3NsZXR0ZXImdXRtX21lZGl1bT1lbWFpbCZ1dG1fY2FtcGFpZ249am9ic2Vla2VyLXRyaXdlZWtseS0yMDIwLTA2LTI2/5a61bb50e9a8a2425b8b4d7cB59a0ffce' style='outline:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9hcHBseS51bmljYWYub3JnL3VuaWNhZi1tdWx0aXBhcnRuZXIvdXUtdW9zLWxqbXUvdWdhbmRhPyZ1dG1fc291cmNlPW5ld3NsZXR0ZXImdXRtX21lZGl1bT1lbWFpbCZ1dG1fY2FtcGFpZ249am9ic2Vla2VyLXRyaXdlZWtseS0yMDIwLTA2LTI2/5a61bb50e9a8a2425b8b4d7cB59a0ffce&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNHtbYGl6XvRqrhy50T9F6IVoWCRSQ'> <img align='center' border='0' src='images/media/email-banner.JPG' alt='Image' title='Image' style='text-decoration:none;height:auto;border:0;width:100%;max-width:270px;display:block' width='270' class='CToWUd'></a>
<div style='font-size:1px;line-height:5px'>&nbsp;</div>

</div>

</div>

</div>
</div>


<div class='m_8374035248417847319col m_8374035248417847319num6' style='max-width:320px;min-width:300px;display:table-cell;vertical-align:top;width:300px'>
<div style='width:100%!important'>

<div style='border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:5px;padding-bottom:0px;padding-right:0px;padding-left:0px'>

<div align='center' style='padding-right:0px;padding-left:0px'>
<a href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly93d3cuYnJpZ2h0ZXJtb25kYXkuY28udWcvbG9naW4_dXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NvbnRlbnQ9Y21wLWFsZXJ0cy0yMDIwLTA2LTI2JnV0bV9jYW1wYWlnbj1qb2JzZWVrZXItdHJpd2Vla2x5LTIwMjAtMDYtMjY/5a61bb50e9a8a2425b8b4d7cBe02b4f31' style='outline:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly93d3cuYnJpZ2h0ZXJtb25kYXkuY28udWcvbG9naW4_dXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NvbnRlbnQ9Y21wLWFsZXJ0cy0yMDIwLTA2LTI2JnV0bV9jYW1wYWlnbj1qb2JzZWVrZXItdHJpd2Vla2x5LTIwMjAtMDYtMjY/5a61bb50e9a8a2425b8b4d7cBe02b4f31&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNGb_a7HbqljkfwIM1TfMXl0-QQb2g'> <img align='center' border='0' src='images/media/banner32.JPG' alt='Image' title='Image' style='text-decoration:none;height:auto;border:0;width:100%;max-width:270px;display:block' width='270' class='CToWUd'></a>

</div>

</div>

</div>
</div>


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
<p style='font-size:14px;line-height:2;text-align:center;word-break:break-word;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;margin:0'><span style='font-size:14px'>&nbsp;You are receiving this email because you are a registered user on Alipata.</span><br><span style='font-size:14px'><a href='http://link.brightermonday.co.ug/view/5a61bb50e9a8a2425b8b4d7ccc4jg.1p1n/8a3f4e76' rel='noopener' style='color:#747474' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/view/5a61bb50e9a8a2425b8b4d7ccc4jg.1p1n/8a3f4e76&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNGKI09Ji1wb7HBXfBYZW5LUk7OMHw'>View Online</a>&nbsp; |&nbsp;<a style='text-decoration:underline;color:#747474' href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cB84784baf' rel='noopener' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cB84784baf&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNH2oI8v6acPwm1b10P6pdBk1OnRTg'>Update Preferences</a>&nbsp;|&nbsp; <a style='text-decoration:underline;color:#747474' href='http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cC84784baf' rel='noopener' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://link.brightermonday.co.ug/click/20721148.79115/aHR0cHM6Ly9saW5rLmJyaWdodGVybW9uZGF5LmNvLnVnL21hbmFnZS81bmEvcHJlZmVyZW5jZWNlbnRlcj9lbWFpbD1uc2liYW1iaWslNDBnbWFpbC5jb20mdXRtX3NvdXJjZT1uZXdzbGV0dGVyJnV0bV9tZWRpdW09ZW1haWwmdXRtX2NhbXBhaWduPWpvYnNlZWtlci10cml3ZWVrbHktMjAyMC0wNi0yNg/5a61bb50e9a8a2425b8b4d7cC84784baf&amp;source=gmail&amp;ust=1593417339874000&amp;usg=AFQjCNGObgY4CArMR-cJraLmp9GajnHn9A'>Unsubscribe</a>&nbsp; </span><br><span style='font-size:14px'>© Alipata &nbsp; 2020</span></p>
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

if(mail($to,$subject,$htmlContent,$headers)):

     // use exec() because no results are returned
    $conn->exec($sql);
   // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
     // use exec() because no results are returned
    $conn->exec($sql);
    /*Send confirmation email*/
      // $Error= $stmt->rowCount() . " records UPDATED successfully";
    echo "<script type=\"text/javascript\">
                  window.location = \"sell-center-summary\"
                </script>";
    }
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
    // echo a message to say the UPDATE succeeded
  
catch(PDOException $e)
    {
    $Error= $sql . "<br>" . $e->getMessage();
    }
  }
}
 ?>
        <!-- MAIN -->
        <main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="http://alipata.com/">Home    </a></li>
                    <li class="active"><?php echo $title; ?></li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2">SELL NOW ON ALIPATA AND
START MAKING MONEY</span>
                </h2>
                
                <div class="row p-3">

                    <!-- Main Content -->
                    <div class="col-md-9 col-main bg-dafault">
                <div class="page-content pb-5">
                    <div class="row ">
                        <?php echo $Error; ?>
                      
                <div class="row">
                        
                        <div class="col-xl-6">
  
<?php 
include 'config/connection.php';
$sql = "SELECT  * FROM shops WHERE  verify_token='".$_SESSION['verified_token']."'";
$result = $conn->query($sql);
$row_seller = $result->fetch_assoc();
 ?>
          <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Tabs Bordered Justified</h4> -->

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item active">
                                            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                               <i class="fa fa-check-circle "></i> Seller Account <i class="fa fa-angle-double-right "></i>
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="sell-center-business-information?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&verify_email=<?php echo $_SESSION['verified_token']; ?>"  class="nav-link ">
                                                 <i class="fa fa-check-circle "></i> Business Information <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="sell-center-payment-details"  class="nav-link">
                                                Payment Details <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Summary
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">


<div class="tab-pane p-4 active" id="messages-b2">
<form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>"   enctype="multipart/form-data" >
                         <h3 class="pb-4">Add Payment</h3>                    
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Account Name <span class="text-right"> *</span> </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['AccountName']; ?>" name="AccountName" placeholder="Account Name  ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">IBAN <span class="text-primary" title="International Bank Account Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['IBAN']; ?>" name="IBAN" placeholder="IBAN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">SWIFT <span class="text-primary" title="Society for Worldwide Interbank Financial Telecommunications" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['SWIFT']; ?>" name="SWIFT" placeholder="SWIFT ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Mobile Money Registrated Name <span class="text-danger">*</span> </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['MMRN']; ?>" name="MMRN" placeholder="Mobile Money Registrated Name ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Account Nr. \ Mobile Money Nr. </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['BankAccount']; ?>" name="BankAccount" placeholder="Bank Account Nr. \ Mobile Money Nr. ">
       <span class="small text-default" style="color:#777;">Your payment will only be made to the above account / Mobile Money Number depending on what details you put below</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Name / Service Provider MTN </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['BankName']; ?>" name="BankName" placeholder="Bank Name / Service Provider MTN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Registrated MTN Number (BVN) </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="<?php echo $row_seller['RegistratedMTNNumber']; ?>" name="RegistratedMTNNumber" placeholder="Registrated MTN Number (BVN) ">
    </div>
  </div>

  <button type="submit" name="add_payment_details" class="nav-link btn btn-info float-right">
                                                Continue
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
               
                    
                </form>
                    </div>
                </div>
                </div>

                 <!-- Sidebar -->
                 <div class="col-md-3  pl-5">
                     <div class="col-sidebar ">
                        <!-- Block  tags-->
                        <div class="block-sidebar block-sidebar-tags">
                           <div class="span2 box-highlighted p-3">
        <h3 class="highlighted">FAQs</h3>
        <ul class="link-list">
            <li  class="list-group-item">
            <a data-toggle="collapse" href="#signup-faq-2" class="text-primary">
                What should I use as First Name and Last Name?            </a>
            <div class="collapse" id="signup-faq-2">
                <p>Use the First and Last name of the company´s primary contact.</p>            </div>
        </li>
            <li  class="list-group-item">
            <a data-toggle="collapse" href="#signup-faq-3" class="text-primary">
                What email address is required during the registration?            </a>
            <div class="collapse" id="signup-faq-3">
                <p>Your email address is used to sign in to your Seller Center account, so you can only use it for one account. You are not allowed to use the same email address on other accounts listed on the Seller Center.</p>            </div>
        </li>
    </ul>    </div>
                        </div><!-- Block  tags-->
                    </div><!-- Sidebar -->
                 </div>
                    
                </div>
            </div>


        </main><!-- end MAIN -->

        <?php include 'assets/footer.php'; ?>
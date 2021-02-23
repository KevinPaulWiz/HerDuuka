<?php 
session_start(); 
// include 'assets/header.php';
include 'config/controller.php';
setlocale(LC_MONETARY,"en_US");
function truncate_prod($string) {
if (strlen($string) > 38) {
$string = substr($string, 0, 38) . "...";
}
return $string;
}
// include("inc/config.inc.php");
?>
 
<?php 
$orderNo=$_SESSION['order_No'];
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
                                            <a href='http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0' style='text-decoration:none;color:inherit' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkE-PwiAQxT8NvRgbOi39c-ihiroHjZu4Xrw0SNnKWqCpsE320y-YJoS8efkx85iu5gTjikeyBgwYEwyASZ5AnMQkyUsgUGZpmlNKNyjDqo9_nJIs5kZFj7rgZVexjGTV_RtwJfKCFSSvSsGqqoC7iIb6Ye2I0gbB3p95npf3rvelbzI6K3XQKN1rMxrPUjs5gSB3VrVKdNIp7wnF5LCYL-MmLt4g0y_GrTSaDW0gXgvCmRqZ7LWHwrfWmKwxfAH2SUjuryS5LaQVU-h_PawR2eza7b6lu0v7sWuor7fn02fbHI8XRGg01U_xK_XI3DDLP7-MPkx8b8LWW6OU05KzEGZ1Mp0bhLfPp0vUMctqVGwQblYrBKCFnc309MoHCcb1EDRuUEH_ARMSeQ0&amp;source=gmail&amp;ust=1590576057622000&amp;usg=AFQjCNGwMRSekKn39d4EfE0VQHp_wdrn6g'><p>Computers</p></a>
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
                                       <span style='font-size: 1.2em;'>Hi kevin <img width='25' style='' src='images/icon/cm1.png'></span>
<p style='font-size: 1.2em;'>
Thank you for your Purchase on Alipata!. <br>Your order <b style='color:blue;'>&#8470; :$orderNo</b>, has been successfully confirmed.
</p><p>
It will be packaged and shipped as soon as possible. Once the item(s) is out for delivery or available for pick-up you will receive a notification from us.
</p><p>
Thank you for shopping on Alipata.
    
                                                  <a href='http://email.mg.alipata.com/c/eJwtjs1uwyAQhJ8GLpas9dr458DBqZWcohyqPgAB7NAYiBwIUZ6-JKo00nw7h5lVXDKAQVLDERCAASKwtsKyKlnV9siwb-q6naZpRxqwS_kbrRGl9JZeuMQZu_o8a-wGBb2Q6twwHOaGQYvYK7rySwi3O6lHgvuslNJ_QVzyKeM9eKu3jH5THzdO6Wd2uvGrfhh3E3FN5pW3FyvM-hkO_MtbG52RIhjviqNXcdU5Ph2_qRJBcNLtCIxFQRCdDslv10z5i3fwc3gzjKSb_gCbCEva' style='color:#0000ee' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtjs1uwyAQhJ8GLpas9dr458DBqZWcohyqPgAB7NAYiBwIUZ6-JKo00nw7h5lVXDKAQVLDERCAASKwtsKyKlnV9siwb-q6naZpRxqwS_kbrRGl9JZeuMQZu_o8a-wGBb2Q6twwHOaGQYvYK7rySwi3O6lHgvuslNJ_QVzyKeM9eKu3jH5THzdO6Wd2uvGrfhh3E3FN5pW3FyvM-hkO_MtbG52RIhjviqNXcdU5Ph2_qRJBcNLtCIxFQRCdDslv10z5i3fwc3gzjKSb_gCbCEva&amp;source=gmail&amp;ust=1590576057623000&amp;usg=AFQjCNEBWul_mWKr_HtbXtg_Wk8LGiP_jw'><img src='https://ci3.googleusercontent.com/proxy/DI694ObPHSojrPhLoE25dFr_Y17lCcSDRXCt96nLq9fv3_vPeos2A9ZL6LC1eifDi2u92t3I2CkibAunfBnozSxV31BNv9k6Fmyp9aH75pN8Yyexf20O5s_aUK6vW-1rYK20WeUtBLLhtPbC=s0-d-e1-ft#https://alipata.co/nl-templates-nigeria/admin/images/newTemplates/Tracking_toolbar_2_EN.PNG' alt='TrackingToolbar' style='width:100%' class='CToWUd'></a>                                             </p><p>
      <b>Please note:</b>
    </p><p></p><ul>
      <li>If you ordered for multiple items, you may receive them on different days. This is because they are sold by different sellers on our platform and we want to make each item available to you as soon as possible after receiving it.</li>
      </ul>
                     
                                            <p></p>

                            <div style='padding:0 0; '>
                                                <div style='padding:0 0'>
                                                    <div style='display:table;border-collapse:separate;width:100%;border-spacing:2px; '>
                                                        <div style='display:table-row'>
                                                            <div style='width:50%;display:table-cell;background-color:#fff;border:1px solid #e2e8e9;border-collapse:collapse;vertical-align:top; border-radius: 5px;'>
                                                                <p style='background-color:#f8f8f8;font-weight:bold;margin-top:0;margin-bottom:0px;padding:3px;vertical-align:middle'>Estimated delivery date(s)</p>
                                                                <p style='padding-left:3px;margin-top:1px'>Check our <a href='http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNjsXqwYOubU9NN1t72YuhSC1bAaNQs_vrFxoTMrx5-TI8pisYwThngSgAA8YEA2CSxhDFEYnTDAhk2yRJ67qu0BbLPvqxUtCIaRk8Ct7lHc4ovecpBpJDAlmecAY3fqNbnt6DoXgYM84oKREc3FmWZR1ge9d2fBAvPv2GRkgnFfdUclB61CNKajNZ56TWyFbyTljpPC6pGFZz1nZi_A1SNVNmhFZ0aD0xrwijcqSiVw7y_wsxCTE0gF0ikroSx98rafjk5yNSXY-hq_u2Kdt6f2k_z1-N6y-Nv-pgKp78JdRI7bCIP7eT3r_3XogpPrSUVglGfZTNSXd24M4-ny5BRw0t0K5CuNxsEIDiZtHT0ykXwxvXo9e4RLv6H7uWfHI' style='color:#0000ee' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtkEGPgyAQhX8NXhoNjsXqwYOubU9NN1t72YuhSC1bAaNQs_vrFxoTMrx5-TI8pisYwThngSgAA8YEA2CSxhDFEYnTDAhk2yRJ67qu0BbLPvqxUtCIaRk8Ct7lHc4ovecpBpJDAlmecAY3fqNbnt6DoXgYM84oKREc3FmWZR1ge9d2fBAvPv2GRkgnFfdUclB61CNKajNZ56TWyFbyTljpPC6pGFZz1nZi_A1SNVNmhFZ0aD0xrwijcqSiVw7y_wsxCTE0gF0ikroSx98rafjk5yNSXY-hq_u2Kdt6f2k_z1-N6y-Nv-pgKp78JdRI7bCIP7eT3r_3XogpPrSUVglGfZTNSXd24M4-ny5BRw0t0K5CuNxsEIDiZtHT0ykXwxvXo9e4RLv6H7uWfHI&amp;source=gmail&amp;ust=1590576057623000&amp;usg=AFQjCNGLMbP-e3wLIVZ5x483d5JmaUdx6g'>delivery information page</a></p>
                                                            </div>
                                                            <div style='width:50%;display:table-cell;background-color:#fff;border:1px solid #e2e8e9;border-collapse:collapse;vertical-align:top; border-radius: 5px;'>
                                                                <p style='background-color:#f8f8f8;font-weight:bold;margin-top:0;margin-bottom:0px;padding:3px;vertical-align:middle;'>Delivery method</p>
                                                                <p style='padding-left:3px;margin-top:1px'>
                                                                         Delivery to Your Home or Office
                                                                    </p>
                                                            </div>

                                                        </div>
                                                        <div style='display:table-row'>
                                                            <div style='width:50%;display:table-cell;background-color:#fff;border:1px solid #e2e8e9;border-collapse:collapse;vertical-align:top;border-radius: 5px;'>
                                                                <p style='background-color:#f8f8f8;font-weight:bold;margin-top:0;margin-bottom:0px;padding:3px;vertical-align:middle'>Recipient details</p>
                                                                <p style='padding-left:3px;margin-top:1px'>
                                                                    kevin paul
                                                                    +256757729688</p>
                                                            </div>
                                                            <div style='width:50%;display:table-cell;background-color:#fff;border:1px solid #e2e8e9;border-collapse:collapse;vertical-align:top; border-radius: 5px;'>
                                                                <p style='background-color:#f8f8f8;font-weight:bold;margin-top:0;margin-bottom:0px;padding:3px;vertical-align:middle'>Delivery address</p>
                                                                <p style='padding-left:3px;margin-top:1px'>Buziga-katuuso 
                                                                                                                            
    Buziga
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            


                                            <table class='m_-4380193512371063790orderinfotable' style='border:1px solid #ccc;margin:0;padding:0;width:100%;table-layout:fixed; border-radius: 5px;'>
                                                <caption class='m_-4380193512371063790orderinfocaption' style='font-weight:bold;text-align:left;padding-top:10px'>Order Summary:</caption>
                                                <thead class='m_-4380193512371063790orderinfohead' style='text-align:center'>
                                                    <tr class='m_-4380193512371063790orderinfohead' style='background:#f8f8f8;border:1px solid #e2e8e9;text-transform:uppercase'>
                                                        <th scope='col' style='width:15%'></th>
                                                        <th scope='col' style='width:50%'>Item</th>
                                                        <th scope='col' style='width:15%'>Quantity</th>
                                                        <th scope='col' style='width:15%'>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>";



if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
$total = 0;
$list_tax = '';           
$cart_box = '';
foreach($_SESSION["products"] as $product){
$product_name = $product["product_name"];
$product_quantity = $product["product_quantity"];
$product_price = $product["Price"];
$product_id = $product["product_id"];
$product_color = $product["product_color"];         
$item_price = sprintf("%01.2f",($product_price * $product_quantity));
include 'config/connection.php';
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();     
$product_image="admin/".$row["image_path"];  

$Products.="
<tr class='m_-4380193512371063790orderinfotr' style='border:1px solid #e2e8e9;text-align:center;'>
<td class='m_-4380193512371063790orderinfotd'>
<center class='m_-4380193512371063790itemImgCenter' style='overflow:hidden;max-width:100%;'>
<img width='80' height='80' data-toggle='tooltip' ata-placement='top' class='img-responsive img-fluid float-left pr-2' src='$product_image' data-src='' alt='$product_image' title='$product_image' data-placeholder=''>
</center>
</td>
<td class='m_-4380193512371063790orderinfotd'><span class='m_-4380193512371063790itemlabel' style='display:none;overflow:hidden;font-size:0px'>Item</span>$product_name</td>
<td class='m_-4380193512371063790orderinfotd'><span class='m_-4380193512371063790itemlabel' style='display:none;overflow:hidden;font-size:0px'>Quantity</span>$product_quantity</td>
<td class='m_-4380193512371063790orderinfotd' style='text-align:right'><span class='m_-4380193512371063790itemlabel' style='display:none;overflow:hidden;font-size:0px'>Price</span> UGX $product_price</td>
</tr>";

        $subtotal = ($product_price * $product_quantity);
        $total = ($total + $subtotal);
    }   
    include("inc/config.inc.php");
     $shipping_cost=count($_SESSION["products"])*$shipping_cost;
    $grand_total = $total + $shipping_cost;
    foreach($taxes as $key => $value){
            $tax_amount = round($total * ($value / 100));
            $tax_item[$key] = $tax_amount;
            $grand_total = $grand_total + $tax_amount; 
    }   
    foreach($tax_item as $key => $value){
        $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
    }   

    $cart_box .= "<span>$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</span>";  
}

$grand_total=number_format($grand_total, 0, '.', ',');
$shipping_cost=number_format($shipping_cost, 0, '.', ',');




                            $htmlContent_end=" </tbody>
                                            </table>
                                    <table style='width:100%;border:1px solid #ccc;margin-top:5px;table-layout:auto'>
                                                <tbody><tr><td style='font-weight:bold!important;text-transform:uppercase!important'>Shipping Cost</td><td style='text-align:right'>$currency $shipping_cost</td></tr>
                                                   <tr>
                                                        <td style='font-weight:bold!important;text-transform:uppercase!important'>Shipping Discount</td>
                                                        <td style='text-align:right'>UGX 0</td>
                                                    </tr>
                                                <tr><td style='font-weight:bold!important;text-transform:uppercase!important'>Discount</td><td style='text-align:right'>UGX 0</td></tr>
                                                <tr><td style='font-weight:bold!important;text-transform:uppercase!important'>TOTAL</td><td style='text-align:right; font-size: 1.2em; font-weight: 700; color: #ff4d01;'> $currency $grand_total</td></tr>
                                                <tr><td style='font-weight:bold!important;text-transform:uppercase!important'>Payment Method</td><td style='text-align:right'>
                                                        Payment on delivery/pick-up
</td></tr>
                                            </tbody></table>
                                        <?php } ?>
                                            
                                            <p>If you would like to know more about our services, please also refer to these <a href='http://email.mg.alipata.com/c/eJwtjUGLwyAUhH-NXgLh-YxJc_CQbtieSg_L_gBrbGKrMbRaob--dlkYeDMDb75JagHQa2olAgIIQATRMqxZLVi7Q4G7hvN2HMc9acDP9TV5q2odPF3K70Wf-Zk1DDn0HaoL6r5RwAXT3OiJOrnEuD0IHwh-F-Wc_wfSXOJi3FYOvcubedp1U8ll-yqc2Svr_iBRfgXv02q1ijas1TFMyZlSn44_dFJRSdLtCQxVRRBXE3O434orxE_xe_h4GEg3vgGSIkS4' style='color:#0000ee' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtjUGLwyAUhH-NXgLh-YxJc_CQbtieSg_L_gBrbGKrMbRaob--dlkYeDMDb75JagHQa2olAgIIQATRMqxZLVi7Q4G7hvN2HMc9acDP9TV5q2odPF3K70Wf-Zk1DDn0HaoL6r5RwAXT3OiJOrnEuD0IHwh-F-Wc_wfSXOJi3FYOvcubedp1U8ll-yqc2Svr_iBRfgXv02q1ijas1TFMyZlSn44_dFJRSdLtCQxVRRBXE3O434orxE_xe_h4GEg3vgGSIkS4&amp;source=gmail&amp;ust=1590576057623000&amp;usg=AFQjCNFW9W8VECGTGwcC9Wu1lEnkxeDlJw'>FAQs</a> from our customers.</p>

                                                 <img src='images/media/safety.jpg' alt='SafetyProcedures' style='width:100%' class='CToWUd'>

                                                 
                                            
                                              <p>
                                                
                                              </p>
                                            
                                            <p>Happy Shopping!</p>

                                            <p>Warm Regards,</p>
                                            <img class='m_-4380193512371063790signature CToWUd' src='https://ci6.googleusercontent.com/proxy/QnALqdCdys-BFVavO2i16Qkt_uyO3Q8CQxsoAeUru4x9Z5gn-uxkXTI3lY52wiW6M2ETy1dk2d7jGYGHjMega97dORyvmRIWQObhNz6zhesRMmBHl64RRSbt-E5Ui9lS=s0-d-e1-ft#http://alipata.co/nl-templates-kenya/uploads/buttons/newTemp/alipatasignature.png' alt='Tracker' style='padding-left:1px;width:25%'>
                                            <p>alipata Uganda Team</p>
                                            <p style='font-weight:bold'>Got any questions?</p>
                                            <ul style='padding-left:0px'>
                                                <li style='margin-left:1.2em'>Have a look at our <a href='http://email.mg.alipata.com/c/eJwtjUGLwyAUhH-NXgLh-YxJc_CQbtieSg_L_gBrbGKrMbRaob--dlkYeDMDb75JagHQa2olAgIIQATRMqxZLVi7Q4G7hvN2HMc9acDP9TV5q2odPF3K70Wf-Zk1DDn0HaoL6r5RwAXT3OiJOrnEuD0IHwh-F-Wc_wfSXOJi3FYOvcubedp1U8ll-yqc2Svr_iBRfgXv02q1ijas1TFMyZlSn44_dFJRSdLtCQxVRRBXE3O434orxE_xe_h4GEg3vgGSIkS4' style='color:#0000ee' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtjUGLwyAUhH-NXgLh-YxJc_CQbtieSg_L_gBrbGKrMbRaob--dlkYeDMDb75JagHQa2olAgIIQATRMqxZLVi7Q4G7hvN2HMc9acDP9TV5q2odPF3K70Wf-Zk1DDn0HaoL6r5RwAXT3OiJOrnEuD0IHwh-F-Wc_wfSXOJi3FYOvcubedp1U8ll-yqc2Svr_iBRfgXv02q1ijas1TFMyZlSn44_dFJRSdLtCQxVRRBXE3O434orxE_xe_h4GEg3vgGSIkS4&amp;source=gmail&amp;ust=1590576057623000&amp;usg=AFQjCNFW9W8VECGTGwcC9Wu1lEnkxeDlJw'>Help</a> page</li>
                                                
                                                <li style='margin-left:1.2em'>To get in touch <a href='http://email.mg.alipata.com/c/eJwtjcFuwyAQRL8GLpasZTGOfeDg1EpOUQ9VPmCFkUNsIEqhSP36kirSHN7MYd6ijQIYDXcaAQEUIILqBbaiVaIfUOHQSdnP83xkHfi1vWfvqDXR85seoUOBBOMwGEtSKUukyKAUizQdId_1LaXHN5MTw1NNKeV9kNdaTQyJTKrEn3qzPy48KO_F_VbV6snt_56kP6L3OThDycXQXOKSd1vnz8sXXyiRZocjg6lpGGKwqcTnVqlKX8P1_GKY2GH-A2DVRco' style='color:#0000ee' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwtjcFuwyAQRL8GLpasZTGOfeDg1EpOUQ9VPmCFkUNsIEqhSP36kirSHN7MYd6ijQIYDXcaAQEUIILqBbaiVaIfUOHQSdnP83xkHfi1vWfvqDXR85seoUOBBOMwGEtSKUukyKAUizQdId_1LaXHN5MTw1NNKeV9kNdaTQyJTKrEn3qzPy48KO_F_VbV6snt_56kP6L3OThDycXQXOKSd1vnz8sXXyiRZocjg6lpGGKwqcTnVqlKX8P1_GKY2GH-A2DVRco&amp;source=gmail&amp;ust=1590576057623000&amp;usg=AFQjCNG4di2c3AQpxsc5SfsWX4Q82vmudw'>fill our Contact Us form</a></li>
                                                <li style='margin-left:1.2em'>We are here for you:  Monday - Friday 8:30am to 5:00pm</li>
                                            </ul>
                                        <p></p><p></p><p></p><p></p></td>
                                    </tr>
                                </tbody></table>
  
         <table style='border:0px solid #ccc;margin:0;padding:0;width:100%;table-layout:fixed;min-width:100%;margin:0 auto'>               <tbody>
      <tr style='border:0px solid #e2e8e9;text-align:center'>
           <td style='vertical-align:top'>
             <a href='http://email.mg.alipata.com/c/eJw1j81qwzAQhJ9GvgQbWX-ODzokNekpFFp6LrK0tVVLVlCkGPr0lUsLe5j9ZmdhjNQc415XVhJMMOaYEMxFS5q24a04Ek6OjFIxDMMZMeyn5it7qxodfDVLzvTIRwF9a3TfM8a5psKMwDVmY8dM5eSc0g3REyKXMtu2_eXzVNYJVohW12MElWY1OqhvMSTQyT6g_lQaaq_uSz06pZeaCU77jjZz8g7RS07-4x5y1IDokKJa76rkwqocImI3PRibfTHBK_sPE8QdvYIOVZQLPOx6U9lt9ru0m_bD32pJPgXv82q12n8ersFkBwW_XN8qo5KSqDsjfDocECErpC3EpahSdAfvz7vGJ9QNP5BRb2E' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJw1j81qwzAQhJ9GvgQbWX-ODzokNekpFFp6LrK0tVVLVlCkGPr0lUsLe5j9ZmdhjNQc415XVhJMMOaYEMxFS5q24a04Ek6OjFIxDMMZMeyn5it7qxodfDVLzvTIRwF9a3TfM8a5psKMwDVmY8dM5eSc0g3REyKXMtu2_eXzVNYJVohW12MElWY1OqhvMSTQyT6g_lQaaq_uSz06pZeaCU77jjZz8g7RS07-4x5y1IDokKJa76rkwqocImI3PRibfTHBK_sPE8QdvYIOVZQLPOx6U9lt9ru0m_bD32pJPgXv82q12n8ersFkBwW_XN8qo5KSqDsjfDocECErpC3EpahSdAfvz7vGJ9QNP5BRb2E&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNGzY6KrmZjys4gp0VCZMdbvlde1uw'>
               <div style='height:100px;background:url('https://ci6.googleusercontent.com/proxy/nxPOz8mfh-k0biVZcp6e5CUj8Mv2g47-Tbo2VCd-IiUFFO5cUFVsDCV2qk_ugFQyCEFm5ccrWIXn4mbUv7azsTYYkZ1Wqk0nxbj_cAGqvbOaoLAsm8-uJ_dL_NbhU0DMcY4kFPyQwJf1FTBA-TsnCb34yDmsAFfbRn2XceOU0KWwxQ=s0-d-e1-ft#https://ug.alipata.is/KzTYAWaduPZ0PHTt_MYtCK-bSnQ=/fit-in/500x500/filters:fill(white)/product/37/93564/1.jpg?7810');width:100%;background-size:contain;background-repeat:no-repeat;background-position:center'>
               </div>
             </a>
               <p>
                 </p><div style='display:inline-block;font-size:0.7em;text-align:center;margin-bottom:2px'>
                   <b>UGX 6,534</b>
                 </div>
               <p></p>
             <p>
               </p><div style='display:inline;color:#e59400;border-style:solid;border-width:1px;border-color:#e59400;font-size:0.7em;font-weight:bold;border-radius:6px;padding:3px;width:100%'>
               -65%
               </div>
               <p></p>
             <hr>
             <p></p><div style='font-size:0.7em;font-weight:bold;text-align:center;padding-bottom:5px'>
              Generic
             </div><p></p>
             <p>
             <span style='display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:0.7em;text-align:center;text-decoration:none'>Breathable Protective Face Mask - Black
             </span>
                              </p>
           </td>
           <td style='vertical-align:top'>
             <a href='http://email.mg.alipata.com/c/eJw1j81uwyAQhJ8GXyJbGAy2DxycWukpqtSq52qDqUPNT0Qglvr0haqV9jD7ze5IswjJMB5lpQXBBGOGCcGMt6RpG9bygTAydJTyeZ6PqMN2bb6S1dBIb6urIIPCrG87PtKRS6A97UclAeg4DAwuQ2XENcYbohMipzz7vv_9pzWvq3IqaFmDjPoBUS21hHDxrv7UJqpQW7hv9cWA3OqOsw6PrLlGaxA9pWg_7j4FqRCdYwB3LxnegUGEF9OqRSebTWVB_8OcWdCrkr4KYlMP7W6QzK6_c7W1HP72iuLJW5ucllAyD2e_JKMyfjm_VQtEEKg_IjwdDogQp-Luw5ZVblnA-3PReEL9_ANYzG1-' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJw1j81uwyAQhJ8GXyJbGAy2DxycWukpqtSq52qDqUPNT0Qglvr0haqV9jD7ze5IswjJMB5lpQXBBGOGCcGMt6RpG9bygTAydJTyeZ6PqMN2bb6S1dBIb6urIIPCrG87PtKRS6A97UclAeg4DAwuQ2XENcYbohMipzz7vv_9pzWvq3IqaFmDjPoBUS21hHDxrv7UJqpQW7hv9cWA3OqOsw6PrLlGaxA9pWg_7j4FqRCdYwB3LxnegUGEF9OqRSebTWVB_8OcWdCrkr4KYlMP7W6QzK6_c7W1HP72iuLJW5ucllAyD2e_JKMyfjm_VQtEEKg_IjwdDogQp-Luw5ZVblnA-3PReEL9_ANYzG1-&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNFW8ZPDfTHErXxFjiU9NPP-o7gCxg'>
               <div style='height:100px;background:url('https://ci6.googleusercontent.com/proxy/HnJIpEgaO2-oAZYs8GLOMEefb9xyAKiufUJfGViiUoqtBIt8wUIwZ8HOZzKYqxviva_bZTyXdY01dWfXgpr3HnoL40ahJ9KU5Vw7r9CDakm2qtFxddTdze6DzfHFSHSPr0OFgRR7oXDOuNcU6_NL3-ZkQQn9M66AMv9HmQxkHUq8Lw=s0-d-e1-ft#https://ug.alipata.is/OFfNm4mS1E1JLNNlkkdj8x7beNk=/fit-in/500x500/filters:fill(white)/product/59/04564/1.jpg?7761');width:100%;background-size:contain;background-repeat:no-repeat;background-position:center'>
               </div>
             </a>
               <p>
                 </p><div style='display:inline-block;font-size:0.7em;text-align:center;margin-bottom:2px'>
                   <b>UGX 13,768</b>
                 </div>
               <p></p>
             <p>
               </p><div style='display:inline;color:#e59400;border-style:solid;border-width:1px;border-color:#e59400;font-size:0.7em;font-weight:bold;border-radius:6px;padding:3px;width:100%'>
               -66%
               </div>
               <p></p>
             <hr>
             <p></p><div style='font-size:0.7em;font-weight:bold;text-align:center;padding-bottom:5px'>
              Generic
             </div><p></p>
             <p>
             <span style='display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:0.7em;text-align:center;text-decoration:none'>Activated Carbon Filter Mask - Black
             </span>
                              </p>
           </td>
           <td style='vertical-align:top'>
             <a href='http://email.mg.alipata.com/c/eJw1j8FugzAQRL_GXCKQWWMCBx-SovQUVWrVc7WYDbjYOHLsIvXrC1Ur7WH2ze5IMygtOW91ZhRw4FxyAC7rEoqykGXdgISmEqLuuu7MKu7G4jM5g4X2LpsUaGyx5DfARmINx1b0xNuGUPRNyaHMrJpivDNxYnDZZl3Xv_80butICwWj8z4Qxgl7S_kNNeUOH3PeW9RzXtWy4kIWU3SWiUuK7uPhU9DERBcDLg_U0fgFLYN6Nx0NJrnNJIfmH0YKO3ol7bOgZvoyyx2TXc33VmncD3_7RPXknUuL0bhnHq5-SJY2_HJ9ywaMqNjxzPjpcGAAC8XVh3lTW7sdvD_vmp_YsfsBwtdqbg' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJw1j8FugzAQRL_GXCKQWWMCBx-SovQUVWrVc7WYDbjYOHLsIvXrC1Ur7WH2ze5IMygtOW91ZhRw4FxyAC7rEoqykGXdgISmEqLuuu7MKu7G4jM5g4X2LpsUaGyx5DfARmINx1b0xNuGUPRNyaHMrJpivDNxYnDZZl3Xv_80butICwWj8z4Qxgl7S_kNNeUOH3PeW9RzXtWy4kIWU3SWiUuK7uPhU9DERBcDLg_U0fgFLYN6Nx0NJrnNJIfmH0YKO3ol7bOgZvoyyx2TXc33VmncD3_7RPXknUuL0bhnHq5-SJY2_HJ9ywaMqNjxzPjpcGAAC8XVh3lTW7sdvD_vmp_YsfsBwtdqbg&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNFF0U0f6at5_kPs5yU2Vd36FY9cWw'>
               <div style='height:100px;background:url('https://ci3.googleusercontent.com/proxy/mol5ulHzVa1hzbpLq7JiLc5gpUN_BNrjHR70OAisAtj9Ss3EP9eVxOORw0wMSy7B9Grno4VSnDABzcYOg9D28kNmqlqz81jU7JO3Y2Z9YMy157TV3co4NKqKPChmB2wZXtscNcXGjxSD40YyxUsIGh6aSeXlTna-NybN4X0fg3gtIg=s0-d-e1-ft#https://ug.alipata.is/iIn_KnP7Y7f3_f2cTj2eGvEEEw4=/fit-in/500x500/filters:fill(white)/product/53/04564/1.jpg?7821');width:100%;background-size:contain;background-repeat:no-repeat;background-position:center'>
               </div>
             </a>
               <p>
                 </p><div style='display:inline-block;font-size:0.7em;text-align:center;margin-bottom:2px'>
                   <b>UGX 8,203</b>
                 </div>
               <p></p>
             <p>
               </p><div style='display:inline;color:#e59400;border-style:solid;border-width:1px;border-color:#e59400;font-size:0.7em;font-weight:bold;border-radius:6px;padding:3px;width:100%'>
               -65%
               </div>
               <p></p>
             <hr>
             <p></p><div style='font-size:0.7em;font-weight:bold;text-align:center;padding-bottom:5px'>
              Generic
             </div><p></p>
             <p>
             <span style='display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:0.7em;text-align:center;text-decoration:none'>Breathable Face Mask - Black
             </span>
                              </p>
           </td>
      </tr>
  </tbody>
</table>    
  
<table width='100%' cellspacing='0' style='padding:0 0 1% 0.5%!important'>
                                    <tbody><tr>
                                        <td>                                          
                                        </td>
                                    </tr>
                                </tbody></table>
                                <table class='m_-4380193512371063790footer' width='96%' cellspacing='0' style='margin-bottom:15px;padding:0 0 0 4%!important'>
                                    <tbody><tr style='display:block'>
                                        <td style='width:50%'>
                                            <table>
                                                <tbody><tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href='http://email.mg.alipata.com/c/eJw1kMGKwyAUAL_GXErCi4lJesghbWhPpYVtL3spRm1rGjVE3cJ-_WrpgshjGGR8vGUEYM0S2WLAAAQwBlLlOMszklcNJrgpi6Lq-36DSlD3bPRK0owZlTxaJggZhoZXxSBEwWu4DbTM180AAHXdNMnUPpybLSo6hHfh0HnOKB-9dfGFAMbKsWdxHT0po7bTZjYzKnq3eIFw5Z26KsGlV4EJReX0gdb4hYm3SLWlzEmj6XSNhg3Kx2JUzVTedfDi71IgKeAzhtBDqnDl-fe_abQT2gWRW-rSG-ep9YwJaz-CE0tsuOxTRDaI9OnueDyn3emULO1T_Eg9Uz-95G9Y0j1WvDfk2q1RymvJaAxcHQz3kwj4ePhKOHW0RfUGQbdaIYy1cC-zPMMUyiK47OMMHar7PyAsgnQ' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJw1kMGKwyAUAL_GXErCi4lJesghbWhPpYVtL3spRm1rGjVE3cJ-_WrpgshjGGR8vGUEYM0S2WLAAAQwBlLlOMszklcNJrgpi6Lq-36DSlD3bPRK0owZlTxaJggZhoZXxSBEwWu4DbTM180AAHXdNMnUPpybLSo6hHfh0HnOKB-9dfGFAMbKsWdxHT0po7bTZjYzKnq3eIFw5Z26KsGlV4EJReX0gdb4hYm3SLWlzEmj6XSNhg3Kx2JUzVTedfDi71IgKeAzhtBDqnDl-fe_abQT2gWRW-rSG-ep9YwJaz-CE0tsuOxTRDaI9OnueDyn3emULO1T_Eg9Uz-95G9Y0j1WvDfk2q1RymvJaAxcHQz3kwj4ePhKOHW0RfUGQbdaIYy1cC-zPMMUyiK47OMMHar7PyAsgnQ&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNGwXvxkwXTJFoxSZPJd1s5nNvlzWA'>
                                                            <img src='https://ci4.googleusercontent.com/proxy/kXiqXvHiRVntG4aGa9a_THpiKPX0yXKpRovDx5x98KeLjjpqZKi-oUWOBfpmlZy7t2vPomT6TSM3LMmLxKR-BOqg172HFlsG0yFeVb6Bg_Y=s0-d-e1-ft#http://alipata.co/nl-templates-nigeria/banners/download_app.png' style='width:100%' class='CToWUd'>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                        <td style='width:25%;text-align:center;padding-left:5px'>
                                            <table style='width:100%'>
                                                <tbody><tr>
                                                    <td colspan='6' style='column-span:6;text-align:center;font-weight:bold;width:100%'>follow us everywhere</td>
                                                </tr>
                                                <tr>
                                                    <td align='center' width='10%'>
                                                        <a href='http://email.mg.alipata.com/c/eJwdjU1qwzAUhE8jbQzm6dn6W2jh1DQQCF2UHECRjKPGkoIrJ9DTVw7MYmZg5vPGcQDtaDAICMABEbhg2LKWM6GQo-q7TozjeCA9xLn92WKwrcuR3owX3HmhnO6Zt1o6JqceFGeca32VytPF3Ep5kG4g-FkV0m-x82rjvq_5tH9djnQ19-kZ0sNuyyv8Vc4cbVjekGI-coxbCs6WkFNzzn5bplp_nb-pt8UaIg8EhqYhiGkqr7zeq6vIvbgcdw8DkeM_gIhEtA' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwdjU1qwzAUhE8jbQzm6dn6W2jh1DQQCF2UHECRjKPGkoIrJ9DTVw7MYmZg5vPGcQDtaDAICMABEbhg2LKWM6GQo-q7TozjeCA9xLn92WKwrcuR3owX3HmhnO6Zt1o6JqceFGeca32VytPF3Ep5kG4g-FkV0m-x82rjvq_5tH9djnQ19-kZ0sNuyyv8Vc4cbVjekGI-coxbCs6WkFNzzn5bplp_nb-pt8UaIg8EhqYhiGkqr7zeq6vIvbgcdw8DkeM_gIhEtA&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNG01YsrISWkug1YxGDv-fPJebK3bA'>
                                                            <img src='https://ci3.googleusercontent.com/proxy/wN1U0Qs51rGvucODocbhex5PdAaqZVJ12L6lNdFpqT9s16e7RNuBGOSUgdYihT_khMaRLvqVhrRBQYlNrBb7l3Yb1eGZeEhF3BgFK4pijIlEGLRZthC6EuhkKjT87MP4=s0-d-e1-ft#http://alipata.co/nl-templates-nigeria/admin/images/newTemplates/instagram1.png' style='width:100%' alt='Instagram' class='CToWUd'>
                                                        </a>
                                                    </td>
                                                    <td align='center' width='10%'>
                                                        <a href='http://email.mg.alipata.com/c/eJwdjc2KwyAURp9GNwG5XmN-Fi7SCVMolFkMfQBrtLWJsbRmhHn6MQPf4uMszpmUkQC9oV4hIIAERJANR8aZ5E2HErtaiGYcxwOpIdzYYwteMxMDvSuoJydM60BgzaUTV9HajnNue2dko3u6qHtKzzcRA8HPspwzc9rYa4zz7ijotPsuR_pSs_3x61NvS_a_pXUL2i__oaQ-Ygjb6o1OPq7VOU7bYgv-On_TSSetSHsgMFQVQVxtyvE1l1eqO7gc9w8Dacc_t5VGQg' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwdjc2KwyAURp9GNwG5XmN-Fi7SCVMolFkMfQBrtLWJsbRmhHn6MQPf4uMszpmUkQC9oV4hIIAERJANR8aZ5E2HErtaiGYcxwOpIdzYYwteMxMDvSuoJydM60BgzaUTV9HajnNue2dko3u6qHtKzzcRA8HPspwzc9rYa4zz7ijotPsuR_pSs_3x61NvS_a_pXUL2i__oaQ-Ygjb6o1OPq7VOU7bYgv-On_TSSetSHsgMFQVQVxtyvE1l1eqO7gc9w8Dacc_t5VGQg&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNGYMY8zaHonr1VcB7MDlJ3oSIGwrQ'>
                                                            <img src='https://ci6.googleusercontent.com/proxy/IN5--lE6-mM2f8s6sPsQbKCJvObv2MdD6bbUTpHeuRPM03z40KgjZmXA8tiZVk31DW2v9anh1E1SM2DbRMiKh4zYcgpJUhkav8RQRnX_-IFfeDkAN-x_7LAciJraDtE=s0-d-e1-ft#http://alipata.co/nl-templates-nigeria/admin/images/newTemplates/facebook1.png' style='width:100%' alt='facebook' class='CToWUd'>
                                                        </a>
                                                    </td>
                                                    <td align='center' width='10%'>
                                                        <a href='http://email.mg.alipata.com/c/eJwdjc-KwjAYxJ8muRTK1y9_mh5yqFsUFmQP4gPEJGrWppGabmGf3lSYw8zAzM9pKwA6S4NGQAABiCBkg3VTi0YqFKg4Y3IYhh3hEG_17xKDqW2K9K5Vx7BlhkvjZWcdNgquzF07xvlFgeB01Pecny_CeoL7oryGnP28zUv63q7OBzrrh_8L09Ms4xr-C-YWTRg_jKy_UozLFKzJIU3VMbll9KX-OZ6oM9lo0u4I9FVFECef1zQ_iivArTgfNg89aYc3GodEMw' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://email.mg.alipata.com/c/eJwdjc-KwjAYxJ8muRTK1y9_mh5yqFsUFmQP4gPEJGrWppGabmGf3lSYw8zAzM9pKwA6S4NGQAABiCBkg3VTi0YqFKg4Y3IYhh3hEG_17xKDqW2K9K5Vx7BlhkvjZWcdNgquzF07xvlFgeB01Pecny_CeoL7oryGnP28zUv63q7OBzrrh_8L09Ms4xr-C-YWTRg_jKy_UozLFKzJIU3VMbll9KX-OZ6oM9lo0u4I9FVFECef1zQ_iivArTgfNg89aYc3GodEMw&amp;source=gmail&amp;ust=1590576057624000&amp;usg=AFQjCNFrD5DJeQ2MNaXVeBgJljjGdp6LVg'>
                                                            <img src='https://ci3.googleusercontent.com/proxy/VfRNSuZKrSjGElO3GuqwZBc0Fx8I_AeBDARN39g_2nGMPrgBQMqjS2Y1GJ7YwzXMSf-OHq4vGTFFxiF5oHTGCvzAzrOZa2RoTUFl0exTjx0RkKRoGskICJxHKL_9tQ=s0-d-e1-ft#http://alipata.co/nl-templates-nigeria/admin/images/newTemplates/twitter1.png' style='width:100%' alt='twitter' class='CToWUd'>
                                                        </a>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table><div class='yj6qo'></div><div class='adL'>

    </div></div><div class='adL'>


</div></div></div><div id=':1q6' class='ii gt' style='display:none'><div id=':1q7' class='a3s aXjCH undefined'></div></div><div class='hi'></div></div>
</body>

</html>";
$htmlContent_All=$htmlContent.$Products.$htmlContent_end;
echo $htmlContent_All;
     ?>
                                               
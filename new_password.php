

<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Password - Alipata</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="admin/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="admin/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">
<?php  
if (isset($_REQUEST['ALeKk01Aq9LKlrq4_B0fiQ'])) {
    $ALeKk01Aq9LKlrq4_B0fiQ=$_REQUEST['ALeKk01Aq9LKlrq4_B0fiQ'];
    switch ($ALeKk01Aq9LKlrq4_B0fiQ) {
      case 'uHSZ06KXuAE':
      uHSZ06KXuAE();
        # code...
        break;
      
      default:
      echo "the link is not activated!";
        # code...
        break;
    }
    # code...

  }else{

 }


function uHSZ06KXuAE(){
    $token_id=$_REQUEST['new_password'];
    // echo $token_id;
    $submitteddate=date("D dS M,Y h:i a");
?>


<!-- begin::preloader-->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- end::preloader -->

<div class="form-wrapper">
   <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['change_password'])) {
        $token = sha1(md5(uniqid(mt_rand())));
        /*Pasword Cryprtion*/
        $pswdcrypt='^%#?&}^*?!1I/]';
        $pswrd = $pswdcrypt.$_POST['new_password'].$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $new_password= md5(crypt($pswrd2,RM));
     /*Pasword Cryprtion*/
include 'admin/config/connection.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE customers SET password='$password1' WHERE  password_token='$token_id' ";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    echo "string";
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
<?php 
include 'config/connection.php';
$sql = "SELECT  password_token FROM customers WHERE password_token='$token_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
   <!-- form -->
 <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
        <div class="form-group">
            <input type="password" name="new_password" class="form-control" placeholder="Enter Password" required autofocus>
        </div>

        <div class="form-group">
            <input type="password"  class="form-control" placeholder="Re-type Password" required autofocus>
        </div>
        <button type="Submit" name="change_password" class="btn btn-primary btn-block">Submit</button>
        <hr>
        <p class="text-muted">Take a different action.</p>
        <a href="alipata.com/sell-center" class="btn btn-sm btn-outline-light mr-1">Register now!</a>
        or
        <a href="account-login" class="btn btn-sm btn-outline-light ml-1">Login!</a>
    </form>
    <!-- ./ form -->


<?php
}else{
    echo "<b> <i class='fa fa-check-square'></i></b> <h5 class='text-danger'>You have clicked on the wrong link, please check your email and try again.</h5>";
}
 ?>
    <!-- form -->
    <form>

        <!-- <div class="form-group d-flex align-items-center">
            <div class="mr-3">
                <figure class="mb-4 avatar avatar-sm">
                    <img src="assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="avatar">
                </figure>
            </div>
            <input type="password" class="form-control" placeholder="Password" required autofocus>
        </div>
        <button class="btn btn-primary btn-block">Unlock</button>
        <hr> -->
        <!-- <a href="login.html" class="btn btn-sm btn-outline-light ml-1"></a> -->
    </form>
    <!-- ./ form -->

</div>

<?php } ?>

<!-- Plugin scripts -->
<script src="admin/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="admin/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
</html>
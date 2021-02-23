

<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpaita - Email Confirmation</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
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
    $token_id=$_REQUEST['verify_email'];
    // echo $token_id;
    $submitteddate=date("D dS M,Y h:i a");
?>


<!-- begin::preloader-->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- end::preloader -->

<div class="form-wrapper">

    
    <!-- logo -->
    <div id="logo">
        <img class="logo" src="assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->
<?php 
include 'config/connection.php';
$sql = "SELECT  verify_token FROM shops WHERE verify_token='$token_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE shops SET is_verified='1', modified='$submitteddate' WHERE verify_token='$token_id'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    echo "<h5>Your email address has been verified successfully.</h5>"; 

    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

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
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:21:26 GMT -->
</html>
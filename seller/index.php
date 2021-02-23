<?php   include 'main/controllers.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller - Login Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../admin/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="../admin/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="../admin/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">


<div class="form-wrapper">
 <?php echo $Error; ?>
    
    <!-- logo -->
    <div id="logo">
        <img class="logo" src="../admin/assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="../admin/assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5>

    <!-- form -->
   
 <form method="post" id="repay_form" action="<?php echo $_SERVER[""];?>" class="form-horizontal">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="recovery-password">Reset password</a>
        </div>
       <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
        
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <!-- <a href="register.html" class="btn btn-outline-light btn-sm">Register now!</a> -->
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="../admin/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="../admin/assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:19:05 GMT -->
</html>

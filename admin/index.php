<?php include 'main/login.php'; ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:19:05 GMT -->
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alipata - Login Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
            <!-- Font Awesome -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<!-- <div class="preloader"> -->
    <!-- <div class="preloader-icon"></div> -->
<!-- </div> -->
<!-- end::preloader -->

<div class="form-wrapper">
    <?php
     echo $Error; 
     ?>

    
    <!-- logo -->
    <div id="logo">
        <img class="logo" src="assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="assets/media/image/logo-dark.html" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5> 

    <!-- form -->

 <form method="post" id="repay_form" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-horizontal">
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="user_pass" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="recovery-password.html">Reset password</a>
        </div>
        <button type="submit" name="signin" class="btn btn-primary btn-block">Sign in</button>
        <!-- <hr> -->
        <!-- <p class="text-muted">Login with your social media account.</p> -->
        <!-- <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-behance">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul> -->
        <!-- <hr> -->
        <!-- <p class="text-muted">Don't have an account?</p> -->
        <!-- <a href="register.html" class="btn btn-outline-light btn-sm">Register now!</a> -->
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:19:05 GMT -->
</html>

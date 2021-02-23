<?php 
//Key verification
 date_default_timezone_set("Africa/Nairobi");
    session_start();/*Creating Sessions*/
    if (!$_SESSION['Companyemail'] && !$_SESSION['shop_id'] && !$_SESSION['active']) { /*Preventing one to access the system when a session has not been created*/
        # code...
        header('Location:index');/*Redirecting to the login page*/
    } 
    // echo "connected";
            date_default_timezone_set("Africa/Nairobi");
    include 'config/connection.php'; /*Connection to the Database*/
    // // Create connection
    $shop_id=$_SESSION['shop_id'];/*Retrieving the Session stored*/
    $result = $conn->query("SELECT shopname, ShopLogo, lname, fname,shop_id FROM shops WHERE shop_id='".$_SESSION['shop_id']."'");
    if ($result->num_rows > 0) {
    $row_shop = $result->fetch_assoc();
    $shop_name=$row_shop['shopname'];
    $ShopLogo=$row_shop['ShopLogo'];
    $lname=$row_shop['lname'];
    $fname=$row_shop['fname'];
    }else{
       header('Location:index');/*Redirecting to the login page*/     
    }
 ?>
<?php 
  // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
 // replace dashes with whitespace
 $title = str_replace('-', ' ', $title);
 $title = str_replace('_', ' ', $title);
 // check if the file is index, if so assign 'home' to the title instead of index
 if (strtolower($title) == 'Agents-form') 
 {
 $title = 'children Information';
 $active='active';
 }
 elseif (strtolower($title) == 'schfees') 
 {
   $title='school fees';
 }
 elseif (strtolower($title) == 'staffinfo') 
 {
   $title='Staff Information';
 }
 elseif (strtolower($title) == 'req_schpayment') 
 { 
   $title='school requirement';
 }
 // capitalize all words
 $title = ucwords($title);
 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/tab by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:17:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> - Alipata CPANEL</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../admin/assets/media/image/favicon.png"/>
    <!-- Font Awesome -->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!-- Select2 -->
    <link href="../admin/vendor/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="../admin/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../admin/vendor/normalize-css/normalize.css" rel="stylesheet">
    <link href="../admin/vendor/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../admin/vendor/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Datatables -->
    <link href="../admin/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../admin/vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../admin/vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../admin/vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../admin/vendor/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <!-- Custom Theme Style -->
    <!-- <link href="build/css/custom.min.css" rel="stylesheet"> -->
    <!-- DataTable -->
    <link rel="stylesheet" href="../admin/vendors/dataTable/datatables.min.css" type="text/css">
    
        <!-- Plugin styles -->
        <link rel="stylesheet" href="../admin/vendors/bundle.css" type="text/css">
        <!-- Font Awesome -->
        <!-- Prism -->
        <link rel="stylesheet" href="../admin/vendors/prism/prism.css" type="text/css">
        <!-- Css -->
        <link rel="stylesheet" href="../admin/vendors/dropzone/dropzone.css" type="text/css">
        <!-- App styles -->
        <link rel="stylesheet" href="../admin/assets/css/app.min.css" type="text/css">
        <!-- Font Awesome -->
        <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../admin/vendors/editor.css" type="text/css" rel="stylesheet"/>
<!-- Restrictions  ie Access levels -->

</head>
<body  class="">
<!-- begin::preloader-->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- end::preloader -->

<!-- BEGIN: Sidebar Group -->
<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="../admin/assets/media/image/image1.jpg">
            <figure class="avatar avatar-lg mb-3 border-0">
                <img src="../admin/assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
            </figure>
            <h5 class="d-flex align-items-center justify-content-center"><?php echo $fname." ".$lname; ?></h5>
            <div>
                ROLE: <strong><?php echo $role; ?></strong>
            </div>
        </div>
        <div class="card mb-0 card-body shadow-none">
            <div class="mb-4">
                <div class="list-group list-group-flush">
                    <a href="profile" class="list-group-item p-l-r-0">Profile</a>
                    <!-- <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a> -->
                    <!-- <a href="mail" class="list-group-item p-l-r-0 d-flex">
                        Inbox <span class="badge badge-danger ml-auto">2</span>
                    </a> -->
                    <!-- <a href="#" class="list-group-item p-l-r-0">Billing</a> -->
                    <a href="#" class="list-group-item p-l-r-0" data-sidebar-target="#settings">Settings</a>
                    <a href="logout" class="list-group-item p-l-r-0 text-danger" >Sign Out!</a>
                </div>
            </div>
            
           
        </div>
    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <!-- <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    <!-- END: Settings -->

</div>
<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <!-- <a href="dashboard"> -->
                    <img class="logo-light" src="assets/media/image/logo.png" alt="light logo">
                <!-- </a> -->
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4><?php echo $title; ?></h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <!-- begin::header fullscreen -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header fullscreen -->

                    <!-- begin::header search -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                            <i data-feather="search"></i>
                        </a>
                        <div class="dropdown-menu p-2 dropdown-menu-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- end::header search -->


                    <!-- end::header messages dropdown -->

                    <!-- begin::header notification dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Notifications</h5>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old notifications</span>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex align-items-center justify-content-between">
                                                    Apps are ready for update
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header notification dropdown -->


                    <!-- begin::settings -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- end::settings -->

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none"><?php echo $shop_name; ?></span>
                            <figure class="avatar avatar-sm">
                                <img src="../admin/assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->

                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation active">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Ecommerce"
                           data-nav-target="#ecommerce">
                            <i data-feather="shopping-cart"></i>
                        </a>
                    </li>
                
                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    <div id="ecommerce">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="shopping-cart"></i> E-commerce
                            </li>
                            <li>
                                <a  class=" <?php if($title=='Dashboard'){echo 'active';}else{echo ' ';} ?>"  href="dashboard">Dashboard</a></li>
                            <li>
                                <a  class="<?php if($title=='Shop Orders'){echo 'active';}else{echo ' ';} ?>" href="shop-orders">Orders</a></li>
                            <li>
                                <a  class="<?php if($title=='Shop Products'){echo 'active';}else{echo ' ';} ?>"  href="shop-products">Product List</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-warning rounded">
                                    <i class="fa fa-bar-chart"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Total Orders</h6>
                                        <h4 class="mb-0 font-weight-bold"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."'");
                                        echo $result->num_rows;
                                         ?></h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-success rounded">
                                    <i class="fa fa-trash"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Canceled Orders</h6>
                                        <h4 class="mb-0"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' AND status='Canceled'");
                                        echo $result->num_rows;
                                         ?></h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-danger rounded">
                                    <i class="fa fa-reply"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Refund</h6>
                                        <h4 class="mb-0"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' AND status='Refunded'");
                                        echo $result->num_rows;
                                         ?></h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="analytics">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="activity"></i> Analytics
                            </li>
                            <li>
                                <a  href="analytics-dashboard">Dashboard</a></li>
                            <li>
                                <a  href="customers">Customers</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="fa fa-bar-chart"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="fa fa-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="fa fa-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="projects">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="briefcase"></i> Projects
                            </li>
                            <li>
                                <a  href="projects-dashboard">Dashboard</a></li>
                            <li>
                                <a  href="project-list">Project List</a></li>
                            <li>
                                <a  href="project-grid">Project Grid</a></li>
                            <li>
                                <a  href="project-detail">Project Detail</a></li>
                            <li>
                                <a  href="clients">Clients</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="fa fa-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end::navigation -->
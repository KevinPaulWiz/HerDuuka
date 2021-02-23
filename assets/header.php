<?php
session_start();
$name = 'user_cookie';
$value = 'Alexander Portman';   
setcookie($name, serialize($value), time() + (86400 * 80), '/');
  $name = '3e24f8a52bbfdf4b9157d0ed0ad52f74';
  $value = 'nUWmPUfoH2dJThpOmT14fTQstnTuUOpS';      
  setcookie($name, $value, time() + (86400 * 80), '/');
// Turn off all error reporting
error_reporting();
//display the date and time
date_default_timezone_set('Africa/Nairobi');
 
 // include 'Admin/config/connection.php';
 // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
 // replace dashes with whitespace
 $title = str_replace('-', ' ', $title);
 // check if the file is index, if so assign 'home' to the title instead of index
 if (strtolower($title) == 'index') 
 {
 $title = "Online shopping from the earth's biggest selection - Alipata";
 $active='active';
 }
 // capitalize all words
 $title = ucwords($title);
$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?> - Online shopping from the earth's biggest selection</title>
<!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="E-commerce, commerce, online shop"
        content="Online shopping from the earth's biggest selection of fashionable clothes, shoes, watches, books, magazines, music, DVDs, videos, electronics, computers, software, apparel & accessories, jewelry, tools & hardware, housewares, furniture, sporting goods, beauty & personal care goods." />
  <!-- Favicon -->
        <link rel="shortcut icon" href="admin/assets/media/image/favicon.png"/>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">
    <style type="text/css">
    .styled{
        color: #fff;
      background-color: #ff4d01 !important;
      border-color: #ff4d01;
    }
    </style>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-contact">

    <div class="wrapper">
<?php if ($title=='Home') {?>
    <!-- alert banner top -->
        <div role="alert" class="qc-top-site qc-top-site1 alert  fade in" style="background-image: url(images/media/index1/bg-qc-top.jpg);"> 
            <div class="container">
                <button class="close" type="button"><span aria-hidden="true">×</span></button> 
                <div class="description">
                    <span class="title">Special Offer!</span>
                    <span class="subtitle">Rewarding all customers with a 15% discount. </span>
                    <span class="des">This offer is available from 9th December to 19th December 2019.</span>
                    
                </div>
            </div>
        </div>
<!-- alert banner top -->
<?php } ?>
         <?php
   
    //   if(!isset($_COOKIE[$name])) {    
    //     echo "Cookie called '" . $name . "' has not been set!";
    //   } else { 
    //     echo "Cookie '" . $name  . "' has been set!<br>";    
    //     echo "Value in cookie is: " . $_COOKIE[$name];
    //   } 
    ?>
<?php  if(!isset($_COOKIE[$name])) {    ?>
            <!--  Popup Newsletter-->
            <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="block-newletter">
                            <div class="block-title">signup for our newsletter & promotions</div>
                            <div class="block-content">
                                <p class="text-title">GET <span>50% <span>off</span></span></p>
                                <form>
                                    <label>on your next purchase</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Enter your email..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="checkbox btn-checkbox">
                                <label>
                                    <input type="checkbox"><span>Dont’s show this popup again!</span>
                                </label>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
            </div><!--  Popup Newsletter-->
    <?php
} else {
    // echo "Cookie '" . $cookie_name . "' is set!<br>";
    // echo "Value is: " . $_COOKIE[$cookie_name];
}
 ?>
        <!-- HEADER -->
        <header class="site-header header-opt-1 cate-show">

            <!-- header-top -->
            <div class="header-top">
                <div class="container">

                    <!-- nav-left -->
                    <ul class="nav-left" >
                        <li ><span><i class="fa fa-phone" aria-hidden="true"></i>+256 702 978 248</span></li>
                        <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
                        <li class="dropdown switcher  switcher-language">
                            <a href="sell-on-alipata" class="dropdown-toggle switcher-trigger" aria-expanded="false">
                                <span>Sell on Alipata</span> 
                            </a>
                        </li>
                    </ul><!-- nav-left -->

                    <!-- nav-right -->
                    <ul class=" nav-right">
                        <li class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><i class="fa fa-user"></i> <span>

                           <?php if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { echo "Login";  }else{
                                // $sql = "";
                                include 'config/connection.php';
                                $result = $conn->query("SELECT * FROM customers WHERE customerid='".$_SESSION['customerid']."'");
                                $row_customer = $result->fetch_assoc();
                                echo "Hello, ".$row_customer['fname'];
                                ?>
                                

                             <?php } ?></span> <i ar
                                a-hidden="true" class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu ">
                                <ul class="account">
                                     <?php if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { ?>
                                    <li><a href="account-login">Login</a></li>
                                    <li><a href="account-login">Register</a></li>
                                    <li><a href="account-login">My Account</a></li>
                                    <li><a href="account-login">Saved Items</a></li>
                                    <!-- <li><a href="account-login">Checkout</a></li> -->
                                <?php }else{ ?>
                                    <!-- <li><a href="#">Compare</a></li> -->
                                    <!-- <li><a href="#">Login/Register</a></li> -->

                                    <li><a href="account-profile">My Account</a></li>
                                    <li><a href="account-orders">Orders</a></li>
                                    <li><a href="account-wishlist">Saved Items</a></li>
<div class="box -r" role="menu" aria-labelledby="dpdw-login" id="dpdw-login-box">
    <div class="inbox h5">
        
                <div align="Center">
                    <a href="customer-logout" class="button btn btn-default mr-5" >Logout</a>
                </div>
    </div>
</div>
                                <?php } ?>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" >Services</a></li>
                        <li><a href="#">Support </a></li>
                    </ul><!-- nav-right -->

                </div> 
            </div><!-- header-top -->

            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 nav-left">

                            <!-- logo -->
                            <strong class="logo">
                                <a href="<?php echo $siteURL; ?>"><img src="images/media/index1/logo.png" alt="logo"></a>
                            </strong>

                        </div>

                        <div class="nav-right">  

                            <!-- block mini cart -->  
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="cart" id="cart-info" role="button" >
                                    <span class="cart-icon"></span>
                                    <span class="counter qty">
                                        <span class="cart-text">Shopping Cart</span>
                                        <span class="counter-number" id="cart-container1"><?php 
            if(isset($_SESSION["products"])){
                echo count($_SESSION["products"]); 
            } else {
                echo 0; 
            }
            ?></span>
                                        <span class="counter-label" id="cart-container"><?php 
            if(isset($_SESSION["products"])){
                echo count($_SESSION["products"]); 
            } else {
                echo 0; 
            }
            ?> <span></span>Item(s)</span>
                                        <!-- <span class="counter-price">$75.00</span> -->
                                    </span>
                                </a>
                            <!--     <div class="col-md-8 text-right header-box">
        <a href="view_cart.php" class="cart-counter" id="cart-info" title="View Cart">            
            <span class="cart-item" id="cart-container"><?php 
            if(isset($_SESSION["products"])){
                echo count($_SESSION["products"]); 
            } else {
                echo 0; 
            }
            ?></span>
        </a>
        </div> -->
                               <!--  <div class="dropdown-menu">
                                    <form>
                                        <div  class="minicart-content-wrapper" >
                                            <div class="subtitle">
                                                You have 6 item(s) in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="images/media/index1/minicart.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="images/media/index1/minicart2.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="subtotal">
                                                <span class="label">Total</span>
                                                <span class="price">$630</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-viewcart" href="">
                                                    <span>Shopping bag</span>
                                                </a>
                                                <button class="btn btn-checkout" type="button" title="Check Out">
                                                    <span>Checkout</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>

                        </div>

                        <div class="nav-mind">   

                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    <div class="categori-search  ">
                                    <select data-placeholder="All Categories" class="categori-search-option">
                                    <option value="">All Categories</option>
                                    <?php           
                                    include 'config/connection.php';
                                    $sql = "SELECT category_id, category_name, parent FROM category ";
                                    $query = $pdo->prepare($sql);
                                    $query->execute();
                                    $row = $query->fetchAll(PDO::FETCH_ASSOC);       
                                    foreach ($row as $cat_row) { ?>
                                    <option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['category_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>
                                    <div class="form-search">
                                        <form>
                                            <div class="box-group">
                                                <input type="text" class="form-control" placeholder="i'm Searching for...">
                                                <button class="btn btn-search" type="button"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>
            </div><!-- header-content -->

            <!-- header-nav -->
            <div class="header-nav mid-header">
                <div class="container">

                    <div class="box-header-nav">

                        <!-- btn categori mobile -->
                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

                        <!-- btn menu mobile -->
                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

                        <!--categori  -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <ul class="ui-categori">
                                     <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT category_id, category_name, parent, sort , picture FROM category WHERE parent='0' ORDER BY sort ASC LIMIT 11";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      

          foreach ($row as $rs) { 
            $category_id=$rs['category_id'];
            ?>

                                    <li class="parent">
                                        <a href="category?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $category_id ?>">
                                        <span class="icon"> 
                                            <?php if (empty($rs['picture'])) {?>
                                                 <img src="images/icon/index1/nav-cat9-hover.png" alt="nav-cat">
                                           <?php }else{ ?>
                                            <img src="admin/<?php echo $rs['picture']; ?>" alt="nav-cat">
                                        <?php } ?>
                                        </span>
                                            <?php echo $rs['category_name'] ?>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu" <?php if($category_id==3){?>  style="background-image: url(images/media/index1/bgmenu.jpg);" <?php  } ?>>
                                            <?php if($category_id==5){?>
                                                <div class="categori-img">
                                                <a href="category-sub?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $category_id ?>"><img src="images/media/index1/categori-img1.jpg" alt="categori-img"></a>
                                            </div>
                                            <?php } ?>

                                            <ul class="categori-list clearfix">
         <?php
                $sql = "SELECT category_id, category_name, parent, sort 
                        FROM category
                        WHERE parent = '".$rs['category_id']."' ORDER BY sort DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                <li class="col-sm-3">
                <strong class="title"><a href="category-sub?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $sub['category_id']; ?>"><?php echo $sub['category_name']; ?></a></strong>
                <ul>
                    <?php
                $sql = "SELECT category_id, category_name, parent
                        FROM category
                        WHERE parent = '".$sub['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $new_sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                        <li><a href="category-third-sub?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $new_sub['category_id']; ?>"><?php echo $new_sub['category_name']; ?></a></li>
                <?php } ?>
                                                    </ul>
                                                </li>
                                               <?php } ?>
                                            </ul>
                                           
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>

                                <div class="view-all-categori">
                                    <a  class="open-cate btn-view-all">All Categories</a>
                                </div>

                            </div>
                            
                        </div><!--categori  -->

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                            
                            <ul class="ui-menu">
                                <li class="parent parent-megamenu active">
                                    <a href="<?php echo $siteURL; ?>">Home</a>
                                    <span class="toggle-submenu"></span>
                                </li>
                                <!-- <li class="parent parent-submenu">
                                    <a href="Contact.html"> Fashion  </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu drop-menu">
                                        <ul >
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Sunglasses</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Sports</a></li>
                                <li class="parent parent-megamenu">
                                    <a href="#">Electronics  <span class="label-menu">New</span></a>
                                    <span class="toggle-submenu"></span>
                                    <div class="megamenu drop-menu">
                                        <ul>
                                            <li class="col-md-3">
                                                <div class="img-categori">
                                                    <a href="#"><img alt="img" src="images/media/index1/img-categori1.jpg"></a>
                                                </div>
                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                               
                                                <div class="img-categori">
                                                    <a href="#"><img  alt="img"  src="images/media/index1/img-categori2.jpg"></a>
                                                </div>
                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                
                                                <div class="img-categori">
                                                    <a href="#"><img alt="img"  src="images/media/index1/img-categori3.jpg"></a>
                                                </div>
                                                <strong class="title"><a href="#"> <span>Kid's</span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                
                                                <div class="img-categori">
                                                    <a href="#"><img alt="img"  src="images/media/index1/img-categori4.jpg"></a>
                                                </div>
                                                <strong class="title"><a href="#"><span>Trending</span> </a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="parent parent-megamenu">
                                    <a href="Contact.html">Digital </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="megamenu drop-menu">
                                        <ul>
                                            <li class="col-md-3">
                                                
                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>

                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>

                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                
                                                <strong class="title"><a href="#"> <span>Kid's</span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>

                                                <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Clothing</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3">
                                                <div class="img-categori">
                                                    <a href="#"><img alt="img" src="images/media/index1/img-categori5.jpg"></a>
                                                </div>
                                               
                                            </li> -->
                                        <!-- </ul>
                                    </div>
                                </li>
                                <li><a href="#"> Furniture </a></li>
                                <li><a href="#"> Jewelry  </a></li>
                                <li><a href="Blog.html">Blog</a></li> -->
                            </ul>

                        </div><!-- menu -->

                        <!-- mini cart -->
                        <div class="block-minicart dropdown ">

                            <a class="dropdown-toggle" href="cart" >
                                <span class="cart-icon"></span>
                            </a>
                        </div>

                        <!-- search -->
                        <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <div class="block-content">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control" placeholder="i'm Searching for...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- search -->

                        <!--setting  -->
                        <div class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                            <div class="dropdown-menu  ">
                                <div class="switcher  switcher-language">
                                    <strong class="title">Select language</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_french.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_germany.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_spain.png">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher  switcher-currency">
                                    <strong class="title">SELECT CURRENCIES</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <i class="fa fa-eur" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-gbp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <ul class="account">
                            <?php if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { ?>

                                   <?php  }else{  ?>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#"><?php echo $_SESSION['customerid']; ?>My Account</a></li>
Success!
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Compare</a></li>
                                    <li><a href="#">Login/Register</a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div><!--setting  -->
                        
                    </div>
                </div>
            </div><!-- header-nav -->

<div class="container">
    <div align="center" id="kjsdhfkjsdf">
        <div id="error"></div>
    </div>
</div>
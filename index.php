   <?php 
include("inc/config.inc.php"); 
?>
  <?php include 'assets/header.php'; ?>
 <style type="text/css">
.container-img{
position: relative;
width: 100px;
height: 100px;
overflow: hidden;
z-index: 1;
}

.container-img img{
left: 50%;
position: absolute;
top: 50%;
-ms-transform: translate(-50%, -50%);
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
max-width: 100%;
}
 </style>
        <!-- MAIN -->
        <main class="site-main">
 

            <div class="block-section-top block-section-top1">
                <div class="container">
                    <div class="box-section-top">

                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
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
                                            <?php if (empty($rs['type'])) {?>
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
                        WHERE parent = '".$rs['category_id']."' ORDER BY sort DESC LIMIT 5";
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
                        WHERE parent = '".$sub['category_id']."' LIMIT 5";
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
                            
                        </div><!-- categori -->

                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-1">

                            <!-- slide -->
                            <div class="owl-carousel dotsData" 
                                data-nav="true" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item2" style="background-image: url(images/media/index1/slide2.jpg);" data-dot="1">
                                   
                                    <div class="description">
                                        <span class="title">NEW COLLECTION </span>
                                        <span class="subtitle">BIG SALE</span>
                                        <span class="des"> ENJOY UP TO 35% OFF</span>
                                        <a href="#" class="btn">SHOP NOW</a>
                                    </div>
                                    
                                </div>

                                <div class="item item1" style="background-image: url(images/media/index1/slide1.jpg);" data-dot="2">
                                    
                                    <div class="description">
                                        <span class="title">We’ve Take A Further </span>
                                        <span class="subtitle">20% Off <br> Accessories</span>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    
                                </div>
                                
                                <div class="item item3" style="background-image: url(images/media/index1/slide3.jpg);" data-dot="3">
                                    
                                    <div class="description">
                                        <span class="title">Spring Fashion  </span>
                                        <span class="subtitle">Fashion Colection Style 2016 </span>
                                        <a href="#" class="btn">Now In Stock</a>
                                    </div>
                                    
                                </div>
                            </div> <!-- slide -->

                        </div><!-- block slide top -->

                        <!-- banner -->
                        <div class="banner-slide">
                            <a href="http://alipata.com/sell-on-alipata" class="box-img"><img src="images/media/index1/banner-slide1.gif" alt="banner-slide"></a>
                            <a href="#" class="box-img"><img src="images/media/index1/banner-slide2.jpg" alt="banner-slide"></a>
                        </div><!-- banner -->

                    </div>
                </div>
            </div>

            <!-- block  service-->
            <div class="container ">
                <div class="block-service-opt1">
                    <div class="clearfix">
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service1.png" alt="service">
                                </span>
                                <strong class="title">Free Shipping </strong>
                                <span>On order over 50,000</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service2.png" alt="service">
                                </span>
                                <strong class="title">7-days return</strong>
                                <span>Moneyback guarantee</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service3.png" alt="service">
                                </span>
                                <strong class="title">24/7 support</strong>
                                <span>Online consultations</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service4.png" alt="service">
                                </span>
                                <strong class="title">SAFE SHOPPING </strong>
                                <span>Safe Shopping Guarantee</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!-- block  service-->

            
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        
                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="block-content tab-content">

                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="30" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>
 <?php 
          include 'config/connection.php';
          $sql = "SELECT  products.product_id, products.category_id, products.product_name, products.discount, products.ranking, products.Price  FROM products ORDER BY ranking DESC LIMIT 6";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);    
          foreach ($row as $prod) {
             $product_id=$prod['product_id'];
           ?>   
                                    <div class="product-form  product-item-opt-1 products-container ">
                                    <div class="product-item-info">
                                    <div align="center" class="product-item-photo">
                                        <a  data-role="rank" data-id="<?php echo $product_id; ?>"  id="<?php echo $product_id; ?>"  class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>">
                                         <?php
                                         include 'config/connection.php';
                                            $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id' LIMIT 1";
                                           $result = mysqli_query($conn, $sql);
                                           // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                             ?>
                                            <img alt="<?php echo $prod['product_name']; ?>" src="admin/<?php echo $row['image_path']; ?>"></a>
                                        <?php } ?>
                                        <?php 
                                            include 'config/connection.php'; 
                                            $customerid=$_SESSION['customerid'];
                                            $added="";
                                            if ($conn->query("SELECT customer_id from customer_wishlist where customer_id = '$customerid' and product_id = '$product_id'")->num_rows > 0) {
                                                $added = "styled";
                                            }
                                                         ?>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist wishlist<?php echo $product_id; ?> <?php echo $added; ?>" data-role="wishlist" data-id="<?php echo $product_id; ?>"  id="<?php echo $product_id; ?>" ><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                    <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                       <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                        <!-- <button data-toggle="modal" data-target="#view-modal"  id="modalCart" class="btn btn-sm btn-primary "><i class="fa fa-edit"></i> </button> -->
                                       <?php if ($prod['discount']!='0') {?>
                                       <span class="product-item-label label-price"><?php echo $prod['discount']; ?>% <span>off</span></span><?php } ?>
                                    </div>
                                     <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price"><?php echo "UGX"; echo number_format(
                                    $prod['Price'], 0, '.', ','); ?></span>
                                            </div>
                                    </form>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div><!-- tab 1 -->

                                <!-- tab 2 -->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="30" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>

                                        <?php 
          include 'config/connection.php';
          $sql = "SELECT products.product_id, products.category_id, products.product_name, products.discount, products.ranking, products.Price  FROM products ORDER BY RAND() DESC LIMIT 6 ";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);    
          foreach ($row as $prod) { 
           $product_id=$prod['product_id'];
           $id=$prod['product_id'];
            ?>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
                                                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                                                        $result = $conn->query($sql);
                                                        $row = $result->fetch_assoc();
                                                         
                                                         ?>
                                                    <a  data-role="rank" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>" class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="<?php echo $prod['product_name']; ?>" src="
                                                        admin/<?php echo $row['image_path'];  ?>
                                                    "></a>
                                                    <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">

                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-new">New</span> -->
                                                </form>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
<?php } ?>

                                    </div>
                                </div><!-- tab 2 -->

                                <!-- tab 3-->
                                <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="30" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>
            <?php 
            include 'config/connection.php';
            $sql = "SELECT products.product_id, products.category_id, products.product_name, products.discount, products.ranking, products.Price  FROM products ORDER BY product_id DESC LIMIT 6 ";
            $query = $pdo->prepare($sql);
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);    
            foreach ($row as $prod) { 
            $product_id=$prod['product_id'];
            ?>
                                      
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                    <?php
                                    $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="<?php echo $prod['product_name']; ?>" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                         <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <span class="product-item-label label-new">New</span>

                                                </form>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
<?php } ?>
                                    </div>
                                </div><!-- tab 3-->

                            </div>

                        </div><!-- block tab products -->

                    </div>

                    <div class="col-md-3">

                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">latest deals</div>
                            </div>
                            <div class="block-content">
                                
                                <div class="owl-carousel" 
                                    data-nav="true"
                                    data-dots="false" 
                                    data-margin="30" 
                                    data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":1},
                                    "1200":{"items":1}
                                    }'>
                                    
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/12/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of1.jpg" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                    <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$108.00</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/11/25"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of2.jpg" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                    <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">UGX79900</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item  product-item-opt-1 ">
                                        <div class="deals-of-countdown">
                                            
                                            <div class="count-down-time" data-countdown="2016/12/30"></div>
                                        </div>
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of3.jpg" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                    <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">UGX79900</span>
                                                        <span class="old-price">(-20%)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                            
                            </div>
                        </div><!-- block deals  of -->

                    </div>

                </div>
            </div>

            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
            
                <!-- block -floor -products / floor 1 :Fashion-->
                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"  src="images/media/index1/floor1.png">Fashion</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">Women </a></li>
                                        <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">Men</a></li>
                                        <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab">Kids </a></li>
                                        <li role="presentation"><a href="#floor1-7"  role="tab" data-toggle="tab">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner1-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner1-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor1.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},  
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
               <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='1'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
                 ?>

<?php   
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                <div class="tab-pane  fade" id="floor1-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor1-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane  fade" id="floor1-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div class="tab-pane  fade" id="floor1-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :Fashion-->

                <!-- block -floor -products / floor 2 :Sports-->
                <div class="block-floor-products block-floor-products-opt1 floor-products2" id="floor0-2">
                    <div class="container">
                        <div class="block-title">
                            <span class="title"><img alt="img"  src="images/media/index1/floor2.png">Sports</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor2-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor2-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor2-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor2-4"  role="tab" data-toggle="tab">Tennis            </a></li>
                                        <li role="presentation"><a href="#floor2-5"  role="tab" data-toggle="tab">Football           </a></li>
                                        <li role="presentation"><a href="#floor2-6"  role="tab" data-toggle="tab">Swimming            </a></li>
                                        <li role="presentation"><a href="#floor2-7"  role="tab" data-toggle="tab">Climbing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-1" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-3" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner2-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner2-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor2.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>

                                      <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='10'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
                 ?>
<?php   
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>

                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor2-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor2-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                <div class="tab-pane fade " id="floor2-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor2-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane fade " id="floor2-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div class="tab-pane fade " id="floor2-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :Sports-->

                <!-- block -floor -products / floor 3:electronic-->
                <div class="block-floor-products block-floor-products-opt1 floor-products3" id="floor0-3">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"  src="images/media/index1/floor3.png">electronic</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor3-1"  role="tab" data-toggle="tab">Most Viewed   </a></li>
                                        <li role="presentation"><a href="#floor3-2"  role="tab" data-toggle="tab">Television  </a></li>
                                        <li role="presentation"><a href="#floor3-3"  role="tab" data-toggle="tab">Air Conditional      <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor3-4"  role="tab" data-toggle="tab">ARM       </a></li>
                                        <li role="presentation"><a href="#floor3-5"  role="tab" data-toggle="tab">    Theater            </a></li>
                                        <li role="presentation"><a href="#floor3-6"  role="tab" data-toggle="tab">Accessories          </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-2" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-4" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner3-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner3-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor3.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor3-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
<?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='9'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
     //Retrieving the products 
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>

                                       
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor3-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor3-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='11'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
     //Retrieving the products 
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                <div class="tab-pane fade " id="floor3-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor3-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane fade " id="floor3-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :electronic-->

                <!-- block -floor -products / floor 4 :Digital-->
                <div class="block-floor-products block-floor-products-opt1 floor-products4" id="floor0-4">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"  src="images/media/index1/floor4.png">Digital</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor4-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor4-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor4-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor4-4"  role="tab" data-toggle="tab"> Mobile            </a></li>
                                        <li role="presentation"><a href="#floor4-5"  role="tab" data-toggle="tab">  Camera </a></li>
                                        <li role="presentation"><a href="#floor4-6"  role="tab" data-toggle="tab">Laptop </a></li>
                                        <li role="presentation"><a href="#floor4-7"  role="tab" data-toggle="tab">Notebook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-3" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-5" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner4-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner4-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor4.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor4-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                       <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='8'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
     //Retrieving the products 
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor4-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor4-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                <div class="tab-pane fade " id="floor4-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor4-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane fade " id="floor4-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div class="tab-pane fade " id="floor4-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 4 :Digital-->

                <!-- block -floor -products / floor 5 :furniture-->
                <div class="block-floor-products block-floor-products-opt1 floor-products5" id="floor0-5">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"  src="images/media/index1/floor5.png">furniture</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor5-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor5-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor5-3"  role="tab" data-toggle="tab">Television            <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor5-4"  role="tab" data-toggle="tab">Air Conditional          </a></li>
                                        <li role="presentation"><a href="#floor5-5"  role="tab" data-toggle="tab"> ARM</a></li>
                                        <li role="presentation"><a href="#floor5-6"  role="tab" data-toggle="tab"> Theater  </a></li>
                                        <li role="presentation"><a href="#floor5-7"  role="tab" data-toggle="tab">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-4" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-6" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner5-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner5-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor5.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor5-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                       <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='6'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
     //Retrieving the products 
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>
                                       
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor5-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor5-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 4 -->
                                <div class="tab-pane fade " id="floor5-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor5-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane fade " id="floor5-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div class="tab-pane fade " id="floor5-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris </a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 5 :furniture-->

                <!-- block -floor -products / floor 6 :jewelry-->
                <div class="block-floor-products block-floor-products-opt1 floor-products6" id="floor0-6">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title"><img alt="img"  src="images/media/index1/floor6.png">jewelry</span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor6-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor6-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                                        <li role="presentation"><a href="#floor6-3"  role="tab" data-toggle="tab">New Arrivals           <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor6-4"  role="tab" data-toggle="tab">AMobile        </a></li>
                                        <li role="presentation"><a href="#floor6-5"  role="tab" data-toggle="tab">  Camera         </a></li>
                                        <li role="presentation"><a href="#floor6-6"  role="tab" data-toggle="tab"> Laptop    </a></li>
                                        <li role="presentation"><a href="#floor6-7"  role="tab" data-toggle="tab">Notebook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-5" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="block-banner-floor">
                            
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner6-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner6-2.jpg" alt="banner"></a>
                            </div>
                            
                        </div><!-- Banner -->

                        <div class="block-content">

                            <div class="col-banner">
                                <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>
                                <a href="#" class="box-img"><img src="images/media/index1/baner-floor6.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor6-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                       <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='14'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  $new_sub=$sub['category_id'];
                   // echo $sub['category_id']; echo "<br>";
     //Retrieving the products 
          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$sub['category_id']."' LIMIT 5";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                       
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
$sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                                    <a class="product-item-img" href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><img alt="product name" src="admin/<?php echo $row['image_path']; ?>"></a>
                                                     <form method="POST" id="orders" class="product-form">
                                        <select hidden="" name="product_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                   <input name="product_id" type="hidden" value="<?php echo $prod["product_id"]; ?>">
                                        <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                                </div>
                                            </form>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                            <!-- <span class="old-price">$52.00</span> -->
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php
             }
             }
             }
             ?>
                                    </div>
                                </div>

                                <!-- tab 2-->
                                <div class="tab-pane fade " id="floor6-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 -->
                                <div class="tab-pane fade " id="floor6-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4-->
                                <div class="tab-pane fade " id="floor6-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 -->
                                <div class="tab-pane fade " id="floor6-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 -->
                                <div class="tab-pane fade " id="floor6-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 -->
                                <div class="tab-pane fade " id="floor6-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                        <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                        <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                    </div>
                                                    <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">UGX79900</span>
                                                            <span class="old-price">$52.00</span>
                                                        </div>
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 5 :furniture-->

                <!-- Banner -->
                <div class="block-banner-opt1 effect-banner3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner7-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="box-img"><img src="images/media/index1/banner7-2.jpg" alt="banner"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Banner -->

            </div>

            <!-- block  showcase-->
            <div class="block-showcase block-showcase-opt1 block-brand-tabs">
                <div class="container">

                    <div class="block-title">
                        <span class="title">Top Sellers</span>
                    </div>

                    <div class="block-content" >
                        
                        <ul class="nav-brand owl-carousel"  
                            data-nav="true" 
                            data-loop="true"
                            data-dots="false" 
                            data-margin="1" 
                            data-responsive='{
                            "0":{"items":3},
                            "380":{"items":4},
                            "480":{"items":5},
                            "640":{"items":7},
                            "992":{"items":8}
                        }'>
                            <li  class="active" data-tab="brand1-1">
                                <img src="images/media/index1/brand-nav1.png" alt="img">
                            </li>
                            <li   data-tab="brand1-2">
                                <img src="images/media/index1/brand-nav2.png" alt="img">
                            </li>
                            <li   data-tab="brand1-3">
                                <img src="images/media/index1/brand-nav3.png" alt="img">
                            </li>
                            <li   data-tab="brand1-4">
                                <img src="images/media/index1/brand-nav4.png" alt="img">
                            </li>
                            <li  data-tab="brand1-5">
                                <img src="images/media/index1/brand-nav5.png" alt="img">
                            </li>
                            <li   data-tab="brand1-6">
                                <img src="images/media/index1/brand-nav6.png" alt="img">
                            </li>
                            <li   data-tab="brand1-7">
                                <img src="images/media/index1/brand-nav7.png" alt="img">
                            </li>
                            <li   data-tab="brand1-8">
                                <img src="images/media/index1/brand-nav8.png" alt="img">
                            </li>
                            <li data-tab="brand1-9">
                                <img src="images/media/index1/brand-nav1.png" alt="img">
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active  " role="tabpanel" id="brand1-1">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " role="tabpanel" id="brand1-2">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-3">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-4">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-5">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-6">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-7">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-8">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-9">                        
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div> 

                                    <div class="col-md-8">  
                                     
                                        <div class="col-product">
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="0" 
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">UGX79900</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div><!-- block  showcase-->

            <!-- block  hot categories-->
            <div class="block-hot-categories-opt1">
                <div class="container">

                    <div class="block-title ">
                        <span class="title">Hot categories</span>
                    </div>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories1.png)">
                                        <div class="title"><span>Electronics</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Batteries & Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories2.png)">
                                        <div class="title"><span>Jewelry &  <br>Watches</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Men Watches</a></li>
                                        <li><a href="#">Wedding Rings</a></li>
                                        <li><a href="#">Earring</a></li>
                                        <li><a href="#">Necklaces</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories3.png)">
                                        <div class="title"><span>Sport &  <br>Outdoors</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Golf Supplies</a></li>
                                        <li><a href="#">Outdoor & Traveling Supplies</a></li>
                                        <li><a href="#">Camping & Hiking</a></li>
                                        <li><a href="#">Fishing</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories4.png)">
                                        <div class="title"><span>Digital</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories5.png)">
                                        <div class="title"><span>Fashion</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Batteries & Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories6.png)">
                                        <div class="title"><span>Furniture</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Batteries & Chargers </a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories7.png)">
                                        <div class="title"><span>Health & <br>Beauty</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Bath & Body</a></li>
                                        <li><a href="#">Shaving & Hair Removal</a></li>
                                        <li><a href="#">Fragrances</a></li>
                                        <li><a href="#">Salon & Spa Equipment</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/index1/hot-categories8.png)">
                                        <div class="title"><span>Toys &   <br>Hobbies</span></div>
                                        <a href="#" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System & Parts</a></li>
                                        <li><a href="#">RC Cars & Parts</a></li>
                                        <li><a href="#">Helicopters & Part</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--block  hot categories-->

        </main><!-- end MAIN -->

<?php include 'assets/footer.php'; ?>
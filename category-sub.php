<?php include 'assets/header.php'; ?>
<?php    
include 'config/connection.php';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<?php 
    if (isset($_REQUEST['FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH'])) {
    $FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=$_REQUEST['FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH'];
    switch ($FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH) {
      case 'ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY':
      ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY();
        # code...
        break;
      
      default:
      echo "the link is not activated!";
        # code...
        break;
    }
    # code...

  }else{
 ?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <?php
          // $pdo = connect();             
          include 'config/connection.php';
          $sql = "SELECT * FROM category";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { ?>

            <li class="dropdown"><a href="?NKPBJNJS=kjlkidcvro04jh&id=<?php echo $rs['category_id']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $rs['category_name'] ?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php
                $sql = "SELECT SubCatName, category_id, SubCatID
                        FROM subcat
                        WHERE category_id = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                <li><a href="?NKPBJNJS=kjlkidcvro04jh&id=<?php echo $sub['category_id']; ?>"><?php echo $sub['SubCatName']; ?></a>
                  <ul>
                   <?php
                $sql = "SELECT SubCatName, category_id, SubCatID
                        FROM subcat
                        WHERE category_id = '".$sub['SubCatID']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $new_sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                        <li><a href=""><?php echo $new_sub['SubCatName']; ?></a></li>
                <?php } ?>
                  </ul>
                </li>

                <?php } ?>

              </ul>  
            </li>

          <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="includes/logout.php">Logout</a></li> -->
      </ul>
      </div><!-- /.navbar-collapse -->
    </div>
<?php } ?>
<?php 
/*--------updating function----------------+-*/
function ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY(){
  $id=$_REQUEST['category'];
  include 'config/connection.php';
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//   $sql_query = "SELECT category.category_id, category.category_name, products.product_id, products.product_name, products.supplier_id, products.availablecolor, products.discount, products.color, products.ranking, products.Price, products.image_name,  products.image_path,
// FROM products
// JOIN category
// ON  category.category_id=products.product_id 
// WHERE products.product_id='$id'";
  //  $sql_query = "SELECT subcat.SubCatName,  subcat.SubCatID, category.category_name, category.category_id, category.status 
  //  FROM category 
  //  INNER JOIN subcat ON subcat.category_id=category.category_id 
  //  WHERE category.category_id='$id' || subcat.category_id='$id' ";
  // $fetch_query = $pdo->query($sql_query);

  ?>
		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="http://alipata.com/">Home    </a></li>
                    <?php
                    $sql = "SELECT category_name, category_id, parent FROM category WHERE category_id='".$id."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
 //echo $row['category_name']; ?>   
     <li><?php
                    // $pdo = connect();             
                    include 'config/connection.php';
                    $sql = "SELECT category_name, category_id, parent  FROM category  WHERE category_id='".$row['parent']."'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $row = $query->fetchAll(PDO::FETCH_ASSOC);       
                    foreach ($row as $rs2) { ?>
                        <a href="category?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $rs2['category_id']; ?>"><?php echo $rs2['category_name'];  ?>  </a>
                    <?php } ?>
                    </li>
                    <li class="active"><?php
                    $sql = "SELECT category_name, category_id, parent FROM category WHERE category_id='".$id."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
 echo $row['category_name']; ?>   </li>  
                    <!-- <li class="active">Machine Pro</li> -->
                </ol><!-- Block  Breadcrumb-->

                <div class="row">
                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main">

                        <!-- images categori -->
                        <div class="category-view">
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item " >
                                   <a href="#"><img src="images/media/category-images1.jpg" alt="category-images"></a>
                                </div>
                                <div class="item " >
                                    <a href="#"><img src="images/media/category-images2.jpg" alt="category-images"></a>
                                </div>
                            </div>
                        </div><!-- images categori -->

                        <!-- link categori -->
                        <ul class="category-links">
                            <li class="current-cate"><a href="">All Products</a></li>
           <?php
                $sql = "SELECT category_id, category_name
                        FROM category
                        WHERE parent = '".$id."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                            <li><a href="category-third-sub?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $sub['category_id']; ?>"><?php echo $sub['category_name'] ?></a></li>
                            <?php } ?>
                        </ul><!-- link categori -->

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>

                            <h1 class="cate-title"><?php 
                            $sql = "SELECT category_id, category_name FROM category WHERE category_id='$id'";
$result = $conn->query($sql); // output data of each row
 $row = $result->fetch_assoc();
 echo $row['category_name'];
      ?></h1>

                            <div class="modes">
                                <strong  class="label">View as:</strong>
                                <strong  class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a  href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9">Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                             
         
 <?php
          // $pdo = connect();             
      include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='$id'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { 
                   // echo $rs['category_id']; echo "<br>";


          include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE category_id='".$rs['category_id']."'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);  

          foreach ($row as $prod) { ?>
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                               <?php
                                                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
                                                        $result = $conn->query($sql);
                                                        $row = $result->fetch_assoc();
                                                         
                                                         ?>
                                                <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>" class="product-item-img"><img src="admin/<?php echo $row['image_path']; ?>" alt="<?php echo $row['product_name']; ?>"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <!-- <span class="product-item-label label-price">30% <span>off</span></span> -->
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>"><?php echo $prod['product_name']; ?></a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
                                                        <span class="old-price"><?php echo "UGX"; echo number_format(
($prod['Price']+($prod['Price']*0.25)), 0, '.', ','); ?></span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="80%">
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
                                </li>
<?php
 }
 } 
 ?>


         

                                
















                            </ol><!-- list product -->
                        </div> <!-- List Products -->

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-bottom">

                            <div class="modes">
                                <strong  class="label">View as:</strong>
                                <strong  class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a  href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Product name</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9"> Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                               
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li class="action action-next"> 
                                    <a href="#">
                                        Next <span><i aria-hidden="true" class="fa fa-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- Toolbar -->

                    </div><!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class="col-md-3 col-md-pull-9  col-sidebar">

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-categorie">
                            <div class="block-title">
                                <strong>PRODUCT TYPES</strong>
                            </div>
                            <div class="block-content">
                                <ul class="items">
                          <?php      
                          include 'config/connection.php';
                          $sql = "SELECT category_name, category_id, parent  FROM category  WHERE parent='".$id."'";
                          $query = $pdo->prepare($sql);
                          $query->execute();
                          $row = $query->fetchAll(PDO::FETCH_ASSOC);       
                          foreach ($row as $cat_col) {
                          ?>
                         
                                    <li class="parent">
                                        <a href="category-third-sub?FMfcgxwHMsSwchhKpzVNjmvvNDQmDWxH=ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY&category=<?php echo $cat_col['category_id']; ?>"><?php echo $cat_col['category_name']; ?></a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory">
                                         <?php
                $sql = "SELECT category_id, category_name, parent, sort 
                        FROM category
                        WHERE parent = '".$cat_col['category_id']."' ORDER BY sort DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub_prod) {
                    ?>
                                            <li ><a href="#"><?php echo $sub_prod['category_name']; ?></a></li>
                                               <?php } ?>
                                        </ul></li>
                              <?php } ?>       
                                </ul>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- block filter products -->
                        <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="block-title">
                                <strong>FILTER SELECTION</strong>
                            </div>
                            <div class="block-content">

                                <!-- Filter Item  categori-->
                                <div class="filter-options-item filter-options-categori">
                                    <div class="filter-options-title">Categories</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Tops <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Network & Computer <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Batteries & Chargers <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Dresses <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Knitted <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pants <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Best selling <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Headphone & Headset <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                        </ol>
                                    </div>
                                </div><!-- Filter Item  categori-->

                                <!-- filter price -->
                                <div class="filter-options-item filter-options-price">
                                    <div class="filter-options-title">Price</div>
                                    <div class="filter-options-content">
                                        <div class="slider-range">
                                            
                                            <div id="slider-range" ></div>
                                            
                                            <div class="action">
                                                <span class="price">
                                                    <span>Range:</span>
                                                    $<span id="amount-left"></span>
                                                    -
                                                    $<span id="amount-right"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$20 - $50 <span class="count">(20)</span>  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$50 - $100 <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>$100 - $250 <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                           
                                        </ol>
                                    </div>
                                </div><!-- filter price -->

                                <!-- filter brad-->
                                <div class="filter-options-item filter-options-brand">
                                    <div class="filter-options-title">BRAND</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Channelo <span class="count">(20)</span>  </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Mamypokon <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pamperson <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pradano <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>Pumano <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>AME <span class="count">(20)</span> </span>
                                                </label>
                                            </li>
                                        </ol>
                                    </div>
                                </div><!-- Filter Item -->

                                <!-- filter color-->
                                <div class="filter-options-item filter-options-color">
                                    <div class="filter-options-title">COLOR</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #fca53c;"></span>          
                                                        <span class="count">(30)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #6b5a5c;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #000000;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #3063f2;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #f9334a;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #964b00;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #faebd7;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #e84c3d;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox">
                                                    <span>
                                                        <span class="img" style="background-color: #fccacd;"></span>          
                                                        <span class="count">(20)</span>
                                                    </span>
                                                    
                                                </label>
                                            </li>
                                           
                                        </ol>
                                    </div>
                                </div><!-- Filter Item -->

                                <!-- Filter Item  size-->
                                <div class="filter-options-item filter-options-size">
                                    <div class="filter-options-title">SIZE</div>
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>L <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>32 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>36 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>37 <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            <li class="item ">
                                                <label>
                                                    <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                                </label>
                                            </li>
                                            
                                        </ol>
                                    </div>
                                </div><!-- Filter Item  size-->

                            </div>
                        </div><!-- Filter -->

                        <!-- block slide top -->
                        <div class="block-sidebar block-banner-sidebar">
                            <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item1" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                                <div class="item item2" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                                <div class="item item3" >
                                   <img src="images/media/banner-sidebar1.jpg" alt="images">
                                </div>
                            </div>
                        </div><!-- block slide top -->

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>SPECIAL PRODUCTS</strong>
                            </div>
                            <div class="block-content">
                                <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/floor5-1.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Security Camera Size Flared</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="70%" class="rating-result">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn all-products">All products <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- Block  tags-->
                        <div class="block-sidebar block-sidebar-tags">
                            <div class="block-title">
                                <strong>product tags</strong>
                            </div>
                            <div class="block-content">
                                <ul>              
                                    <li><a href="#" class="lv2">actual</a></li>
                                    <li><a href="#" class="lv1">adorable</a></li>
                                    <li><a href="#" class="lv3">amaze</a></li>
                                    <li><a href="#" class="lv5">change</a></li>
                                    <li><a href="#" class="lv2">consider</a></li>
                                    <li><a href="#" class="lv1">delivery</a></li>
                                    <li><a href="#" class="lv1">Top</a></li>
                                    <li><a href="#" class="lv4">flexib</a></li>
                                    <li><a href="#" class="lv1">phenomenon </a></li>
                                </ul>
                            </div>
                        </div><!-- Block  tags-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-sidebar-testimonials">
                            <div class="block-title">
                                <strong>Testimonials</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                    data-nav="false" 
                                    data-dots="true" 
                                    data-margin="0" 
                                    data-items='1' 
                                    data-autoplayTimeout="700" 
                                    data-autoplay="true" 
                                    data-loop="true">
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="images/media/avata.jpg" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- block slide top -->


                    </div><!-- Sidebar -->

                    
                    
                </div>
            </div>


		</main><!-- end MAIN -->
<?php } ?>
		<!-- FOOTER -->
        <?php include 'assets/footer.php'; ?> 
<?php include 'assets/header.php'; ?>         	

	
                    
<?php 
    if (isset($_REQUEST['ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY'])) {
    $ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=$_REQUEST['ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY'];
    switch ($ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY) {
      case 'uHSZXuqHIYmAhbIP06KXuAE':
      uHSZXuqHIYmAhbIP06KXuAE();
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
                 
<?php } ?>

		</main><!-- end MAIN -->
<?php  
/*--------updating function----------------+-*/
function uHSZXuqHIYmAhbIP06KXuAE(){
  $id=$_REQUEST['id'];
  include 'config/connection.php';
  // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//   $sql_query = "SELECT category.category_id, category.category_name, products.product_id, products.product_name, products.supplier_id, products.availablecolor, products.discount, products.color, products.ranking, products.Price, products.image_name,  products.image_path,
// FROM products
// JOIN category
// ON  category.category_id=products.product_id 
// WHERE products.product_id='$id'";
//    $sql_query = "SELECT *
//    FROM products 
//    WHERE product_id='$id' ";
// $fetch_query = $pdo->query($sql_query);
// $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
// while ($rows = $fetch_query->fetch()):
// echo $rows['product_id'];
  include 'config/connection.php';
          $sql = "SELECT * FROM products WHERE product_id='$id' ORDER BY product_id DESC LIMIT 10";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);    
          foreach ($row as $rows) {

  ?>
    <!-- MAIN -->
        <main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="http://alipata.com/">Home    </a></li>
                    <!-- <li> -->
                    <?php      
        include 'config/connection.php';
          $sql = "SELECT category_name, category_id, parent  FROM category  WHERE category_id='".$rows['category_id']."'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);       
          foreach ($row as $rs) {
            ?>
            <!-- <a href="#"><?php    echo $rs['category_name'];  ?> </a> -->
            <?php } ?>
          <!-- </li> -->
                    <!-- <li> -->
                        <?php
                    $sql = "SELECT category_name, category_id, parent FROM category WHERE category_id='".$rs['parent']."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        <!-- <a href=""><?php echo $row['category_name']; ?></a> -->
                    <!-- </li> -->


                         <li><?php
                    // $pdo = connect();             
                    include 'config/connection.php';
                    $sql = "SELECT category_name, category_id, parent  FROM category  WHERE category_id='".$row['parent']."'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $row = $query->fetchAll(PDO::FETCH_ASSOC);       
                    foreach ($row as $rs2) { ?>
                        <a href="#"><?php echo $rs2['category_name'];  ?>  </a>
                    <?php } ?>
            
          </li>  <li><?php
                    $sql = "SELECT category_name, category_id, parent FROM category WHERE category_id='".$rs['parent']."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        <a href=""><?php echo $row['category_name']; ?></a>
                    </li>


                    <li><a href=""><?php 
                    $sql = "SELECT category_name, category_id, parent FROM category WHERE category_id='".$rows['category_id']."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo $row['category_name'];
                     ?></a></li>
                     <li class="active">
                         <?php 
function truncateString1($string) {
if (strlen($string) > 80) {
$string = substr($string, 0, 80) . "...";
}
return $string;
}
                     echo truncateString1($rows['product_name']);
                          ?>
                     </li>
                </ol><!-- Block  Breadcrumb-->

                <div class="row">
 
   <!-- Main Content -->
                    <div class="col-md-9  col-main">

                        <div class="row">
                    
                            <div class="col-sm-6 col-md-6 col-lg-6">

                                <div class="product-media media-horizontal">

                                    <div class="image_preview_container images-large">
                                    <?php
                                    $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$id."'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    $image_path=$row['image_path'];
                                    ?>
                                        <img id="img_zoom" data-zoom-image="admin/<?php echo $image_path;  ?>" src="admin/<?php echo $row['image_path']; ?>" alt="">

                                        <button class="btn-zoom open_qv"><span>zoom</span></button>

                                    </div>
                                    
                                    <div class="product_preview images-small">

                                        <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                            <?php 
                                            $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$id."'";
                                            $result = $conn->query($sql);   
                                            while($row = $result->fetch_assoc()) {
                                             ?>
                                            <a href="#" data-image="admin/<?php echo $row['image_path']; ?>" data-zoom-image="admin/<?php echo $row['image_path']; ?>">

                                                <img src="admin/<?php echo $row['image_path']; ?>" data-large-image="admin/<?php echo $row['image_path']; ?>" alt="">

                                            </a>
                                        <?php } ?>

                                        </div><!--/ .owl-carousel-->

                                    </div><!--/ .product_preview-->

                                </div><!-- image product -->
                            </div>
                            <!-- <form method="POST" id="orders" class="product-form"> -->
                            <div class="product-item col-sm-6 col-md-6 col-lg-6"> 

                                <div class="product-info-main">

                                    <h4 class="page-tite">
                                        <?php echo $rows['product_name'];  ?>
                                    </h4>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <div class="rating-result" title="70%">
                                                <span style="width:70%">
                                                    <span><span>70</span>% of <span>100</span></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="reviews-actions">
                                            <a href="#" class="action view">Based  on 3 ratings</a>
                                            <a href="#" class="action add"><img alt="img" src="images/icon/write.png">&#160;&#160;write a review</a>
                                        </div>
                                    </div>
                                   
                                    <div class="product-info-price">
                                        <div class="price-box">
                                            <span class="price"><?php echo "UGX"; echo number_format(
$rows['Price'], 0, '.', ','); ?> </span>
<?php if ($rows['discount']!='0') {?>
                                            <span class="old-price">$52.00</span>
                                            <span class="label-sale">-30%</span>
                                        <?php } ?>
                                        </div>
                                    </div>  
                                    <div class="product-code">
                                        Item Code: #<?php  echo $rows['product_id']; ?> :  
                                    </div> 
                                    <div class="product-info-stock">
                                        <div class="stock available">
                                            <span class="label">Availability: </span><?php  echo $rows['stock_status_id']; ?> 
                                        </div>
                                    </div>
                                    <div class="product-condition">
                                        Condition: New
                                    </div>
                                   <!--  <div class="product-overview">
                                        <div class="overview-content">
                                           <?php  echo $rows['product_description']; ?> 
                                        </div>
                                    </div> -->
                                    <?php 
$result_options = $conn->query("SELECT `product_id`, `size`, `color`, `quantity` FROM product_options WHERE product_id='".$rows['product_id']."' ");
// if ($result_options->num_rows > 0) {
//                                      ?>
                                    <div class="product-add-form">
                                        <p>Available Options:</p>
                                      <form method="POST" id="orders" class="product-form">
                                            <div class="product-options-wrapper">
                                                <?php if ($result_options->num_rows > 0) { ?>
                                                <div class="swatch-opt">
                                                    <div class="swatch-attribute color" >
                                                        <span class="swatch-attribute-label">Color:</span>
                                                        <div class="swatch-attribute-options clearfix">
                                                            <div class="swatch-option color selected" style="background-color: #0c3b90 ;"></div>
                                                            <div class="swatch-option color" style="background-color: #036c5d ;"></div>
                                                            <div class="swatch-option color" style="background-color: #5f2363 ;"></div>
                                                            <div class="swatch-option color " style="background-color: #ffc000 ;"></div>
                                                            <div class="swatch-option color" style="background-color: #36a93c ;"></div>
                                                            <div class="swatch-option color" style="background-color: #ff0000 ;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <?php } ?>
                                                <div class="form-qty">
                                                    <label class="label">Qty: </label>
                                                    <div class="control">
                                                        <input name="product_quantity" type="text" class="form-control input-qty" value='1' id="qty1" name="qty1"  maxlength="12"  minlength="1">
                                                        <button class="btn-number  qtyminus" data-type="minus" data-field="qty1"><span>-</span></button>
                                                        <button class="btn-number  qtyplus" data-type="plus" data-field="qty1"><span>+</span></button>
                                                    </div>
                                                </div>
                                                <?php if ($result_options->num_rows > 0) { ?>
                                                <div class="form-configurable">
                                                    <label for="forSize" class="label">Size: </label>
                                                    <div class="control">
                                                        <select  id="forSize" class="form-control attribute-select">
                                                            <option value="1">XXXL</option>
                                                            <option value="4">X</option>
                                                            <option value="5">L</option>
                                                        </select>
                                                    </div>
                                                    <a href="#" class="size-chart">Size chart</a>
                                                </div>
                                            <?php } ?>
                                            </div>

                                            

                                            <div class="product-options-bottom clearfix">
                                                
                                                <div class="actions">
                                                    
                                                    <input name="product_id" type="hidden" value="<?php echo $rows["product_id"]; ?>">
                                                    <button type="submit"  class="btn btn-cart" data-toggle="modal" data-target="#view-modal" id="modalCart" >Add to Cart</button>
                                                    <div class="product-addto-links">

                                                        <a href="#" class="action btn-wishlist" title="Wish List">
                                                            <span>Wishlist</span>
                                                        </a>
                                                        <a href="#" class="action btn-compare" title="Compare">
                                                            <span>Compare</span>
                                                        </a>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                        </form>
                                    </div>
                                    <!-- <div class="product-addto-links-second">
                                        <a href="#" class="action action-print">Print</a>
                                        <a href="#" class="action action-friend">Send to a friend</a>
                                    </div> -->
                                    <!-- <div class="share">
                                        <img src="images/media/index1/share.png" alt="share">
                                    </div> -->
                                </div><!-- detail- product -->

                            </div><!-- Main detail -->
<!-- </form> -->
                        </div>

                        <!-- product tab info -->
                    
                        <div class="product-info-detailed ">

                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Product Details   </a></li>
                                <li role="presentation"><a href="#tags"  role="tab" data-toggle="tab">information </a></li>
                                <li role="presentation"><a href="#reviews"  role="tab" data-toggle="tab">reviews</a></li>
                                <li role="presentation"><a href="#additional"  role="tab" data-toggle="tab">Extra Tabs</a></li>
                                <li role="presentation"><a href="#tab-cust"  role="tab" data-toggle="tab">Guarantees</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="block-title">Product Details</div>
                                    <div class="block-content">
                                        <?php echo $rows['product_description']; ?>
                                   
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tags">
                                    <div class="block-title">information</div>
                                    <div class="block-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                       
                                    
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="reviews">
                                    <div class="block-title">reviews</div>
                                    <div class="block-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                       
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="additional">
                                    <div class="block-title">Extra Tabs</div>
                                    <div class="block-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                       
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab-cust">
                                    <div class="block-title">Guarantees</div>
                                    <div class="block-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also Aldus PageMaker including versions of Lorem Ipsum</p>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- product tab info -->

                        <!-- block-related product -->
                        <div class="block-related ">
                            <div class="block-title">
                                <strong class="title">RELATED products</strong>
                            </div>
                            <div class="block-content ">
                                <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                                    
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/related2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                              
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Brown Short 100% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/related2-2.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Summer T-Shirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/related2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                               
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Blue Short 50% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/related2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Brown Short 100% Cotton</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                </ol>
                            </div>
                        </div><!-- block-related product -->

                        <!-- block-Upsell Products -->
                        <div class="block-upsell ">
                            <div class="block-title">
                                <strong class="title">You might also like</strong>
                            </div>
                            <div class="block-content ">
                                <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                                    
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/Upsell2-1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Leather Swiss Watch</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/Upsell2-2.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Sport T-Shirt For Men</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/Upsell2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                               
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Fashion Leather Handbag</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/Upsell2-3.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Fashion Leather Handbag</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                </ol>
                            </div>
                        </div><!-- block-Upsell Products -->

                    </div><!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class=" col-md-3   col-sidebar">

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-categorie">
                            <div class="block-title">
                                <strong>PRODUCT TYPES</strong>
                            </div>
                            <div class="block-content">
                                <ul class="items">
                                            <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT  category_name, category_id, parent FROM category WHERE parent='".$rs2['category_id']."'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs_prod) { ?>
              
                                    <li class="parent">
                                        <a href="#"><?php echo $rs_prod['category_name']; ?></a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="subcategory"><?php
                $sql = "SELECT category_id, category_name, parent, sort 
                        FROM category
                        WHERE parent = '".$rs_prod['category_id']."' ORDER BY sort DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub_prod) {
                    ?>
                                            <li ><a href="#"><?php echo $sub_prod['category_name']; ?></a></li>
                                               <?php } ?>
                                        </ul>
                                    </li>
                             
                                <?php } ?>
                                    <!--  -->
                                </ul>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>BEST SALES</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":1},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                    <div class="item">
                                            <?php 
          // include 'config/connection.php';
          $sql = "SELECT SELECT  products.product_id, products.category_id, products.product_name, products.discount, products.ranking, products.Price 
           FROM products
            ORDER BY product_id DESC LIMIT 3";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);    
          foreach ($row as $prod) { ?>
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <?php
                                                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='".$prod['product_id']."'";
                                                        $result = $conn->query($sql);
                                                        $row_img = $result->fetch_assoc();
                                                         ?>
                                                    <a class="product-item-img" href="#"><img alt="product name" src="admin/<?php echo $row_img['image_path']; ?>"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#"><?php echo $prod['product_name']; ?></a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price"><?php echo "UGX"; echo number_format(
$prod['Price'], 0, '.', ','); ?></span>
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
                                        <?php } ?>
                                    </div>
                                    <div class="item">
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/detail/best1.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Man’s Within Plus Size Flared</a></strong>
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
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/detail/best2.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Woman Within Plus Size Flared</a></strong>
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
                                        <div class="product-item product-item-opt-2">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/detail/best3.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Plus Size Rock Star Skirt</a></strong>
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
                                    </div>
                                </div>
                            </div>
                        </div><!-- Block  bestseller products-->

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
                                   <img src="images/media/detail/banner-slide2.jpg" alt="images">
                                </div>
                                <div class="item item2" >
                                   <img src="images/media/detail/banner-slide2.jpg" alt="images">
                                </div>
                                <div class="item item3" >
                                   <img src="images/media/detail/banner-slide2.jpg" alt="images">
                                </div>
                            </div>
                        </div><!-- block slide top -->

                        <!-- Block  SALE products-->
                        <div class="block-sidebar block-sidebar-products-opt2">
                            <div class="block-title">
                                <strong>SALE PRODUCTS</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/detail/sale1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Luxury Dark Blue Coast</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
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
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a href="#" class="product-item-img"><img src="images/media/product1.jpg" alt="product name"></a>
                                                <div class="product-item-actions">
                                                    <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                    <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                    <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                                </div>
                                                <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">30% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div class="rating-result" title="70%">
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
                                </div>
                            </div>
                        </div><!-- Block  SALE products-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-sidebar-testimonials2">
                           
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
                                        <div class="img">
                                            <img src="images/icon/icon1.png" alt="icon1">
                                       </div>
                                       <strong class="title">100% Money Back Guaranteed</strong>
                                       <div class="des">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                                       </div>
                                       <a href="#" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div><!-- block slide top -->
                    </div><!-- Sidebar -->

                </div>
            </div>
<?php
}
 } ?>
		<!-- FOOTER -->
      <?php include 'assets/footer.php'; ?>
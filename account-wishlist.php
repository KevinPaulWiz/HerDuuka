<?php 
// session_start();
include 'assets/header.php';
include 'config/controller.php';
 ?>    	

		<!-- MAIN -->
		<main class="site-main">

            
            <div class="columns container">
                <!-- Block  Breadcrumb-->

                <!-- manufacturers -->

        <!-- //manufacturers -->
                <div class="page-content pb-3">
                    <div class="row ">
                        <?php echo $Error; ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
                    <div class=" col-sm-3 ">
                        <div class="bg-light " id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light border-color"><i class="fa fa-bars"></i> My Alipata Account</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-history"></i> Order History</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-home"></i> Addresses</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-heart"></i> Wishlist</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-commenting"></i> Pending Reviews</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-key"></i> Password</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope"></i> Newsletter Preferences</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out"></i> Logout</a>
      </div>
    </div>
                    </div>
                </form>
                        <div class="col-sm-9">
                            <div class="box-border pt-0 mt-0">
                                <h3 class="pt-0 mt-3">Saved Items</h3>
                                <br>
                                <?php 

$cart_box = '<ul class="cart-products-loaded">';
$total = 0;
foreach($_SESSION["products"] as $product){                 
    $product_name = $product["product_name"]; 
    $product_price = $product["Price"];
    $product_id = $product["product_id"];
    $product_quantity = $product["product_quantity"];
    $product_color = $product["product_color"];                 
    $subtotal = ($product_price * $product_quantity);
    $total = ($total + $subtotal);
 ?>
<div class="col-sm-12 p-0 m-0 " id="shopping-cart-results"> 
              <div class="card-body"  id="view_cart" >               
                <div class="alert alert-deflaut box-border rounded shadow-sm p-0 " role="alert">
                  <a type="button" class="btn btn-default active float-right m-3"  data-role="deleted"  data-code="<?php echo $product_id; ?>"  class="close no-hide  border-0 pr-3 mt-2 remove-item"data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">BUY</span>
                  </a>
                 
                  <div class="col-xs-8 p-0 m-0 pt-3 pl-3">
                    <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>">
                        <?php
                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                  <div class="float-left p-2 pr-4">
                  <img style="max-width: 100px;" class="img-fluid img-responsive p-0" src="admin/<?php echo $row['image_path'];  ?>" alt="Product">
                  </div>
                </a>
                  <div class="p-3 ">
                    <h5 class="alert-heading font-weight-bold p-0 m-0"><?php echo $product_name;  echo $product_color; ?></h5>
                            <h3 class="text-primary pt-0 mt-0"> <?php echo $currency; echo number_format(($product_price * $product_quantity), 0, '.', ','); ?></h3>
                             Discount:
                            <!-- <p>Color: Size: </p> -->
                  </div>
                  </div>
                  <div class="col-xs-4 p-0 m-0 pr-3 float-right">
                   <div class="float-right">
                    
                     <a href=""  class="h5 font-weight-medium "><i class="fa fa-trash"></i> Remove</a>
                            <!-- <a href="#" class="btn btn-danger remove-item" data-code="<?php echo $product_id; ?>"><i class="glyphicon glyphicon-trash"></i></a> -->
                   </div>     
                  </div>
                </div>
<?php } ?>

</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
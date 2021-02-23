
  <?php 
  session_start();
  if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) {  
    ?>
<!-- products --><div class="col-sm-12 pt-5 pb-2">
<?php 
include 'config/connection.php';
include("inc/config.inc.php");
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
                  <a type="button"  data-role="deleted"  data-code="<?php echo $product_id; ?>"  class="close no-hide  border-0 pr-3 mt-2 remove-item"data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </a>
                 
                  <div class="col-xs-8 p-0 m-0 pt-3 pl-3">
                    <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>">
                        <?php
                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                  <div class="float-left p-2 pr-4">
                  <img style="max-width: 100px;" class="img-fluid img-responsive box-border p-0" src="admin/<?php echo $row['image_path'];  ?>" alt="Product">
                  </div>
                </a>
                  <div class="p-3">
                    <h5 class="alert-heading font-weight-bold p-0 m-0"><?php echo $product_name;  echo $product_color; ?></h5>
                            <h5 style="color:#777;" class="cart_ref p-0 m-0 ">Seller : #123654999 <br>

                            </h5> Discount:
                            <p>Color: Size: </p>
                  </div>
                  </div>
                  <div class="col-xs-4 p-0 m-0 pr-3 float-right">
                   <div class="float-right">
                    <h3 class="text-primary"> <?php echo $currency; echo number_format(($product_price * $product_quantity), 0, '.', ','); ?></h3>
                      <span data-field="qty1<?php echo $product_id; ?>" data-type="minus" class="btn-number h4  btn p-0 m-0 h4"  ><i class="fa  fa-minus h4"></i></span>
                             <input class=" quantity text-center border-0 h4 font-weight-bold p-0" type="text" minlength="1" style="width: 30px; font: 2em !important;" maxlength="12"  data-code="<?php echo $product_id; ?>" name="qty1<?php echo $product_id; ?>" id="qty1<?php echo $product_id; ?>" value="<?php echo $product_quantity; ?>">
                            <span data-field="qty1<?php echo $product_id; ?>" data-type="plus" class="h4 btn-number btn p-0 m-0 h4" ><i class="fa  fa-plus h4"></i></span>
                            <!-- <a href="#" class="btn btn-danger remove-item" data-code="<?php echo $product_id; ?>"><i class="glyphicon glyphicon-trash"></i></a> -->
                   </div>     
                  </div>
                </div>
                
              </div> 

  </div>
<?php } ?>
<div class="row p-0 m-0 pt-1">
  <div class="col-md-6 col-lg-6 col-xs-6 p-0 m-0 float-right pt-1">
<div class="block-newletter p-0 float-right">
    <div class="block-title p-0 m-0 pt-2 pb-3 h3 text-right">Total</div>
    <div class="block-content">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" id="comment_form">
        <div class="input-group text-right p-0">
            <span class="">
               <h3 class="m-0 p-0 text-primary font-weight-bold"><?php 
      if(isset($total)) {
 echo $currency.number_format(($total), 0, '.', ',');
} ?></h3>
<p class="p-0 m-0 text-light">Note: Shipping amount is not included.</p>
            </span>
            <!-- <input type="text" class="form-control" placeholder="CODE"> -->
        </div>
              
    </form>
    </div>
</div>
  </div>
</div> 
<?php } ?>
</div>

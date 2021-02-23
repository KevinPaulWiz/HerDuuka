
<?php 
include 'assets/header.php';
include("inc/config.inc.php");
?>           	

<!-- MAIN -->
<main class="site-main">

<div class="columns container">
<!-- Block  Breadcrumb-->
        
<ol class="breadcrumb no-hide">
    <li><a href="#">Home    </a></li>
    <li class="active"> <?php echo $title; ?></li>
</ol><!-- Block  Breadcrumb-->

<div class=" ">
    <!-- <h3 class="checkout-sep">6. Order Review</h3> -->
    <div class="box-border shadow rounded p-0">
        <div class="  p-0">
          <!-- Header for Shopping -->
  <div class="col-sm-12 p-0 box-border">
    <div class="border-bottom p-0 m-0">
    <div class="col-sm-4 p-0 bg-dark text-white ">
      <div class="pl-4 pr-1  pb-0 p-4 pt-4">
         <h4 class="text-uppercase">Need Help?</h4>
      <p>If you need help, contact us and let us help you. 
        Support is availabe 24hours. </p>
        <p class="p-0 ">
          <b>+256 702 978 248,    support@alipata.com</b>
        </p>
      </div>
    </div>
  

                        <div class="container">
                            <div class="row text-center col-sm-8 mt-5">
                                <div class="col-xs-3">
                                    <div class="icon-stack icon-stack-xl  bg-gradient-primary-to-secondary text-white mb-4 mt-4" >
                                      <a href="">
                                      <!-- <div class="col-xs-3"> -->
                                      <span style="border-radius: 100%;"  class="p-4 bg-dark text-white ">
                                      <b class="h3 mb-2 ">1</b>
                                      </span>
                                      <!-- </div> -->
                                      </a>
                                    </div>
                                    <h4 class="text-uppercase pt-2">cart</h4>
                                </div>
                            <div class="col-xs-3">
                                    <div class="icon-stack icon-stack-xl  bg-gradient-primary-to-secondary text-white mb-4 mt-4" >
                                      <a href="">
                                      <!-- <div class="col-xs-3"> -->
                                      <span style="border-radius: 100%;"  class="p-4 bg-light text-dark active border  ">
                                      <b class="h3 mb-2 ">2</b>
                                      </span>
                                      <!-- </div> -->
                                      </a>
                                    </div>
                                    <h4 class="text-uppercase pt-2">information</h4>
                                </div>
                            <div class="col-xs-3">
                                    <div class="icon-stack icon-stack-xl  bg-gradient-primary-to-secondary text-white mb-4 mt-4" >
                                      <a href="">
                                      <!-- <div class="col-xs-3"> -->
                                      <span style="border-radius: 100%;"  class="p-4 bg-light text-dark active border  ">
                                      <b class="h3 mb-2 ">3</b>
                                      </span>
                                      <!-- </div> -->
                                      </a>
                                    </div>
                                    <h4 class="text-uppercase pt-2">Shipping</h4>
                                </div>
                            <div class="col-xs-3">
                                    <div class="icon-stack icon-stack-xl  bg-gradient-primary-to-secondary text-white mb-4 mt-4" >
                                      <a href="">
                                      <!-- <div class="col-sm-3"> -->
                                      <span style="border-radius: 100%;"  class="p-4 bg-light text-dark active border ">
                                      <b class="h3 mb-2 ">4</b>
                                      </span>
                                      <!-- </div> -->
                                      </a>
                                    </div>
                                    <h4 class="text-uppercase pt-2">Payment</h4>
                                </div>


                            </div>
                            </div>
                        </div>
<div class="col-sm-12 pt-5 pb-2">
  <?php if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) {  ?>
  <h2 class="">
    <span class="text-uppercase"> Your <?PHP if(isset($_SESSION["products"])){} ?> item<?php if (count($_SESSION["products"])>1) {echo "s";}else{} ?><br><b style="border-top: 2px solid #ddd;" class=" ml-1  font-weight-bold h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>

</h2>
<p>You can remove and add quantity to each in the cart.</p>
<!-- products -->
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
                      <span data-field="qty1<?php echo $product_id; ?>" data-type="minus" class="btn-number h4" ><i class="fa  fa-angle-left"></i></span>
                             <input class=" quantity text-center border-0 h4 font-weight-bold p-0" type="text" minlength="1" style="width: 30px; font: 2em !important;" maxlength="12"  data-code="<?php echo $product_id; ?>" name="qty1<?php echo $product_id; ?>" id="qty1<?php echo $product_id; ?>" value="<?php echo $product_quantity; ?>">
                            <span data-field="qty1<?php echo $product_id; ?>" data-type="plus" class="h4 btn-number"><i class="fa  fa-angle-right"></i></span>
                            <!-- <a href="#" class="btn btn-danger remove-item" data-code="<?php echo $product_id; ?>"><i class="glyphicon glyphicon-trash"></i></a> -->
                   </div>     
                  </div>
                </div>
                
              </div> 

  </div>
<?php } ?>
<div class="row p-0 m-0 pt-4">
 <div class="col-md-6 col-lg-6 col-xs-6 p-0 m-0 float-left pt-5">
<div class="block-newletter p-0 float-left">
    <div class="block-title p-0 m-0 pt-2 pb-3 h3 text-right">&nbsp;</div>
    <div class="block-content">
        <form>
        <div class="input-group text-right">
            <span class="">
               <h3 class="m-0 p-0 text-primary font-weight-bold">&nbsp;</h3>
<p class="p-0 m-0 text-light">&nbsp;</p>
            </span>
            <!-- <input type="text" class="form-control" placeholder="CODE"> -->
        </div>
        <div class="pt-4 float-right">
            <a href="index" class="btn btn-primary active" ><span class="h4 p-0"> <i class="fa fa-long-arrow-left "></i> Continue shopping</span></a>
        </div>
              
    </form>
    </div>
</div>
  </div>

  <div class="col-md-6 col-lg-6 col-xs-6 p-0 m-0 float-right pt-5">
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
        <div class="pt-4 float-right">
           <a id="post"  data-role="checkout" href="submit" class="button btn btn-default  float-right active"><h4 class="p-0 mb-3">Checkout  <i class="fa fa-long-arrow-right "></i></h4></a>
        </div>
              
    </form>
    </div>
</div>
  </div>
</div> 
<?php }else{ ?>
   <h3 class="pb-5">
    <span class="text-uppercase"> Your Cart <br><b class="p-0 ml-0 m-0  font-weight-bold h4"><img class="p-0 mb-5" src="images/media/index1/sectionheader.png" alt="logo"></b></span>
</h3>
    <section class="-ptxxxl -plxl -pbxxxl -prxl align-center center pb-5">
      <div align="center">
        
    <div id="root"><div class=""><div class="card-container shopcart-empty big-sale" data-spm-anchor-id="a2g0o.cart.0.i3.16183c00WvDsyn">
      <h1 class=""><i class="fa fa-shopping-cart border p-3 text-light bg-light" style="border-radius: 100%;"></i></h1>
      <h3>Your Shopping Cart is empty</h3><p>
        <a  href="//www.alipata.com" class="text-primary">Don't miss out on great deals! Start shopping</a> or<a clk_trigger="" st_page_id="q8tgf6ivhwwcacwd172aea852056141d5b4154d82e" ae_page_type="Shopping_Cart_Page" ae_page_area="empty_shopping_cart" ae_button_type="login" ae_object_type="button" href="//www.alipata.com/account-login" class="text-primary"> log in</a> to view products added.</p></div></div></div>
      </div>
   
   </section>
<?php } ?>
</div>

</div>
 

           
        </div>
    </div>
</div>

</div>


</main>
<!-- end MAIN -->

<?php include 'assets/footer.php'; ?>   

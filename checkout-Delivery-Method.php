
<?php 
include 'assets/header.php';
setlocale(LC_MONETARY,"en_US");
function truncate_prod($string) {
if (strlen($string) > 38) {
$string = substr($string, 0, 38) . "...";
}
return $string;
}
// include("inc/config.inc.php");

?>           	

<!-- MAIN -->
<main class="site-main">

<div class="columns container">
<!-- Block  Breadcrumb-->
        
<ol class="breadcrumb no-hide">
    <li><a href="#">Home    </a></li>
    <li class="active"> <?php echo $title; ?></li>


</ol><!-- Block  Breadcrumb-->
<?php echo $Error; ?>
<div class="row">

<div class="page-content checkout-page col-sm-9 pt-0 mt-0 shadow-md ">

    <div class=" border shadow-md  rounded col-sm-12 p-0 m-0 mt-3">
 <h4 class="checkout-sep border-bottom bg-light mt-0 pt-4"><span class="p-2 mt-3"><i class="fa fa-check-circle text-primary"></i> 1. Address Details</span> <a href="" class="float-right text-primary pr-3">Change</a></h4>
 <div class="p-4 mt-0">
    <div class="cont brdt"> <div class="color-default -fwm ft-address-name font-weight-bold"><?php echo $row_customer['fname']." ".$row_customer['lname']; ?></div><div class="color-default-800 -fs-13"><div class="-block ft-address-location"><?php echo $row_customer['address']; ?>, <?php echo $row_customer['city']; ?>, <?php echo $row_customer['region']; ?></div><div class="-block ft-address-phone">+256<?php echo $row_customer['phone']; ?></div></div></div>
 </div>
</div>
    <div class=" border shadow-md  rounded col-sm-12 p-0 m-0 mt-3">
                    <h4 class="checkout-sep border-bottom bg-light mt-0 pt-4"><span class="p-2 mt-3"><i class="fa fa-check-circle text-dark"></i> 2. Delivery Method</span></h4>
        <div class="p-4 mt-0">
      <?php if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { ?>
                    <div class="box-border">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>Checkout as a Guest or Register</h4>
                                <p>Register with us for future convenience:</p>
                                <ul>
                                    <li><label><input name="radio1" type="radio">Checkout as Guest</label></li>
                                    <li><label><input name="radio1" type="radio">Register</label></li>
                                </ul>
                                <br>
                                <h4>Register and save time!</h4>
                                <p>Register with us for future convenience:</p>
                                <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                                <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                                <button class="button">Continue</button>
                            </div>
                            <div class="col-sm-6">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
                                <h4>Login</h4>
                                <p>Already registered? Please log in below:</p>
                                <label>Email address</label>
                                <input name="email"  required="" placeholder="Email address" class="form-control input" type="text">
                                <label>Password</label>
                                <input name="password"  required="" placeholder="Password" class="form-control input" type="password">
                                <p><a href="#">Forgot your password?</a></p>
                                <button type="submit" name="login" class="button">Login</button>
                            </form>
                            </div>

                        </div>
                    </div>
                    <?php }else{

                        ?>  
<div class="cont brdt">      
     <form id="osh-opc-shipping-form" class="-validate-form" action="https://www.Alipata.ug/onepagecheckout/delivery/index/" method="post" novalidate="novalidate">
<div style="display:none">
  <input class="js-store" data-js-store="csrf.tokenValue" type="hidden"  name="YII_CSRF_TOKEN"></div>

<div id="shipping-methods" class="osh-opc-shipping-methods-form ft-shipping-methods">
 
 <div class="subt color-default -pbm -fwm -fs-14">How do you want your order delivered?</div>

<div class="list list-options -mbl"> 
  <div class="list--item list--item-options -ptxl -pbxl ">  
    <input id="UniversalShippingMatrix" class="osh-radio option" value="UniversalShippingMatrix" rel="Standard Shipping" data-address-name="" checked="checked" type="radio" name="ShippingMethodForm[shipping_method]"> <label class="-fwm" for="UniversalShippingMatrix">Standard Shipping</label> 
  <div class="range color-default-800 -fs-13 -plxxxl -prxxxl">Delivered between <span class="-fwm color-default">Tuesday 5 May</span> and <span class="-fwm color-default">Saturday 30 May</span> for <b class="color-primary"><span data-currency-iso="UGX">UGX</span> <span dir="ltr" data-price="8100"> 8,100 </span> </b></div>
<div class="p-5">
    <div id="cms" class="box-border  img-rounded">
  <div class="tip -mlxxxl -mrxxxl"><i class="osh-font-info"></i><p>*Living in Kampala Region &amp; Entebbe Area, <strong style="color: orange;">
<a href="https://www.Alipata.ug/Alipata-prime/">Alipata PRIME</a></strong> Members enjoy Free Delivery on Alipata Express Items (excluding bulky items)<br><br><b><strong style="color: red;">*Please make sure you entered your home address, not your office one, so that we can deliver your order successfully</strong></b><br><br><b><strong style="color: black;">*Items may be shipped and attempted SEPARATELY for deliveries as they become available.</strong></b>
<br><br><b style="color: blue;">* For Alipata Global items (shipped from overseas), kindly note the "International Shipping Fee" is NON-REFUNDABLE in case of returns</b>
</p>
 
 </div>
 </div>
</div>
<div class="list--item list--item-options -ptxl -pbxl ">  <input id="express" class="osh-radio option" value="express" rel="Express Shipping" data-address-name="" type="radio" name="ShippingMethodForm[shipping_method]">
 <label class="-fwm" for="express">Express Shipping</label>
  <div class="range color-default-800 -fs-13 -plxxxl -prxxxl">Delivered between <span class="-fwm color-default">Wednesday 6 May</span> and <span class="-fwm color-default">Thursday 7 May</span> for <b class="color-primary"><span data-currency-iso="UGX">UGX</span> <span dir="ltr" data-price="4000"><?php echo $shipping_cost; ?></span> </b></div><div id="cms"></div>  <div class="cart-rules js-cart-rules -hidden ft-price-cart-rules"></div> 
</div>

  <!-- <div class="cart-rules js-cart-rules -hidden ft-price-cart-rules"></div> -->
   </div>
  </div>

<div class="-rad sdgrid brda -mtl -mbl p-4">
 
 <div class="box-border p-3 font-weight-bold rounded-top  m-0">Shipment Details</div>

<div class="-mas -ptxs -pll -prl box-border rounded-bottom">
  <div class="shipment-box sdrow -fs-13 -ptm color-default-800">
  <?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
    $total = 0;
    $list_tax = '';           
    $cart_box = '';
    foreach($_SESSION["products"] as $product){
        $product_name = $product["product_name"];
        $product_quantity = $product["product_quantity"];
        $product_price = $product["Price"];
        $product_id = $product["product_id"];
        $product_color = $product["product_color"];         
        $item_price = sprintf("%01.2f",($product_price * $product_quantity));       
        ?>
 <div class="-fwm -pbl">Shipment 1 of <?php echo count($_SESSION["products"]); ?></div>
 <div><span class="-mrxl"></span><?php echo $product['product_name']; ?></div>
<?php 

        $subtotal = ($product_price * $product_quantity);
        $total = ($total + $subtotal);
}
 ?>

<div class="range -default -fs-14 -ptl -pbm" data-default-delivery-label="Delivered between &amp;lt;span class=&amp;quot;-fwm color-default&amp;quot;&amp;gt;Tuesday 5 May&amp;lt;/span&amp;gt; and &amp;lt;span class=&amp;quot;-fwm color-default&amp;quot;&amp;gt;Saturday 9 May&amp;lt;/span&amp;gt;">Delivered between <span class="-fwm color-default">Tuesday 5 May</span> and <span class="-fwm
  color-default">Saturday 9 May</span></div>

<div class="shipment-info -pbm"> <span class="shop-first-logo -mtl -block"><span class="osh-icon -Alipata-express shop_express--logo"></span> <i class="osh-font-question -fs-13"></i> </span>
  <div class="shop-first-cms bg-default-200 -fs-13 -pal -mtm -hidden">

</div>
  </div>
</div>

<div class="shipment-box sdrow -fs-13 -ptm color-default-800">
 <div class="-fwm -pbl">Shipment 2 of 2</div>
 <div><span class="-mrxl">1x</span>Smart Band Heart Rate Monitor Sleep Tracker Blood Pressure
 Bracelet Fitness Smart Watch Smartband For IOS Android (Blue)</div>

<div class="range -fs-14 -ptl -pbm" data-default-delivery-label="Delivered between &amp;lt;span class=&amp;quot;-fwm color-default&amp;quot;&amp;gt;Tuesday 26 May&amp;lt;/span&amp;gt; and &amp;lt;span class=&amp;quot;-fwm color-default&amp;quot;&amp;gt;Saturday 30 May&amp;lt;/span&amp;gt;">Delivered between <span class="-fwm color-default">Tuesday 26 May</span> and <span class="-fwm color-default">
Saturday 30 May</span></div>

<div class="shipment-info -pbm">  <span class="shop-global-logo -mtl -block"><span class="osh-icon -Alipata-global shop_global--logo"></span> <i class="osh-font-question -fs-13"></i> </span>
  <div class="shop-global-cms bg-default-200 -fs-13 -pal -mtm -hidden">This item is <b>shipped from abroad</b>: 
<ul>
<li>Prepayment by Mobile Money</li>
<li>Full refund if you do not get your product delivered</li>
</ul> </div>
 </div>
</div>
 </div>
</div>



          <?php 

    }   
    include("inc/config.inc.php");
    $shipping_cost= ($shipping_cost*count($_SESSION["products"]));
    $grand_total = $total + ($shipping_cost);
    foreach($taxes as $key => $value){
            $tax_amount = round($total * ($value / 100));
            $tax_item[$key] = $tax_amount;
            $grand_total = $grand_total + $tax_amount; 
    }   
    foreach($tax_item as $key => $value){
        $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
    }   
    $cart_box .= "<span>$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</span>";   
    ?>
            <div class="p-3"> 
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left">Subtotal</span> 
                    <span class="price_col-value float-right">
                        <!-- <span data-currency-iso="UGX">UGX</span> -->
                         <span dir="ltr" data-price="54348"> <?php echo $currency; ?><?php echo number_format(
$total, 0, '.', ',');; ?></span>  
                     </span>
                </div> <br>  
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left">Shipping amount</span> 
                    <span class="price_col-value float-right font-weight-bold">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($shipping_cost, 0, '.', ','); ?></span>  
                     </span>
                    
                </div> <br>  
               
                <div class="ft-subtotal color-default -pbm price_row border-top mt-3 pt-3 pb-3 font-weight-bold">
                    <span class="price_col-desc float-left"> Total</span> 
                    <span class="price_col-value float-right text-primary h4 p-0 m-0">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($grand_total, 0, '.', ','); ?></span>  
                     </span>
                </div> <br>
            </div> 
        </section>

<div align="center" class="hint -fs-13 color-default-700 -align-center -ptxl">
  <p>
You will be able to add a voucher in the next step
</p>
<button id="osh-opc-btn-save" class="btn btn-primary col-sm-12 mb-3">  Proceed to next step   </button></div>
</div>
</form> </div>

   
   </div>

   
   </div>

<?php } ?>
<!-- <div class=" "> -->
 <h4 class="checkout-sep border-bottom bg-light col-sm-12 p-0 m-0  p-3 mt-3 border shadow-md  rounded "><i class="fa fa-check-circle text-dark"></i><span class="p-2 mt-3">3. Payment Method</span></h4>

    </div>



  <aside class="page-content checkout-page  col-sm-3 border shadow-none p-2 mb-5 bg-light rounded">
  <div class="st -mbl text-uppercase h4 border-bottom">Order Summary</div>

  <section class="bg-white color-default -pbxl -rad -shad -ofy-a">
    <div class="hdr -plm -prm -ptl -pbl -flex -vh-center p-3 font-weight-bold">
        <span class="text-uppercase -pan -mrxxs">Your Order</span> 
        <span class="">(<?PHP if(isset($_SESSION["products"])){echo count($_SESSION["products"]); } ?> item<?php if (count($_SESSION["products"])>1) {echo "s";}else{} ?>)</span>
    </div>
      <?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
    $total = 0;
    $list_tax = '';           
    $cart_box = '';
    foreach($_SESSION["products"] as $product){
        $product_name = $product["product_name"];
        $product_quantity = $product["product_quantity"];
        $product_price = $product["Price"];
        $product_id = $product["product_id"];
        $product_color = $product["product_color"];         
        $item_price = sprintf("%01.2f",($product_price * $product_quantity));       
        ?>
        <div class="sum brdt -fs-13 -scroll-format p-3">
            <div class="prod_sum brdb -pts -pbs -plm -prm border-bottom">
                <div class="col-s -mts">
                     <?php
                     include 'config/connection.ph';
                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>

                    <img width="80" height="80" data-toggle="tooltip" ata-placement="top" class="img-responsive img-fluid float-left pr-2" src="admin/<?php echo $row['image_path'];  ?>" data-src="" alt="<?php echo $product_name; ?>" title="<?php echo $product_name; ?>" data-placeholder="">
                </div>
            <div class="col-l -mts ml-2">
                <span class="-ellipsis-2"><?php echo truncate_prod($product_name); ?> </span> <br> <span class="-mts text-primary">
                    <!-- <span data-currency-iso="UGX">UGX</span>  -->
                <span dir="ltr" data-price="34948">
                  <?php echo $currency; echo number_format(($product_price * $product_quantity), 0, '.', ','); ?> </span> </span>
                <div class="-mts"><span class="color-default-800">Qty:</span>&nbsp;<?php echo $product_quantity;  ?>
                </div>
            </div>
            </div> 
            </div>
             <?php 

        $subtotal = ($product_price * $product_quantity);
        $total = ($total + $subtotal);
    }   
    include("inc/config.inc.php");
    $shipping_cost= ($shipping_cost*count($_SESSION["products"]));
    $grand_total = $total + ($shipping_cost);
    foreach($taxes as $key => $value){
            $tax_amount = round($total * ($value / 100));
            $tax_item[$key] = $tax_amount;
            $grand_total = $grand_total + $tax_amount; 
    }   
    foreach($tax_item as $key => $value){
        $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
    }   
    $cart_box .= "<span>$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</span>";   
    ?>
            <div class="p-3"> 
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left">Subtotal</span> 
                    <span class="price_col-value float-right">
                        <!-- <span data-currency-iso="UGX">UGX</span> -->
                         <span dir="ltr" data-price="54348"> <?php echo number_format(
$total, 0, '.', ',');; ?></span>  
                     </span>
                </div> <br>  
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left">Shipping amount</span> 
                    <span class="price_col-value float-right font-weight-bold">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($shipping_cost, 0, '.', ','); ?></span>  
                     </span>
                    
                </div> <br>  
               
                <div class="ft-subtotal color-default -pbm price_row border-top mt-3 pt-3 pb-3 font-weight-bold">
                    <span class="price_col-desc float-left"> Total</span> 
                    <span class="price_col-value float-right text-primary">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($grand_total, 0, '.', ','); ?></span>  
                     </span>
                </div> <br>
            </div> 
        </section>

    <?php } ?>
            <div align="center" class="-align-center p-2 -mtxxl"><a class="btn btn-default font-weight-bold color-primary" href="https://www.Alipata.ug/cart/">Modify Cart</a>
                </div></aside> 
            </div> 
            </div> 
            </div>

</main><!-- end MAIN -->
<?php include 'assets/footer.php'; ?>   
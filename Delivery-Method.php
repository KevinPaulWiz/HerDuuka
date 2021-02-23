
<?php 
include 'assets/header.php';
include 'config/controller.php';
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
<?php //echo $Error; ?>
<div class="row">

<div class="page-content col-sm-9 pt-0 mt-0 shadow-md">
  <div class="box-border shadow rounded p-0">
        <div class="  p-0">
          <!-- Header for Shopping -->
  <div class="col-sm-12 p-0 box-border">
    <div class="border-bottom p-0 m-0 col-sm-12 ">
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
  

                        <div class="border-bottom bg-dark">
                            <div class="row text-center col-sm-8 mt-5 ">
                                <div class="col-xs-3">
                                    <div class="icon-stack icon-stack-xl  bg-gradient-primary-to-secondary text-white mb-4 mt-4" >
                                      <a href="">
                                      <!-- <div class="col-xs-3"> -->
                                      <span style="border-radius: 100%;"  class="p-4 bg-dark text-white border">
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
                                      <span style="border-radius: 100%;"  class="p-4 bg-dark text-white active border  ">
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
                                      <span style="border-radius: 100%;"  class="p-4  bg-dark text-white  active border  ">
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
<div class="col-sm-12 pt-3 pb-2 page-content checkout-page">
 
  <div class="p-4 mt-0">
       <h2 class="">
    <span class="text-uppercase"> Shipment Method<br><b style="border-top: 2px solid #ddd;" class=" ml-1  font-weight-bold h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>

</h2>

<div class="p-4 mt-0">
  
<div class="cont brdt">      
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-horizontal row" id="shipping_method">


<div id="shipping-methods" class="osh-opc-shipping-methods-form ft-shipping-methods">
 

<div class="row text-light"> 
 <div class="subt color-default -pbm -fwm -fs-14"><p>Choose one of the shipping methods below</p></div>
  <div class="col-sm-12 box-border img-rounded border shadow-sm p-0">  
    <div class=" col-sm-11 p-2">
       
<?php 
$custom_Days='5';# No.of days 
$special_Days='3';# No.of days 
$current_date=date('Y-m-d');
$subtracted_timestamp = strtotime('+'.$custom_Days.' days', time());
$Custom_date = date('Y-m-d', $subtracted_timestamp);
// 7 days
$day= date('l', strtotime($Custom_date));
$month= date('M', strtotime($Custom_date));
$no_days= date('d', strtotime($Custom_date));
// 2 days
$special_subtracted_timestamp = strtotime('+'.$special_Days.' days', time());
$special_date = date('Y-m-d', $special_subtracted_timestamp);
$special_day= date('l', strtotime($special_date));
$special_month= date('M', strtotime($special_date));
$special_no_days= date('d', strtotime($special_date));
// current
$current_day= date('l', strtotime($current_date));
$current_month= date('M', strtotime($current_date));
$current_no_days= date('d', strtotime($current_date));

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
 <input id="shipping_method" onclick="change(4)" class="osh-radio option h3" value="<?php echo $current_day." ".$current_no_days." ".$current_month; ?> - <?php echo $day." ".$no_days." ".$month; ?>" rel="Standard Shipping" data-address-name="" checked="checked" type="radio" name="shipping_method"> 
        <label class="-fwm" for="UniversalShippingMatrix">Standard Shipping - </label>
  Delivered between <span class="-fwm color-default"><?php echo $current_day." ".$current_no_days." ".$current_month; ?></span> and <span class="-fwm color-default"></span> for <b class="color-primary"><span data-currency-iso="UGX">UGX</span> <span dir="ltr" data-price="<?php  echo number_format($shipping_cost, 0, '.', ',');  ?>"><?php  echo number_format($shipping_cost, 0, '.', ','); ?></span> </b>
    </div>
    </div>
   <div class="col-sm-12 box-border img-rounded border shadow-sm p-0">  
    <div class=" col-sm-11 p-2">
        <input id="shipping_method" onclick="change(2)"  class="osh-radio option" value="<?php echo $current_day." ".$current_no_days." ".$current_month; ?> - <?php echo $special_day." ".$special_no_days." ".$special_month; ?>" rel="Express Shipping" data-address-name="" type="radio" name="shipping_method">
 <label class="-fwm" for="express">Special Shipping - </label>
  Delivered between <span class="-fwm color-default"><?php echo $current_day." ".$current_no_days." ".$current_month; ?></span> and <span class="-fwm color-default"><?php echo $special_day." ".$special_no_days." ".$special_month; ?></span> for <b class="color-primary"><span data-currency-iso="UGX">UGX</span> <span dir="ltr" data-price="4000"><?php  echo number_format(($shipping_cost), 0, '.', ','); ?></span> </b>
<!--   <input type="radio" name="ad" value="2&#x00A;Qty">
          <input type="radio" name="ad"  value="4&#x00A;Qty"> -->
    </div>
    </div>
    <div>
        <p>&nbsp;</p>
<div class="p-5">
    <div id="cms" class="box-border  img-rounded">
  <div class="tip -mlxxxl -mrxxxl"><i class="osh-font-info"></i><p>*Living in Kampala Region &amp; Entebbe Area, <strong style="color: orange;">
<a href="https://www.Alipata.ug/Alipata-prime/">Alipata PRIME</a></strong> Members enjoy Free Delivery on Alipata Express Items (excluding bulky items)<br><br><b><strong style="color: red;">*Please make sure you entered your home address, not your office one, so that we can deliver your order successfully</strong></b><br><br><b><strong style="color: black;">*Items may be shipped and attempted SEPARATELY for deliveries as they become available.</strong></b>
<br><br><b style="color: blue;">* For Alipata Global items (shipped from overseas), kindly note the "International Shipping Fee" is NON-REFUNDABLE in case of returns</b>
</p>
 
 </div>
 </div>
</div>

  <!-- <div class="cart-rules js-cart-rules -hidden ft-price-cart-rules"></div> -->
   </div>
  </div>

<div class="-rad sdgrid brda -mtl -mbl p-4">
 
 <div class="box-border p-3 font-weight-bold rounded-top  m-0">Shipment Details</div>

<div class="-mas -ptxs -pll -prl box-border rounded-bottom">
  <div class="shipment-box sdrow -fs-13 -ptm color-default-800 text-light">
  <?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
    ?>
 <div class="-fwm -pbl">Shipment 1 of <?php echo count($_SESSION["products"]); ?></div>
    <?php
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

 <div class="p-1">
    <b>1x </b><span class="-mrxl"> <?php echo $product['product_name']; ?></span>
</div>
<?php 

        $subtotal = ($product_price * $product_quantity);
        $total = ($total + $subtotal);
}
 ?>
 <ul class="link-list">
            <li  class="list-group-item border-0 p-0">
            <a data-toggle="collapse" href="#signup-faq-2" class="text-primary">
                More info <i class="fa  fa-question-circle"></i> 
                           </a>
            <div class="collapse img-rounded box-border bg-light p-4" id="signup-faq-2">
                
            <div class="shop-first-cms bg-default-200 -fs-13 -pal -mtm">
<p>Alipata Special offers you delivery in:</p>
<table id="customers" class="table table-striped table-bordered dt-responsive ">
 <tbody>
    <tr class="bg-primary">
    <th>Kampala</th>
    <th>Greater Kampala</th>
    <th>Upcountry</th>
  </tr>
<tr>
    <td>1 to 2 business days</td>
<td>2 to 3 business days </td>
<td>4 to 5 business days</td></tr>
</tbody></table></div>          
                 </div>
        </li>
    </ul>
</div>

<!-- <div class="shipment-box sdrow -fs-13 -ptm color-default-800">
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
</div> -->
 </div>
</div>


<div class="row">
       <div class="col-xs-6">
<div class="p-3">
    <h2 class="p-0 m-0">
        <span class="text-uppercase"> Shipping to<br><b style="border-top: 2px solid #ddd;" class=" ml-1  font-weight-bold h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
        </h2>
        <div class=" ">
          <?php 
        $sql = "SELECT * FROM addresses WHERE default_address='1' AND customerid='".$_SESSION['customerid']."'";
        $result = $conn->query($sql); 
        $row_address = $result->fetch_assoc();

           ?>
         <h4 class="text-uppercase"><?php echo $row_address['fname']." ".$row_address['lname']; ?></h4>
      <p class="font-weight-bold text-light"><?php echo $row_address['address']; ?><br> <?php echo $row_address['address2']; ?>, <?php echo $row_address['region']; ?> </p>
        <p class="p-0 ">
          <b>Phone: <span class="text-light"><?php echo $row_address['phone']; ?></span></b>
        </p>
        <p class="p-0 ">

          <b>ETD: <span class="text-light">1- <span id="totalValue">7</span> Days</span></b>
        </p>
        <p class="p-0 ">
          <span class="text-light">Is this Wrong? </span><a  href="#custom-modal" data-target="#customModal" data-toggle="modal"  class="text-primary active"><b>Change here </b></a>
        </p>
      </div>
</div>
       </div>
    <div class="col-xs-6">
        
           <?php }   
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
    <h2 class="p-0 m-0">
        <span class="text-uppercase"> Estimation<br><b style="border-top: 2px solid #ddd;" class=" ml-1  font-weight-bold h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
        </h2>
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2 font-weight-bold">
                    <span class="price_col-desc float-left font-weight-bold text-light">Subtotal</span> 
                    <span class="price_col-value float-right">
                        <!-- <span data-currency-iso="UGX">UGX</span> -->
                         <span dir="ltr" data-price="54348"> <?php echo $currency; ?><?php echo number_format(
$total, 0, '.', ',');; ?></span>  
                     </span>
                </div> <br>
                 <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left font-weight-bold text-light">Shipping amount</span> 
                    <span class="price_col-value float-right font-weight-bold ">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($shipping_cost, 0, '.', ','); ?></span>  
                     </span>
                    
                </div> <br> 
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2 font-weight-bold">
                    <span class="price_col-desc float-left font-weight-bold text-light">Discount</span> 
                    <span class="price_col-value float-right">
                        <!-- <span data-currency-iso="UGX">UGX</span> -->
                         <span dir="ltr" data-price="54348"> <?php echo $currency; ?><?php echo number_format(
$Discount, 0, '.', ',');; ?></span>  
                     </span>
                </div> <br> 
                <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2 font-weight-bold">
                    <span class="price_col-desc float-left font-weight-bold text-light">Tax</span> 
                    <span class="price_col-value float-right">
                        <!-- <span data-currency-iso="UGX">UGX</span> -->
                         <span dir="ltr" data-price="54348"> <?php echo $currency; ?><?php echo number_format(
$tax, 0, '.', ',');; ?></span>  
                     </span>
                </div> <br>  
                 
               
                <div class="ft-subtotal color-default -pbm price_row border-top mt-3 pt-3 pb-3 font-weight-bold text-light">
                    <span class="price_col-desc float-right h4 m-0 text-uppercase"> Total</span><br> 
                    <span class="price_col-value float-right text-primary h3 p-0 m-0 ">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($grand_total, 0, '.', ','); ?></span>  
                     </span>
                </div> <br>
                 <!-- transform to deleivery -->
           <input type="hidden" name="grand_total" id="grand_total" value="<?php echo $grand_total; ?>">
           <input type="hidden" name="ordernumber" id="ordernumber" value="<?php $orderNo=$_SESSION['order_No']; echo $orderNo; ?>">
           <input type="hidden" name="customerid" id="customerid" value="<?php echo $_SESSION['customerid']; ?>">
           <input type="hidden" name="currency" id="currency" value="<?php echo $currency; ?>">
           <input type="hidden" name="count" id="count" value="5">
            </div> 
    </div>
</div>
       
        </section>
  <div align="center" class="hint -fs-13 color-default-700 -align-center -ptxl">
  <p class="text-light">
You will be able to add a voucher in the next step
</p>
<button id="post" type="submit"  name="post" class="btn btn-default active col-sm-12 mb-3"> <span>Go to payment method   <i class="fa fa-long-arrow-right "></i></span>   </button>
</div> 
</div>

</div>

 
</div>

   
   </div>

   


    </div>
</div>   
 <!-- <h3 class="checkout-sep">6. Order Review</h3> -->
 
 
</form>

           
        </div>
    </div>




    </div>



  <aside class="  col-sm-3 border shadow-none p-2 mb-5 bg-light rounded">
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
     $shipping_cost=count($_SESSION["products"])*$shipping_cost;
    $grand_total = $total + $shipping_cost;
    foreach($taxes as $key => $value){
            $tax_amount = round($total * ($value / 100));
            $tax_item[$key] = $tax_amount;
            $grand_total = $grand_total + $tax_amount; 
    }   
    foreach($tax_item as $key => $value){
        $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
    }   
    // $shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';  
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
                    
                     <!-- <span class="price_col-value not_applicable-box -b color-primary -hidden">Not Available</span> -->
                </div> <br>  
                <div class="ft-subtotal color-default -pbm price_row border-top mt-3 pt-3 pb-3 font-weight-bold">
                    <span class="price_col-desc float-left"> Total</span> 
                    <span class="price_col-value float-right text-primary">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348"><?php echo number_format($grand_total, 0, '.', ','); ?></span>  
                     </span>
                     <!-- <span class="price_col-value not_applicable-box -b color-primary -hidden">Not Available</span> -->
                </div> <br>
            </div> 
        </section>

    <?php } ?>
            <div align="center" class="-align-center p-2 -mtxxl"><a class="btn btn-default font-weight-bold active color-primary" href="https://www.alipata.ug/cart/">Modify Cart</a>
                </div></aside> 
            </div> 
            </div> 
            </div>
          <!-- Modal -->
                                <div class="modal fade custom-modal pt-4 mt-5" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                  <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h3 class="modal-title float-left text-uppercase" id="exampleModalLabel2">your information</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" class=" box-border rounded shadow-sm bg-light" action="<?php echo htmlspecialchars($_SERVER[""]);?>" >
                    <div class="">
                        <ul>
                                            
                            <li class="row pt-3">
                                
                                <div class="col-sm-6">
                                    
                                    <label for="first_name_1" class="required">First Name</label>
                                    <input class="input form-control" name="fname" id="first_name_1" value="<?php echo $row_customer['fname']; ?>" type="text">

                                </div>

                                <div class="col-sm-6">
                                    
                                    <label for="last_name_1" class="required">Last Name</label>
                                    <input class="input form-control" value="<?php echo $row_customer['lname']; ?>"  name="lname" id="last_name_1" type="text">

                                </div>

                            </li>


                            <li class="row pt-3">

                                <div class="col-sm-6">

                                    <label for="telephone_1" class="required">Mobile Phone Number *</label>
                                    <div class="col-xs-12 p-0 m-0">
                                      <!--   <div class="col-xs-2 p-0 m-0 ">
                                    <select class="form-control p-0 bg-dark text-white" >
                                        <option>+256</option>
                                    </select>
                                    </div> -->
                                    <div class="col-xs-12 p-0 m-0">
                                    <input class="input form-control" value="<?php echo $row_customer['phone']; ?>"  name="phone" id="telephone_1" type="text">
                                    </div> 
                                    </div>
                                   

                                </div>
                                <div class="col-sm-6">

                                    <label for="telephone_1" class="required">Additional phone number (optional)</label>
                                    <div class="col-sm-12 p-0 m-0">
                                       <!--  <div class="col-sm-2 p-0 m-0">
                                    <input readonly="" value="+256"  class="input form-control" name="telephone_1" id="telephone_1" type="text">
                                    </div> -->
                                    <div class="col-sm-12 p-0 m-0">
                                    <input class="input form-control"  value="<?php echo $row_customer['addtionalphone']; ?>"  name="phone2" id="telephone_1" type="text">
                                    </div> 
                                    </div>
                                   

                                </div>

                            </li>


                            <li class="row pt-3">
                                <div class="col-sm-12">
                                    <label for="address_1" class="required">Address</label> <small>(Street Name / Building / Apartment No. / Floor)</small>
                                    <textarea class="input form-control" placeholder="Street Name / Building / Apartment No. / Floor" name="address_1" id="address_1" type="text">  <?php echo $row_customer['address']; ?> </textarea>
                                </div>
                            </li>


                            <li class="row pt-3">
                                <div class="col-sm-12">
                                    <label for="address_1" class="required">Additional Info </label> (<small>Landmark / Directions / More Details</small>)
                                    <textarea placeholder="Landmark / Directions / More Details"  class="input form-control"  name="address_2" id="address_1" type="text" maxlength="255"><?php echo $row_customer['address2']; ?> </textarea>
                                </div>
                            </li>

                            <li class="row pt-3">

                                <div class="col-sm-6">
                                    
                                    <label for="city_1" class="required">Region *</label>
                                    <select required="1" data-msg-required="Required field" class="osh-input form-control" name="Region" id="ShippingAddressForm_fk_customer_address_region">
                                        <option value="" selected="selected">Please select...</option>
                                        <option  <?php if ($row_customer['region']=="Eastern Region") { echo "selected"; } ?>  value="Eastern Region">Eastern Region</option>
                                        <option  <?php if ($row_customer['region']=="Entebbe Area") { echo "selected"; } ?>  value="Entebbe Area">Entebbe Area</option>
                                        <option  <?php if ($row_customer['region']=="Kampala Region") { echo "selected"; } ?>  value="Kampala Region">Kampala Region</option>
                                        <option  <?php if ($row_customer['region']=="Northern Region") { echo "selected"; } ?>  value="Northern Region">Northern Region</option>
                                        <option  <?php if ($row_customer['region']=="Rest Of Central Region") { echo "selected"; } ?>  value="Rest Of Central Region">Rest Of Central Region</option>
                                        <option  <?php if ($row_customer['region']=="Limited Liability") { echo "selected"; } ?>  value="Western Region">Western Region</option>
                                        </select>

                                </div>

                                <div class="col-sm-6">

                                    <label class="required">District/Town/Area *</label>

                                    <div class="custom_select">

                                        <select class="input form-control" name="State1">
                                            <option   <?php if ($row_customer['region']=="Eastern Region") { echo "selected"; } ?>  value="Alabama">Alabama</option>
                                            <option   <?php if ($row_customer['region']=="Eastern Region") { echo "selected"; } ?>  value="Illinois">Illinois</option>
                                            <option   <?php if ($row_customer['region']=="Eastern Region") { echo "selected"; } ?>  value="Kansas">Kansas</option>
                                        </select>
                                         </div>
                                </div>
                          <!--   <div class=" pt-4">
                            <button type="submit" name="update_customer_details" class="button  btn btn-danger col-sm-12 form-group">Continue</button>
                            </div> -->
                            <div class="modal-footer col-sm-12 border-0">
                                        <button type="button" class="btn btn-default rounded" data-dismiss="modal">Close</button>
                                        <button type="submit" name="update_customer_details" class="btn btn-default rounded active">Save changes</button>
                                      </div>
                            </li>

                        </ul>
                        
                    </div>
                </form>
    
    </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                                                        


</main><!-- end MAIN -->
<?php include 'assets/footer.php'; ?>   
 <script>
    // $(document).ready(function(){
          // document.getElementById("totalValue").innerHTML= 1+value;
          function change(value){
          document.getElementById("count").value= 1+value;
          document.getElementById("totalValue").innerHTML= 1+value;
          }

            // });
          
       </script>

       <script type="text/javascript">
  $(document).ready(function(){
   $('#shipping_method').on('submit', function(event){

  event.preventDefault();
  // if( $('#product_id').val() != '')
  // {
    var button_content = $(this).find('button[type=submit]');
    button_content.html('Processing...');
    // button_content.html('Submitted');

   var form_data = $(this).serialize();
   $.ajax({
    url:"Delivery-Method-manage.php",
    method:"POST",
    data:form_data,
    success:function(data, html)
    {
     // alert('True'); 
      // $("#cart-container").html(data.products);
      // data 
      // button_content.html('Deposited <i class="fa fa-check"><i>'); 
      button_content.html("Go to payment method   <i class='fa fa-long-arrow-right '></i>"); 
      // alert(data);
        location.href='payment-method'; 
     // $('#comment_form')[0].reset();
     // load_unseen_notification(); 
     // $('#deposit_reciept').modal('show'); 
    }

   });
  // }
  // else
  // {
  //  alert("All Fields are Required");
  // }
 });
 });
</script>
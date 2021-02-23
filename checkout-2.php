
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
    <div class=" border shadow-md  rounded">
                    <h4 class="checkout-sep border-bottom bg-light mt-0 pt-4"><span class="p-2 mt-3"><i class="fa fa-check-circle text-dark"></i> 1. Address Details</span></h4>
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
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

                                <div class="col-sm-12">
                                    <label for="email_address_1" class="required">Email Address</label>
                                    <input class="input form-control"  value="<?php echo $row_customer['email']; ?>"  name="email" id="email_address_1" type="text">
                                </div>

                            </li>

                            <li class="row pt-3">

                                <div class="col-sm-6">

                                    <label for="telephone_1" class="required">Mobile Phone Number *</label>
                                    <div class="col-sm-12 p-0 m-0">
                                        <div class="col-sm-2 p-0 m-0 ">
                                    <input readonly="" value="+256" class="input form-control" name="telephone_1" id="telephone_1" type="text">
                                    </div>
                                    <div class="col-sm-10 p-0 m-0">
                                    <input class="input form-control" value="<?php echo $row_customer['phone']; ?>"  name="phone" id="telephone_1" type="text">
                                    </div> 
                                    </div>
                                   

                                </div>
                                <div class="col-sm-6">

                                    <label for="telephone_1" class="required">Additional phone number (optional)</label>
                                    <div class="col-sm-12 p-0 m-0">
                                        <div class="col-sm-2 p-0 m-0">
                                    <input readonly="" value="+256"  class="input form-control" name="telephone_1" id="telephone_1" type="text">
                                    </div>
                                    <div class="col-sm-10 p-0 m-0">
                                    <input class="input form-control" name="phone2" id="telephone_1" type="text">
                                    </div> 
                                    </div>
                                   

                                </div>

                            </li>


                            <li class="row pt-3">
                                <div class="col-sm-12">
                                    <label for="address_1" class="required">Address</label> <small>(Street Name / Building / Apartment No. / Floor)</small>
                                    <textarea class="input form-control" placeholder="Street Name / Building / Apartment No. / Floor" name="address_1" id="address_1" type="text"></textarea>
                                </div>
                            </li>


                            <li class="row pt-3">
                                <div class="col-sm-12">
                                    <label for="address_1" class="required">Additional Info </label> (<small>Landmark / Directions / More Details</small>)
                                    <textarea placeholder="Landmark / Directions / More Details"  class="input form-control"  name="address_2" id="address_1" type="text" maxlength="255"></textarea>
                                </div>
                            </li>

                            <li class="row pt-3">

                                <div class="col-sm-6">
                                    
                                    <label for="city_1" class="required">Region *</label>
                                    <select required="1" data-msg-required="Required field" class="osh-input form-control" name="Region" id="ShippingAddressForm_fk_customer_address_region">
                                        <option value="" selected="selected">Please select...</option>
                                        <option value="Eastern Region">Eastern Region</option>
                                        <option value="Entebbe Area">Entebbe Area</option>
                                        <option value="Kampala Region">Kampala Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="Rest Of Central Region">Rest Of Central Region</option>
                                        <option value="Western Region">Western Region</option>
                                        </select>

                                </div>

                                <div class="col-sm-6">

                                    <label class="required">District/Town/Area *</label>

                                    <div class="custom_select">

                                        <select class="input form-control" name="State1">

                                            <option value="Alabama">Alabama</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Kansas">Kansas</option>

                                        </select>

                                    </div>

                                </div>
<div class="col-sm-12 pt-4">
                        <button type="submit" name="update_customer_details" class="button  btn btn-danger col-sm-12 form-group">Continue</button>
                        </div>
                            </li>

                        </ul>
                        
                    </div>
                </form>
                    <?php } ?>
    <!-- <h3 class="checkout-sep">6. Order Review</h3> -->
    
    </div>
    </div>
<!-- <div class=" "> -->
 <h4 class="checkout-sep border-bottom bg-light col-sm-12 p-0 m-0  p-3 mt-3 border shadow-md  rounded "><i class="fa fa-check-circle text-dark"></i><span class="p-2 mt-3">2. Delivery Method</span></h4>

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
                <!-- <div class="ft-subtotal color-default -pbm price_row pt-2 pb-2">
                    <span class="price_col-desc float-left">International Shipping Fees</span> 
                    <span class="price_col-value float-right">
                        <span data-currency-iso="UGX">UGX</span>
                         <span dir="ltr" data-price="54348">54,348</span>  
                     </span>
                </div> <br>    -->
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
            <div align="center" class="-align-center p-2 -mtxxl"><a class="btn btn-default font-weight-bold color-primary" href="https://www.jumia.ug/cart/">Modify Cart</a>
                </div></aside> 
            </div> 
            </div> 
            </div>

</main><!-- end MAIN -->
<?php include 'assets/footer.php'; ?>   
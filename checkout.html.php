
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
<div class="col-sm-12 pt-3 pb-2 page-content checkout-page">
 
  <div class="p-4 mt-0">
       <h2 class="">
    <span class="text-uppercase"> information<br><b style="border-top: 2px solid #ddd;" class=" ml-1  font-weight-bold h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>

</h2>
      <?php if (!$_SESSION['customer_email'] && !$_SESSION['customerid'] ) { ?>
                    <div class="box-border rounded">
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
                                <!-- <button class="button">Continue</button> -->
                                <a href="account-login" class="btn btn-default button ">Continue</a>
                            </div>
                            <div class="col-sm-6">
                                <?php echo $Error; ?>
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
                    <?php }elseif (!empty($row_customer['address'])) {
                        ?>
                        <!-- Address details -->
                        <div class="mb-4">
                        <div class=" border shadow-md  rounded col-sm-12 p-0 m-0 mt-3">
                        <h4 class="checkout-sep border-bottom bg-light mt-0 pt-4"><span class="p-2 mt-3"><i class="fa fa-check-circle text-primary"></i> 2. Address Details</span> <a  href="#custom-modal" data-target="#customModal" data-toggle="modal" class="float-right text-primary pr-3">Change</a></h4>

                        <div class="p-4 mt-0">
                        <div class="cont brdt"> <div class="color-default -fwm ft-address-name font-weight-bold"><?php echo $row_customer['fname']." ".$row_customer['lname']; ?></div><div class="color-default-800 -fs-13"><div class="-block ft-address-location"><?php echo $row_customer['address']; ?>, <?php echo $row_customer['city']; ?>, <?php echo $row_customer['region']; ?></div><div class="-block ft-address-phone"><?php echo $row_customer['phone']; ?></div></div></div>
                        </div>
                        </div> 
                        &nbsp;   
                        </div>

                        <?php
                    }else{

                        ?>  

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

                                <div class="col-sm-12">
                                    <label for="email_address_1" class="required">Email Address</label>
                                    <input class="input form-control"  value="<?php echo $row_customer['email']; ?>"  name="email" id="email_address_1" type="text">
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
 <div class="col-md-6 col-lg-6 col-xs-6 float-right">
<div class="block-newletter float-right">
    <div class="block-content">
        <div class="pr-4 float-right">
           <a href="Delivery-Method" class="button btn btn-default  float-right active"><h4 class="mb-3">continue  <i class="fa fa-long-arrow-right "></i></h4></a>
        </div>
              
    </div>
</div>
  </div>
</div>
 

           
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
            <div align="center" class="-align-center p-2 -mtxxl"><a class="btn btn-default font-weight-bold color-primary" href="https://www.jumia.ug/cart/">Modify Cart</a>
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

                                <div class="col-sm-12">
                                    <label for="email_address_1" class="required">Email Address</label>
                                    <input class="input form-control"  value="<?php echo $row_customer['email']; ?>"  name="email" id="email_address_1" type="text">
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

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

<!-- <h2 class="page-heading">
    <span class="page-heading-title2"> Cart (<?PHP if(isset($_SESSION["products"])){echo count($_SESSION["products"]); } ?> item<?php if (count($_SESSION["products"])>1) {echo "s";}else{} ?>)</span>
</h2> -->

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
                                      <span style="border-radius: 100%;"  class="p-4  bg-dark text-white  active border  ">
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
                                      <span style="border-radius: 100%;"  class="p-4  bg-dark text-white  active border ">
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
  <h3 class="pb-5">
    <span class="text-uppercase"> Payment method <br><b class="p-0 ml-0 m-0  font-weight-bold h4"><img class="p-0 mb-5" src="images/media/index1/sectionheader.png" alt="logo"></b></span>
</h3>
<h4 class="">
  <div class=" mb-5  font-weight-bold h4 float-left">
    <div style="border-top: 3px solid #ff3300; max-width: 47px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  </div>
    <span class="text-uppercase"> Estimation <br></span>
</h4>
<p>You can remove and add quantity to each in the cart.</p>
<!-- products -->
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
 } ?>
<div class="col-sm-12 p-0 m-0 " id="shopping-cart-results"> 
              <div class="card-body"  id="view_cart" >               
                <div class="alert alert-deflaut box-border rounded shadow-sm p-0 " role="alert">
                  <div class="col-xs-8 p-0 m-0 pt-3 pl-3">
                    <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>">
                        <?php
                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                  <div class="float-left p-0 pr-5">
                  <img style="max-width: 30px;" class="img-fluid img-responsive  pt-0 mt-0" src="images/icon/index1/nav-cat5-hover.png" alt="Product">
                  </div>
                </a>
                  <div class="p-0 pb-3">
                    <h4 class="alert-heading font-weight-bold p-0 m-0 ">Grand Total <span class="text-light "> <?PHP if(isset($_SESSION["products"])){echo count($_SESSION["products"]); } ?> item<?php if (count($_SESSION["products"])>1) {echo "s";}else{} ?></span></h4>
                         
                  </div>
                  </div>
                  <div class="col-xs-4 p-0 m-0 pr-3  float-right">
                   <div class="float-right ">
                    <h4 class="text-primary mt-3">
                      
                    <?php echo $currency; echo number_format(($grand_total), 0, '.', ','); ?>
                  </h4>
                   </div>     
                  </div>
                </div>
                
              </div> 

  </div>
  

 <?php echo $Error; ?>
 <!-- ==========================add this line beow on both the success and failure pages=========================== -->
    <?php if (isset($_SESSION['error'])) {echo $_SESSION['error'];unset($_SESSION['error']); } ?> 
    <!-- ======================================================================================================== -->
<form name="JPesa" method="post" class=" box-border rounded shadow-sm bg-light p-0" action="https://secure.jpesa.com/">
<div class="row p-0 m-0 pt-4 img-rounded shadow-sm p-5">
  <div id="jpesaDetails"> 
      <input type="hidden" name="dad" class="form-control" value="xpress"  required="" />
      <input type="hidden" name="business" class="form-control" value="fredowampz@gmail.com"  required="" />
      <input type="hidden" name="item_name" class="form-control" value="Alipata <?php echo $_SESSION['order_No']; ?>" required="" />
      <!-- ================put the full url for the success page as value below.================================= -->
      <input type="hidden" name="return" class="form-control" value="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" required="" />
      <input type="hidden" name="cancel" class="form-control" value="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" required="" />
      <!-- ================put the ful url for the failed page above as the value================================= -->
      <input type="hidden" name="callback" class="form-control" value="http://alipata.com/payment.php" required="yes">
      <!-- ================put the url of the file payment.php as the value in the above input========================== -->
      <input type="hidden"  name="currency_code" class="form-control" id="currency_code" value="UGX" required="" >
      <input name="amount" class="form-control" type="hidden" id="amount" size="15" value="<?php echo $grand_total; ?>" required="" />
  </div>



              <div class="p-1 pt-4">
                <button id="post" type="pay"  name="placeorder" class="btn btn-default active col-sm-12 mb-3"> <span>Place Order   <i class="fa fa-long-arrow-right "></i></span>   </button>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
  </div>
</form>
</div>
</div>

</div>
 

           
        </div>
    </div>
</div>

</div>


</main>
<!-- end MAIN -->

<?php include 'assets/footer.php'; ?>   
<!-- Insertion Ajax configuration for deposit -->
<script type="text/javascript">
  $(document).ready(function(){
   $(document).on('click','a[data-role=checkout]',function(e){

  event.preventDefault();
  // if( $('#product_id').val() != '')
  // {
    var button_content = $(this).find('a[href=submit]');
    button_content.html('checking out...');
    // button_content.html('Submitted');

   var form_data = $(this).serialize();
   $.ajax({
    url:"manage-check-out.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     // alert('True'); 
      // $("#cart-container").html(data.products);
      // data 
      // button_content.html('Deposited <i class="fa fa-check"><i>'); 
      button_content.html('checkout'); 
      // alert(data);
        location.href='checkout'; 
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
<!-- Insertion Ajax configuration -->

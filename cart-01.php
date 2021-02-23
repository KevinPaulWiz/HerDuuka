
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

<h2 class="page-heading">
    <span class="page-heading-title2"> Cart (<?PHP if(isset($_SESSION["products"])){echo count($_SESSION["products"]); } ?> item<?php if (count($_SESSION["products"])>1) {echo "s";}else{} ?>)</span>
</h2>

<div class="page-content checkout-page">
    <!-- <h3 class="checkout-sep">6. Order Review</h3> -->
    <div class="box-border">
        <div class="table-responsive">
    <?php       
    if(isset($_SESSION["products"]) && count($_SESSION["products"])>0) { 
    ?>
            <table class="table table-bordered  cart_summary"  id="shopping-cart-results">
                <thead>
                    <tr>
                        <th class="cart_product">Item</th>
                        <th class="text-center">Unit price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Sub Total</th>
                        <th class="action">Remove</th>
                    </tr>
                </thead>
                <tbody>
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
                    <tr>
                        <!-- <td class="cart_product"></td> -->
                        <td class="cart_description" width="600">
                         <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $prod['product_id']; ?>">
                        <?php
                        $sql = "SELECT image_path, product_id FROM product_images WHERE product_id='$product_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                            <img style="max-width: 100px;" class="img-fluid img-responsive float-left pr-2" src="admin/<?php echo $row['image_path'];  ?>" alt="Product"></a>
                            <small style="color:#777;" class="cart_ref h4">Seller : #123654999</small><br>
                            <a href="product-item-detail?ALeKk00B5oNZEMbYSCnkFSzNInJ_GNCfY=uHSZXuqHIYmAhbIP06KXuAE&id=<?php echo $product_id; ?>"><?php echo $product_name;  echo $product_color; ?>
</a><br>
                          <!--   <small><a href="#">Color : Beige</a></small><br>   
                            <small><a href="#">Size : S</a></small> -->
                        </td>
                        <td class="price text-center"><span><?php  echo $currency; echo number_format(
$product_price, 0, '.', ','); ?> </span></td>
                        <td class="qty">
                            <!-- <input min="1" type="number" data-code="<?php echo $product_id; ?>" class="form-control text-center" value="<?php echo $product_quantity; ?>"> -->
                            <input minlength="1" maxlength="12" data-code="<?php echo $product_id; ?>" name="qty1<?php echo $product_id; ?>" id="qty1<?php echo $product_id; ?>" value="<?php echo $product_quantity; ?>" class="form-control input-sm quantity" type="text">
                            <span data-field="qty1<?php echo $product_id; ?>" data-type="minus" class="btn-number" ><i class="fa fa-caret-down"></i></span>
                            <span data-field="qty1<?php echo $product_id; ?>" data-type="plus" class="btn-number"><i class="fa fa-caret-up"></i></span>
                        </td>
                        <td class="price text-center">
                            <span><?php echo $currency; echo number_format(($product_price * $product_quantity), 0, '.', ','); ?></span>
                        </td>
                        <td align="center">
                            <a href="javascript:vpoid();" class="btn btn-default remove-item" data-code="<?php echo $product_id; ?>">
                            <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <!-- <tr>
                        <td colspan="3">Total products (tax incl.)</td>
                        <td class="text-left"  colspan="2">122.38 €</td>
                    </tr> -->
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td class="text-left" colspan="2"><strong><?php echo $currency; echo number_format($total, 0, '.', ','); ?></strong></td>
                    </tr>

                </tfoot>    
            </table>
            <div class="col-sm-12">
                <a href="index" class=" btn btn-warning float-left"> <h4 class="mb-0"> <i class="glyphicon glyphicon-menu-left"></i> Continue Shopping </h4></a> 
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-horizontal row" id="comment_form">
                    <!-- <input type="hidden"  name="product_id" id="product_id" pr> -->
                       <button id="post" type="submit" class="button  mt-0 btn btn-default  float-right"><h4>Proceed to Checkout</h4></button>
                   </form>
           </div>
          
        <?php }       
             else {
                echo "Your Cart is empty";
            ?>
            <tfoot>
            <br>
            <br>
            <tr>
            
            </tr>
            </tfoot>
            <a href="index.php" class="btn btn-warning"> <h4 class="mb-0"><i class="glyphicon glyphicon-menu-left"></i>Continue Shopping</h4></a>
            <?php } ?>  

           
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
   $('#comment_form').on('submit', function(event){

  event.preventDefault();
  // if( $('#product_id').val() != '')
  // {
    var button_content = $(this).find('button[type=submit]');
    button_content.html('Proceeding to checkout...');
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
      button_content.html('Proceed to checkout'); 
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

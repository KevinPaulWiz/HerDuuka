<!--  Popup Newsletter-->
            <div class="modal fade popup-newsletter" id="shopping-cart" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="block-newletter">
                            <div class="block-title">signup for our newsletter & promotions</div>
                            <div class="block-content">
                                <p class="text-title">GET <span>50% <span>off</span></span></p>
                                <form>
                                    <label>on your next purchase</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Enter your email..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="checkbox btn-checkbox">
                                <label>
                                    <input type="checkbox"><span>Dont’s show this popup again!</span>
                                </label>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
            </div><!--  Popup Newsletter-->






<!-- Button trigger modal-->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">Launch modal</button> -->

<!-- Modal: modalCart -->
<div class="modal fade pt-5 mt-5" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title pull-left" id="myModalLabel">Shopping cart</h4>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body col-sm-12">

        <div id="modal-loader" style="display: none; text-align: center;">
           <!-- ajax loader -->
           <img src="images/media/loading.gif">
           </div>
           <!-- mysql data will be load here -->                          
           <div id="dynamic-content"></div>
      </div>
      <!--Footer-->
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" id="comment_form">
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">CONTINUE SHOPPING</button>
         <a id="post"  data-role="checkout" href="submit" class="button btn btn-default active">Checkout  <i class="fa fa-long-arrow-right "></i></a>
      </div>
     </form>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->







        <!-- FOOTER -->
        <footer class="site-footer footer-opt-1">

            <div class="container">
                <div class="footer-column">
                
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <strong class="logo-footer">
                                <a href="#"><img src="images/media/index1/logo-footer.png" alt="logo"></a>
                            </strong>

                            <table class="address">
                                <tr>
                                    <td><b>Address:  </b></td>
                                    <td>Jocasa House, Plot 14, Nakasero Road</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td> +256 702 978 248</td>
                                </tr>
                                <tr>
                                    <td><b>Email:</b></td>
                                    <td>Support@alipata.com</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">ABOUT ALIPATA</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <!-- <li><a href="#">Terms & Conditions</a></li> -->
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">My Account</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <!-- <li><a href="#">My Credit Slip</a></li> -->
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="#">New User Guide</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Report Spam</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <div class="block-newletter">
                                <div class="block-title">NEWSLETTER</div>
                                <div class="block-content">
                                     <form action="#" id="newsletter" method="POST">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="Email_newsletter" name="Email_newsletter" placeholder="Your Email Address">
                                        <span class="input-group-btn">
                                            <button type="submit" id="post" name="post" class="btn btn-subcribe" ><span><i class="fa fa-paper-plane-o" aria-hidden="true"></i></span></button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="block-social">
                                <div class="block-title">Let’s Socialize </div>
                                <div class="block-content">
                                    <a title="Facebook" href="https://www.facebook.com/AlipataGlobal/" target="_blank" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a title="Twitter" href="#" target="_blank" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a title="Instagram" href="#" target="_blank" class="sh-pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <!-- <a href="#" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a> -->
                                    <!-- <a href="#" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-methods">
                    <div class="block-title">
                        Accepted Payment Methods
                    </div>
                    <div class="block-content">
                        <img alt="payment" src="images/media/index1/payment1.png">
                        <img alt="payment" src="images/media/index1/payment2.png">
                        <img alt="payment" src="images/media/index1/payment3.png">
                        <img alt="payment" src="images/media/index1/payment4.png">
                        <img alt="payment" src="images/media/index1/payment5.png">
                        <img alt="payment" src="images/media/index1/payment6.png">
                        <img alt="payment" src="images/media/index1/payment7.png">
                        <img alt="payment" src="images/media/index1/payment8.png">
                        <img alt="payment" src="images/media/index1/payment9.png">
                        <!-- <img alt="payment" src="images/media/index1/payment10.png"> -->
                    </div>
                </div> 

                <div class="footer-links">
                    
                        
                    <ul class="links">
                        <li><strong class="title">HOT SEARCHED KEYWORDS:</strong></li>
                        <li><a href="#">Xiaomi Mi3 </a></li>
                        <li><a href="#">Digiflip Pro XT 712 Tablet</a></li>
                        <li><a href="#">Mi 3 Phones  </a></li>
                        <li><a href="#">Iphone 6 Plus  </a></li>
                        <li><a href="#">Women's Messenger Bags</a></li>
                        <li><a href="#">Wallets   </a></li>
                        <li><a href="#">Women's Clutches   </a></li>
                        <li><a href="#">Backpacks Totes</a></li>
                    </ul>
                    
                    
                        
                    <ul class="links">
                        <li><strong class="title">tvs: </strong></li>
                        <li><a href="#">Sony TV  </a></li>
                        <li><a href="#"> Samsung TV  </a></li>
                        <li><a href="#">LG TV  </a></li>
                        <li><a href="#">Panasonic TV  </a></li>
                        <li><a href="#"> Onida TV  </a></li>
                        <li><a href="#"> Toshiba TV  </a></li>
                        <li><a href="#"> Philips TV</a></li>
                        <li><a href="#">Micromax TV</a></li>
                        <li><a href="#">LED TV </a></li>
                        <li><a href="#">  LCD TV  </a></li>
                        <li><a href="#">Plasma TV </a></li>
                        <li><a href="#">3D TV    </a></li>
                        <li><a href="#">Smart TV </a></li>
                    </ul>
                   
                   
                        
                    <ul  class="links">
                        <li><strong class="title">MOBILES: </strong></li>
                        <li><a href="#">Moto E </a></li>
                        <li><a href="#"> Samsung Mobile </a></li>
                        <li><a href="#">Micromax Mobile</a></li>
                        <li><a href="#">Nokia Mobile </a></li>
                        <li><a href="#"> HTC Mobile </a></li>
                        <li><a href="#">Sony Mobile  </a></li>
                        <li><a href="#"> Apple Mobile  </a></li>
                        <li><a href="#"> LG Mobile  </a></li>
                        <li><a href="#">Karbonn Mobile</a></li>
                    </ul>
                   
                        
                    <ul class="links">
                        <li><strong class="title">LAPTOPS:</strong></li>
                        <li><a href="#">Apple Laptop  </a></li>
                        <li><a href="#">Acer Laptop </a></li>
                        <li><a href="#">Samsung Laptop</a></li>
                        <li><a href="#">Lenovo Laptop </a></li>
                        <li><a href="#">Sony Laptop</a></li>
                        <li><a href="#">Dell Laptop</a></li>
                        <li><a href="#">Asus Laptop </a></li>
                        <li><a href="#">  Toshiba Laptop</a></li>
                        <li><a href="#">LG Laptop </a></li>
                        <li><a href="#">HP Laptop</a></li>
                        <li><a href="#">Notebook</a></li>
                    </ul>
                   
                    
                        
                    <ul class="links">
                        <li><strong class="title">WATCHES:</strong></li>
                        <li><a href="#">FCUK Watches</a></li>
                        <li><a href="#">Titan Watches  </a></li>
                        <li><a href="#">  Casio Watches </a></li>
                        <li><a href="#">  Fastrack Watches </a></li>
                        <li><a href="#">Timex Watches </a></li>
                        <li><a href="#">Fossil Watches</a></li>
                        <li><a href="#">Diesel Watches  </a></li>
                        <li><a href="#"> Luxury Watches</a></li>
                    </ul>
                   
                    
                    <ul class="links">
                        <li><strong class="title">FOOTWEAR: </strong></li>
                        <li><a href="#">Shoes  </a></li>
                        <li><a href="#">Casual Shoes </a></li>
                        <li><a href="#"> Sports Shoes </a></li>
                        <li><a href="#">Formal Shoes </a></li>
                        <li><a href="#"> Adidas Shoes  </a></li>
                        <li><a href="#">Gas Shoes</a></li>
                        <li><a href="#"> Puma Shoes</a></li>
                        <li><a href="#">Reebok Shoes </a></li>
                        <li><a href="#">Woodland Shoes  </a></li>
                        <li><a href="#">Red tape Shoes</a></li>
                        <li><a href="#">Nike Shoes</a></li>
                    </ul>
                    
                </div>

                <div class="footer-bottom">
                    <div class="links">
                        <ul>
                            <li><a href="#">    Company Info – Partnerships    </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Online Shopping </a></li>
                            <li><a href="#">Promotions </a></li>
                            <li><a href="#">My Orders  </a></li>
                            <li><a href="#">Help  </a></li>
                            <li><a href="#">Site Map </a></li>
                            <li><a href="#">Customer Service </a></li>
                            <li><a href="#">Support  </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Most Populars </a></li>
                            <li><a href="#">Best Sellers  </a></li>
                            <li><a href="#">New Arrivals  </a></li>
                            <li><a href="#">Special Products  </a></li>
                            <li><a href="#"> Manufacturers     </a></li>
                            <li><a href="#">Our Stores   </a></li>
                            <li><a href="#">Shipping      </a></li>
                            <li><a href="#">Payments      </a></li>
                            <li><a href="#">Payments      </a></li>
                            <li><a href="#">Refunds  </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Terms & Conditions  </a></li>
                            <li><a href="#">Policy      </a></li>
                            <li><a href="#">Policy      </a></li>
                            <li><a href="#"> Shipping     </a></li>
                            <li><a href="#">Payments      </a></li>
                            <li><a href="#">Returns      </a></li>
                            <li><a href="#">Refunds      </a></li>
                            <li><a href="#">Warrantee      </a></li>
                            <li><a href="#">FAQ      </a></li>
                            <li><a href="#">Contact  </a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright">
                    Copyright © <?php echo date('Y'); ?> Alipata. All Rights Reserved. Designed by <a href="" target="_blank" >alipata.com</a>
                </div>

            </div>

        </footer><!-- end FOOTER -->        
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>
    <!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Boostrap --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Countdown --> 
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    
    <!-- actual --> 
    <script type="text/javascript" src="js/jquery.actual.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    
    <!-- Chosen jquery-->    
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    
    <!-- parallax jquery--> 
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

    <!-- elevatezoom --> 
    <script type="text/javascript" src="js/jquery.elevateZoom.min.js"></script>

    <!-- fancybox -->
    <script src="js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- arcticmodal -->
    <script src="js/arcticmodal/jquery.arcticmodal.js"></script>
    
    <!-- cart -->  
    <script type="text/javascript" src="js/cart.js"></script>
    <!-- Main -->  
    <script type="text/javascript" src="js/main.js"></script>

    <!-- Custom scripts -->

    <script>

        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function (event, ui) {

                        $('#amount-left').text(ui.values[0] );
                        $('#amount-right').text(ui.values[1] );

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            }); 

        })(jQuery);

    </script>
</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 07:53:28 GMT -->
</html>
<script type="text/javascript">
        // if (window.history.replaceState) {
        //     window.history.replaceState(null, null, window.location.href);
        // }
</script>


<!-- Insertion Newsletter -->
<script type="text/javascript">
$(document).ready(function(){
$('#newsletter').on('submit', function(event){

event.preventDefault();
var button_content = $(this).find('button[type=submit]');
button_content.html('<img src="assets/images/loading.gif">');
// button_content.html('Submitted');
var form_data = $(this).serialize();
$.ajax({
url:"ajax_config.php", 
method:"POST",
data:form_data,
success:function(data)
{ 
button_content.html('<i class="fa fa-paper-plane-o" aria-hidden="true"></i>'); 
$('#newsletter')[0].reset();
// $('#exampleModalCenter2').modal('toggle'); 
// alert(data); 

}

});

});
});
</script>

<!-- Insertion Newsletter -->

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
      <?php include 'templates/footer.php'; ?>
      <script type="text/javascript">
    $(document).ready(function() {
      //  append values in input fields
      $(document).on('click','a[data-role=rank]',function(){
      // alert('Ture');
            var id = $(this).attr("id");
            // if (confirm("Are you sure you want to delete this Record?")) {
                $.ajax({
                    type: "POST",
                    url: "views.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(data) {
                        alert(data);
                        // $(".delete_mem" + id).fadeOut('slow');
                    }
                });
            // } else {
            //     return false;
            // }
            
        });
    });
</script>
<!-- Insertion Ajax configuration -->
      <?php include 'templates/footer.php'; ?>
      <script type="text/javascript">
    $(document).ready(function() {
      //  append values in input fields
      $(document).on('click','a[data-role=wishlist]',function(){
      // alert('Ture');
            var id = $(this).attr("id");
            // if (confirm("Are you sure you want to Wishlist this Product?")) {
                        // alert(0);
                $.ajax({
                    type: "POST",
                    url: "Wishlist.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(data) {
                        // $(".delete_mem" + id).fadeOut('slow');
                        var fd = JSON.parse(data);
                        if (fd==0) {
                            // alert("not set");
                            window.location.href = "account-login";
                        }else if (fd==1){
                            // alert(data);
                            $('.wishlist'+id).addClass('styled');
                            $('#error').html("<div id='notification' class='alert alert-success alert-rounded text-center'><span class='fa fa-check'></span> Product Added to Wishlist<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>×</span> </button> </div>");
                            $('#notification').delay(5000).fadeOut('slow');
                            // $('#kjsdhfkjsdf').append("<div id='error'></div>");
                        }else if (fd==2) {
                            $('.wishlist'+id).removeClass('styled');
                            $('#error').html("<div id='notification' class='alert alert-danger alert-rounded text-center'><span class='fa fa-times'></span>  Product removed from Wishlist<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>×</span> </button> </div>");
                            $('#notification').delay(5000).fadeOut('slow');
                            // $('#kjsdhfkjsdf').append("<div id='error'></div>");
                        }
                    }
                });
            // } else {
            //     return false;
            // }
            
        });
    });
</script>
<script>
    $(function() {
      $('#Wishlist').click(function() {
         $('#Wishlist').toggleClass('styled');
      });
    });
</script>
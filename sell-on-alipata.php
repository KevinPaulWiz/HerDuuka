<?php include 'assets/header.php'; ?>    	

		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="http://alipata.com/">Home    </a></li>
                    <li class="active"><?php echo $title; ?></li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2">SELL NOW ON ALIPATA AND START MAKING MONEY</span>
                </h2>
                  <!-- images categori -->
                        <div class="category-view">
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item " >
                                   <a href="sell-center"><img src="images/media/Stay-safe-CB-1170px.png" alt="category-images"></a>
                                </div>
                                <!-- <div class="item " >
                                    <a href="#"><img src="images/media/UG_W15_CB-_Jumia-Express-1152x252-px.png" alt="category-images"></a>
                                </div> -->
                            </div>
                        </div><!-- images categori -->
                <div class="page-content pb-5">
                    <div class="row ">
                        <?php echo $Error; ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="row">
                        
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Tabs Bordered Justified</h4> -->

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item active">
                                            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    Sell on Alipata
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                               Sell Support
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                FAQs
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home-b2">
                                         <div class="row"><br><br>
                <p class="sub-title1 text-center h3 text-primary">Grow your business with Alipata</p>
        <div class="row">
            
                <div class="col-sm-4">
                    <center>
                        <img src="https://static.jumia.ug/cms/content-pages/vendor/sell_visits.png" style="width: 140px;" alt="">
                        <p class="gtitle"></p>
                        <p class="gnumbers">100,000+</p>
                        <p class="glegend">Potential Buyers</p>
                    </center>
                </div>
        
                <div class="col-sm-4">
                    <center>
                        <img src="https://static.jumia.ug/cms/content-pages/vendor/sell_satisfy.png" style="width: 140px;" alt="">
                        <p class="gtitle"></p>
                        <p class="gnumbers">95% Satisfied customers</p>
                        <p class="glegend">Recommend us to friends</p>
                    </center>
                </div>
        
                <div class="col-sm-4">
                    <center>
                            <img src="https://static.jumia.ug/cms/content-pages/vendor/sell_rep.png" style="width: 140px;" alt="">
                            <p class="gtitle"></p>
                            <p class="gnumbers">Marketing &amp; data analytics </p>
                            <p class="glegend">Support to grow your business</p>
                    </center>
                </div>
        </div>
            </div>
                                        </div>
                                        <div class="tab-pane" id="profile-b2">
                                            <div class="row"><br><br>
                    <a href="https://vendorhub.jumia.ug/university/product-creation/">
                    <div class="row p-3">

                       <div class="col-sm-1">
                        <center>
                            <img src="https://static.jumia.ug/cms/content-pages/vendor/1_n.png" style="width: 95px;" alt="">
                        </center>
                    </div>
        
                    <div class="col-sm-11"><br>
                        <p class="txt3"><strong style="font-size: 14px;">List Your Products</strong> - Creating good content as your list your products is the first important step to getting more sales. Good quality images and detailed product description encourage customers to click on your products and buy them.<br></p>
                    </div> </a><br class="clear"><br> 
                    </div> 
                    
                <div class="row p-3"style="background: #f4f5f5;">
                    <div style="background: #f4f5f5;"><br>
                                <a href="https://vendorhub.jumia.ug/university/grow-your-sales/"> 
                        <div class="col-sm-1">
                            <center>
                                <img src="https://static.jumia.ug/cms/content-pages/vendor/2_.png" style="width: 95px;" alt="">
                            </center>
                        </div>
        
                        <div class="col-sm-11"><br>
                            <p class="txt3"><strong style="font-size: 14px;">Grow Your Sales</strong> - There are many ways to maximize your sales. Apart from offering products at competitive prices, you can join Alipatas promotions to gain more exposure for your shop. Optimizing keywords in your products names and ensuring that you have listed them in the right product category are other ways to sell more.<br></p>
                        </div> </a><br class="clear"><br>
                    </div><br class="clear"><br>
                </div>
                                <a href="https://vendorhub.jumia.ug/university/ship-orders/"> 
                    <div class="row p-3">
                    <div class="col-sm-1">
                        <center>
                            <img src="https://static.jumia.ug/cms/content-pages/vendor/3_n.png" style="width: 95px;" alt="">
                        </center>
                    </div>
        
                    <div class="col-sm-11"><br>
                        <p class="txt3"><strong style="font-size: 14px;">All About Shipping</strong> - There are many ways to maximize your sales. Apart from offering products at competitive prices, you can join Alipatas promotions to gain more exposure for your shop. Optimizing keywords in your products names and ensuring that you have listed them in the right product category are other ways to sell more.<br></p>
                    </div> </a><br class="clear"><br>
        </div>
                    <div class="row p-3" style="background: #f4f5f5;"><br>
                     <a href="https://vendorhub.jumia.ug/university/account-statement/"> 
        
                        <div class="col-sm-1">
                            <center>
                                <img src="https://static.jumia.ug/cms/content-pages/vendor/4_n.png" style="width: 95px;" alt="">
                            </center>
                        </div>
        
                        <div class="col-sm-11"><br><br>
                            <p class="txt3"><strong style="font-size: 14px;">Your Payments</strong> - There are no costs involved to list your products on Alipata. You are not required to pay for anything until your items are sold.<br></p>
                        </div> </a><br class="clear"><br>
                    </div>
                </div>

                                        </div>
                                        <div class="tab-pane" id="messages-b2">
                                            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        What are the products I cannot sell on Alipata?</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          <p>Alipata as we endeavor to improve our products and content guidelines on the site. The following are the list of items that are banned from selling on Alipata.</p>
          <div>
             <img src="images/media/banned-items-pic.jpg" alt="category-images"></a>
          </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
       What are the products I can sell on Alipata?</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">You can sell products among the following categories: Phones and Tablets, Fashion products, Home and Office, Computing, Cameras, Electronics, Watches, Sunglasses, Baby and kids products, Toys, Health and Beauty, Automobile, Sport and Fitness, Games and Consoles, Service Deals, Books, Movies and Music, Weddings, Groceries and many more.

</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
       What is it to sell on Alipata?</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">On Jumia you can create your own shop online and start to sell your products across Kenya thanks to our marketing and logistic expertise.</div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
       What are the information requested to create a shop on Alipata?</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body"><div class="entry-content">
            <p class="h4">To register as a seller, you need to give the following information:</p>
                <ul>
                <li  class="list-group-item">Email address</li>
                <li  class="list-group-item">Phone number</li>
                <li  class="list-group-item">Bank account details</li>
                </ul>

    </div>
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        How to list my products and start to sell them?</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body"><div class="entry-content">
            To start to sell your products, you can use our Seller Center platform. The process will be slightly different depending on whether or not your product already exists on Jumia.

            <p><b>If your product(s) already exist(s) in the Jumia catalog:</b></p>

            You can easily add these products to your catalog one by one via our Seller Center platform. You have to add the name, the price and the quantity of the product. You can as well use a file upload to add many products at once to your catalog. Please note that in order to use these tools you will have to know the ISBN, EAN, UPC or RSIN code of the products.

            <p><b>If your product(s) don’t/doesn’t exist in the Jumia catalog:</b></p>

            You can create new offers one by one or massively with file upload via our Seller Center platform. To create new offers you will need the following information:

<ul class="p-4">
<li class="list-group-item"><span>EAN or UPC.</span></li>
<li class="list-group-item"><span>Name of the product.</span></li>
<li class="list-group-item"><span>Detailed description of the product and specifications.</span></li>
<li class="list-group-item"><span>High quality pictures of the product.</span></li>
<li class="list-group-item"><span>Price.</span></li>
<li class="list-group-item"><span>Available Stock.</span></li>
</ul>
Find the tutorials about product creation here.
    </div>
</div>

    </div>
  </div>
</div> 
                                        </div>   
<div class="row">
                <div class="grey_wrap container">
                    <p class="sub-title1 h3 text-center">How it works?</p><br>
        
                    <div class="grid5 float-left col-sm-2">
                        <img src="https://static.jumia.ug/cms/content-pages/vendor/TAB1-STEP1n1.png" style="width: 150px; float: right;" alt="">
                    </div>
        
                    <div class="grid7 col-sm-10"><br>
                        <p class="txt1" style="font-size: 15px; color: #f90;">Step 1: Register in less than 3 minutes</p>
                        <p class="txt1">Fill the Registration Form.<br>Submit the required documents  Business registration and bank account details.<br>Read and accept our Seller Agreement.</p>
                    </div>
        
        
                   <div class="grid5 float-left col-sm-2">
                        <img src="https://static.jumia.ug/cms/content-pages/vendor/TAB1-STEP2n1.png" style="width: 150px; float: right;" alt="">
                    </div>
        
                    <div class="grid7 col-sm-10">
                        <p class="txt1" style="font-size: 15px; color: #f90;">Step 2 : Become an ecommerce expert</p>
                        <p class="txt1">Complete the dedicated training session for new sellers.<br>Activate your Seller Center account to manage your shop on the go.</p>
                    </div>
        
        
                    <div class="grid5 float-left col-sm-2">
                        <img src="https://static.jumia.ug/cms/content-pages/vendor/TAB1-STEP3n1.png" style="width: 150px; float: right;" alt="">
                    </div>
        
                    <div class="grid7 col-sm-10">
                        <p class="txt1" style="font-size: 15px; color: #f90;">Step 3 : List your Products and start selling!</p>
                        <p class="txt1">Upload more than five products to start selling.</p>
                    </div>
        
                    <br class="clear"><br>
                </div>
            </div>
                                    </div>
                                 
                                </div>

                            </div> <!-- end card-->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                   <div class="row font-weight-bold"><br><br>

            <center>
                <a href="sell-center" class=" text-primary btn btn-default" target="_blank">Start selling now</a><br><br>
    
                    <p class="gnumbers"> Raise Claim <a href="" class="text-primary"> here</a> </p> 
                    <p class="gnumbers"> For General Inquiries &amp; Support call: +256 702 978 248   </p>
 <p class="gnumbers"> Monday - Saturday 9am-5pm   </p>
            </center>
        </div>
                </form>
                    </div>
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
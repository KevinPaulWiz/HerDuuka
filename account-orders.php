<?php 
// session_start();
include 'assets/header.php';
include 'config/controller.php';
 ?>    	

		<!-- MAIN -->
		<main class="site-main">

            
            <div class="columns container">
                <!-- Block  Breadcrumb-->

                <!-- manufacturers -->

        <!-- //manufacturers -->
                <div class="page-content pb-3">
                    <div class="row ">
                        <?php echo $Error; ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
                    <div class=" col-sm-3 ">
                        <div class="bg-light " id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light border-color"><i class="fa fa-bars"></i> My Alipata Account</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-history"></i> Order History</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-home"></i> Addresses</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-heart"></i> Wishlist</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-commenting"></i> Pending Reviews</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-key"></i> Password</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope"></i> Newsletter Preferences</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-sign-out"></i> Logout</a>
      </div>
    </div>
                    </div>
                </form>
                        <div class="col-sm-9">
                            <div class="box-border pt-0 mt-0">
                                <h3 class="pt-0 mt-3">Order History</h3>
                               <div class="mt-4 mt-lg-0"><div class="card">
                                <!-- <div class="card-header"><h5>Order History</h5> -->
                               </div>
                               <div class="card-divider">
                               </div>
                               <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table class="table">
                                        <thead><tr><th>Order</th><th>Date</th><th>Status</th><th>Total</th></tr></thead><tbody><tr><td><a href="account-order-details.html">#8132</a></td><td>02 April, 2019</td><td>Pending</td><td>$2,719.00 for 5 item(s)</td></tr><tr><td><a href="account-order-details.html">#7592</a></td><td>28 March, 2019</td><td>Pending</td><td>$374.00 for 3 item(s)</td></tr><tr><td><a href="account-order-details.html">#7192</a></td><td>15 March, 2019</td><td>Shipped</td><td>$791.00 for 4 item(s)</td></tr><tr><td><a href="account-order-details.html">#6321</a></td><td>28 February, 2019</td><td>Completed</td><td>$57.00 for 1 item(s)</td></tr><tr><td><a href="account-order-details.html">#6001</a></td><td>21 February, 2019</td><td>Completed</td><td>$252.00 for 2 item(s)</td></tr><tr><td><a href="account-order-details.html">#4120</a></td><td>11 December, 2018</td><td>Completed</td><td>$3,978.00 for 7 item(s)</td></tr></tbody></table>
                               </div>
                           </div>
                           <div class="card-divider">
                               </div>
                               <div class="card-footer float-right">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
                                            <span class="page-link__arrow page-link__arrow--left" aria-hidden="true"><svg width="7" height="11"><path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"></path></svg></span></a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item active" aria-current="page"><span class="page-link">2 <span class="sr-only">(current)</span></span></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">4</a></li><li class="page-item page-item--dots">
                                <div class="pagination__dots">
                               </div></li><li class="page-item"><a class="page-link" href="#">9</a></li><li class="page-item"><a class="page-link page-link--with-arrow" href="#" aria-label="Next"><span class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11"><path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
    C-0.1,9.8-0.1,10.4,0.3,10.7z"></path></svg></span></a></li></ul>
</div>
</div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
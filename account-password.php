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
                                <h3 class="pt-0 mt-3">Password</h3>
                                <br>
                                <div class="col-12 col-lg-9 mt-4 mt-lg-0"><div class="card-divider"></div><div class="card-body card-body--padding--2"><div class="row no-gutters"><div class="col-12 col-lg-7 col-xl-6"><div class="form-group"><label for="password-current">Current Password</label> <input type="password" class="form-control" id="password-current" placeholder="Current Password"></div><div class="form-group"><label for="password-new">New Password</label> <input type="password" class="form-control" id="password-new" placeholder="New Password"></div><div class="form-group"><label for="password-confirm">Reenter New Password</label> <input type="password" class="form-control" id="password-confirm" placeholder="Reenter New Password"></div><div class="form-group mb-0"><button class="btn btn-primary mt-3">Change</button></div></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
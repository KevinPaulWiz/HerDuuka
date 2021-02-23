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
                     <?php include 'assets/side-menu.php'; ?>
                    </div>
                </form>
            <div class="col-sm-9">
                <div class="box-border pt-0 mt-0">
                <h3 class="p-2 mt-0 pl-4 border-bottom">
                Account Overview
                </h3>
                               <div class="col-12 mt-4 mt-lg-0">
                                <div class="row  pt-0 mt-0">
                                    <div class="col-sm-6  card profile-card">
                                        <div align="center" class="card-body profile-card__body p-3  bg-light shadow-sm">
                                            <div class="profile-card__avatar">
                                                <img src="images/media/user.PNG" alt="">
                                            </div>
                                            <div class="profile-card__name"><?php echo $row_customer['fname']." ".$row_customer['lname']; ?></div>
                                            <div class="profile-card__email"><?php echo $row_customer['email']; ?></div>
                                            <div class="profile-card__edit"><a  href="account-edit-profile" class="btn btn-default btn-sm active"><i class="fa fa-pencil"></i> Edit Profile</a>
                                            <br>
                                            <br>
                                            <br>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="dashboard__address card address-card address-card--featured col-sm-6 ">
                                            <div  class="card-body profile-card__body p-3  bg-light shadow-sm">
                                            <div class="address-card__badge bg-primary rounded p-1 pl-4 pr-4 tag-badge tag-badge--theme">Default</div>
                                        <div class="address-card__body">
                                            <div class="address-card__name">Helena Garcia</div>
                                            <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Phone Number</div><div class="address-card__row-content">38 972 588-42-36</div>
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Email Address</div><div class="address-card__row-content">helena@example.com
                                                </div>
                                            </div><div class="address-card__footer"><a class="text-primary" href="#"><i class="fa fa-pencil"></i> Edit Address </a>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="dashboard__orders  col-sm-12">
                                                <div class="card-header p-0">
                                                    <h4>Recent Orders</h4>
                                                </div>
                                                <div class="card-divider">
                                                </div>
                                                <!-- <div class="card-table"> -->
                                                    <!-- <div class="table-responsive-sm"> -->
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Order</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="account-order-details.html">#8132</a></td>
                                                <td>02 April, 2019</td>
                                                <td>Pending</td>
                                                <td>$2,719.00 for 5 item(s)</td>
                                                </tr><tr><td><a href="account-order-details.html">#7592</a></td>
                                                <td>28 March, 2019</td>
                                                <td>Pending</td>
                                                <td>$374.00 for 3 item(s)</td>
                                                </tr><tr><td><a href="account-order-details.html">#7192</a></td>
                                                <td>15 March, 2019</td>
                                                <td>Shipped</td>
                                                <td>$791.00 for 4 item(s)</td></tr></tbody></table>
                                                <!-- </div> -->
                                            <!-- </div> -->
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
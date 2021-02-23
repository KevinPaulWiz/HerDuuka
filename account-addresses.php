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
                            <div class="box-border p-0 m-0">
                                <h3 class="pt-0 mt-3 border-bottom pl-3 ">Addresses</h3>
                                <br>
                            <div class="mt-4 mt-lg-0 p-3">
                                <div class="addresses-list">
                                    <a href="account-address-add" class="addresses-list__item addresses-list__item--new">
                                        <div class="addresses-list__plus">
                                    </div>
                                    <div class="btn btn-secondary btn-sm">Add New</div>
                                </a>
                                <div class="addresses-list__divider"></div>

<?php 
$sql = "SELECT * FROM addresses WHERE customerid='".$_SESSION['customerid']."'";
$result = $conn->query($sql);
while($address_row = $result->fetch_assoc()) {
 ?>
                                <div class="addresses-list__item card address-card shadow-sm box-border">
                                    <?php if ($address_row['default_address']=='1') { ?>
                                    <div class="bg-primary pl-3 pr-3 address-card__badge tag-badge tag-badge--theme">Default</div>
                                    <?php } ?>
                                    <div class="address-card__body"><div class="address-card__name"><?php echo $address_row['fname']." ".$address_row['lname']; ?></div>
                                    <div class="address-card__row"><?php echo $address_row['region']; ?><br><?php echo $address_row['city']; ?><br><?php echo $address_row['address']; ?><?php echo $address_row['other_information']; ?></div>
                                    <div class="address-card__row"><div class="address-card__row-title">Phone Number</div>
                                    <div class="address-card__row-content"><?php echo $address_row['phone']; ?></div>
                                    <div class="address-card__row-content"><?php echo $address_row['additionalphone']; ?></div>
                                </div>
                                    <!-- <div class="address-card__row"><div class="address-card__row-title">Email Address</div>
                                    <div class="address-card__row-content">helena@example.com</div>
                                </div> -->
                                    <div class="address-card__footer"><a class="text-primary " href="#"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp; <a href="#" class="text-primary"><i class="fa fa-trash"></i> Remove</a></div>
                                </div>
                                </div>
                                    <div class="addresses-list__divider"></div>
                                <?php } ?>
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
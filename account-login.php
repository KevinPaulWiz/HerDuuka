<?php 
// session_start();
include 'assets/header.php';
include 'config/controller.php';
 ?>    	

		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="http://alipata.com/">Home    </a></li>
                    <li class="active"><?php echo $title; ?></li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2">Authentication</span>
                </h2>
                <!-- manufacturers -->

        <!-- //manufacturers -->
                <div class="page-content pb-5">
                    <div class="row ">
                        <?php echo $Error; ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
                    <div class="border col-sm-6 ">
                        <div class="col-sm-12">
                        <h3>Create an account</h3>
                        <div class="bg-dark text-white font-weight-bold form-group p-2 col-sm-12">
                            <span class="col-sm-12">Your Personal Details</span>
                        </div>
                            <div class="col-sm-6 pl-0 pr-0 form-group">
                                <label for="emmail_register">First Name <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="text" required="" class="form-control" placeholder="First Name" id="fname" name="fname">
                            </div>
                            <div class="col-sm-6 pr-0 form-group">
                                <label for="emmail_register">Last Name <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="text" required="" class="form-control" placeholder="Last Name" id="lname" name="lname">
                            </div>
                             <div class="col-sm-12 pl-0 pr-0 form-group">
                                <label for="emmail_register">Email address <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="email" required="" class="form-control" placeholder="E-mail" id="emmail" name="email">
                            </div>
                            <div class="col-sm-12 pl-0 pr-0 form-group">
                                <label for="emmail_register">Telephone <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="text" required="" class="form-control" placeholder="Telephone" id="phone" name="phone">
                            </div>
                            <div class="bg-dark text-white font-weight-bold form-group p-2 col-sm-12">
                            <span class="col-sm-12">Your Password</span>
                            </div>
                            <div class="col-sm-6 pl-0 pr-0 form-group">
                                <label for="password">Password <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="password" required="" class="form-control" placeholder="Password" id="password" name="password">
                            </div>
                            <div class="col-sm-6 pr-0 form-group">
                                <label for="emmail_register">Password Confirm <span class="text-danger font-weight-bold"> *</span></label>
                                <input type="password" required="" class="form-control" placeholder="Password Confirm" id="Confirm">
                            </div>
                             <div class="bg-dark text-white font-weight-bold form-group p-2 col-sm-12">
                            <span class="col-sm-12">Newsletter </span>
                            </div>
                            <div class="col10"><div class="fi-w _cb _ha"><input class="cb" type="checkbox" value="1" id="fi-newsletter" name="newsletter" checked /> <label class="lbl" for="fi-newsletter"> I want to receive Alipata Newsletters with the best deals and offers</label><p class="-fs14"> </p></div></div>
                           
                            <div class="col-sm-12 pl-0 pr-0 form-group">
                                <!-- <p class="col-sm-6">I have read and agree to the Terms & Conditions </p> -->
                                <button type="submit" name="add_customers"  class="button btn btn-primary col-sm-12 p-0"><i class="fa fa-user"></i> Create an account</button>
                            </div>
                        </div>
                    </div>
                </form>
                        <div class="col-sm-6">
                            <div class="box-border">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>">
                                <h3>Already registered?</h3>
                                <label for="emmail_login">Email address</label>
                                <input required="" placeholder="Email address" name="email" type="text" class="form-control" id="emmail_login">
                                <label for="password_login">Password</label>
                                <input required="" placeholder="Password" name="password" type="password" class="form-control" id="password_login">
                                <p class="forgot-pass"><a href="Forgot-password">Forgot your password?</a></p>
                                <button name="login" type="submit" class="button p-3"><i class="fa fa-lock"></i> Sign in</button >

                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
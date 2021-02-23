<?php 
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
                    <span class="page-heading-title2">SELL NOW ON ALIPATA AND
START MAKING MONEY</span>
                </h2>
                
                <div class="row p-3">

                    <!-- Main Content -->
                    <div class="col-md-9 col-main bg-dafault">
                <div class="page-content pb-5">
                    <div class="row ">
                        <?php echo $Error; ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>"   enctype="multipart/form-data" >
                <div class="row">
                        
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Tabs Bordered Justified</h4> -->
 <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item active">
                                            <a href="sell-center" class="nav-link">
                                              <!--  <i class="fa fa-check-circle "></i> --> Seller Account <i class="fa fa-angle-double-right "></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b2"  class="nav-link ">
                                                <!--  <i class="fa fa-check-circle "></i>  -->Business Information <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Payment Details <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Summary
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane p-4 active" id="home-b2">
                                 <h3 class="pb-4">Add Seller (<span class="text-danger"> * </span> fields are Mandatory)</h3>         
  <div class="form-group row">
    <label for="contact_fname" class="col-sm-2 col-form-label text-right">First Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="fname" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" required class="col-sm-2 col-form-label text-right">Last Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" required class="col-sm-2 col-form-label text-right">Shop Name  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="shopname" placeholder="Shop Name ">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label text-right">Reffered By</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="refferedby_email" placeholder="Email Address">
      <span class="small text-default" style="color:#777;">who advised you to join Alipata? (Put their Email Address)</span>
    </div>
  </div>

<div class="form-group row">
    <label for="email"  class="col-sm-2 col-form-label text-right">Email Address  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="email" required class="form-control" name="CompanyEmail" placeholder="Email Address">
    </div>
  </div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Contact Phone No.  <span class="text-danger"> *</span></label>
    <!-- <div class="col-sm-1 p-0 m-0">
      <input type="email" class="form-control" readonly="" value="+256">
    </div> -->
     <div class="col-sm-10">
      <input type="text" class="form-control" name="contact" placeholder="Contact Phone Number">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="password" required class="form-control"  id="password1" name="password" placeholder="*******">
      <span class="small text-default" style="color:#777;">Atleast 8 characters containing a capital letter, a low letter and a numeric character</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Re-type Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="password" required class="form-control"  id="password2" name="" placeholder="Re-type Password ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Terms &amp; Conditions  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="checkbox" name="agree_on_terms" class="float-left "  id="signup_agreements_policy" value="1">
<!-- <span class="help-block help-block-column"> -->
  <label class="inline" for="signup_agreements_policy pb-2">&nbsp;I have read and accepted the Terms of Alipata</label><a href="#" data-modalprint="true" class="text-primary"> Policy </a>
<!-- </span> -->
    </div>
  </div>
  
  <button type="submit" name="add_seller" class="nav-link btn btn-info float-right">
                                                Continue
                                            </button>

                                        </div>
   
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
               
                    
                </form>
                    </div>
                </div>
                </div>

                 <!-- Sidebar -->
                 <div class="col-md-3  pl-5">
                     <div class="col-sidebar ">
                        <!-- Block  tags-->
                        <div class="block-sidebar block-sidebar-tags">
                           <div class="span2 box-highlighted p-3">
        <h3 class="highlighted">FAQs</h3>
        <ul class="link-list">
            <li  class="list-group-item">
            <a data-toggle="collapse" href="#signup-faq-2" class="text-primary">
                What should I use as First Name and Last Name?            </a>
            <div class="collapse" id="signup-faq-2">
                <p>Use the First and Last name of the company´s primary contact.</p>            </div>
        </li>
            <li  class="list-group-item">
            <a data-toggle="collapse" href="#signup-faq-3" class="text-primary">
                What email address is required during the registration?            </a>
            <div class="collapse" id="signup-faq-3">
                <p>Your email address is used to sign in to your Seller Center account, so you can only use it for one account. You are not allowed to use the same email address on other accounts listed on the Seller Center.</p>            </div>
        </li>
    </ul>    </div>
                        </div><!-- Block  tags-->
                    </div><!-- Sidebar -->
                 </div>
                    
                </div>
            </div>


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
     <!-- password-script -->
  <script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  <!-- //password-script -->
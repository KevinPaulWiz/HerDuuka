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
                <?php 
                if (isset($_REQUEST['ALeKk01Aq9LKlrq4_B0fiQ'])) {
                $ALeKk01Aq9LKlrq4_B0fiQ=$_REQUEST['ALeKk01Aq9LKlrq4_B0fiQ'];
                switch ($ALeKk01Aq9LKlrq4_B0fiQ) {
                case 'uHSZ06KXuAE':
                uHSZ06KXuAE();
                # code...
                break;

                default:
                echo "the link is not activated!";
                # code...
                break;
                }
                # code...

                }else{

                }

            
function uHSZ06KXuAE(){
    $token_id=$_REQUEST['verify_email'];
    // echo $token_id;
    $submitteddate=date("D dS M,Y h:i a");
include 'config/connection.php';
$sql = "SELECT  verify_token FROM shops WHERE verify_token='$token_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE shops SET is_verified='1', modified='$submitteddate' WHERE verify_token='$token_id'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    ?>

          <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Tabs Bordered Justified</h4> -->

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item active">
                                            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Seller Account
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                Business Information
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Payment Details
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane p-4 " id="home-b2">
                                 <h3 class="pb-4">Add Seller (<span class="text-danger"> * </span> fields are Mandatory)</h3>         
  <div class="form-group row">
    <label for="contact_fname" class="col-sm-2 col-form-label text-right">First Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-2 col-form-label text-right">Last Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" class="col-sm-2 col-form-label text-right">Shop Name  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="shopname" placeholder="contact_title">
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
    <label for="email" class="col-sm-2 col-form-label text-right">Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="*******">
      <span class="small text-default" style="color:#777;">Atleast 8 characters containing a capital letter, a low letter and a numeric character</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Re-type Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="" placeholder="Re-type Password ">
      <!-- <span class="small text-default" style="color:#777;">Atleast 8 characters containing a capital letter, a low letter and a numeric character</span> -->
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Terms &amp; Conditions  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input type="hidden"  name="agree_on_terms" value="" class="float-left"><input type="checkbox" name="agree_on_terms" id="signup_agreements_policy" value="1">
<span class="help-block help-block-column"><label class="inline" for="signup_agreements_policy">I have read and accepted the Terms of Alipata</label><a href="/user/signup/tcagreementcontent/page/79" data-modalprint="true"> Policy </a></span>
    </div>
  </div>
  
  <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link btn btn-info float-right">
                                                Next
                                            </a>

                                        </div>
    <div class="tab-pane p-4 active" id="profile-b2">
      <h3 class="pb-4">Add Business Information</h3>   
        <div class="form-group row">
        <label for="contact_fname" class="col-sm-3 col-form-label text-right">Legal Form </label>
        <div class="col-sm-9">
        <!-- <input type="text" class="form-control" name="contact_fname" placeholder="First Name"> -->
        <select class="form-control" name="LegalForm">
            <option value="">-Select-</option>
            <option value="Limited Liability">Limited Liability</option>
            <option value="PUblic Company">PUblic Company</option>
            <option value="No minimum capital, unlimited liability of partners, non-business">No minimum capital, unlimited liability of partners, non-business</option>
        </select>
        </div>
        </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-3 col-form-label text-right">Company Address 1 </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="CompanyAddress1" placeholder="Company Address 1">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-3 col-form-label text-right">Company Address 2 </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="CompanyAddress2" placeholder="Company Address 2 ">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" class="col-sm-3 col-form-label text-right">Shop Logo</label>
    <div class="col-sm-9">
     <input type="file" class="form-control" name="ShopLogo" placeholder="Company Address 2 ">
      <span class="small text-default" style="color:#777;">Only images are allowed.</span>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="contact_title" class="col-sm-3 col-form-label text-right">Country <span class="text-danger">*</span></label>
    <div class="col-sm-9">
     <select class="form-control" name="Country">
            <?php
           include 'admin/config/connection.php';
                $sql = "SELECT  code, name 
                        FROM countries
                        ";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                
                            <option selected="UG" value="<?php echo $sub['code'] ?>"><?php  echo $sub['name'];?></option>
<?php   } ?>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-3 col-form-label text-right">City / Town</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="City" placeholder="City / Town">
      <!-- <span class="small text-default" style="color:#777;">who advised you to join Alipata? (Put their Email Address)</span> -->
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-sm-3 col-form-label text-right">Postal / Zip Code  </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="ZipCode" placeholder="Postal / Zip Code">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">Company Registration Document Upload  </label>
    <div class="col-sm-9">
      <input type="file" class="form-control " name="reg_doc_details" placeholder="phone">
      <span class="small text-default" style="color:#777;">Allowed types are images, PDF files and MS Document</span>
    </div>
  </div>

<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label">Email Address </label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="email" placeholder="Email Address">
    </div>
  </div>
<div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">Tax Identification Number  </label>
    <div class="col-sm-9">
      <input type="text" class="form-control " name="TaxIdentificationNumber" placeholder="Tax Identification Number ">
      <!-- <span class="small text-default" style="color:#777;">Allowed types are images, PDF files MS Document</span> -->
    </div>
  </div>
<div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">VAT Information File </label>
    <div class="col-sm-9">
      <input type="file" class="form-control " name="VATInformationFile" placeholder="Tax Identification Number ">
      <span class="small text-default" style="color:#777;">Allowed types are images, PDF files and MS Document</span>
    </div>
  </div>

<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Number of SKU </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="SKUCategory" placeholder="SKU Category  ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Number of SKU </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="NumberofSKU" placeholder="Number of SKU ">
    </div>
  </div>
  <a href="#messages-b2" data-toggle="tab" aria-expanded="true" class="nav-link btn btn-info float-right">
                                                Next
                                            </a>
                                        </div>
                                        <div class="tab-pane p-4" id="messages-b2">
                         <h3 class="pb-4">Add Payment</h3>                    
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Account Name <span class="text-right"> *</span> </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="AccountName" placeholder="Account Name  ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">IBAN </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="IBAN" placeholder="IBAN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">SWIFT </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="SWIFT" placeholder="SWIFT ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Mobile Money Registrated Name <span class="text-danger">*</span> </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="MMRN" placeholder="Mobile Money Registrated Name ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Account Nr. \ Mobile Money Nr. </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="BankAccount" placeholder="Bank Account Nr. \ Mobile Money Nr. ">
       <span class="small text-default" style="color:#777;">Your payment will only be made to the above account / Mobile Money Number depending on what details you put below</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Name / Service Provider MTN </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="BankName" placeholder="Bank Name / Service Provider MTN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Registrated MTN Number (BVN) </label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="RegistratedMTNNumber" placeholder="Registrated MTN Number (BVN) ">
    </div>
  </div>

  <button type="submit" name="add_seller" class="nav-link btn btn-info float-right">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
    <?php
    // echo "<h5>Your email address has been verified successfully.</h5>"; 

    echo "<a href='seller' class='btn btn-sm btn-outline-light ml-1'>Login</a>"; 

    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}else{
    echo "<b class='text-center float-left h4 p-0 m-0 text-danger'> <i class='fa fa-ban text-center'>ERROR:</i></b> <h4 class='text-danger pr-2'> You have clicked on the wrong link, please check your email and try again.</h4>";
}
 ?>
                  
                        <?php } ?>
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
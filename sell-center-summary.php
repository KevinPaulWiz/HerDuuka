<?php 
include 'assets/header.php'; 
//include 'config/controller.php'; 
?>      
<?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_payment_details'])) {
     $fname=addslashes($_POST['fname']);
     $lname=addslashes($_POST['lname']);
     $shopname=addslashes($_POST['shopname']);
     $refferedby_email=addslashes($_POST['refferedby_email']);
     $email=addslashes($_POST['email']);
     $contact=$_POST['contact'];
     /*Pasword Cryprtion*/
        $pswdcrypt='^%#?&}^*?!1I/]';
        $pswrd = $pswdcrypt.$_POST['password'].$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $password1= md5(crypt($pswrd2,RM));
     /*Pasword Cryprtion*/
     $agree_on_terms=addslashes($_POST['agree_on_terms']);
     $LegalForm=addslashes($_POST['LegalForm']);
     $CompanyAddress1=addslashes($_POST['CompanyAddress1']);
     $CompanyAddress2=addslashes($_POST['CompanyAddress2']);
     // $ShopLogo=addslashes($_POST['ShopLogo']);
     $Country=addslashes($_POST['Country']);
     $City=addslashes($_POST['City']);
     $ZipCode=addslashes($_POST['ZipCode']);
     $reg_doc_details=addslashes($_POST['reg_doc_details']);
     $CompanyEmail=$_POST['CompanyEmail'];
     $TaxIdentificationNumber=addslashes($_POST['TaxIdentificationNumber']);
     $VATInformationFile=addslashes($_POST['VATInformationFile']);
     $SKUCategory=addslashes($_POST['SKUCategory']);
     $NumberofSKU=addslashes($_POST['NumberofSKU']);
     $AccountName=addslashes($_POST['AccountName']);
     $IBAN=addslashes($_POST['IBAN']);
     $SWIFT=addslashes($_POST['SWIFT']);
     $MMRN=addslashes($_POST['MMRN']);
     $BankAccount=addslashes($_POST['BankAccount']);
     $BankName=addslashes($_POST['BankName']);
     $RegistratedMTNNumber=addslashes($_POST['RegistratedMTNNumber']);
     $submittedby=addslashes($_POST['submittedby']);
     

    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    $stat_date=date('Y-m-d');
        $token = md5(uniqid(mt_rand()));

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // All of them empty
    
    $sql = "UPDATE `shops` SET `AccountName`='$AccountName',`IBAN`='$IBAN',`SWIFT`='$SWIFT',`MMRN`='$MMRN',`BankAccount`='$BankAccount',`BankName`='$BankName',`RegistratedMTNNumber`='$RegistratedMTNNumber',`modified`='$submitteddate'  WHERE verify_token='".$_SESSION['verified_token']."'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
     // use exec() because no results are returned
    $conn->exec($sql);
  
    // echo a message to say the UPDATE succeeded
    $Error= $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    $Error= $sql . "<br>" . $e->getMessage();
    }
  }
}
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
                      
                <div class="row">
                        
                        <div class="col-xl-6">
  
<?php 
include 'config/connection.php';
$sql = "SELECT  * FROM shops WHERE  verify_token='".$_SESSION['verified_token']."'";
$result = $conn->query($sql);
$row_seller = $result->fetch_assoc();
 ?>
          <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Tabs Bordered Justified</h4> -->

                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item active">
                                            <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                               <i class="fa fa-check-circle "></i> Seller Account <i class="fa fa-angle-double-right "></i>
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="sell-center-business-information?ALeKk01Aq9LKlrq4_B0fiQ=uHSZ06KXuAE&verify_email=<?php echo $_SESSION['verified_token']; ?>"  class="nav-link ">
                                                 <i class="fa fa-check-circle "></i> Business Information <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="sell-center-payment-details" >
                                                <i class="fa fa-check-circle "></i>   Payment Details <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                         <li class="nav-item active">
                                            <a href="sell-center-summary"  class="nav-link">
                                                <i class="fa fa-check-circle "></i> Summary
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">


<div class="tab-pane p-4 active" id="messages-b2">
<form method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>"   enctype="multipart/form-data" >
    
    <div class="box-border  bg-light rounded">

        <h4 class="pb-2 text-uppercase font-weight-bold border-bottom">Add Seller (<span class="text-danger"> * </span> fields are Mandatory)</h3>         
  <div class="form-group row pt-3">
    <label for="contact_fname" class="col-sm-2 col-form-label text-right">First Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="text" value="<?php echo $row_seller['fname']; ?>"  required class="form-control" name="fname" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" required class="col-sm-2 col-form-label text-right">Last Name <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="text" value="<?php echo $row_seller['lname']; ?>"  class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" required class="col-sm-2 col-form-label text-right">Shop Name  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="text" value="<?php echo $row_seller['shopname']; ?>"  class="form-control" name="shopname" placeholder="Shop Name ">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label text-right">Reffered By</label>
    <div class="col-sm-10">
      <input readonly="" type="text" value="<?php echo $row_seller['refferedby_email']; ?>"  class="form-control" name="refferedby_email" placeholder="Email Address">
      <span class="small text-default" style="color:#777;">who advised you to join Alipata? (Put their Email Address)</span>
    </div>
  </div>

<div class="form-group row">
    <label for="email"  class="col-sm-2 col-form-label text-right">Email Address  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="email" value="<?php echo $row_seller['CompanyEmail']; ?>"  required class="form-control" name="CompanyEmail" placeholder="Email Address">
    </div>
  </div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Contact Phone No.  <span class="text-danger"> *</span></label>
    <!-- <div class="col-sm-1 p-0 m-0">
      <input readonly="" type="email" class="form-control" readonly="" value="+256">
    </div> -->
     <div class="col-sm-10">
      <input readonly="" type="text" value="<?php echo $row_seller['contact']; ?>"  class="form-control" name="contact" placeholder="Contact Phone Number">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="password" required class="form-control"  id="password1" name="password" placeholder="*******">
      <span class="small text-default" style="color:#777;">Atleast 8 characters containing a capital letter, a low letter and a numeric character</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Re-type Password  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="password" required class="form-control"  id="password2" name="" placeholder="Re-type Password ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Terms &amp; Conditions  <span class="text-danger"> *</span></label>
    <div class="col-sm-10">
      <input readonly="" type="checkbox"  <?php if ($row_seller['agree_on_terms']=="1") { echo "checked"; } ?> name="agree_on_terms" id="signup_agreements_policy" value="1">
<span class="help-block help-block-column"><label class="inline" for="signup_agreements_policy">I have read and accepted the Terms of Alipata</label><a href="/user/signup/tcagreementcontent/page/79" data-modalprint="true"> Policy </a></span>
    </div>
  </div>
     <h4 class="pb-2 text-uppercase font-weight-bold border-bottom">Add Business Information</h4>   
        <div class="form-group row pt-3">
        <label for="contact_fname" class="col-sm-3 col-form-label text-right">Legal Form </label>
        <div class="col-sm-9">
        <select class="form-control" readonly name="LegalForm">
            <option value="">-Select-</option>
            <option <?php if ($row_seller['LegalForm']=="Limited Liability") { echo "selected"; } ?> value="Limited Liability">Limited Liability</option>
            <option  <?php if ($row_seller['LegalForm']=="PUblic Company") { echo "selected"; } ?> value="PUblic Company">PUblic Company</option>
            <option  <?php if ($row_seller['LegalForm']=="No minimum capital, unlimited liability of partners, non-business") { echo "selected"; } ?> value="No minimum capital, unlimited liability of partners, non-business">No minimum capital, unlimited liability of partners, non-business</option>
        </select>
        </div>
        </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-3 col-form-label text-right">Company Address 1 </label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['CompanyAddress1']; ?>" class="form-control" name="CompanyAddress1" placeholder="Company Address 1">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-3 col-form-label text-right">Company Address 2 </label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['CompanyAddress2']; ?>" class="form-control" name="CompanyAddress2" placeholder="Company Address 2 ">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" class="col-sm-3 col-form-label text-right">Shop Logo</label>
    <div class="col-sm-1">
      <img width="60" src="<?php echo $row_seller['ShopLogo']; ?>">
    </div>
    <div class="col-sm-8">
     <input readonly="" type="file" value="<?php echo $row_seller['ShopLogo']; ?>" class="form-control" name="ShopLogo" placeholder="Company Address 2 ">
      <span class="small text-default" style="color:#777;">Only images are allowed.</span>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="contact_title" class="col-sm-3 col-form-label text-right">Country <span class="text-danger">*</span></label>
    <div class="col-sm-9">
     <select class="form-control" readonly name="Country">
            <?php
           include 'admin/config/connection.php';
                $sql = "SELECT  code, name 
                        FROM countries
                        ";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      
                foreach ($subcat as $sub) {
                 ?>
                 
                            <option <?php if ($row_seller['Country']==$sub['code']) { echo "selected"; } ?>   value="<?php echo $sub['code']; ?>"><?php  echo $sub['name'];?></option>
<?php   } ?>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-3 col-form-label text-right">City / Town</label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['City']; ?>" class="form-control" name="City" placeholder="City / Town">
      <!-- <span class="small text-default" style="color:#777;">who advised you to join Alipata? (Put their Email Address)</span> -->
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-sm-3 col-form-label text-right">Postal / Zip Code  </label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['ZipCode']; ?>" class="form-control" name="ZipCode" placeholder="Postal / Zip Code">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">Company Registration Document Upload  </label>
     <div class="col-sm-1">
     <a class="h1" title="Download Document" download="<?php echo $row_seller['reg_doc_details']; ?>" href="<?php echo $row_seller['reg_doc_details']; ?>" ><i class="fa fa-download"></i></a>
    </div>
    <div class="col-sm-8">
      <input readonly="" type="file" class="form-control " name="reg_doc_details" >
      <span class="small text-default" style="color:#777;">Allowed types are images, PDF files and MS Document</span>
    </div>
  </div>

<!-- <div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label">Email Address </label>
    <div class="col-sm-9">
      <input readonly="" type="email" class="form-control" name="email" placeholder="Email Address">
    </div>
  </div> -->
<div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">Tax Identification Number  </label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['TaxIdentificationNumber']; ?>" class="form-control " name="TaxIdentificationNumber" placeholder="Tax Identification Number ">
      <!-- <span class="small text-default" style="color:#777;">Allowed types are images, PDF files MS Document</span> -->
    </div>
  </div>
<div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label text-right">VAT Information File </label>
    <div class="col-sm-1">
     <a class="h1" title="Download Document" download="<?php echo $row_seller['VATInformationFile']; ?>" href="<?php echo $row_seller['VATInformationFile']; ?>" ><i class="fa fa-download"></i></a>
    </div>
    <div class="col-sm-8">
      <input readonly="" type="file" class="form-control " name="VATInformationFile" placeholder="Tax Identification Number ">
      <span class="small text-default" style="color:#777;">Allowed types are images, PDF files and MS Document</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">SKU Category</label>
    <div class="col-sm-9">
      <input readonly="" type="text" value="<?php echo $row_seller['SKUCategory']; ?>" class="form-control" name="SKUCategory" placeholder="SKU Category  ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Number of SKU </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['NumberofSKU']; ?>"  name="NumberofSKU" placeholder="Number of SKU ">
    </div>
  </div>

                        <h4 class="pb-2 text-uppercase font-weight-bold border-bottom">Add Payment details</h4>                    
<div class="form-group row pt-3">
    <label for="email" class="col-sm-3 col-form-label text-right">Account Name <span class="text-right"> *</span> </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['AccountName']; ?>" name="AccountName" placeholder="Account Name  ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">IBAN </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['IBAN']; ?>" name="IBAN" placeholder="IBAN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">SWIFT </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['SWIFT']; ?>" name="SWIFT" placeholder="SWIFT ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Mobile Money Registrated Name <span class="text-danger">*</span> </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['MMRN']; ?>" name="MMRN" placeholder="Mobile Money Registrated Name ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Account Nr. \ Mobile Money Nr. </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['BankAccount']; ?>" name="BankAccount" placeholder="Bank Account Nr. \ Mobile Money Nr. ">
       <span class="small text-default" style="color:#777;">Your payment will only be made to the above account / Mobile Money Number depending on what details you put below</span>
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Bank Name / Service Provider MTN </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['BankName']; ?>" name="BankName" placeholder="Bank Name / Service Provider MTN ">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-right">Registrated MTN Number (BVN) </label>
    <div class="col-sm-9">
      <input readonly="" type="text" class="form-control" value="<?php echo $row_seller['RegistratedMTNNumber']; ?>" name="RegistratedMTNNumber" placeholder="Registrated MTN Number (BVN) ">
    </div>
  </div>

  <!-- <button type="submit" name="add_payment_details" class="nav-link btn btn-info float-right">Submit </button> -->
                                        </form>
                                        </div>
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
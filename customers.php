<?php   include 'main/header.php'; ?>

        <div class="content-body">

            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
               <!--  <li class="breadcrumb-item">
                    <a href="#">Components</a>
                </li> -->
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>
    </div>
       <?php
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_customers'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $password_customers=$_POST['password'];
    $newsletter=$_POST['newsletter'];
    $status=$_POST['status'];
    $become_seller=$_POST['become_seller'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $seller=$_POST['seller'];
    $Postcode=$_POST['Postcode'];
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $region=$_POST['region'];
    $storename=$_POST['storename'];
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename =  time() . "_" .$_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "assets/media/image/manufactures/".$filename;
    $target_file = $filepath . basename($_FILES["file_img"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $year=date("Y");
    $month=date("M");
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
    include 'config/connection.php';
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `customers`(`fname`, `lname`, `address`, `address2`, `city`, `Postcode`, `country`, `region`, `phone`, `email`, `password`, `date_entered`, ` newsletter`, ` status`, `seller`, `storename`, `stat_date`, `month`, `year`, `submittedby`) VALUES ('$fname','$lname','$address','$address2','$city','$Postcode','$country','$region','$telephone','$email','$password_customers','$submitteddate','$newsletter','$status','$seller','$storename','$stat_date','$month','$year','$submittedby')";
    // use exec() because no results are returned
    $conn->exec($sql);
    move_uploaded_file($filetmp, $filepath);
    // $Error= "New record created successfully";
       echo "<script type=\"text/javascript\">
              alert(\"Record has been added successfully.\");
              window.location = \"\"
            </script>";
    }
catch(PDOException $e)
    {
        // $sql . "<br>" . $e->getMessage();
    $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <b>Error:</b> '".$e->getMessage()."'
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='ti-close'></i>
                        </button>
                    </div>";
    }
}
// }
?>
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                             <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                                <?php echo $Error; ?>
                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>
                                    
                                </legend> <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="add_customers" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                            </div>
                            </fieldset>
                           
                            <!-- <div class="border-bottom col-md-12"></div> -->
                            <ul class="nav nav-tabs mb-3 col-md-12" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">Address</a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">Links</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                     <h3>Customer Details</h3>
                                     <fieldset class="border-bottom border-top  m-2 p-2">
                                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label "><b class="text-danger">*</b> First Name </label>
                            <div class="col-sm-9">
                                <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="First Name">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b> Last Name </label>
                            <div class="col-sm-9">
                                <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b> E-Mail </label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="E-Mail ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b> Telephone </label>
                            <div class="col-sm-9">
                                <input type="text" name="telephone" class="form-control" id="inputEmail3" placeholder="Telephone">
                            </div>
                        </div>
                                     </fieldset>
                       <h3>Password</h3>
                        <fieldset class="border-bottom border-top  m-2 p-2">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b> Password </label>
                            <div class="col-sm-9">
                                <input type="Password" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                            </div>
                                </div>
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b> Confirm Password </label>
                            <div class="col-sm-9">
                                <input type="Password" class="form-control" id="inputEmail3" placeholder=" Confirm Password ">
                            </div>
                                </div>
                       </fieldset>
                                     </fieldset>
                       <h3>Other</h3>
                        <fieldset class="border-bottom border-top  m-2 p-2">
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b>  Newsletter </label>
                            <div class="col-sm-9">
                                <select name="newsletter" id="input-newsletter" class="form-control">
                                <option value="1">Enabled</option>
                                <option value="0" selected="selected">Disabled</option>
                                </select>
                            </div>
                                </div>
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"><b class="text-danger">*</b>  Status </label>
                            <div class="col-sm-9">
                            <select name="status" id="input-status" class="form-control">
                            <option value="1" selected="selected">Enabled</option>
                            <option value="0">Disabled</option>
                            </select>
                            </div>
                                </div>
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"> Become a seller </label>
                            <div class="col-sm-9">
                            <div class="col-sm-10">
                            <label class="radio-inline">
                            <input type="radio" name="become_seller" value="0" checked="checked" id="add_document">
                            No</label>
                            <label class="radio-inline">
                            <input type="radio" name="become_seller" value="1" id="remove_document">
                            Yes</label>
                            </div>
                            </div>
                                </div>
                                 <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right"> Seller Store Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="sellername" class="form-control" id="inputEmail3" placeholder="Seller Store Name">
                            </div>
                        </div>
                       </fieldset>
                   </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Address 1 <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Address 1 ">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Address 2 </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="address2" id="inputEmail3" placeholder="Address 2 ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">City </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="city" id="inputEmail3" placeholder="City">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Postcode </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="Postcode" id="inputEmail3" placeholder="Postcode">
                            </div>
                        </div>
                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Country </label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="JAN"> </div> -->
                                <select name="country" class=" form-control select2">
                            <option>Select</option>
                            <?php 
                            $sql = "SELECT * FROM countries ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                             ?>
                            <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        <?php } ?>
                            </select>
                        </div>
                    </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Region / State </label>
                            <div class="col-sm-9">
                                <input type="text" name="region" class="form-control" id="inputEmail3" placeholder="Region / State">
                            </div>
                        </div>
                             
                </div>

                
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Manufacturer </label>
                            <div class="col-sm-9">
                            <select class=" form-control select2">
                            <option>Select</option>
                            <?php 
                            $sql = "SELECT * FROM manufacturer ORDER BY manufacturer_id DESC";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                             ?>
                            <option value="<?php echo $row['manufacturer_id'] ?>"><?php echo $row['name'] ?></option>
                        <?php } ?>
                            </select>


                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Categories </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Categories">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Product Image </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputEmail3" placeholder="Images">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Related Products </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Related Products">
                            </div>
                        </div>
                         <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                            </div>
                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
</form>

                </div>
            </div>

        </div>
    </div>

 
            </div>

    <?php   include 'main/footer.php'; ?>
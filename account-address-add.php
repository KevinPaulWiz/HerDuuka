<?php 
// session_start();
include 'assets/header.php';
include 'config/controller.php';
 ?>    	

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit_form'])){
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $customerid=$_SESSION['customerid'];
      $region=$_POST['region'];
      $city=$_POST['city'];
      $address=$_POST['address'];
      $other_info=$_POST['other_info'];
      $default_address=$_POST['default_address'];
      $phoneno=$_POST['phoneno'];
      $add_phone=$_POST['add_phone'];
      include 'config/connection.php';
      try{

        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        // setting the PDO error exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if (!empty($default_address)) {
            $update="UPDATE addresses SET default_address='0' WHERE default_address='1'";
            $conn->exec($update);
            $sql="INSERT INTO `addresses`(`fname`,`lname`,`region`,`address`,`customerid`,`other_information`,`city`,`phone`,`additionalphone`,`default_address`)VALUES ('$fname','$lname','$region','$address','$customerid','$other_info','$city','$phoneno','$add_phone','$default_address')";
        }else{
        $sql="INSERT INTO `addresses`(`fname`,`lname`,`region`,`address`,`customerid`,`other_information`,`city`,`phone`,`additionalphone`,`default_address`)VALUES ('$fname','$lname','$region','$address','$customerid','$other_info','$city','$phoneno','$add_phone','$default_address')";
        }
            //use exec() becuase no results are returned
            $conn->exec($sql);
            $Error= "new record entered sucessfully";
             echo "<script type=\"text/javascript\">
                window.location = \"account-addresses\"
                </script>";
      }
      catch(PDOException $e){
    echo $sql . "<br>".$e->getMessage(); 
       }
       $conn = null;
    }
}

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
                     <div class="col-sm-9">
                            <div class="box-border pt-0 mt-0">
                                <h3 class="pt-0 mt-3">Add New Address</h3>
                                <br>
                           
                                <div class="card">
                                <div class="card-divider">
                                    
                                </div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 ">
                                            <div class="form-row">
                                                <div class="form-group  col-md-6"><label for="address-first-name">First Name</label> <input type="text" name="fname" class="form-control" id="address-first-name" placeholder="Please enter first name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">Last Name</label>
                                                     <input type="text" name="lname" class="form-control" id="address-last-name" placeholder="please enter last name">
                                                 </div>

                                                <div class="form-group  col-md-6"><label for="address-first-name">Phone</label> <input type="text" class="form-control" id="address-first-name" name="phoneno" placeholder="Please enter phone number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">Addition Phone</label>
                                                     <input type="text" class="form-control" id="address-last-name" name="add_phone" placeholder="Please enter your addition number">
                                                 </div>
                                                     <div class="form-group  col-md-6"><label for="address-first-name">Region</label> <input type="text" name="region" class="form-control" id="address-first-name" placeholder="Please enter region">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">City</label>
                                                     <input type="text" name="city" class="form-control" id="address-last-name" placeholder="Please enter city">
                                                 </div>
                                                     <div class="form-group  col-md-12"><label for="address-first-name">Address</label> <input type="text" class="form-control" id="address-first-name" name="address" placeholder="Please enter address">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="address-last-name">Other Information</label>
                                                     <textarea class="form-control" id="address-last-name" name="other_info" placeholder="Please enter other information"></textarea>
                                                 </div>
                            </div>
                                
                                <div class="form-group mt-3 col-md-12"><div class="form-check"><span class="input-check form-check-input"><span class="input-check__body">
                                  <input class="input-check__input" value="1" type="checkbox" name="default_address" id="default-address"> 
                                  <span class="input-check__box"></span> <span class="input-check__icon"> </span></span></span><label class="form-check-label" for="default-address">Set as my default address</label>
                                </div>
                            </div>
                                <div class="form-group mb-0 pt-3 mt-3 col-md-12"><button type="submit" name="submit_form" class="btn btn-primary pl-5 pr-5 active">Save</button></div>
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


		</main><!-- end MAIN -->

		<?php include 'assets/footer.php'; ?>
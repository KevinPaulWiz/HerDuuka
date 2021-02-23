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
      $phoneno=$_POST['phoneno'];
      $add_phone=$_POST['add_phone'];
      include 'config/connection.php';
      try{

        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        // setting the PDO error exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO `addresses`(`fname`,`lname`,`region`,`address`,`customerid`,`other_information`,`city`,`phone`,`additionalphone`)VALUES ('$fname','$lname','$region','$address','$customerid','$other_info','$city','$phoneno','$add_phone')";
            //use exec() becuase no results are returned
            $conn->exec($sql);
            echo "<script type=\"text/javascript\">
                    alert('Update successfully');
                window.location = \"\"
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
                     <div class="col-sm-9">
                            <div class="box-border pt-0 mt-0">
                                <h3 class="pt-0 mt-3">security</h3>
                                <br>
                           
                                <div class="card">
                                <div class="card-divider">

                                </div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 ">
                                            <div class="form-row">
                                                 
                                                <div class="form-group  col-md-12"><label for="address-first-name">Old password</label> <input type="text" name="fname" class="form-control" id="address-first-name" placeholder="Please enter first name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="address-last-name">New password</label>
                                                     <input type="text" name="lname" class="form-control" id="address-last-name" placeholder="please enter last name">
                                                 </div>

                                                     <div class="form-group  col-md-12"><label for="address-first-name">confirm password</label> <input type="text" class="form-control" id="address-first-name" name="email" placeholder="Please enter  email">
                                                </div>
                                               
                            </div>

                              
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="submit_form" class="btn active btn-default pl-3 pr-3">edit</button>
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


        </main><!-- end MAIN -->

        <?php include 'assets/footer.php'; ?>
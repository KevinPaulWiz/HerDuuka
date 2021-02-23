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
      $email=$_POST['email'];
      $addtionalphone=$_POST['addtionalphone'];
      $gender=$_POST['gender'];
      $DOB=$_POST['DOB'];
          /*Image*/
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "images/customers/".date('si') . "_" .$filename;
    /*Image*/
      include 'config/connection.php';
      try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        // setting the PDO error exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        if (empty($filetmp)) {
        $sql="UPDATE  `customers` SET `fname`='$fname',`lname`='$lname',`phone`='$phoneno' ,`addtionalphone`='$addtionalphone' ,`sex`='$gender',`DOB`='$DOB' WHERE customerid='".$_SESSION['customerid']."'";
            $conn->exec($sql);
// $Error="New record added";
        }else{
            $sql="UPDATE  `customers` SET `fname`='$fname',`lname`='$lname',`phone`='$phoneno' ,`addtionalphone`='$addtionalphone' ,`sex`='$gender' ,`DOB`='$DOB' ,`imageName`='$filename' ,`imagePath`='$filepath' WHERE customerid='".$_SESSION['customerid']."'";
                move_uploaded_file($filetmp, $filepath);
        }
            $conn->exec($sql);
            //use exec() becuase no results are returned
             echo "<script type=\"text/javascript\">
                window.location = \"account-profile\"
                </script>";
      }
      catch(PDOException $e){
    $Error= $sql . "<br>".$e->getMessage(); 
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
      <?php echo include 'assets/side-menu.php'; ?>

                    </div>
                     <div class="col-sm-9">
                            <div class="box-border pt-0 mt-0 p-0 m-0">
                                <h3 class="p-2 mt-0 pl-4 border-bottom">Edit  Profile</h3>
                                <br>
                           
                                <div class="card p-4 pl-5 pr-5 pt-0 pb-0 row">
                                <div class="card-divider">

                                </div>
                                <div class="card-body card-body--padding--2">
                                    <div class=" no-gutters">
                                        <div class="col-12 ">
                                            <div class="form-row">
                                                      <div class="d-flex mb-3 pl-3">
                                                <figure class="mr-3 ">
                                                    <img class="rounded" src="<?php if(!empty($row_customer['imagePath'])){ echo $row_customer['imagePath']; }else{ echo 'images/media/user.png';

                                                    } ?>" alt="..." width="100">
                                                </figure>
                                                <div>
                                                    <p><?php echo $row_customer['fname']." ".$row_customer['lname']; ?></p>
                                                    <input  name ="file_img" class="btn btn-primary pl-1 pt-2 mr-2 float-left" type="file" >
                                                    <a href="" class="text-primary active"><i class="fa fa-trash"></i> Remove Logo</a>
                                                </div>
                                            </div>
                                                <div class="form-group  col-md-6"><label for="address-first-name">First Name</label> <input type="text" name="fname" class="form-control" id="address-first-name" value="<?php echo $row_customer['fname']; ?>" placeholder="Please enter first name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">Last Name</label>
                                                     <input type="text" name="lname" class="form-control" id="address-last-name" value="<?php echo $row_customer['lname']; ?>" placeholder="please enter last name">
                                                 </div>

                                                     <div class="form-group  col-md-6"><label for="address-first-name">Email</label> <input type="text" class="form-control" id="address-first-name" name="email" value="<?php echo $row_customer['email']; ?>"  placeholder="Please enter  email">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="address-last-name">Telephone</label>
                                                     <input type="text" class="form-control" id="address-last-name" name="phoneno" value="<?php echo $row_customer['phone']; ?>" placeholder="Please enter your telephone number">
                                                 </div>
                                                <div class="form-group col-md-3">
                                                    <label for="address-last-name">Alt Telephone</label>
                                                     <input type="text" class="form-control" id="address-last-name" name="addtionalphone" value="<?php echo $row_customer['addtionalphone']; ?>" placeholder="Alt Telephone">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">Date of Birth</label>
                                                     <input type="date" class="form-control pt-0" id="address-last-name" name="DOB" value="<?php echo $row_customer['DOB']; ?>" placeholder="Please enter your telephone number">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">Gender</label>
                                                     <select class="form-control" id="fi-gender" name="gender"><option value="" selected="">Please select</option>
                                                      <option value="M"  <?php if ($rows['sex']="M") {
                                                     echo "Selected";
                                                   } ?>>Male</option>
                                                      <option value="F" <?php if ($rows['sex']="F") {
                                                     echo "Selected";
                                                   } ?>>Female</option>
                                                    </select>
                                                 </div>
                                              
                                                 
                            </div>

                                <div class="form-group mb-0 pt-3 col-sm-12"><button type="submit" name="submit_form" class="btn btn-deflaut active pl-5 pr-5 ">edit</button></div>
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
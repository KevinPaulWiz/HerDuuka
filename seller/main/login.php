<!-- Register Config --> 
          <?php 
          // include 'config/connection.php';
          if(isset($_POST['submit_user'])){
            // variables
            $year=date("Y");
            $date=date('D dS M,Y h:i a');
            $fullname=$_POST['name'];
            // $lastname=$_POST['lastname'];
            $UserName=$_POST['UserName'];
            $role=$_POST['role'];
            $Email=$_POST['email'];
            $stat_date=date("Y-m-d"); 
            $user_pass=$_POST['password'];
            $submittedby=$_SESSION['id'];
           $pswdcrypt='^%#?&*';
           $pswrd = $pswdcrypt.$user_pass.$pswdcrypt;
           $pswrd1=md5($pswrd);
           $pswrd2 = sha1($pswrd1);
           $pswrd3= crypt($pswrd2,RM);
           $submitteddate=date("D dS M,Y h:i a");
            $user_id = $_SESSION['id'];
            //maximum ID
            $sql_max = "SELECT  MAX(id) as maximum FROM users ";
            $result = $conn->query($sql_max);
            $val = $result -> fetch_array();
            $max_no = $val['maximum']+1;
            $action="Added new User  of $max_no";

          // echo "$Date";
 // echo "$date";
include 'config/connection.php'; 
$sql = "SELECT * FROM `users` WHERE Email='$Email' AND Password='$pswrd3' WHERE deleted!='-1'";
    $results = $conn->query($sql);
    // output data of each row
   if ($results->num_rows < 1) {


            $sql = "INSERT INTO `users`(`Date`, `fullname`, `UserName`, `Email`,`Role`, `Password`,submittedby,stat_date,month,year) VALUES ('$date','$fullname','$UserName','$Email','$role','$pswrd3','$submittedby','$stat_date','$month','$year')";

// $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`) VALUES ('$user_id','$action','$submitteddate')";
// $stmt->execute($log_sql);
            if ($conn->query($sql) === TRUE) {
              $Error= "<div align='center' class='alert alert-success alert-dismissible fade in text-center' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>New record created successfully <i class='fa fa-check'></i></strong>
                  </div>";
            } else {
                // $Error= "Error: " . $sql . "<br>" . $conn->error;
               $Error= "<div align='center' class='alert alert-danger alert-dismissible in text-center' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                  Error :'".$sql . "<br>" . $conn->error."';
                  </div>";
            }

        }else{
          $Error= "<div align='center' class='alert alert-danger alert-dismissible fade in text-center' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>The Email Address Entered Already Exists <i class='fa fa-check'></i></strong>
                  </div>";
          }
        }
?>
<!-- //Register Config -->





<!-- Login Config -->
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
  if (isset($_POST['signin'])) { 
include 'config/connection.php'; 
  // echo "Connected";
  $ipadd=$_SERVER['REMOTE_ADDR']; 
  $date=date("D dS M,Y");
  $email = $_POST["email"];
  $user_pass = $_POST["user_pass"];
  $pswdcrypt='^%#?&*';
  $pswrd = $pswdcrypt.$user_pass.$pswdcrypt;
  $pswrd1=md5($pswrd);
  $pswrd2 = sha1($pswrd1);
  $pswrd3= crypt($pswrd2,RM);
   $action="Signed in";
// Login Code
  $submitteddate=date('D dS M,Y h:i a');
$sql_query = "SELECT * FROM `users` WHERE (Email = '$email' || UserName = '$email') AND  Password = '$pswrd3' AND deleted !='-1'";
$result = $conn->query($sql_query);
// output data of each row
while($row = $result->fetch_assoc()) {
$email_4m_DB = $row["Email"];
$id = $row["id"];
$password_4m_DB = $row["Password"]; 
}
if ($result->num_rows > 0) {
/*----Login Details ---*/

    // Retrive last login
    $sql = "SELECT logindate FROM users WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) {
      $lastactivity=$row['logindate'];
    }} 
    // Retrive last login
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET lastactivity='$lastactivity' WHERE id='$id'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
/*----Login Details ---*/

// Login Code
include 'config/connection.php';
$sql = "UPDATE users SET logindate='$submitteddate', ip='$ipadd' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// $myfile = fopen("date.txt", "r") or die("Unable to open file!");
// date_default_timezone_set("Africa/Nairobi");
// //  //Key verification
//  $myfile = fopen("date.txt", "r") or die("Unable to open file!");
//         $filedate= (fgets($myfile));
//         fclose($myfile);

//  $time1= (date('m/d/Y', strtotime($filedate. ' + 30 days')));
//     $time2=date('m/d/Y');
//     $seconds = (strtotime($time1) - strtotime($time2));
//     $days = ($seconds / 86400);
//     if ($days<=0){
//         echo "<script>location.href='lock'</script>";
//     }else{
$stat_date=date('Y-m-d');
session_start();
$_SESSION['secondarysch']='true';
$_SESSION['Email']=$email;
$_SESSION['user_pass']='true';
$_SESSION['id']=$id;

$user_id=$_SESSION['id'];
$submitteddate=date("D dS M,Y h:i a");
$date=date("D dS M,Y");
$time=date("h:i a");
$action="ID no. <b>$user_id</b> Signed-In on <b>$date</b> at <b>$time</b>  ";
// History logs
$log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$submitteddate','$stat_date  ')";$conn->query($log_sql);
// dashboard
echo "<script> location.href='dashboard'; </script>";
    }else{
$Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
<strong><i class='fa fa-exclamation-circle' aria-hidden='true'></i>  Error:</strong> Wrong Email / Username or Password...!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <i class='fa fa-remove'></i>
  </button>
</div>";
}
// Login Code end---------->
      }
    }
 ?>

















 <!-- Updating the profile -->
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
  if (isset($_POST['update_record'])) {
        include 'config/connection.php'; 
        // $Error= "Connected";
        $ipadd=$_SERVER['REMOTE_ADDR']; 
        $date=date('D dS M,Y h:i a');
        $submitteddate=date('D dS M,Y h:i a');
        $new_email = $_POST["new_email"];
        $UserName = $_POST["UserName"];
        $name = $_POST["name"];
        $new_role = $_POST["new_role"];
        // $email = $_POST["email"];
        $user_pass = $_POST["user_pass"];
        $pswdcrypt='^%#?&*';
        $pswrd = $pswdcrypt.$user_pass.$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $pswrd3= crypt($pswrd2,RM);
        // Login Code
        $filetmp = $_FILES["image"]["tmp_name"];
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $target_dir = "dist/img/profile/";
        $target_file = $target_dir .date('si') . "_" .  basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $stat_date=date("Y-m-d"); 
$user_id = $_SESSION['id'];
        $action="ID no. <b>$user_id</b> Updated their Profile on <b>$date</b> ";
// Checking if the password is empty Or Not
        if ($user_pass!='' AND $filetmp!='') {
          // $Error= 'Not empty';
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                // $Error= "File is an image - " . $check["mime"] . ".";
              // Allow certain file formats
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
                  $Error= "Sorry, only JPG, JPEG & PNG  files are allowed.";
              }else{
                // Updating Code
            try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `fullname`='$name',`UserName`='$UserName',`Email`='$new_email',`Password`='$pswrd3',`img_name`='$filename',`img_type`='$filetype',`img_path`='$target_file',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$row_id'";
             $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$submitteddate','$stat_date')";
$conn->exec($log_sql);
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
             if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            // $Error= $stmt->rowCount() . " records UPDATED successfully";
              echo "<script> location.href='logout'; </script>";
      }
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }

                // Updating Code
              }
            } else {
                $Error= "File is not an image.";
                $uploadOk = 0;
            }
        }elseif($user_pass!='' AND $filetmp==''){
          // $Error= 'password Not Empty';
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `fullname`='$name',`UserName`='$UserName',`Email`='$new_email',`Password`='$pswrd3',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$row_id'";
            // Prepare statement
             $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$submitteddate','$stat_date')";
$conn->exec($log_sql);
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            // $Error= $stmt->rowCount() . " records UPDATED successfully";
            echo "<script> location.href='logout'; </script>";
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }

        }elseif ($user_pass=='' AND $filetmp=='') {
          // $Error= 'Both Are Empty';
            try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `fullname`='$name',`UserName`='$UserName',`Email`='$new_email',`Password`='$pswrd3',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$row_id'";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
             $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$submitteddate','$stat_date')";
$conn->exec($log_sql);
            // $Error= $stmt->rowCount() . " records UPDATED successfully";
            echo "<script> location.href=''; </script>";
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }
        }elseif ($user_pass=='' AND $filetmp=!'') {
          // $Error= 'image Not Empty';
           // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                // $Error= "File is an image - " . $check["mime"] . ".";
              // Allow certain file formats
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
                  $Error= "Sorry, only JPG, JPEG & PNG  files are allowed.";
              }else{
                // Updating Code
            try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `fullname`='$name',`UserName`='$UserName',`Email`='$new_email',`img_name`='$filename',`img_type`='$filetype',`img_path`='$target_file',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$row_id'";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
             $log_sql= "INSERT INTO `history_log`(`user_id`, `action`, `date`, `stat_date`) VALUES ('$user_id','$action','$submitteddate','$stat_date')";
$conn->exec($log_sql);
            // echo a message to say the UPDATE succeeded
             if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            // $Error= $stmt->rowCount() . " records UPDATED successfully";
              echo "<script> location.href=''; </script>";
      }
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }

                // Updating Code
              }
            } else {
                $Error= "File is not an image.";
                $uploadOk = 0;
            }
        }
// Checking if the image is empty Or Not
       



      //   // Check if image file is a actual image or fake image
      //       $check = getimagesize($_FILES["image"]["tmp_name"]);
      //       if($check !== false) {
      //           // $Error= "File is an image - " . $check["mime"] . ".";
      //         // Allow certain file formats
      //         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      //         && $imageFileType != "gif" ) {
      //             $Error= "Sorry, only JPG, JPEG & PNG  files are allowed.";
      //         }else{
      //           // Updating Code
      //       try {
      //       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      //       // set the PDO error mode to exception
      //       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //       $sql = "UPDATE `users` SET `fullname`='$name',`UserName`='$UserName',`Email`='$new_email',`Role`='$new_role',`Password`='$pswrd3',`img_name`='$filename',`img_type`='$filetype',`img_path`='$target_file',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$row_id'";
      //       // Prepare statement
      //       $stmt = $conn->prepare($sql);
      //       // execute the query
      //       $stmt->execute();
      //       // echo a message to say the UPDATE succeeded
      //        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      //   // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
      //       $Error= $stmt->rowCount() . " records UPDATED successfully";
      // }
      //       }
      //       catch(PDOException $e)
      //       {
      //       $Error= $s+ql . "<br>" . $e->getMessage();
      //       }

      //           // Updating Code
      //         }
      //       } else {
      //           $Error= "File is not an image.";
      //           $uploadOk = 0;
      //       }

      }
    }
 ?>

 <!-- Updating the profile -->
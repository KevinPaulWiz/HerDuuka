
<?php 
session_start();
if (isset($_POST['login'])) {
$email=$_POST['email'];
 /*Pasword Cryprtion*/
        $pswdcrypt='^%#?&}^*?!1I/]';
        $pswrd = $pswdcrypt.$_POST['password'].$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $new_pswd= md5(crypt($pswrd2,RM));
     /*Pasword Cryprtion*/

include '../admin/config/connection.php';
$sql = "SELECT * FROM `shops` WHERE CompanyEmail='$email' AND password='$new_pswd'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// // echo "Found"; 
// while($row = $result->fetch_assoc()) {
// $shop_id =$row["shop_id"];
// $email = $row["email"];
// }
// session_start();
// $_SESSION['Companyemail']=$email;
// $_SESSION['shop_id']=$shop_id;
// $_SESSION['active'] = 1;
// echo "<script type=\"text/javascript\">
// window.location = \"dashboard\"
// </script>";

    /*******************************Approval**********************/
$result = $conn->query("SELECT * FROM `shops` WHERE CompanyEmail='$email' AND password='$new_pswd' AND status='Approved'");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$shop_id =$row["shop_id"];
$email = $row["email"];
            }
session_start();
$_SESSION['Companyemail']=$email;
$_SESSION['shop_id']=$shop_id;
$_SESSION['active'] = 1;
echo "<script type=\"text/javascript\">
window.location = \"dashboard\"
</script>";
} else {
     $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> Your account has not been Approved...!</div>";
}
    /*******************************Approval**********************/
}else{
     $Error= "<div class='alert alert-danger'>
<button type='button' class='close' data-dismiss='alert'>×</button>
<b> <i class='fa fa-exclamation-circle '></i><b>Error:</b> </b> Wrong Email Address or Password...!</div>";
// $Error=$new_pswd;
}
}
?>



<?php
include 'config/connection.php';
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_products'])) {
    $productname=addslashes($_POST['productname']);
    $product_description=addslashes($_POST['product_description']);
    $meta=addslashes($_POST['meta']);
    $meta_desc=addslashes($_POST['meta_desc']);
    $productstag=addslashes($_POST['productstag']);
    $meta_keywords=addslashes($_POST['meta_keywords']);
    $productstag=addslashes($_POST['productstag']);
    $Model=addslashes($_POST['Model']);
    $SKU=addslashes($_POST['SKU']);
    $UPC=addslashes($_POST['UPC']);
    $EAN=addslashes($_POST['EAN']);
    $JAN=addslashes($_POST['JAN']);
    $ISBN=addslashes($_POST['ISBN']);
    $MPN=addslashes($_POST['MPN']);
    $Price=addslashes($_POST['Price']);
    $Minimum_qty=addslashes($_POST['Minimum_qty']);
    $subtract=addslashes($_POST['subtract']);
    $shipping=addslashes($_POST['shipping']);
    $stock_status_id=addslashes($_POST['stock_status_id']);
    $Available_date=addslashes($_POST['Available_date']);
    $length=addslashes($_POST['length']);
    $width=addslashes($_POST['width']);
    $height=addslashes($_POST['height']);
    $Weight=addslashes($_POST['Weight']);
    $length_class_id=addslashes($_POST['length_class_id']);
    $weight_class_id=addslashes($_POST['weight_class_id']);
    $Related_Products=addslashes($_POST['Related_Products']);
    $manufacturer_id=addslashes($_POST['manufacturer_id']);
    $status=addslashes($_POST['status']);
    $shop_id=$_SESSION['shop_id'];
    $Discount=addslashes($_POST['discount']);
    // Directory for the images
    include 'config/connection.php';
    $category_id=$_POST['category_id'];
    $sql = "SELECT * FROM category WHERE category_id='$category_id'";
    $result = $conn->query($sql);
    // output data of each row 
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {

        $directory=$row['dir']; 
        $dir = $directory."/".$shop_id;
        mkdir($dir);
        $dir =$row['dir']."/".$shop_id;
}

    $year=date("Y");
    $month=date("M");
    $stat_date=date('Y-m-d');
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;
include 'config/connection.php';
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `products`(`product_name`,`shop_id`, `product_description`, `supplier_id`, `category_id`, `parent_id`, `availablecolor`, `discount`, `color`, `ranking`, `entered_by`, `entered_date`, `meta`, `meta_desc`, `productstag`, `Model`, `SKU`, `UPC`, `JAN`, `ISBN`, `MPN`, `Location`, `Price`, `quantity`, `Minimum_qty`, `subtract`, `shipping`, `stock_status_id`, `Available_date`, `length`, `width`, `height`, `length_class_id`, `Weight`, `weight_class_id`, `manufacturer_id`, `status`,  `image_name`,  `image_path`, `statdate`, `month`, `year`) VALUES ('$productname','$shop_id','$product_description','$supplier_id','$category_id','$parent_id','$availablecolor','$discount','$color','$ranking','$submittedby','$submitteddate','$meta','$meta_desc','$productstag','$Model','$SKU','$UPC','$JAN','$ISBN','$MPN','$Location','$Price','$quantity','$Minimum_qty','$subtract','$shipping','$stock_status_id','$Available_date','$length','$width','$height','$length_class_id','$Weight','$weight_class_id','$manufacturer_id','$status','$filename','$filepath','$stat_date','$month','$year')";
    // use exec() because no results are returned
    $conn->exec($sql);
    // move_uploaded_file($filetmp, $filepath);

    // $Error= "New record created successfully";
       echo "<script type=\"text/javascript\">
              alert(\"Record has been added successfully.\");
              window.location = \"\"
            </script>";
    include 'config/connection.php';
/*************************Adding Products*****************************/
    /*Product ID*/
    $sql = "SELECT MAX(product_id) AS maximum FROM products";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $product_id=$row['maximum'];
     // File upload configuration 
    $targetDir =  $dir."/".$shop_id; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['file_img']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['file_img']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename(rand(100, time()).$_FILES['file_img']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
            $targetFilePath2 = "../admin/".$targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file_img"]["tmp_name"][$key], $targetFilePath2)){ 
                 $targetFilePath = addslashes($targetDir. $fileName); 
                    // Image conn insert sql 
                    $insertValuesSQL .= "('".$product_id."','".$fileName."','".$targetFilePath."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['file_img']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['file_img']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
                include 'config/connection.php'; 
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO product_images (product_id, file_name, image_path, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                // $statusMsg = "Sorry, there was an error uploading your file."; 
                  // $statusMsg =  "Error: " . $Insert . "<br>" . $conn->error;
                 $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <b>Error:</b> '".$conn->error."'
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <i class='ti-close'></i>
                        </button>
                    </div>";
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    }
     /*************************//*Adding Products*****************************/
    }
catch(PDOException $e)
    {
       $Error= $sql . "<br>" . $e->getMessage();
    // $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
    //                     <b>Error:</b> '".$e->getMessage()."'
    //                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    //                         <i class='ti-close'></i>
    //                     </button>
    //                 </div>";
    }
// }
}
?>
  
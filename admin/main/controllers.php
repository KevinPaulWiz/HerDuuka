<!-- Discounts -->
<?php 
                    if (isset($_POST['add_discount'])) {
                        $product_id = addslashes($_POST['product_id']);
                        $quantity = addslashes($_POST['quantity']);
                        $price = addslashes($_POST['price']);
                        $priority = addslashes($_POST['priority']);
                        $startDate = addslashes($_POST['startDate']);
                        $endDate = addslashes($_POST['endDate']);
                        $submitteddate = date('Y-m-d');
                        try{
                            include 'config/connection.php';
                            $results = $conn->query("INSERT INTO product_discount(product_id,quantity,price,date_start, date_end) VALUES('$product_id','$quantity','$price','$date_start','$date_end') ");
                            if ($results) {
                                echo "<script type=\"text/javascript\"> alert(\"Record has been added successfully.\"); window.location = \"\"</script>"; 
                            }else{
                                $Error= "<div class='alert alert-danger alert-dismissible' role='alert'> <strong><i class='fa fa-exclamation-circle' aria-hidden='true'></i>  Error:</strong>  Discount Details not Submitted<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <i class='fa fa-remove'></i> </button> </div>"; 
                            }
                        }catch(PDOException $e){
                            $Error= "<div class='alert alert-danger alert-dismissible' role='alert'> <strong><i class='fa fa-exclamation-circle' aria-hidden='true'></i>  Error:</strong>  '".$e->getMessage()."'<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <i class='fa fa-remove'></i> </button> </div>";
                        }
                    }
                 ?>
<!-- categories -->
<?php 
if(isset($_POST['update_categories'])){
$category_name=addslashes($_POST['category_name']);
// $cat_img=RemoveSpecialChar($_POST['category_name']);
$description=addslashes($_POST['description']);             
$file_img=$_POST['file_img']; 
$parent=addslashes($_POST['parent']);
$meta_tag_title=addslashes($_POST['meta_tag_title']); 
$meta_keywords=addslashes($_POST['meta_keywords']);
$status=addslashes($_POST['status']);
$keyword=addslashes($_POST['keyword']); 
$category_id=addslashes($_POST['category_id']);
// ;kjfglfdjml;dgkh
$filetmp = $_FILES["icon"]["tmp_name"];
$filename =  time() . "_" .$_FILES["icon"]["name"];
$filetype = $_FILES["icon"]["type"];
$filepath = "assets/media/image/icons/".$filename;
$target_file = $filepath . basename($_FILES["icon"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($parent!='') {
include 'config/connection.php';
// $sql = "SELECT category_id, dir FROM category WHERE category_id='$parent'";
$result = $conn->query("SELECT category_id, dir FROM category WHERE category_id='$parent'");
// output data of each row
$row = $result->fetch_assoc();
$directory=$row['dir'];
// $sqls = "SELECT MAX(category_id) AS maximum FROM category";
    $results = $conn->query("SELECT MAX(category_id) AS maximum FROM category");
    $row1 = $results->fetch_assoc();
$parent_id=$row1['maximum']+1;
$dir_db = $directory."/".$parent_id;
// $Error=$dir;
}else{
    $sql = "SELECT MAX(category_id) AS maximum FROM category";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $cat_img=$row['maximum']+1;
// $category_name = str_replace("'", '_', $category_name);
$dir_db = "assets/media/product/$cat_img";
// $Error='Not True'; 
}

// $Error= 'kjhkjh';

try {
    include 'config/connection.php';

$sql = "UPDATE `category` SET `parent`='$parent',`category_name`='$category_name',`description`='$description',`meta_tag_title`='$meta_tag_title',`meta_keywords`='$meta_keywords',`keyword`='$keyword',`status`='$status' WHERE category_id = '$category_id'";
$conn->query($sql);

if(!empty($filename)) {
    $imageUpdate = "UPDATE category SET picture = '$filepath' WHERE category_id = '$category_id' ";
    $conn->query($imageUpdate);
}
// }
// use exec() because no results are returned
// $conn->exec($sql_subcat);
/*Creating directory*/
mkdir($dir_db);
/*Creating directory*/
move_uploaded_file($filetmp, $filepath);


/*************************Adding Products*****************************/
    /*Product ID*/
       include 'config/connection.php'; 
    $sql = "SELECT MAX(category_id) AS maximum FROM category";
    $result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
    $category_id=$row1['maximum'];

    // path for the images
    $targetDir =  "assets/media/image/cat_banners/$category_id/"; 
    mkdir($targetDir);
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['file_img']['name']); 
    // if(!empty($fileNames)){ 
        foreach($_FILES['file_img']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename(rand(100, time()).$_FILES['file_img']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file_img"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image conn insert sql 
                    $insertValuesSQL .= "('".$category_id."','".$fileName."','".$targetFilePath."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['file_img']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['file_img']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
             
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO category_images (category_id, file_name, image_path, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                // $statusMsg = "Files are uploaded successfully.".$errorMsg; 
// $Error= "New record created successfully";

            }else{ 
                // $Error = "Sorry, there was an error uploading your file."; 
            } 
        } 
    // }else{ 
    //     $Error = 'Please select a file to upload.'; 
    // }
     /*************************//*Adding Products*****************************/
echo "<script type=\"text/javascript\">
alert(\"Record has been added successfully.\");
window.location = \"\"
</script>";
}
catch(PDOException $e)
{
// $sql . "<br>" . $e->getMessage();
$Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
<strong><i class='fa fa-exclamation-circle' aria-hidden='true'></i>  Error:</strong>  '".$e->getMessage()."'
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<i class='fa fa-remove'></i>
</button>
</div>";
}      


}
?>
<!-- //Cotegories -->


<?php
include 'config/connection.php';
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['update_products'])) {
    $productname=addslashes($_POST['productname']);
    $product_id=$_POST['product_id'];
    $product_description=$_POST['product_description'];
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
    $quantity=addslashes($_POST['quantity']);
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
    $shop_id=addslashes($_POST['shop_id']);
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
    $sql = "UPDATE `products` SET `shop_id`='$shop_id',`product_name`='$productname',`product_description`='$product_description',`supplier_id`='$supplier_id',`category_id`='$category_id',`parent_id`='$parent_id',`availablecolor`='$availablecolor',`discount`='$discount',`color`='$color',`ranking`='$ranking',`entered_by`='$submittedby',`entered_date`='$submitteddate',`meta`='$meta',`meta_desc`='$meta_desc',`productstag`='$productstag',`Model`='$Model',`SKU`='$SKU',`UPC`='$UPC',`JAN`='$JAN',`ISBN`='$ISBN',`MPN`='$MPN',`Location`='$Location',`Price`='$Price',`quantity`='$quantity',`Minimum_qty`='$Minimum_qty',`subtract`='$subtract',`shipping`='$shipping',`stock_status_id`='$stock_status_id',`Available_date`='$Available_date',`length`='$length',`width`='$width',`height`='$height',`length_class_id`='$length_class_id',`Weight`='$Weight',`weight_class_id`='$weight_class_id',`manufacturer_id`='$manufacturer_id',`image_name`='$filename',`image_path`='$filepath',`status`='$status' WHERE product_id = '$product_id'";

    // use exec() because no results are returned
    $conn->exec($sql);
    // move_uploaded_file($filetmp, $filepath);

    // $Error= "New record created successfully";
       echo "<script type=\"text/javascript\">
              alert(\"Record has been updated successfully.\");
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
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file_img"]["tmp_name"][$key], $targetFilePath)){ 
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

<?php
function RemoveSpecialChar($value){
$result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);
return $result;
}
include 'config/connection.php';
if(isset($_POST['submit_categories'])){
$category_name=addslashes($_POST['category_name']);
// $cat_img=RemoveSpecialChar($_POST['category_name']);
$description=addslashes($_POST['description']);             
$file_img=$_POST['file_img']; 
$parent=addslashes($_POST['parent']);
$meta_tag_title=addslashes($_POST['meta_tag_title']); 
$meta_keywords=addslashes($_POST['meta_keywords']);
$status=addslashes($_POST['status']);
$keyword=addslashes($_POST['keyword']); 
$category_id=addslashes($_POST['category_id']);
// ;kjfglfdjml;dgkh
$filetmp = $_FILES["icon"]["tmp_name"];
$filename =  time() . "_" .$_FILES["icon"]["name"];
$filetype = $_FILES["icon"]["type"];
$filepath = "assets/media/image/icons/".$filename;
$target_file = $filepath . basename($_FILES["icon"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($parent!='') {
include 'config/connection.php';
// $sql = "SELECT category_id, dir FROM category WHERE category_id='$parent'";
$result = $conn->query("SELECT category_id, dir FROM category WHERE category_id='$parent'");
// output data of each row
$row = $result->fetch_assoc();
$directory=$row['dir'];
// $sqls = "SELECT MAX(category_id) AS maximum FROM category";
    $results = $conn->query("SELECT MAX(category_id) AS maximum FROM category");
    $row1 = $results->fetch_assoc();
$parent_id=$row1['maximum']+1;
$dir_db = $directory."/".$parent_id;
// $Error=$dir;
}else{
    $sql = "SELECT MAX(category_id) AS maximum FROM category";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $cat_img=$row['maximum']+1;
// $category_name = str_replace("'", '_', $category_name);
$dir_db = "assets/media/product/$cat_img"; 
// $Error='Not True'; 
}

// $Error= 'kjhkjh';

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO category (category_name, description, picture, parent, meta_tag_title, meta_keywords, status, keyword, dir) VALUES ('$category_name', '$description', '$filepath', '$parent', '$meta_tag_title', '$meta_keywords', '$status', '$keyword', '$dir_db')";
// }
// use exec() because no results are returned
// $conn->exec($sql_subcat);
$conn->exec($sql);
/*Creating directory*/
mkdir($dir_db);
/*Creating directory*/
move_uploaded_file($filetmp, $filepath);


/*************************Adding Products*****************************/
    /*Product ID*/
       include 'config/connection.php'; 
    $sql = "SELECT MAX(category_id) AS maximum FROM category";
    $result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
    $category_id=$row1['maximum'];

    // path for the images
    $targetDir =  "assets/media/image/cat_banners/$category_id/"; 
    mkdir($targetDir);
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['file_img']['name']); 
    // if(!empty($fileNames)){ 
        foreach($_FILES['file_img']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename(rand(100, time()).$_FILES['file_img']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file_img"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image conn insert sql 
                    $insertValuesSQL .= "('".$category_id."','".$fileName."','".$targetFilePath."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['file_img']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['file_img']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
             
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO category_images (category_id, file_name, image_path, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                // $statusMsg = "Files are uploaded successfully.".$errorMsg; 
// $Error= "New record created successfully";

            }else{ 
                // $Error = "Sorry, there was an error uploading your file."; 
            } 
        } 
    // }else{ 
    //     $Error = 'Please select a file to upload.'; 
    // }
     /*************************//*Adding Products*****************************/
echo "<script type=\"text/javascript\">
alert(\"Record has been added successfully.\");
window.location = \"\"
</script>";
}
catch(PDOException $e)
{
// $sql . "<br>" . $e->getMessage();
$Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
<strong><i class='fa fa-exclamation-circle' aria-hidden='true'></i>  Error:</strong>  '".$e->getMessage()."'
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<i class='fa fa-remove'></i>
</button>
</div>";
}      


}
?>
<!-- //Cotegories -->




<?php
include 'config/connection.php';
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_products'])) {
    $productname=addslashes($_POST['productname']);
    $product_description=$_POST['product_description'];
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
    $quantity=addslashes($_POST['quantity']);
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
    $shop_id=addslashes($_POST['shop_id']);
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
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["file_img"]["tmp_name"][$key], $targetFilePath)){ 
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
        
   
<!-- manufacturers -->
<?php
 // if ($_SERVER["REQUEST_METHOD"] == "POST") {      
  if (isset($_POST['add_manafacturer'])) {
    $name=$_POST['name'];
    $sort_order=$_POST['sort_order'];
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
    $stat_date=date('Y-m-d');
    
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `manufacturer`( `name`, `image`, `sort_order`, `stat_date`, `month`, `year`, `submittedby`, `submitteddate`) VALUES ('$name','$filepath','$sort_order','$stat_date','$month','$year','$submittedby','$submitteddate')";
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
        <!-- //manufacturers -->



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




<!-- SUBMIT SUPPLIERS -->
<?php
    if(isset($_POST['submit_suppliers'])){
      $companyname=$_POST['companyname'];
           $contact_fname=$_POST['contact_fname'];             
     $contact_lname=$_POST['contact_lname'];
    $contact_title=$_POST['contact_title'];
    $address=$_POST['address']; 
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
     $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename =  time() . "_" .$_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "assets/media/image/suppliers/".$filename;
    $payment_method=$_POST['payment_method'];
    $discount_type=$_POST['discount_type'];
    $type_goods=$_POST['type_goods'];
    $discount_available=$_POST['discount_available'];
    $new_username=$_POST['username'];
      $new_password1=$_POST['password'];
      $special_char='k#%@!^2*]';
      $new_password2=md5($special_char.$new_password1.$special_char);
      $new_password3=sha1($new_password2);
      $new_password4=crypt($new_password3, SP);
      ;
    $year=date("Y");
    $month=date("M");
    $stat_date=date('Y-m-d');
    $submitteddate=date("D dS M,Y h:i a");
    $submittedby=$db_username;   
            include("connection.php");

             $sql = "INSERT INTO suppliers(companyname, contact_fname, contact_lname, contact_title, address, country, phone, email, image_path, image_name, payment_method, discount_type, type_goods, discount_available, username, password, statdate, month, year) VALUES ( '$companyname', '$contact_fname', '$contact_lname', '$contact_title', '$address', '$country', '$phone', '$email', '$filepath', '$filename', '$payment_method', '$discount_type', '$type_goods', '$discount_available', '$new_username', '$new_password4','$stat_date','$month','$year')";
       
    if (mysqli_query($conn, $sql)) { //refreshing
       move_uploaded_file($filetmp, $filepath);
        echo "<script type='text/javascript'>
        alert('Record saved'); 
        window.location='suppliers.php';
    </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); // refreshes page after submition or prevents looping
            }

    mysqli_close($conn);        

                }
                ?>

<!-- SUBMIT SUPPLIERS -->
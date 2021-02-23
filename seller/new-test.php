
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Multiple Images with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
</head>
<body>
<div class="jumbotron text-center">
    <h1>Upload Multiple Images with PHP</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>
<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'config/connection.php'; 
     
    // File upload configuration 
    // $targetDir = "uploads/"; 
// Directory for the images
    $category_id=$_POST['category_id'];
    $sql = "SELECT dir,category_id FROM category WHERE category_id='$category_id'";
    $result = $conn->query($sql);
    // output data of each row 
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $targetDir ="../admin/".$row['dir']."/";
        $image_path =$row['dir']."/";

        // $dir = $directory."/".$shop_id;
        // mkdir($dir);
        // $dir =$row['dir']."/".$shop_id;
        // $dir2 ="../admin/".$row['dir']."/".$shop_id;
        // $dir=$row['dir'];  
}
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
            $image_path = $image_path . $fileName; 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$product_id."','".$fileName."','".$targetFilePath."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO product_images (`product_id`, `file_name`, `image_path`, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 
?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Category <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                            <select name="category_id" required="" class=" form-control select2">
                            <option>Select</option>
                             <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='0'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);       
          foreach ($row as $rs) { ?>
            <?php
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                  <?php
                $sql = "SELECT *
                        FROM category
                        WHERE parent = '".$sub['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $new_sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                            <option value="<?php echo $new_sub['category_id'] ?>"><?php echo $rs['category_name']; echo ", ";  echo $sub['category_name']; echo " > "; echo $new_sub['category_name']; ?></option>
<?php   } ?>
<?php   } ?>
<?php   } ?>

                            </select>
                            </div>
                        </div>
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form>

    <div class="row">
      <?php
// Include the database configuration file
// Get images from the database
$query = $conn->query("SELECT * FROM product_images ORDER BY image_id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = $row["image_path"];
?>
    <?php echo $row['image_id']; ?>.<img src='../admin/<?php echo $imageURL; ?>' alt="<?php echo $imageURL; ?>" /><br>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 
    </div>
</div>
</body>
</html>
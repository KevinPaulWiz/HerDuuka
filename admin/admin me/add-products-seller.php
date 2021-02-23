<?php   include 'main/header.php'; ?>
<?php  // include 'main/controllers.php'; ?>
<?php
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
    $Price=$_POST['Price'];
    $quantity=$_POST['quantity'];
    $Minimum_qty=$_POST['Minimum_qty'];
    $subtract=$_POST['subtract'];
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
    $sql = "SELECT dir,category_id FROM category WHERE category_id='$category_id'";
    $result = $conn->query($sql);
    // output data of each row 
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
        $directory=$row['dir']; 
        $dir = $directory."/".$shop_id;
        mkdir($dir);
        $dir =$row['dir']."/".$shop_id;
        $dir2 ="../admin/".$row['dir']."/".$shop_id;
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
    $sqlMainQuery = "INSERT INTO `products`(`product_name`,`shop_id`, `product_description`, `supplier_id`, `category_id`, `parent_id`, `availablecolor`, `discount`, `color`, `ranking`, `entered_by`, `entered_date`, `meta`, `meta_desc`, `productstag`, `Model`, `SKU`, `UPC`, `JAN`, `ISBN`, `MPN`, `Location`, `Price`, `quantity`, `Minimum_qty`, `subtract`, `shipping`, `stock_status_id`, `Available_date`, `length`, `width`, `height`, `length_class_id`, `Weight`, `weight_class_id`, `manufacturer_id`, `status`,  `image_name`,  `image_path`, `statdate`, `month`, `year`) VALUES ('$productname','$shop_id','$product_description','$supplier_id','$category_id','$parent_id','$availablecolor','$discount','$color','$ranking','$submittedby','$submitteddate','$meta','$meta_desc','$productstag','$Model','$SKU','$UPC','$JAN','$ISBN','$MPN','$Location','$Price','$quantity','$Minimum_qty','$subtract','$shipping','$stock_status_id','$Available_date','$length','$width','$height','$length_class_id','$Weight','$weight_class_id','$manufacturer_id','$status','$filename','$filepath','$stat_date','$month','$year')";
        $conn->exec($sqlMainQuery);

        // $Error= "New record created successfully";
        echo "<script type=\"text/javascript\">
        alert(\"Record has been added successfully.\");
        window.location = \"\"
        </script>"; 
/*************************Adding Products*****************************/
    /*Product ID*/
    include 'config/connection.php';
    $sql = "SELECT MAX(product_id) AS maximum FROM products";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $product_id=$row['maximum'];
     // File upload configuration 
    $targetDir =  $dir."/".$shop_id; 
    $targetDir2 =  $dir2."/".$shop_id; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['file_img']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['file_img']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename(rand(100, time()).$_FILES['file_img']['name'][$key]); 
            $targetFilePath = $targetDir.$fileName; 
            $targetFilePath2 = $targetDir2.$fileName; 
             
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
                $Error = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                // $statusMsg = "Files are uploaded successfully.".$errorMsg;
                  // use exec() because no results are returned
      
            }else{ 
                // $statusMsg = "Sorry, there was an error uploading your file."; 
                  // $Error =  "Error: " . $Insert . "<br>" . $conn->error;
                 $Error= "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <b>Error:</b> '".$conn->error."'
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            x
                        </button>
                    </div>";
            } 
        }else{
             $Error = 'The Value is empty'; 
        } 
    }else{ 
        $Error = 'Please select a file to upload.'; 
    }
     /*************************//*Adding Products*****************************/
    }
catch(PDOException $e)
    {
       $Error= $sqlMainQuery . "<br>" . $e->getMessage();
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
        <!-- Modernizr -->
        <script src="../admin/assets/js/modernizr.min.js"></script>

        <!-- jQuery -->
        <script src="../admin/assets/js/jquery.min.js"></script>

        <!-- Moment -->
        <script src="../admin/assets/js/moment.min.js"></script>
        
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="../admin/assets/plugins/trumbowyg/ui/trumbowyg.min.css">
        <!-- END CSS for this page -->
                
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="../admin/assets/plugins/trumbowyg/ui/trumbowyg.min.css">
        <!-- END CSS for this page -->


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
                <li class="breadcrumb-item active" aria-current="page">Tab</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
            <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                    <?php echo $Error; ?>
                    <?php echo $statusMsg; ?>

                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>
                                    
                                </legend> <div class="col-md-12"> 
                            <h4 class="card-title float-left text-uppercase"><?php echo $title; ?> <small> (<span class="text-danger"> * </span> fields are Mandatory)</small></h4>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="add_products" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
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
                                       aria-controls="profile" aria-selected="false">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">Links</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Name <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="text" required="" name="productname" class="form-control" id="inputEmail3" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label text-right font-weight-bold">Description</label>
                            <div class="col-sm-9">
                                <!-- <textarea class="form-control" name="product_description" placeholder="Type Here...."></textarea> -->

                                        <textarea rows="3" class="form-control editor" name="product_description" id="editor" placeholder="Type Here...."></textarea>
                                        
                            </div>
                             
                        </div>
                       <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Title <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="text" required="" class="form-control" name="meta" id="inputEmail3" placeholder="Meta Tag Title">
                            </div>
                        </div>
                        
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Description</label>
                            <div class="col-sm-9">
                             <textarea class="form-control" id="inputEmail3" name="meta_desc" placeholder="Meta Tag Description"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Keywords</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="meta_keywords" id="inputEmail3" placeholder="Meta Tag Keywords"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Tags </label>
                        <div class="col-sm-9">
                        <input type="text" name="productstag" class="form-control" id="inputEmail3" placeholder="Product Tags">
                        </div>
                        </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Model <span class="text-danger font-weight-bold">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" required="" name="Model" name="" class="form-control" id="inputEmail3" placeholder="Model">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">SKU  
                                <!-- <figure class="avatar avatar-sm"> -->
                                        <span class="text-primary" title="Stock Keeping Unit" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span>
                                    <!-- </figure> -->
                                </label>
                            <div class="col-sm-9">
                                <input type="text" name="SKU" class="form-control" id="inputEmail3" placeholder="SKU">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">UPC  <span class="text-primary" title="Universal Product Code" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="UPC" class="form-control" id="inputEmail3" placeholder="UPC">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">EAN  <span class="text-primary" title="European Article Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="EAN" class="form-control" id="inputEmail3" placeholder="EAN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">JAN  <span class="text-primary" title="Japanese Article Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="JAN" class="form-control" id="inputEmail3" placeholder="JAN"> </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">ISBN  <span class="text-primary" title="International Standard Book Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="ISBN" class="form-control" id="inputEmail3" placeholder="ISBN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">MPN  <span class="text-primary" title="Manufacturer Part Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="MPN" class="form-control" id="inputEmail3" placeholder="MPN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Discount </label>
                            <div class="col-sm-9">
                                <input type="text" name="Discount" class="form-control" id="inputEmail3" placeholder="Discount">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Price </label>
                            <div class="col-sm-9">
                                <input type="text" name="Price" class="form-control" id="inputEmail3" placeholder="Price">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Quantity <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="number" value="1" min="1" required="" name="quantity" class="form-control" id="inputEmail3" placeholder="Quantity">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Minimum Quantity <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="number" value="1" min="1" required="" name="Minimum_qty" class="form-control" id="inputEmail3" placeholder="Minimum Quantity">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Color </label>
                            <div class="col-sm-9">
                                <input type="text" name="color" class="form-control" id="inputEmail3" placeholder="Color">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Subtract Stock </label>
                            <div class="col-sm-9">
                            <select name="subtract" id="input-subtract" class="form-control">
                                <option value="1" selected="selected">Yes</option>
                                <option value="0">No</option>
                            </select>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label class="col-sm-3 control-label font-weight-bold text-right">Requires Shipping</label>
                            <div class="col-sm-9">
                            <label class="radio-inline">                     
                            <input type="radio" name="shipping" value="1" checked="checked">
                            Yes
                            </label>
                            <label class="radio-inline">                     
                            <input type="radio" name="shipping" value="0">
                            No
                            </label>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Out Of Stock Status </label>
                            <div class="col-sm-9">
                               <select name="stock_status_id" id="input-stock-status" class="form-control">
                                <option value="2 - 3 Days">2 - 3 Days</option>
                                <option value="In Stock">In Stock</option>
                                <option value="NOT IN STOCK">NOT IN STOCK</option>
                                <option value="OUT OF STOCK">OUT OF STOCK</option>
                                <option value="PREORDER">PREORDER</option>
                                </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Date Available </label>
                            <div class="col-sm-9">
                                <input type="date" name="Available_date" class="form-control" id="inputEmail3" placeholder="Date Available
">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Dimensions (L x W x H) </label>
                            <div class="col-sm-3">
                                <input type="text" name="length" class="form-control" id="inputEmail3" placeholder="Length">
                            </div> <div class="col-sm-3">
                                <input type="text" name="width" class="form-control" id="inputEmail3" placeholder="Width">
                            </div> <div class="col-sm-3">
                                <input type="text" name="height" class="form-control" id="inputEmail3" placeholder="Height">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Length Class </label>
                            <div class="col-sm-9">
                               <select name="length_class_id" id="input-length-class" class="form-control">
                                <option value="1" selected="selected">Centimeter</option>
                                <option value="2">Millimeter</option>
                                <option value="3">Inch</option>
                                </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Weight </label>
                            <div class="col-sm-9">
                                <input type="text" name="Weight" class="form-control" id="inputEmail3" placeholder="Weight">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Weight Class </label>
                            <div class="col-sm-9">
                                <select name="weight_class_id" id="input-weight-class" class="form-control">
                                <!-- <option value="">Select</option> -->
                                <option value="Kilogram">Kilogram</option>
                                <option value="Gram">Gram</option>
                                <option value="Pound">Pound </option>
                                <option value="Ounce">Ounce</option>
                                </select>
                            </div>
                        </div>
                </div>

                
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Shop Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select required="" name="shop_id" id="input-weight-class" class="form-control select2" style="width: 100%;">
                                <option value="">-Select-</option>
                                    <?php           
                                    include 'config/connection.php';
                                    $sql = "SELECT shop_id,shopname,status FROM shops WHERE status='Approved' ";
                                    $query = $pdo->prepare($sql);
                                    $query->execute();
                                    $row = $query->fetchAll(PDO::FETCH_ASSOC);      
                                    foreach ($row as $rs) { ?>
                                    <option value="<?php echo $rs['shop_id']; ?>"><?php echo $rs['shopname']; ?></option>
                                    <?php } ?>                                
                                </select>
                            </div>
                        </div> -->
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
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Image </label>
                            <div class="col-sm-9">
                                <input type="file" required="" name="file_img[]" multiple="" class="form-control dropzone" id="inputEmail3" placeholder="Images">
                                <span class="small text-default" style="color:#777;">Allowed types are jpg, png, jpeg, gif and  below 1MB</span>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Status </label>
                            <div class="col-sm-9">
                                <select name="status" id="input-status" class="form-control">
                                <option value="1" selected="selected">Enabled</option>
                                <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Related Products </label>
                            <div class="col-sm-9">
                                <input type="text" name="Related_Products" class="form-control" id="inputEmail3" placeholder="Related Products">
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


<!-- <script src="../admin/assets/js/popper.min.js"></script> -->
<!-- <script src="../admin/assets/js/bootstrap.min.js"></script> -->

    <?php  include 'main/footer.php'; ?>
<script src="../admin/assets/js/detect.js"></script>
<script src="../admin/assets/js/fastclick.js"></script>
<script src="../admin/assets/js/jquery.blockUI.js"></script>
<script src="../admin/assets/js/jquery.nicescroll.js"></script>
<script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
<script src="../admin/assets/plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<!-- <script src="../admin/assets/js/pikeadmin.js"></script> -->
<!-- BEGIN Java Script for this page -->
<script src="../admin/assets/plugins/trumbowyg/trumbowyg.min.js"></script>
<script>
$(document).ready(function () {
    'use strict';
    $('#editor').trumbowyg();                           
}); 
</script>
<!-- END Java Script for this page -->
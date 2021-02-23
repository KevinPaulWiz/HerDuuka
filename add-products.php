<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>

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

                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>
                                    
                                </legend> <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Product Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="productname" class="form-control" id="inputEmail3" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label pull-right">Description</label>
                            <div class="col-sm-9">
                                <textarea  id="txtEditor" class="form-control" name="Description" placeholder="Type Here...."></textarea>
                            </div>
                             
                        </div>
                       <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Meta Tag Title <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="meta" id="inputEmail3" placeholder="Meta Tag Title">
                            </div>
                        </div>
                        
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Meta Tag Description</label>
                            <div class="col-sm-9">
                             <textarea class="form-control" id="inputEmail3" name="meta_desc" placeholder="Meta Tag Description"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Meta Tag Keywords</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name"> -->
                                <textarea class="form-control" name="meta_keywords" id="inputEmail3" placeholder="Meta Tag Keywords"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Product Tags </label>
                            <div class="col-sm-9">
                                <input type="text" name="productstag" class="form-control" id="inputEmail3" placeholder="Product Tags">
                            </div>
                        </div>
                             
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Model <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="Model" name="" class="form-control" id="inputEmail3" placeholder="Model">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">SKU </label>
                            <div class="col-sm-9">
                                <input type="text" name="SKU" class="form-control" id="inputEmail3" placeholder="SKU">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">UPC </label>
                            <div class="col-sm-9">
                                <input type="text" name="UPC" class="form-control" id="inputEmail3" placeholder="UPC">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">EAN </label>
                            <div class="col-sm-9">
                                <input type="text" name="EAN" class="form-control" id="inputEmail3" placeholder="EAN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">JAN </label>
                            <div class="col-sm-9">
                                <input type="text" name="JAN" class="form-control" id="inputEmail3" placeholder="JAN"> </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">ISBN </label>
                            <div class="col-sm-9">
                                <input type="text" name="ISBN" class="form-control" id="inputEmail3" placeholder="ISBN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">MPN </label>
                            <div class="col-sm-9">
                                <input type="text" name="MPN" class="form-control" id="inputEmail3" placeholder="MPN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Location </label>
                            <div class="col-sm-9">
                                <input type="text" name="Location" class="form-control" id="inputEmail3" placeholder="Location">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Price </label>
                            <div class="col-sm-9">
                                <input type="text" name="Price" class="form-control" id="inputEmail3" placeholder="Price">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Minimum Quantity </label>
                            <div class="col-sm-9">
                                <input type="text" name="Minimum_qty" class="form-control" id="inputEmail3" placeholder="Minimum Quantity">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Color </label>
                            <div class="col-sm-9">
                                <input type="text" name="color" class="form-control" id="inputEmail3" placeholder="Color">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Subtract Stock </label>
                            <div class="col-sm-9">
                            <select name="subtract" id="input-subtract" class="form-control">
                                <option value="1" selected="selected">Yes</option>
                                <option value="0">No</option>
                            </select>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label class="col-sm-3 control-label">Requires Shipping</label>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Out Of Stock Status </label>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Date Available </label>
                            <div class="col-sm-9">
                                <input type="date" name="Available_date" class="form-control" id="inputEmail3" placeholder="Date Available
">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Dimensions (L x W x H) </label>
                            <div class="col-sm-3">
                                <input type="text" name="length" class="form-control" id="inputEmail3" placeholder="Length">
                            </div> <div class="col-sm-3">
                                <input type="text" name="width" class="form-control" id="inputEmail3" placeholder="Width">
                            </div> <div class="col-sm-3">
                                <input type="text" name="height" class="form-control" id="inputEmail3" placeholder="Height">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Length Class </label>
                            <div class="col-sm-9">
                               <select name="length_class_id" id="input-length-class" class="form-control">
                                <option value="1" selected="selected">Centimeter</option>
                                <option value="2">Millimeter</option>
                                <option value="3">Inch</option>
                                </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Weight </label>
                            <div class="col-sm-9">
                                <input type="text" name="Weight" class="form-control" id="inputEmail3" placeholder="Weight">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Weight Class </label>
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
                       
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Category </label>
                            <div class="col-sm-9">
                            <select name="category_id" class=" form-control select2">
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Shop Name </label>
                            <div class="col-sm-9">
                                <select name="weight_class_id" id="input-weight-class" class="form-control">
                                <option value="">-Select-</option>
                                <option value="Kilogram">Kilogram</option>
                                <option value="Gram">Gram</option>
                                <option value="Pound">Pound </option>
                                <option value="Ounce">Ounce</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Product Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="file_img" class="form-control" id="inputEmail3" placeholder="Images">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Status </label>
                            <div class="col-sm-9">
                                <select name="status" id="input-status" class="form-control">
                                <option value="1" selected="selected">Enabled</option>
                                <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Related Products </label>
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

    <?php   include 'main/footer.php'; ?>
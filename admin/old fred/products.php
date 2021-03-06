<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>

       <?php 
          if (isset($_REQUEST['gy9TfG'])) {
              if ($_REQUEST['gy9TfG'] = "sKugd") {
                view();
              }else{
                header("Location:404.html");
              }
          }else if (isset($_REQUEST['ALeKk0'])) {
              if ($_REQUEST['ALeKk0'] = "sKugd") {
                update();
              }else if ($_REQUEST['ALeKk0'] = "e7fWx9") {
                view();
              }else{
                header("Location:404.html");
              }
          }else{
            ?>
               <div class="content-body">

            <div class="content">
        
     <div  class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>
         <div class="pr-3">
            <a href="add-products" class="btn btn-outline-primary active" title="Add Products" data-toggle="tooltip">
                <i class="fa fa-plus"></i>
            </a>
            <a href="javascript::void(0);" class="btn btn-outline-primary ml-2" title="Grid" data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
 <div class="x_panel">
                  <div class="x_title float-right col-md-12 p-2">
                    <h4 class="float-left text-uppercase"><i class="fa fa-list"></i> Product List</h4>
                     <!-- <button class="btn btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-plus-square"> </i> Add New User </button> -->
                    <!-- <h2>Students <small>Information</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content card card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Action</th>
                  <th>image</th>
                  <th>Product Name</th>
                  <th>Model</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php    
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `products` ORDER BY `products`.`product_id` DESC ";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['product_id'];
                  ?>
                <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                   <td>
                      <div class="dropdown ml-1">
                          <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-cog mr-1"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="products?gy9TfG=sKugd&LKlrq4_B0fiQ=<?php echo $id; ?>"><i class="fa fa-eye"> </i> View</a>
                            <a class="dropdown-item" href="products?ALeKk0=sKugd&LKlrq4_B0fiQ=<?php echo $id; ?>"><i class="fa fa-edit"> </i> Update</a>

                            <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleted" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                          </div>
                      </div>
                </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> 
              <?php
              $sql = "SELECT image_path FROM product_images WHERE product_id= '$id' LIMIT 1";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              ?>
                    <?php 
                    if ($row['image_path']!='') {
                      ?><img src="<?php echo $row['image_path']; ?>"  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span></td> 
                  <td><?php echo $rows['product_name']; ?></td>
                  <td><?php echo $rows['Model']; ?></td>
                  <td><?php echo "UGX"; echo number_format($rows['Price'], 2, '.', ','); ?></td>
                  <td><span class="bg-success font-weight-bold p-1 r" style="border-radius: 5px;"><?php echo $rows['Minimum_qty']; ?></span> </td>
                  <td><?php $status=$rows['status']; ?><span class=" p-1 r" style="border-radius: 5px;"><?php if ($status==0) { echo "Disabled"; }else{ echo "Enabled"; } ?></span></td>
                
                </tr>
               <?php endwhile; ?>
                </tbody>
              </table>
                  </div>
                </div>
            </div>
        </div>
                </div>
            </div>

        </div>
    </div>

 
            </div>
            <?php
          }
        ?>

    <?php   include 'main/footer.php'; ?>
    <!-- Deleting the record -->
  <script type="text/javascript">
    $(document).ready(function() {
      // alert('Ture');
      //  append values in input fields
      $(document).on('click','a[data-role=deleted]',function(){
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this Record?")) {
                $.ajax({
                    type: "POST",
                    url: "products-del.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(html) {
                        $(".delete_mem" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
            
        });
    });
</script>
<!-- Deleting the record --> 
<?php 
    function view(){
      include 'config/connection.php';
      $product_id=$_REQUEST['LKlrq4_B0fiQ'];
      $result = $conn->query("SELECT *FROM products WHERE product_id = '$product_id'");
      while ($rows = $result->fetch_assoc()) {
    ?>
    <div class="content-body">

            <div class="content">
        
     <div  class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product view</li>
            </ol>
        </nav>
      </div>
        <div class="row">
        <div class="col-md-12">
                <div class="col-md-12">
             <div class="card">
                        <div class="card-body">
                            <div class="col-md-12"> 
                  <?php 
                      include 'config/connection.php';
                      $results = $conn->query("SELECT DISTINCT (SELECT image_path FROM product_images WHERE products.product_id = product_images.product_id LIMIT 1) AS imgPath ,products.product_name,  products.Price ,products.Model, shops.shopname, products.product_description, (SELECT DISTINCT COUNT(product_color.product_id) FROM product_color WHERE product_color.product_id = products.product_id) AS colorsAvailable, (SELECT DISTINCT COUNT(product_size.product_id) FROM product_size WHERE product_size.product_id = products.product_id) AS sizesAvailable FROM products LEFT JOIN product_color ON products.product_id = product_color.product_id LEFT JOIN product_size ON product_size.product_id = products.product_id LEFT JOIN shops ON shops.shop_id = products.shop_id LEFT JOIN product_images ON products.product_id = product_images.product_id WHERE products.product_id = '$product_id'");
                      while ($rowsaa = $results->fetch_assoc()) {
                        ?>
                      <div class="col-md-12 text-center">
                          <h4><?php echo $rowsaa['product_name']; ?></h4>
                      </div>
                      <div class="col-md-12 pb-3">
                          <table  class="table table-bordered" style="border-color: black !important; padding-bottom: 12px !important; border: 3px !important; " width="100%">
                              <tr>
                                <td class="font-weight-bold" rowspan="2"><img src="<?php echo $rowsaa['imgPath']; ?>"  class="img-circle"  style="max-width:150px; height:auto;  "</td>
                                <td class="font-weight-bold">Description</td>
                              </tr>
                              <tr>
                                <td class="text-muted"><?php echo $rowsaa['product_description']; ?></td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                    <div class="col-md-12">
                                       <div class="row">
                                          <div class="col-md-6">
                                              <?php echo "<b>Available Colors:</b> ".$rowsaa['colorsAvailable']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Available Sizes:</b> ".$rowsaa['sizesAvailable']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Shop Name:</b> ".$rowsaa['shopname']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Model:</b> ".$rowsaa['Model']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Price:</b> ".$rowsaa['Price']; ?>
                                          </div>
                                          <!-- <div class="col-md-6">
                                              <?php echo "<b>Current Discount:</b> ".$rowsaa['status']; ?>
                                          </div> -->
                                      </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                      </div>
                    <?php } ?>
                          <div class="col-md-12 pb-3">
                            <table class="table table-bordered" style="border-color: black !important; padding-bottom: 12px !important; border: 3px !important; align-self: horizontal; ">
                              <tr>
                              <td>#</td>
                              <?php   
                                    include 'config/connection.php';
                                    $resultimg = $conn->query("SELECT color FROM product_color WHERE product_id = '$product_id'");
                                    $fetcherman = $resultimg->num_rows;
                                    for ($i=1; $i <$fetcherman+1 ; $i++) { 
                                      ?>
                                      <td><?php echo $i; ?></td> <?php
                                    }
                                    ?>
                                    
                                  </tr>
                                  <tr>
                                    <td class="font-weight-bold"><div align="right">Colors Available</div></td>
                                    <?php 
                                      while ($r = $resultimg->fetch_assoc()) {
                                        $colorID = $r['color_id'];
                                          ?>
                                          <td style="background-color: <?php echo $r['color']; ?>;"><span ><?php echo $r['color']; ?></span></td>
                                          <?php
                                      }
                                     ?>
                                  </tr>
                                </table>
                          </div>
                          <div class="col-md-12 pb-3">
                            <h3>Product Sizes</h3>
                                <table class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                                      <thead>
                                      <tr>
                                        <td class="font-weight-bold"><div align="">#</div></td>
                                        <td class="font-weight-bold"><div align="">Action</div></td>
                                        <td class="font-weight-bold"><div align="">Sizes</div></td>
                                        <td class="font-weight-bold"><div align="">Quantity</div></td>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php   
                                        include 'config/connection.php';
                                        $manis = $conn->query("SELECT id, size, quantity FROM product_size WHERE product_id = '$product_id'");
                                        $i=1;
                                        while ($rowsaaa = $manis->fetch_assoc()) {
                                        $id = $rowsaaa['id'];
                                        ?>
                                      <tr class="delete_mem1<?php echo $id ?>" id="<?php echo $id ?>" >
                                        <!-- <td><?php echo $i; ?></td> -->
                                         <td><div align=""><?php echo $i; ?></div></td>
                                         <td>
                                            <div class="dropdown ml-1">
                                                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-cog mr-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                  <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deletedSize" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                                </div>
                                            </div>
                                      </td>
                                        <td><div align=""><?php echo $rowsaaa['size']; ?></div></td>
                                        <td><div align=""><?php echo $rowsaaa['quantity']; ?></div></td>
                                      </tr>
                                     <?php $i++;} ?>
                                      </tbody>
                                    </table>
                          <br>
                          <h3>Product Discounts</h3>
                            <table class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                        <thead>
                        <tr>
                          <td class="font-weight-bold"><div align="">#</div></td>
                          <td class="font-weight-bold"><div align="">Action</div></td>
                          <td class="font-weight-bold"><div align="">Price</div></td>
                          <td class="font-weight-bold"><div align="">On Quantity</div></td>
                          <td class="font-weight-bold"><div align="">Start Date</div></td>
                          <td class="font-weight-bold"><div align="">End Date</div></td>
                        </tr>
                        </thead>
                        <tbody>
                          <?php   
                          include 'config/connection.php';
                          $miamo = $conn->query("SELECT product_discount_id, price, quantity, date_start, date_end FROM product_discount WHERE product_id = '$product_id'");
                          $i=1;
                          while ($keeper = $miamo->fetch_assoc()) {
                          $id = $keeper['product_discount_id'];
                          ?>
                        <tr class="delete_mem2<?php echo $id ?>" id="<?php echo $id ?>" >
                          <td><?php echo $i; ?></td>
                           <td>
                              <div class="dropdown ml-1">
                                  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-cog mr-1"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-left">
                                    <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleteDiscount" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                  </div>
                              </div>
                        </td>
                            <td><div align=""><?php echo $keeper['price']; ?></div></td>
                            <td><div align=""><?php echo $keeper['quantity']; ?></div></td>
                            <td><div align=""><?php echo $keeper['date_start']; ?></div></td>
                            <td><div align=""><?php echo $keeper['date_start']; ?></div></td>
                        </tr>
                       <?php $i++;} ?>
                        </tbody>
                      </table>
                          </div>
                              </div>
                  </div>
                </div>
            </div>
        </div>
                </div>
            </div>

        </div>
    </div>

 
            </div>
    <?php  
      }
    }
   ?>
<?php 
    function update(){
      ?>

      <!-- Modernizr -->
        <script src="assets/js/modernizr.min.js"></script>

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- Moment -->
        <script src="assets/js/moment.min.js"></script>
        
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
        <!-- END CSS for this page -->
                
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
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
                  <?php 
                                include 'config/connection.php';
                                $product_id=$_REQUEST['LKlrq4_B0fiQ'];
                                  $result = $conn->query("SELECT *FROM products WHERE product_id = '$product_id'");
                                  while ($rows = $result->fetch_assoc()) {
                                 ?>
            <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                    <?php echo $Error; ?>
                    <?php echo $statusMsg; ?>

                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>
                                    
                                </legend>
                                
                           <div class="col-md-12"> 
                            <h4 class="card-title float-left text-uppercase"><?php echo $title; ?> <small> (<span class="text-danger"> * </span> fields are Mandatory)</small></h4>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="update_products" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
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
                                <input type="text" required="" name="productname" value="<?php echo $rows['product_name']; ?>" class="form-control" id="inputEmail3" placeholder="Product Name">
                                <input type="hidden" required="" name="product_id" value="<?php echo $rows['product_id']; ?>" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label text-right font-weight-bold">Description</label>
                            <div class="col-sm-9">
                                 <textarea rows="3" class="form-control editor" name="product_description" id="editor" placeholder="Type Here...."></textarea>
                            </div>
                             
                        </div>
                       <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Title <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="text" required="" value="<?php echo $rows['meta']; ?>" class="form-control" name="meta" id="inputEmail3" placeholder="Meta Tag Title">
                            </div>
                        </div>
                        
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Description</label>
                            <div class="col-sm-9">
                             <textarea class="form-control" id="inputEmail3" value="<?php echo $rows['meta_desc']; ?>" name="meta_desc" placeholder="Meta Tag Description"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Keywords</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name"> -->
                                <textarea class="form-control" name="meta_keywords" id="inputEmail3" placeholder="Meta Tag Keywords"><?php echo $rows['meta_keywords']; ?></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Tags </label>
                            <div class="col-sm-9">
                                <input type="text" name="productstag" value="<?php echo $rows['productstag']; ?>" class="form-control" id="inputEmail3" placeholder="Product Tags">
                            </div>
                        </div>
                             
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Model <span class="text-danger font-weight-bold">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" required="" name="Model" value="<?php echo $rows['Model']; ?>" class="form-control" id="inputEmail3" placeholder="Model">
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
                                <input type="text" name="SKU" value="<?php echo $rows['SKU']; ?>" class="form-control" id="inputEmail3" placeholder="SKU">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">UPC  <span class="text-primary" title="Universal Product Code" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="UPC" value="<?php echo $rows['UPC']; ?>" class="form-control" id="inputEmail3" placeholder="UPC">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">EAN  <span class="text-primary" title="European Article Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="EAN" class="form-control" value="<?php echo $rows['EAN']; ?>" id="inputEmail3" placeholder="EAN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">JAN  <span class="text-primary" title="Japanese Article Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="JAN" class="form-control" value="<?php echo $rows['JAN']; ?>" id="inputEmail3" placeholder="JAN"> </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">ISBN  <span class="text-primary" title="International Standard Book Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="ISBN" class="form-control" value="<?php echo $rows['ISBN']; ?>" id="inputEmail3" placeholder="ISBN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">MPN  <span class="text-primary" title="Manufacturer Part Number" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span></label>
                            <div class="col-sm-9">
                                <input type="text" name="MPN" class="form-control" value="<?php echo $rows['MPN']; ?>" id="inputEmail3" placeholder="MPN">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Discount </label>
                            <div class="col-sm-9">
                                <input type="text" name="Discount" class="form-control" value="<?php echo $rows['discount']; ?>" id="inputEmail3" placeholder="Discount">
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
                                <input type="number" value="<?php echo $rows['quantity']; ?>" min="1" required="" name="Minimum_qty" class="form-control" id="inputEmail3" placeholder="Quantity">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Minimum Quantity <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="number"  min="1" required="" value="<?php echo $rows['Minimum_qty']; ?>" name="Minimum_qty" class="form-control" id="inputEmail3" placeholder="Minimum Quantity">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Color </label>
                            <div class="col-sm-9">
                                <input type="text" name="color" class="form-control" value="<?php echo $rows['color']; ?>" id="inputEmail3" placeholder="Color">
                            </div>
                        </div>
                     <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Subtract Stock </label>
                            <div class="col-sm-9">
                            <select name="subtract" id="input-subtract" class="form-control">
                                <option value="<?php echo $rows['subtract']; ?>"><?php $subtract = $rows['subtract']; if($subtract==1){
                                  echo "Yes";
                                }elseif ($subtract==0) {
                                  echo "No";
                                }else{
                                  echo "Choose";
                                } ?></option>
                                <option value="0">No</option>
                                <option value="1" selected="selected">Yes</option>
                            </select>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label class="col-sm-3 control-label font-weight-bold text-right">Requires Shipping</label>
                            <div class="col-sm-9">
                            <select name="shipping" class="form-control">
                                <option value="<?php echo $rows['shipping']; ?>"><?php $shipping = $rows['shipping']; if($shipping==1){
                                  echo "Yes";
                                }elseif ($shipping==0) {
                                  echo "No";
                                }else{
                                  echo "Choose";
                                } ?></option>
                                <option value="1" selected="selected">Yes</option>
                                <option value="0">No</option>
                            </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Out Of Stock Status </label>
                            <div class="col-sm-9">
                                <select name="stock_status_id" class="form-control">
                                <option value="<?php echo $rows['stock_status_id']; ?>"><?php echo $rows['stock_status_id'];?></option>
                                <option value="In Stock">In Stock</option>
                                <option value="2 - 3 Days">2 - 3 Days</option>
                                <option value="NOT IN STOCK">NOT IN STOCK</option>
                                <option value="OUT OF STOCK">OUT OF STOCK</option>
                                <option value="PREORDER">PREORDER</option>
                            </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Date Available </label>
                            <div class="col-sm-9">
                                <input type="date" name="Available_date" value="<?php echo $rows['Available_date']; ?>" class="form-control" id="inputEmail3" placeholder="Date Available
">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Dimensions (L x W x H) </label>
                            <div class="col-sm-3">
                                <input type="text" name="length" value="<?php echo $rows['length']; ?>" class="form-control" id="inputEmail3" placeholder="Length">
                            </div> <div class="col-sm-3">
                                <input type="text" name="width" class="form-control" value="<?php echo $rows['width']; ?>" id="inputEmail3" placeholder="Width">
                            </div> <div class="col-sm-3">
                                <input type="text" name="height" class="form-control" value="<?php echo $rows['height']; ?>" id="inputEmail3" placeholder="Height">
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Length Class </label>
                            <div class="col-sm-9">
                               <select name="length_class_id" id="input-length-class" class="form-control">
                                <option value="<?php echo $rows['length_class_id']; ?>"><?php $length_class_id = $rows['length_class_id']; if($length_class_id==1){
                                  echo "Centimeter";
                                }elseif ($length_class_id==2) {
                                  echo "Millimeter";
                                }elseif ($length_class_id==3){
                                  echo "Inch";
                                }else{

                                } ?></option>
                                <option value="1" selected="selected">Centimeter</option>
                                <option value="2">Millimeter</option>
                                <option value="3">Inch</option>
                                </select>
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Weight </label>
                            <div class="col-sm-9">
                                <input type="text" name="Weight" value="<?php echo $rows['Weight'] ?>" class="form-control" id="inputEmail3" placeholder="Weight">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Weight Class </label>
                            <div class="col-sm-9">
                                <select name="weight_class_id" id="input-weight-class" class="form-control">
                                <!-- <option value="">Select</option> -->
                                <option value="<?php echo $rows['weight_class_id']; ?>"><?php echo $rows['weight_class_id'];?></option>
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
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Shop Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select required="" name="shop_id" id="input-weight-class" class="form-control select2" style="width: 100%;">
                                <option value="<?php echo $shop_id = $rows['shop_id']; ?>"><?php 
                                  include 'config/connection.php';
                                  $sql = "SELECT shopname FROM shops WHERE shop_id = '$shop_id' ";
                                    $query = $conn->query($sql)->fetch_assoc();
                                    echo $query['shopname']
                                ?></option>
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
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Category <span class="text-primary" title="Select a category Where you product is under" data-toggle="tooltip">
                                           <i class="fa fa-question-circle"></i>
                                        </span><span class="text-danger font-weight-bold">*</span></label></label>
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
                         <div class="form-group row text-center">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="file_img[]" multiple="" class="form-control dropzone" id="inputEmail3" placeholder="Images">
                                <span class="small text-default" style="color:#777;">Allowed types are jpg, png, jpeg, gif and  below 1MB</span>
                            </div>
                            <div class="col-md-12 text-center row">
                                  <?php 
                                    include 'config/connection.php';
                                    $productID = $rows['product_id'];
                                    $resultos = $conn->query("SELECT image_path FROM product_images WHERE product_id = '$productID' ");
                                    while ($rowspic = $resultos->fetch_assoc()) {
                                      ?>
                                <div class="col-md-2">
                                          <img src="<?php echo $rowspic['image_path']; ?>" style="border-radius: 100px; height: 150px; width: 150px;">
                                </div>
                                      <?php
                                    }
                                   ?>
                                    
                                <!-- <span class="small text-default" style="color:#777;">Current Photo</span> -->
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Status </label>
                            <div class="col-sm-9">
                                <select name="status" id="input-status" class="form-control">
                                  <option value="<?php echo $rows['status']; ?>"><?php $status = $rows['status']; if($status==1){
                                  echo "Enabled";
                                }elseif ($status==0) {
                                  echo "Disabled";
                                }else{
                                  echo "Choose";
                                } ?></option>
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
              <?php } ?>
                </div>
            </div>

        </div>
    </div>

 
            </div>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<!-- <script src="assets/js/pikeadmin.js"></script> -->
<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
<script>
$(document).ready(function () {
    'use strict';
    $('#editor').trumbowyg();                           
}); 
</script>
<!-- END Java Script for this page -->

      <?php
    }
 ?>
   <!-- Deleting the record -->
  <script type="text/javascript">
    $(document).ready(function() {
      // alert('Ture');
      //  append values in input fields
      $(document).on('click','a[data-role=deletedSize]',function(){
            var id = $(this).attr("id");
            if (confirm("Delete this size record?")) {
                $.ajax({
                    type: "POST",
                    url: "product-size-del.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(html) {
                      // alert("true");
                        $(".delete_mem1" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
            
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      // alert('Ture');
      //  append values in input fields
      $(document).on('click','a[data-role=deleteDiscount]',function(){
            var id = $(this).attr("id");
            if (confirm("Delete product Discount?")) {
                $.ajax({
                    type: "POST",
                    url: "product-discount-del.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(html) {
                        $(".delete_mem2" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
            
        });
    });
</script>
<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>
 <?php 
          if (isset($_REQUEST['gy9TfG'])) {
              if ($_REQUEST['gy9TfG'] = "sKugd") {
                update();
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
            <a href="add-category" class="btn btn-outline-primary active" title="Add Category" data-toggle="tooltip">
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
                    <h4 class="float-left text-uppercase"><i class="fa fa-list"></i> <?php echo $title; ?> List</h4>
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
                  <th>Image</th>
                  <th>Category Name</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody> 
                  <?php    
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `category`  WHERE parent='0' ORDER BY `category`.`category_id` DESC ";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['category_id'];
                  ?>
                <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                  <td>
                    <div class="dropdown ml-1">
                          <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-cog mr-1"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="category?gy9TfG=sKugd&Hy76hbj87dsD=<?php echo $id; ?>"><i class="fa fa-edit"> </i> Update</a>

                            <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleted" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                          </div>
                      </div>
                  </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                    if ($rows['picture']!='') {
                      ?><img src='<?php echo $rows['picture']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span></td>
                  <td><?php
                    echo $rows['category_name']; 
                     $category_id= $rows['category_id']; echo " > ";  echo $rows['SubCatName'];
                    ?></td>
                  <td><?php echo $rows['status']; ?></td>
                </tr>
               <?php endwhile; ?>


               <?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT  category_id, category_name, parent  FROM category WHERE parent='0'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      
foreach ($row as $rs) { ?>
            <?php
                $sql = "SELECT  category_id, category_name, parent 
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      
$i=$no;

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                   $no = $i++;
                  $id = $sub['category_id'];
                 ?>
 <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                  <td>
                    <div class="dropdown ml-1">
                          <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-cog mr-1"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="category?gy9TfG=sKugd&Hy76hbj87dsD=<?php echo $id; ?>"><i class="fa fa-edit"> </i> Update</a>

                            <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleted" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                          </div>
                      </div>
                  </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                    if ($sub['picture']!='') {
                      ?><img src='<?php echo $sub['picture']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span></td>
                  <td><?php
                     echo $rs['category_name']; echo ", ";  echo $sub['category_name']; echo " > ";
                    ?></td>
                  <td><?php echo $rows['status']; ?></td>
                </tr>
               <?php } ?>
               <?php } ?>




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
                $i=$no;
               
                foreach ($subcat as $new_sub) {
                  // $new_sub=$sub['category_id'];
                 $no = $i++;
                $id = $new_sub['category_id'];
                 ?>
                 <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                <td>
                  <div class="dropdown ml-1">
                          <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-cog mr-1"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="category?gy9TfG=sKugd&Hy76hbj87dsD=<?php echo $id; ?>"><i class="fa fa-edit"> </i> Update</a>

                            <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleted" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                          </div>
                      </div>
                </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                    if ($new_sub['picture']!='') {
                      ?><img src='<?php echo $new_sub['picture']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span></td>
                  <td><?php
                     echo $rs['category_name']; echo ", ";  echo $sub['category_name']; echo " > "; echo $new_sub['category_name']; 
                    ?></td>
                  <td><?php echo $new_sub['status']; ?></td>
                </tr>
               <?php } } } ?>
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
          <?php } ?>

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
                    url: "category-del.php",
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
    function update(){
      ?>

<div class="content-body">

            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=index.html>E-commerce</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="update_categories" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                            </div>
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
                                       aria-controls="contact" aria-selected="false">SEO</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
  
<?php 
  
  include 'config/connection.php';
  $category_id=$_REQUEST['Hy76hbj87dsD'];
  $result = $conn->query("SELECT *FROM category WHERE category_id = '$category_id'");
  while ($rows = $result->fetch_assoc()) {
    $category_id = $rows['category_id'];
 ?>

  <div class="form-group row">
    <label for="category_name" class="col-sm-2 col-form-label text-right font-weight-bold">Category Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="category_name" value="<?php echo $rows['category_name']; ?>" placeholder="Category Name">
      <input type="hidden" class="form-control" name="category_id" value="<?php echo $category_id; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label text-right font-weight-bold">Description</label>
    <div class="col-sm-10">
      <!-- <input type="textarea" class="form-control" name="description" placeholder="description"> -->
      <textarea class="form-control" name="description" placeholder="description"><?php echo $rows['description'] ?></textarea>
    </div>
  </div>
  <div class="form-group row text-center">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-right font-weight-bold">Banner Images </label>
    <div class="col-sm-10">
        <input type="file" name="file_img[]" multiple="" class="form-control dropzone" id="inputEmail3" placeholder="Images">
        <span class="small text-default" style="color:#777;">Allowed types are jpg, png, jpeg, gif and  below 1MB</span>
    </div>
    <div class="col-md-12 text-center row">
          <?php 
            include 'config/connection.php';
            $categoryID = $rows['category_id'];
            $resultos = $conn->query("SELECT image_path FROM category_images WHERE category_id = '$categoryID' ");
            while ($rowspic = $resultos->fetch_assoc()) {
              ?>
        <div class="col-md-2">
                  <img src="<?php echo $rowspic['image_path']; ?>" style="border-radius: 100px; height: 150px; width: 150px;">
        </div>
              <?php
            }
           ?>
    </div>
</div>

  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label text-right font-weight-bold">Product Image </label>
      <div class="col-sm-5">
          <input type="file" name="icon"class="form-control dropzone" id="inputEmail3" placeholder="Images">
          <span class="small text-default" style="color:#777;">Allowed type are jpg, png, jpeg, gif and  below 1MB</span>
      </div>
      <div class="col-sm-4 text-center">
          <div class="col-md-12">
              <img src="<?php echo $rows['picture']; ?>" style="border-radius: 100px; height: 150px; width: 150px;" >
          </div>
          <span class="small text-default" style="color:#777;">Current Photo</span>
      </div>
  </div>
  

</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  



<!-- please work on this if you can, i can not find a way of returning the parent class of a category of a category -->






















  <div class="form-group row">
    <label for="parent" class="col-sm-2 col-form-label text-right font-weight-bold">Parent</label>
    <div class="col-sm-10">
      <select name="parent" class="form-control select2">
        <?php 
          include 'config/connection.php';
          $category_id = $rows['category_id'];
          $resulto = $conn->query("SELECT  category_id, category_name, parent  FROM category WHERE category_id = '$category_id'");
          while ($a = $resulto->fetch_assoc()) {
            $category_id2 = $a['parent'];
            if ($category_id2 == 0) {
                ?>
              <option value="<?php echo $category_id ?>"><?php echo $a['category_name']." >"; ?></option>
             <?php
            }else if ($category_id2 > 0){
              include 'config/connection.php';
              $resultos = $conn->query("SELECT  category_id, category_name, parent  FROM category WHERE category_id = '$category_id2'");
              while ($ab = $resultos->fetch_assoc()) {
                $category_id3 = $ab['parent'];
               include 'config/connection.php';
                $resultosa = $conn->query("SELECT  category_name FROM category WHERE category_id = '$category_id3'");
                while ($abc = $resultosa->fetch_assoc()) {
                    $veryLastParent = $abc['category_name'];
                }
               ?>

                <option value="<?php echo $category_id ?>"><?php if (!empty($veryLastParent)) {
                  echo $veryLastParent." > ";
                } echo $a['category_name']." > ".$ab['category_name']." >"; ?></option>
              <?php
              }
            }
          }
         ?>
     
<?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT  category_id, category_name, parent  FROM category WHERE parent='0'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      

foreach ($row as $rs) { ?>
  <option value="<?php echo $rs['category_id'] ?>"><?php echo $rs['category_name']; ?> > </option>
<?php } ?> 
<?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT  category_id, category_name, parent  FROM category WHERE parent='0'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      
foreach ($row as $rs) { ?>
            <?php
                $sql = "SELECT  category_id, category_name, parent 
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                
                            <option value="<?php echo $sub['category_id'] ?>"><?php echo $rs['category_name']; echo ", ";  echo $sub['category_name']; echo " > ";?></option>
<?php   } ?>
<?php   } ?>

    
</select>

    </div>
  </div>
  <div class="form-group row">
    <label for="meta_tag_title" class="col-sm-2 col-form-label text-right font-weight-bold">Meta tag title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_tag_title" value="<?php echo $rows['meta_tag_title']; ?>" placeholder="meta tag title">
    </div>
  </div>
  <div class="form-group row">
    <label for="meta_keywords" class="col-sm-2 col-form-label text-right font-weight-bold">Meta Keywords</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_keywords" value="<?php echo $rows['meta_keywords']; ?>" placeholder="meta keywords">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label text-right font-weight-bold">Status</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="status" value="<?php echo $rows['status']; ?>" placeholder="status">
    </div>
  </div>
  
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="table-responsive col-md-12">
  <table class="table table-bordered" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col" align="right">Stores</th>
        <th scope="col">Keyword</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" align="right">Default</th>
        <td><form>
    <div class="form-group">
        
        <input type="text" class="form-control" name="keyword" value="<?php echo $rows['keyword']; ?>" placeholder="keyword">
       
    </div></td>
      </tr>
      
      
    </tbody>
  </table>
 <!-- <button type="submit" name="SUBMIT" class="btn btn-primary">Save</button> -->
</div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
<?php }?>
  


                </div>
            </div>

        </div>
    </div>
 
                </div>

        
 
      <?php 
      } ?>
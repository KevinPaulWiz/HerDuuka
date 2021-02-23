<?php   include 'main/header.php'; ?>
<?php//   include 'main/controllers.php'; ?>

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
                    <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
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
                    <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
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
                    <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
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
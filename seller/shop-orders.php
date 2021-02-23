<?php   include 'main/header.php'; ?>
<?php   include '../admin/main/controllers.php'; ?>

     
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
                    <h4 class="float-left text-uppercase"><i class="fa fa-list"></i> Orders</h4>
                     <!-- <button class="btn btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-plus-square"> </i> Add New User </button> -->
                    <!-- <h2>Students <small>Information</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content card card-body">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <!-- <th>Action</th> -->
                  <th>Product Details</th>
                  <!-- <th>Product Name</th> -->
                  <!-- <th>Model</th> -->
                  <th>Qty</th>
                  <th>Price</th> 
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php    
                  include '../admin/config/connection.php';
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' ORDER BY `orderdetails`.`orderdetail_id`  DESC ";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['product_id'];
                  ?>
                <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $rows['orderdetail_id']; ?></td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> 
              <?php
              // $sql = "SELECT image_path, product_id,file_name FROM product_images WHERE product_id='".$rows['product_id']."'";
              $result = $conn->query("SELECT image_path, product_id,file_name FROM product_images WHERE product_id='".$rows['product_id']."'");
              $row = $result->fetch_assoc();
              ?>
                    <?php 
                    if ($row['image_path']!='') {
                      ?><img src="../admin/<?php echo $row['image_path']; ?>"  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span><span>
                   
                 </span>
                 <span class="small"><?php 
                  $result = $conn->query("SELECT product_name, product_id FROM products  WHERE product_id='".$rows['product_id']."'");
                  $rows12 = $result->fetch_assoc();
                  echo $rows12['product_name']; 
                 ?></span></td> 
                  <!-- <td><?php echo $rows['product_name']; ?></td> -->
                  <!-- <td><?php echo $rows['Model']; ?></td> -->
                  <td><span class="bg-success font-weight-bold p-1 r" style="border-radius: 5px;"><?php echo $rows['quantity']; ?></span> </td>
                  <td><?php echo number_format($rows['price'], 0, '.', ','); ?></td>
                  <td>
                    <?php $status=$rows['status']; ?>
                   <button data-toggle="modal" data-target="#view-modal"  id="updateUser" class="btn btn-sm <?php if($status='Pending'){ echo 'btn-warning';}elseif($status='Shipped'){ echo 'btn-primary'; }elseif($status='Delivered'){ echo 'btn-success'; } else{echo 'danger'; } ?>">
                    <?php echo $status; ?>
                    </button>
                 </td>
                
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

    <?php   include '../admin/main/footer.php'; ?>
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
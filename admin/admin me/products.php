<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>

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
                   <td> <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
                </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> 
              <?php
              $sql = "SELECT image_path, product_id,file_name FROM product_images WHERE product_id='".$rows['product_id']."'";
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
<?php   include 'main/header.php'; ?>

     
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
                    <h4 class="float-left text-uppercase"><i class="fa fa-list"></i> Customers</h4>
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
                  <th>Action</th>
                  <th>Name </th>
                  <th>Email Address</th>
                  <th>Phone Numbers</th>
                  <th>Address</th>
                </tr>
                </thead>
                <tbody>
                  <?php    
                  include 'config/connection.php';
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `customers`  ORDER BY `customers`.`customerid`  DESC ";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['customerid'];
                  ?>
                <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                  <td> 
                   <div class="dropdown ml-1">
                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-cog mr-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left">
                <a class="dropdown-item" href=""><i class="fa fa-edit"> </i> Update</a>
                <a class="dropdown-item" href="javascript:void(0);" 
data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash"> </i> Delete</a>
                <a class="dropdown-item" href=""><i class="fa fa-eye"> </i> Enable</a>
                <a class="dropdown-item" href=""><i class="fa fa-eye-slash"> </i> Disbale</a>
                <!--  <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
                </div>
                </td>
                   <td><?php echo $rows['fname']." ".$rows['lname']; ?></td> 
                  <td><?php echo $rows['email']; ?></td>
                  <td><?php echo $rows['phone']; ?></td>
                  <td><?php echo $rows['address']; ?></td>
                  
                
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
                    url: "customer-del.php",
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
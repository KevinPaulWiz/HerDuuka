<?php   include 'main/header.php'; ?>
<?php 
          if (isset($_REQUEST['gy9TfG'])) {
              if ($_REQUEST['gy9TfG'] = "sKugd") {
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
      </div>
        <div class="row">
        <div class="col-md-12">
   
            <div class="row">
                <div class="col-md-12">
             <div class="card">
                        <div class="card-body">
                            <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                            <ul class="nav nav-tabs mb-3  col-md-12" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active"  href="orders">Processing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="orders-transit" >In Transit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="orders-in-delivery">Out for Delivery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="orders-delivered">Delivered</a>
                                </li>
                            </ul>
                            <div class="tab-content">
 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">  
  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Action</th>
                  <th>Order Number</th>
                  <th>Customer</th>
                  <th>No. of items</th>
                  <th>Order Date</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      include 'config/connection.php';
                      $results = $conn->query("SELECT customers.fname, customers.lname, customers.address,
                                                orders.ordernumber, orders.orderdate, orders.order_id, orders.status,
                                                (SELECT COUNT(*) FROM orderdetails WHERE orderdetails.order_number = orders.ordernumber) AS orderdetailsQuantity FROM orders LEFT JOIN customers on customers.customerid = orders.customer_id
                                                  WHERE orders.status = 'pending' ORDER BY orders.order_id DESC");
                      $i = 1;
                      while ($rows = $results->fetch_assoc()) {
                        $id = $rows['order_id']
                       ?>
                        <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                            <td><?php echo $i; ?></td>
                            <td>
                              <div class="dropdown ml-1">
                                  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-cog mr-1"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="orders?gy9TfG=sKugd&Hy76hbj87dsD=<?php echo $id; ?>"><i class="fa fa-eye"> </i> View</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="next" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> In transit</a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item" data-toggle="tooltip" data-role="deleted" data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                  </div>
                              </div>
                            </td>
                            <td><?php echo $rows['ordernumber']; ?></td>
                            <td><?php echo $rows['fname']." ".$rows['lname']; ?></td>
                            <td><?php echo $rows['orderdetailsQuantity']; ?></td>
                            <td><?php echo $rows['orderdate']; ?></td>
                            <td><span class="badge bg-warning text-white"><?php echo ucwords($rows['status']); ?></span></td>
                        </tr>
                    <?php $i++; }
                   ?>
                  
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
                    url: "orders-del.php",
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
<script type="text/javascript">
    $(document).ready(function() {
      // alert('Ture');
      //  append values in input fields
      $(document).on('click','a[data-role=next]',function(){
            var id = $(this).attr("id");
            if (confirm("Move to In Transit?")) {
                $.ajax({
                    type: "POST",
                    url: "orders-transit-move.php",
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
  $order_id=$_REQUEST['Hy76hbj87dsD'];
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
      </div>
        <div class="row">
        <div class="col-md-12">
                <div class="col-md-12">
             <div class="card">
                        <div class="card-body">
                            <div class="col-md-12"> 
                  <?php 
                     // ========================================================
                      include 'config/connection.php';
                      $results = $conn->query("SELECT customers.fname, customers.lname, customers.address,
                                                orders.ordernumber, orders.orderdate, orders.order_id, orders.status,
                                                (SELECT COUNT(*) FROM orderdetails WHERE orderdetails.order_number = orders.ordernumber) AS orderdetailsQuantity FROM orders LEFT JOIN customers on customers.customerid = orders.customer_id
                                                  WHERE orders.order_id = '$order_id'");
                      while ($rowsaa = $results->fetch_assoc()) {
                        ?>
                      <div class="col-md-12 text-center">
                          <h1>Order No. <?php echo $ordernumber = $rowsaa['ordernumber']; ?></h1>
                      </div>
                      <div class="col-md-12 pb-3">
                          <table  class="table table-bordered" style="border-color: black !important; padding-bottom: 12px !important; border: 3px !important; " width="100%">
                              <tr>
                                <td class="font-weight-bold">Payments</td>
                              </tr>
                              <tr>
                                <td>
                                    <div class="col-md-12">
                                       <div class="row">
                                          <div class="col-md-6">
                                              <?php echo "<b>First Name:</b> ".$rowsaa['fname']." ".$rowsaa['lname']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Address:</b> ".$rowsaa['address']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Order No.:</b> ".$rowsaa['ordernumber']; ?>
                                          </div>
                                          <?php 
                                            include 'config/connection.php';
                                            $resultosss = $conn->query("SELECT SUM(price) as total, count(*) as counting FROM orderdetails where orderdetails.order_number = '$ordernumber'");
                                            $fetch = $resultosss->fetch_assoc();
                                           ?>
                                          <div class="col-md-6">
                                              <?php echo "<b>Items:</b> ".$fetch['counting']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Total:</b> ".$fetch['total']; ?>
                                          </div>
                                          <div class="col-md-6">
                                              <?php echo "<b>Status:</b> ".$rowsaa['status']; ?>
                                          </div>
                                      </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                      </div>
                    <?php } ?>
                      <div class="col-md-12 pb-3">
                          <table class="table table-bordered" style="border-color: black !important; padding-bottom: 12px !important; border: 3px !important; " width="100%">
                              <tr>
                                <td class="font-weight-bold"><div align="right">#</div></td>
                                <td class="font-weight-bold"><div align="right">Product</div></td>
                                <td class="font-weight-bold"><div align="right">Quantity</div></td>
                                <td class="font-weight-bold"><div align="right">Shop</div></td>
                                <td class="font-weight-bold"><div align="right">Color</div></td>
                                <td class="font-weight-bold"><div align="right">Size</div></td>
                                <td class="font-weight-bold"><div align="right">Discount</div></td>
                                <td class="font-weight-bold"><div align="right">Price</div></td>
                              </tr>
                              <?php   
                                include 'config/connection.php';
                                $resultimg = $conn->query("SELECT orderdetails.order_number, orderdetails.quantity,orderdetails.color,orderdetails.size, orderdetails.discount, orderdetails.price, products.product_name, shops.shopname  FROM orderdetails LEFT JOIN products on products.product_id = orderdetails.product_id LEFT JOIN shops on shops.shop_id = orderdetails.shop_id WHERE orderdetails.order_number = '$ordernumber'");
                                $i=1;
                                while ($rowsaaa = $resultimg->fetch_assoc()) {
                                    ?>
                                  <tr>
                                    <td><div align="right"><?php echo $i; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['product_name']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['quantity']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['shopname']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['color']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['size']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['discount']; ?></div></td>
                                    <td><div align="right"><?php echo $rowsaaa['price']; ?></div></td>
                                  </tr>
                                    <?php
                                    $i++;
                                }
                               ?>
                              
                              <tr>
                                <td colspan="7" class="font-weight-bold"><div align="right">Total</div></td>
                                <td><div align="right"><?php 
                                    include 'config/connection.php';
                                    $resulta = $conn->query("SELECT SUM(price) AS total FROm orderdetails WHERE order_number = '$ordernumber'");
                                    $resulting = $resulta->fetch_assoc();
                                    echo $resulting['total'];
                                 ?></div></td>
                              </tr>
                              
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
<?php 
}
?>
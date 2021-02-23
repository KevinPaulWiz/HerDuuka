<?php include 'main/header.php'; ?>

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
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Monthly Sales</p>
                                    <h2 class="font-weight-bold">
                                        <?php 
                                            $startdate = strtotime(date('M'));
                                            //$enddate = strtotime("+12 months",$startdate);
                                            $format = date("M,Y", $startdate);
                                            $startdate = strtotime("+1 month", $startdate);
                                            include 'config/connection.php';
                                            $thisMonth = $conn->query("SELECT SUM(products.Price) as total FROM orders LEFT JOIN orderdetails on orders.ordernumber = orderdetails.order_number LEFT JOIN products on orderdetails.product_id = products.product_id where orders.orderdate LIKE '%$format%' and orders.status!='incoming'")->fetch_assoc()['total'];
                                            if (is_null($thisMonth)) {
                                                $thisMonth = 0;
                                            }
                                            $months2[] = $thisMonth; 
                                            echo number_format(array_sum($months2));
                                         ?>
                                    </h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                            <i class=" fa fa-bar-chart"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-times mr-2"></span> <span class="badge bg-success text-white">Not Computed</span>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Total Orders</p>
                                    <h2 class="font-weight-bold">
                                        <?php echo number_format($orders = $conn->query("SELECT order_id from orders where orders.status!='incoming'")->num_rows);
                                            $todayDate = date('D dS M,Y');
                                            $today = $conn->query("SELECT order_id from orders where orders.status!='incoming' AND orders.orderdate LIKE '%$todayDate%'")->num_rows;
                                            function percent($a,$b){
                                                return round(((float)$a/$b)*100,2);
                                            }
                                         ?>
                                    </h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> <?php echo percent($today,$orders); ?>%
                                </span> Today's Increase
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Total Pending</p>
                                    <h2 class="font-weight-bold"> 
                                        <?php echo number_format($pending = $conn->query("SELECT order_id from orders where status = 'pending'")->num_rows);
                                            $pendingToday = $conn->query("SELECT order_id from orders where orders.status!='pending' AND orders.orderdate LIKE '%$todayDate%'")->num_rows;
                                         ?></h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> <?php echo percent($pendingToday,$pending); ?>%
                                </span> Today's Increase
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Shops</p>
                                    <h2 class="font-weight-bold"> 
                                        <?php echo number_format($shops = $conn->query("SELECT shop_id from shops where is_verified = '1'")->num_rows);
                                            $shopsToday = $conn->query("SELECT shop_id from shops where is_verified = '1' AND status = 'Approved' AND submitteddate LIKE '%$todayDate%'")->num_rows;
                                         ?></h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded-circle">
                                            <i class="fa fa-home"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> <?php echo percent($shopsToday,$shops); ?>%
                                </span> Today's Increase
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Products</p>
                                    <h2 class="font-weight-bold"> 
                                        <?php echo number_format($products = $conn->query("SELECT product_id from products")->num_rows);
                                        $todayDateStartDate = date('Y-m-d');
                                        $productsToday = $conn->query("SELECT product_id from products AND submitteddate LIKE '%$todayDateStartDate%'")->num_rows;
                                     ?></h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                            <i class="fa fa-product-hunt"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> <?php echo percent($productsToday,$products); ?>%
                                </span> Today's Increase
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Categories</p>
                                    <h2 class="font-weight-bold"> 
                                        <?php echo number_format($conn->query("SELECT category_id from category")->num_rows); ?></h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-dark-bright text-dark rounded-circle">
                                            <i class="fa fa-list-alt"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-dark d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-times mr-2"></span> <span class="badge bg-dark text-white">Not Computed</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">System Users</p>
                                    <h2 class="font-weight-bold"> 
                                        <?php echo number_format($usersTotal = $conn->query("SELECT id from users")->num_rows);
                                            $newUsers = $conn->query("SELECT id from users where stat_date LIKE '%$todayDateStartDate%'")->num_rows;
                                         ?></h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> <?php echo percent($newUsers, $usersTotal); ?>%
                                </span> Today's Increase
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Disk Space</p>
                                    <h2 class="font-weight-bold"> 
                                         
                                    </h2><?php 
                                        //$freeDiskSpace = round((disk_free_space('/')/(1024**3)),1);
                                        //$totalDiskSpace = round((disk_total_space('/')/(1024**3)),1);
                                      ?>
                                    <div class="flex-grow-1">
                                        <div class="progress" style="height: 40px; width: 100px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                 style="width: <?php echo percent($freeDiskSpace, $totalDiskSpace); ?>%" aria-valuenow="10" aria-valuemin="0"
                                                 aria-valuemax="100" title="<?php echo percent($freeDiskSpace, $totalDiskSpace); ?>%">
                                            </div>
                                        </div>
                                        <div class="small text-muted mt-2"><?php echo $freeDiskSpace; ?>GB / <?php echo $totalDiskSpace; ?>GB</div>
                                    </div>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                            <i class="fa fa-archive"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="card-title">Recent Orders</h6>
                <div>
                    <a href="orders" class="btn btn-outline-light btn-sm mr-2">
                        <i class="fa fa-eye"></i>
                    </a>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown"
                           class="btn btn-outline-light btn-sm"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
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
                                                  WHERE orders.status = 'pending' ORDER BY orders.order_id DESC LIMIT 10");
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

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex mb-2 mb-sm-0 justify-content-between">
                        <h6 class="card-title">Order Sales (<?php echo date('Y'); ?>)</h6>

                    </div>
                    <div id="ecommerce-activity-chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex mb-2 mb-sm-0 justify-content-between">
                        <h6 class="card-title">Orders (<?php echo date('Y'); ?>)</h6>

                    </div>
                    <div id="customer-growth"></div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="card-title mb-0">Top Sales</h6>
                        <a href="#" class="small">All Sales</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total Sales</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#">Apple</a>
                            </td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Samsung <span class="badge badge-danger ml-1">New</span></a>
                            </td>
                            <td>52</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Huawei</a>
                            </td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">General Mobile</a>
                            </td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Xiaomi</a>
                            </td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Nokia</a>
                            </td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Sony</a>
                            </td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Alcatel</a>
                            </td>
                            <td>5</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </div>

    <!-- <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        <span>Income Distribution</span>
                        <span class="dropdown">
                            <a class="btn btn-outline-light btn-sm dropdown-toggle" href="#"
                               data-toggle="dropdown">USA</a>
                            <span class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">USA</a>
                                <a href="#" class="dropdown-item">Germany</a>
                                <a href="#" class="dropdown-item">France</a>
                                <a href="#" class="dropdown-item">Italy</a>
                            </span>
                        </span>
                    </h6>
                    <div id="vmap_usa_en" style="height: 300px"></div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless table-lg table-striped mb-0">
                        <thead>
                        <tr>
                            <th class="wd-40">States</th>
                            <th class="wd-25 text-center">Orders</th>
                            <th class="wd-35 text-center">Earnings</th>
                            <th class="wd-35"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>California</td>
                            <td class="text-center">12,201</td>
                            <td class="text-center text-success">$150,200.80</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Texas</td>
                            <td class="text-center">11,950</td>
                            <td class="text-center text-success">$138,910.20</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Wyoming</td>
                            <td class="text-center">11,198</td>
                            <td class="text-center text-danger">$132,050.00</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Florida</td>
                            <td class="text-center">9,885</td>
                            <td class="text-center text-success">$127,762.10</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>New York</td>
                            <td class="text-center">21,198</td>
                            <td class="text-center text-danger">$432,410.00</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Montana</td>
                            <td class="text-center">2,885</td>
                            <td class="text-center text-success">$7,100.00</td>
                            <td class="text-right">
                                <a href="#" data-toggle="tooltip" title="Detail">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="card-title">Revenue by Country</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm mr-2">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"
                                   class="btn btn-outline-light btn-sm"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Total Revenue</p>
                    <h2 class="mb-4 font-size-35">$469,453</h2>
                    <div class="progress mb-3" style="height: 10px">
                        <div class="progress-bar w-25 bg-secondary-gradient" role="progressbar"></div>
                        <div class="progress-bar w-50 bg-info-gradient" role="progressbar"></div>
                        <div class="progress-bar w-25 bg-warning-gradient" role="progressbar"></div>
                        <div class="progress-bar w-25 bg-success-gradient" role="progressbar"></div>
                        <div class="progress-bar w-50 bg-danger-gradient" role="progressbar"></div>
                    </div>
                </div>
                <div class="p-4 bg-dark-gradient">
                    <ul class="list-inline ">
                        <li class="list-inline-item mr-4 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="d-inline-flex align-items-center">
                                    <i class="fa fa-circle text-secondary mr-1 small"></i> Russia
                                </span>
                                <small class="ml-3 text-success d-inline-flex align-items-center">
                                    <i class="fa fa-caret-up mr-1"></i> 40%
                                </small>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="d-inline-flex align-items-center">
                                    <i class="fa fa-circle text-info mr-1 small"></i> Australia
                                </span>
                                <small class="ml-3 text-danger d-inline-flex align-items-center">
                                    <i class="fa fa-caret-down mr-1"></i> 25%
                                </small>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="d-inline-flex align-items-center">
                                <i class="fa fa-circle text-warning mr-1 small"></i> China
                                </span>
                                <small class="ml-3 text-success d-inline-flex align-items-center">
                                    <i class="fa fa-caret-up mr-1"></i> 30%
                                </small>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="d-inline-flex align-items-center">
                                <i class="fa fa-circle text-success mr-1 small"></i> Tunisia
                                </span>
                                <small class="ml-3 text-success d-inline-flex align-items-center">
                                    <i class="fa fa-caret-up mr-1"></i> 10%
                                </small>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3">
                            <div class="d-flex align-items-center">
                                <span class="d-inline-flex align-items-center">
                                <i class="fa fa-circle text-success mr-1 small"></i> Spain
                                </span>
                                <small class="ml-3 text-danger d-inline-flex align-items-center">
                                    <i class="fa fa-caret-down mr-1"></i> 10%
                                </small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Reviews</h6>
                    <div class="card-scroll">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex pl-0 pr-0">
                                <a href="#">
                                    <figure class="avatar mr-3">
                                        <img src="assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pr-0">
                                <a href="#">
                                    <figure class="avatar mr-3">
                                        <img src="assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(3.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pr-0">
                                <a href="#">
                                    <figure class="avatar mr-3">
                                        <img src="assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4.5)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                            <li class="list-group-item d-flex pl-0 pr-0">
                                <a href="#">
                                    <figure class="avatar mr-3">
                                        <img src="assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </a>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <h6>Valentine Maton</h6>
                                            <ul class="list-inline mb-1">
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item mb-0">(4)</li>
                                            </ul>
                                        </a>
                                        <div class="ml-auto">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                   class="btn btn-outline-light btn-sm"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View</a>
                                                    <a href="#" class="dropdown-item">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->


            </div>

            <!-- begin::footer -->
            <footer class="content-footer">
                <div>© 2020 Nago - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- end::footer -->

        </div>

    </div>

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>


    <!-- Apex chart -->
    <script src="apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <!-- <script src="vendors/datepicker/daterangepicker.js"></script> -->

    <!-- DataTable -->
    <!-- <script src="vendors/dataTable/datatables.min.js"></script> -->

    <!-- Dashboard scripts -->
    <!-- <script src="js/dashboard.js"></script> -->
    <script type="text/javascript">
        'use strict';
$(document).ready(function () {

    var colors = {
        primary: $('.colors .bg-primary').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        primaryLight: $('.colors .bg-primary-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        secondary: $('.colors .bg-secondary').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        secondaryLight: $('.colors .bg-secondary-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        info: $('.colors .bg-info').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        infoLight: $('.colors .bg-info-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        success: $('.colors .bg-success').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        successLight: $('.colors .bg-success-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        danger: $('.colors .bg-danger').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        dangerLight: $('.colors .bg-danger-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        warning: $('.colors .bg-warning').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(','),
        warningLight: $('.colors .bg-warning-bright').css('background-color').replace('rgb', '').replace(')', '').replace('(', '').split(',')
    };

    var rgbToHex = function (rgb) {
        var hex = Number(rgb).toString(16);
        if (hex.length < 2) {
            hex = "0" + hex;
        }
        return hex;
    };

    var fullColorHex = function (r, g, b) {
        var red = rgbToHex(r);
        var green = rgbToHex(g);
        var blue = rgbToHex(b);
        return red + green + blue;
    };

    colors.primary = '#' + fullColorHex(colors.primary[0], colors.primary[1], colors.primary[2]);
    colors.secondary = '#' + fullColorHex(colors.secondary[0], colors.secondary[1], colors.secondary[2]);
    colors.info = '#' + fullColorHex(colors.info[0], colors.info[1], colors.info[2]);
    colors.success = '#' + fullColorHex(colors.success[0], colors.success[1], colors.success[2]);
    colors.danger = '#' + fullColorHex(colors.danger[0], colors.danger[1], colors.danger[2]);
    colors.warning = '#' + fullColorHex(colors.warning[0], colors.warning[1], colors.warning[2]);

    /**
     *  Slick slide example
     **/

    if ($('.slick-single-item').length) {
        $('.slick-single-item').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '.slick-single-arrows a:eq(0)',
            nextArrow: '.slick-single-arrows a:eq(1)',
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    if ($('.reportrange').length > 0) {
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('.reportrange .text').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('.reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    }

    var chartColors = {
        primary: {
            base: '#3f51b5',
            light: '#c0c5e4'
        },
        danger: {
            base: '#f2125e',
            light: '#fcd0df'
        },
        success: {
            base: '#0acf97',
            light: '#cef5ea'
        },
        warning: {
            base: '#ff8300',
            light: '#ffe6cc'
        },
        info: {
            base: '#00bcd4',
            light: '#e1efff'
        },
        dark: '#37474f',
        facebook: '#3b5998',
        twitter: '#55acee',
        linkedin: '#0077b5',
        instagram: '#517fa4',
        whatsapp: '#25D366',
        dribbble: '#ea4c89',
        google: '#DB4437',
        borderColor: '#e8e8e8',
        fontColor: '#999'
    };

    if ($('body').hasClass('dark')) {
        chartColors.borderColor = 'rgba(255, 255, 255, .1)';
        chartColors.fontColor = 'rgba(255, 255, 255, .4)';
    }

    /// Chartssssss

    function activityChart() {
        if ($('#ecommerce-activity-chart').length) {
            var options = {
                chart: {
                    type: 'bar',
                    fontFamily: "Inter",
                    offsetX: -18,
                    height: 300,
                    width: '100%',
                    toolbar: {
                        show: true
                    }
                },
                 <?php
$startdate = strtotime("Jan");
$enddate = strtotime("+12 months",$startdate);

while ($startdate < $enddate) {
$format = date("M,Y", $startdate);
$startdate = strtotime("+1 month", $startdate);
include 'config/connection.php';
$thisMonth = $conn->query("SELECT SUM(products.Price) as total FROM orders LEFT JOIN orderdetails on orders.ordernumber = orderdetails.order_number LEFT JOIN products on orderdetails.product_id = products.product_id where orders.orderdate LIKE '%$format%' and orders.status!='incoming'")->fetch_assoc()['total'];
  if (is_null($thisMonth)) {
      $thisMonth = 0;
  }
$months[] = $thisMonth; 
}
?>
                series: [{
                    name: 'Sales',
                    data: [
                    <?php
                    foreach ($months as $key => $value) {
                        echo $value;
                        if ($key < 11) {
                            echo ",";
                        } 
                    }?>
                        ]
                }],
                colors: [colors.info],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '100%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 8,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                },
                fill: {
                    opacity: 0.6
                },
                legend: {
                    position: "top",
                }
            };

            var chart = new ApexCharts(
                document.querySelector("#ecommerce-activity-chart"),
                options
            );

            chart.render();
        }
    }

    activityChart();

    
    function customerGrowth() {
        if ($('#customer-growth').length > 0) {
            var options = {
                chart: {
                    height: 300,
                    type: 'area',
                    offsetX: -20,
                    offsetY: -10,
                    width: '100%',
                    fontFamily: 'Inter',
                    toolbar: {
                        show: false,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                colors: [colors.danger],
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
<?php
$startdate1 = strtotime("Jan");
$enddate1 = strtotime("+12 months",$startdate1);
while ($startdate1 < $enddate1) {
    $format1 = date("M,Y", $startdate1);
    $startdate1 = strtotime("+1 month", $startdate1);
    include 'config/connection.php';
    $thisMonth1 = $conn->query("SELECT order_id FROM orders where orders.orderdate LIKE '%$format1%' and orders.status!='incoming'")->num_rows;
    if (is_null($thisMonth1)) {
        $thisMonth1 = 0;
    }
    $ordersMonth[] = $thisMonth1;
}
?>
                series: [{
                    name: 'Orders',
                    data: [<?php
                    foreach ($ordersMonth as $key => $value) {
                        echo $value;
                        if ($key < 11) {
                            echo ",";
                        } 
                    }?>]
                }],
                fill: {
                    type: 'gradient',
                    gradient: {
                        opacityFrom: 0.9,
                        opacityTo: 0,
                    }
                },
                xaxis: {
                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                }
            };

            var chart = new ApexCharts(
                document.querySelector("#customer-growth"),
                options
            );

            chart.render();
        }
    }

    customerGrowth();

});

    </script>

    <!-- Vamp -->
    <script src="vendors/vmap/jquery.vmap.min.js"></script>
    <script src="vendors/vmap/maps/jquery.vmap.usa.js"></script>
    <script src="assets/js/examples/vmap.js"></script>

    <!-- To use theme colors with Javascript -->
    <div class="colors">
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <!-- <script src="assets/js/examples/pages/ecommerce-dashboard.js"></script> -->


<!-- App scripts -->
<script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:20:32 GMT -->
</html>

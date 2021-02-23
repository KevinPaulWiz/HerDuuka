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
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Total Sales</p>
                                    <h2 class="font-weight-bold">$58,000</h2>
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
                                    <span class="fa fa-arrow-up mr-2"></span> 5.1%
                                </span> Up from past week
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Total Orders</p>
                                    <h2 class="font-weight-bold">9,621</h2>
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
                                <span class="text-danger d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-down mr-2"></span> 2.6%
                                </span> Down from yesterday
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <p class="text-muted">Total Pending</p>
                                    <h2 class="font-weight-bold">2,217</h2>
                                </div>
                                <div>
                                    <figure class="avatar">
                                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                            <i class="fa fa-refresh"></i>
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <span class="text-success d-inline-flex align-items-center mr-2">
                                    <span class="fa fa-arrow-up mr-2"></span> 1.9%
                                </span> Up from yesterday
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

   <!--  <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Revenue</h6>
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
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <p class="mb-2">This Week</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 line-height-30 font-size-35">$235</h2>
                                <span class="text-success small ml-2 d-flex align-items-center">
                                    <span class="ti-arrow-up mr-2"></span>
                                    <span class="badge badge-success rounded d-inline-flex align-items-center">1.9%</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-2">Last Week</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 line-height-30 font-size-35">$5,180</h2>
                                <span class="text-danger small ml-2 d-flex align-items-center">
                                    <span class="ti-arrow-down mr-2"></span>
                                    <span class="badge badge-danger rounded d-inline-flex align-items-center">1.9%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="revenue"></div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Hot Products</h6>
                        <div>
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
                    <div id="hot-products"></div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item pl-0 pr-0">
                                <i class="fa fa-circle mr-1 text-secondary"></i> Iphone
                            </li>
                            <li class="list-group-item pl-0 pr-0">
                                <i class="fa fa-circle mr-1 text-warning"></i> Samsung
                            </li>
                            <li class="list-group-item pl-0 pr-0">
                                <i class="fa fa-circle mr-1 text-info"></i> Huawei
                            </li>
                            <li class="list-group-item pl-0 pr-0">
                                <i class="fa fa-circle mr-1 text-success"></i> General Mobile
                            </li>
                            <li class="list-group-item pl-0 pr-0">
                                <i class="fa fa-circle mr-1 text-danger"></i> Xiaomi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="card-title">Recent Orders</h6>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Customer</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr> 
                            </thead>
                            <tbody>
                                <?php    
                  include 'config/connection.php';
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `orderdetails`  ORDER BY `orderdetails`.`orderdetail_id`  DESC LIMIT 10";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['product_id'];
                  ?>
                            <tr>
                                <td>
                                    <a href="#">3145</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                         <?php
              // $sql = "SELECT image_path, product_id,file_name FROM product_images WHERE product_id='".$rows['product_id']."'";
              $result = $conn->query("SELECT image_path, product_id,file_name FROM product_images WHERE product_id='".$rows['product_id']."'");
              $row = $result->fetch_assoc();
              ?>
                    <?php 
                    if ($row['image_path']!='') {
                      ?><img src="../admin/<?php echo $row['image_path']; ?>"  class="img-circle rounded-circle mr-3"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'   class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?>
                                     <!--    <img width="40" src="assets/media/image/products/product1.png"
                                             class="rounded mr-3" alt="grape"> -->
                                        <span><?php echo $rows['product_id']; ?></span>
                                    </a>
                                </td>
                                <td>Dollie Bullock</td>
                                <td>$230</td>
                                <td>
                                    <span
                                        class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class=" fa fa-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class=" fa fa-trash"></i>
                                    </a>
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

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex mb-2 mb-sm-0 justify-content-between">
                        <h6 class="card-title">Activities</h6>
                        <div>
                            <div id="reportrange" class="form-control">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div id="ecommerce-activity-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
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
        </div>
    </div>

    <div class="row">
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
    </div>


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
    <script src="vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="assets/js/examples/dashboard.js"></script>

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

    <script src="assets/js/examples/pages/ecommerce-dashboard.js"></script>


<!-- App scripts -->
<script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:20:32 GMT -->
</html>

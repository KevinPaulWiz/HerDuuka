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

    <div class="row">
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
    </div>

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
                        <table id="recent-orders" class="table table-lg">
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
                            <tr>
                                <td>
                                    <a href="#">3145</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product1.png"
                                             class="rounded mr-3" alt="grape">
                                        <span>HP Pavilion 15-EC0005NT AMD</span>
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
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">7321</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product2.png"
                                             class="rounded mr-3" alt="banana">
                                        <span>Samsung Galaxy A51 128 GB</span>
                                    </a>
                                </td>
                                <td>Holmes Hines</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">9342</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product3.png"
                                             class="rounded mr-3" alt="cherry">
                                        <span>Snopy SN-BT96 Pretty</span>
                                    </a>
                                </td>
                                <td>Serena Glover</td>
                                <td>$250</td>
                                <td>
                                    <span class="badge bg-danger-bright text-danger">Payment error</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">6416</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product4.png"
                                             class="rounded mr-3" alt="papaya">
                                        <span>Ultimate Ears Wonderboom</span>
                                    </a>
                                </td>
                                <td>Dianne Prince</td>
                                <td>$550</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">92327</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product5.png"
                                             class="rounded mr-3" alt="pig">
                                        <span>Canon Pixma E3140 Printer</span>
                                    </a>
                                </td>
                                <td>Morgan Pitts</td>
                                <td>$280</td>
                                <td>
                                    <span class="badge bg-warning-bright text-warning">Preparing the order</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">3013</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product6.png"
                                             class="rounded mr-3" alt="pineapple">
                                        <span>Canon 4000D 18-55 MM</span>
                                    </a>
                                </td>
                                <td>Merrill Richardson</td>
                                <td>$128</td>
                                <td>
                                    <span class="badge bg-info-bright text-info">Awaiting PayPal payment</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">10323</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product7.png"
                                             class="rounded mr-3" alt="pomegranate">
                                        <span>Lenovo Tab E10 TB-X104F 32GB 10.1"</span>
                                    </a>
                                </td>
                                <td>Krista Mathis</td>
                                <td>$500</td>
                                <td>
                                    <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">4218</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product8.png"
                                             class="rounded mr-3" alt="raspberry">
                                        <span>Samsung 55Q60RAT 55"</span>
                                    </a>
                                </td>
                                <td>Frankie Hewitt</td>
                                <td>$300</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Remote payment accepted</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">3158</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product9.png"
                                             class="rounded mr-3" alt="strawberry">
                                        <span>Toshiba Canvio Basic 1TB 2.5"</span>
                                    </a>
                                </td>
                                <td>Hayden Fitzgerald</td>
                                <td>$200</td>
                                <td>
                                    <span class="badge bg-success-bright text-success">Delivered</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">9610</a>
                                </td>
                                <td>
                                    <a href="product-detail.html" class="d-flex align-items-center">
                                        <img width="40" src="assets/media/image/products/product10.png"
                                             class="rounded mr-3" alt="watermelon">
                                        <span>Fms Wireless Controller</span>
                                    </a>
                                </td>
                                <td>Cole Holcomb</td>
                                <td>$700</td>
                                <td>
                                    <span
                                        class="badge bg-secondary-bright text-secondary">On pre-order (not paid)</span>
                                </td>
                                <td>2018/08/28 21:24:36</td>
                                <td>
                                    <a href="#" class="text-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="#" class="text-danger ml-2" data-toggle="tooltip" title="Delete">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
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

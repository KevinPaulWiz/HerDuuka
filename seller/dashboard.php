<?php include 'main/header.php'; ?>

        <div class="content-body">
            <div class="content">

                
    <div class="page-header justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=index>Analytics</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
        </nav>
        <div>
            <a href="#" class="btn btn-primary">
                <i class="fa  fa-plus"> </i>&nbsp; Add Products 
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-4     col-md-12">
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Total Orders</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' ");
                                        echo $result->num_rows;
                                         ?></h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-secondary">
                                        <i class="fa fa-bar-chart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4     col-md-12">
                    <div class="card bg-info-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Total Sales</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' AND status='Shipped'");
                                        echo $result->num_rows;
                                         ?></h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-info">
                                        <i class="fa fa-inbox"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4     col-md-12">
                    <div class="card bg-success-gradient">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Total Pending</h6>
                                <small class="opacity-7">Last 30 days</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="font-weight-bold"><?php 
                                        $result = $conn->query("SELECT * FROM `orderdetails` WHERE shop_id='".$_SESSION['shop_id']."' AND status='Pending'");
                                        echo $result->num_rows;
                                         ?></h2>
                                <div class="avatar border-0">
                                    <span class="avatar-title rounded-circle bg-success">
                                        <i class="fa fa-refresh"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Customers Growth</h6>
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
                    <div class="col-md-12">
                    <!-- <div id="customer-growth" style="height:200px"></div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Customers</h6>
                    <table id="myTable" class="table table-lg table-hover">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>County</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ernie</td>
                            <td>Knappitt</td>
                            <td>Portugal</td>
                            <td>eknappitt0@amazonaws.com</td>
                            <td>+351 (840) 948-6817</td>
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
                            <td>Wrennie</td>
                            <td>Hazlegrove</td>
                            <td>Japan</td>
                            <td>whazlegrove1@ted.com</td>
                            <td>+81 (885) 986-8131</td>
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
                            <td>Dani</td>
                            <td>Ponnsett</td>
                            <td>Finland</td>
                            <td>dponnsett2@timesonline.co.uk</td>
                            <td>+358 (937) 777-9935</td>
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
                            <td>Caitrin</td>
                            <td>Morgon</td>
                            <td>Colombia</td>
                            <td>cmorgon3@smh.com.au</td>
                            <td>+57 (925) 174-7746</td>
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
                            <td>Corrie</td>
                            <td>Hein</td>
                            <td>Iraq</td>
                            <td>chein4@google.pl</td>
                            <td>+964 (676) 303-4259</td>
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
                            <td>Corinna</td>
                            <td>Maas</td>
                            <td>Sweden</td>
                            <td>cmaas5@blogger.com</td>
                            <td>+46 (161) 290-2663</td>
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
                            <td>Marigold</td>
                            <td>MacClure</td>
                            <td>Tanzania</td>
                            <td>mmacclure6@craigslist.org</td>
                            <td>+255 (489) 578-0264</td>
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
                            <td>Rupert</td>
                            <td>Kingsnod</td>
                            <td>Russia</td>
                            <td>rkingsnod7@fda.gov</td>
                            <td>+7 (480) 674-3308</td>
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
                            <td>Becki</td>
                            <td>Lackmann</td>
                            <td>China</td>
                            <td>blackmann8@usnews.com</td>
                            <td>+86 (271) 827-2987</td>
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
                            <td>Marylou</td>
                            <td>Oiller</td>
                            <td>Pakistan</td>
                            <td>moiller9@pagesperso-orange.fr</td>
                            <td>+92 (667) 980-4951</td>
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
                            <td>Karyn</td>
                            <td>Afield</td>
                            <td>Czech Republic</td>
                            <td>kafielda@washingtonpost.com</td>
                            <td>+420 (397) 916-7883</td>
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
                            <td>Erik</td>
                            <td>Fusedale</td>
                            <td>United States</td>
                            <td>efusedaleb@theatlantic.com</td>
                            <td>+1 (727) 168-6445</td>
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
            </div> -->

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
<script src="../admin/vendors/bundle.js"></script>


    <!-- Apex chart -->
    <script src="apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="../admin/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="../admin/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="../admin/vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="assets/js/examples/dashboard.js"></script>

    <!-- Vamp -->
    <script src="../admin/vendors/vmap/jquery.vmap.min.js"></script>
    <script src="../admin/vendors/vmap/maps/jquery.vmap.usa.js"></script>
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

    <script src="../admin/assets/js/examples/pages/ecommerce-dashboard.js"></script>


<!-- App scripts -->
<script src="../admin/assets/js/app.min.js"></script>

</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 09:20:32 GMT -->
</html>

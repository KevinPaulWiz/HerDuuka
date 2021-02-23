<?php   include 'main/header.php'; ?>
<?php   include '../admin/main/controllers.php'; ?>


    <div class="content-wrapper">


        <div class="content-body">

            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">User</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Edit</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-lg-3 col-md-12 mb-3">
                    <div class="nav flex-lg-column flex-sm-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Information</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Security</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Social</a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
<?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT * FROM shops WHERE shop_id='$shop_id'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      
foreach ($row as $rs) { 
$category_id=$rs['category_id'];
?>
                 
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Account</h6>
                                             <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                                        <div class="d-flex mb-3">
                                            <figure class="mr-3">
                                                <img class="rounded" src="assets/media/image/user/Women.jpg" alt="..." width="100">
                                            </figure>
                                            <div>
                                                <p>Roxana Roussell</p>
                                                <button class="btn btn-outline-primary mr-2"><input type="file" name=""></button>
                                                <button class="btn btn-outline-danger">Remove Logo</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $rs['fname']; ?>">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Shop Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $rs['shopname']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Phone No</label>
                                                    <input type="text" class="form-control" value="<?php echo $rs['contact']; ?>">
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $rs['lname']; ?>">
                                                </div>
                                              <div class="form-group">
                                              <label>Email Address</label>
                                              <input type="text" class="form-control" value="<?php echo $rs['CompanyEmail']; ?>">
                                              </div>

                                                 <div class="form-group">
                                                    <label>Reffered By</label>
                                                    <input type="text" class="form-control" value="<?php echo $rs['CompanyEmail']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <button type="submit" name="account" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Information</h6>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Birt Date</label>
                                                    <input type="text" class="form-control" value="Roxana Roussell">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" value="+65195892151">
                                                </div>
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="text" class="form-control" value="http://laborasyon.com/">
                                                </div>
                                                <div class="form-group">
                                                    <label>Languages</label>
                                                    <input type="text" class="form-control" value="http://laborasyon.com/">
                                                </div>
                                                <div class="form-group">
                                                    <p>Gender</p>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 1</label>
                                                    <input type="text" class="form-control" value="A-65, Belvedere Streets">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address Line 2</label>
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control" value="1868">
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" value="New York">
                                                </div>
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" value="New York">
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" value="United States">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Security</h6>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password Repeat</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Social</h6>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" class="form-control" value="https://twitter.com/roxana-roussell">
                                                </div>
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" class="form-control" value="https://www.facebook.com/roxana-roussell">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" class="form-control" value="https://www.instagram.com/roxana-roussell/">
                                                </div>
                                                <div class="form-group">
                                                    <label>GitHub</label>
                                                    <input type="text" class="form-control" value="https://github.com/roxana-roussell">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
              <?php } ?>
                </div>
            </div>

        </div>
    </div>


            </div>

        <?php   include '../admin/main/footer.php'; ?>
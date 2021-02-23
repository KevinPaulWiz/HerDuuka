<?php   include 'main/header.php'; ?>
<?php   include '../admin/main/controllers.php'; ?>

     
        <div cla
            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=index.html>User</a>
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
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Account</h6>
                                    <form>
                                        <div class="d-flex mb-3">
                                            <figure class="mr-3">
                                                <img width="100" class="rounded" src="../../assets/media/image/user/women_avatar1.jpg" alt="...">
                                            </figure>
                                            <div>
                                                <p>Roxana Roussell</p>
                                                <button class="btn btn-outline-primary mr-2">Change Avatar</button>
                                                <button class="btn btn-outline-danger">Remove Avatar</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="Roxana Roussell">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" value="roxana-roussell">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" value="wtaffe3@addthis.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select class="form-control">
                                                        <option value="">All</option>
                                                        <option value="">Admin</option>
                                                        <option value="">User</option>
                                                        <option value="" selected>Staff</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control">
                                                        <option value="">All</option>
                                                        <option value="" selected>Active</option>
                                                        <option value="">Blocked</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select class="form-control">
                                                        <option value="">All</option>
                                                        <option value="">Sales</option>
                                                        <option value="" selected>Development</option>
                                                        <option value="">Management</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-4 border shadow-none">
                                            <div class="card-body">
                                                <h6 class="card-title">Permissions</h6>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0 table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>Module</th>
                                                            <th>View</th>
                                                            <th>Edit</th>
                                                            <th>Create</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Users</td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c1" checked>
                                                                    <label class="custom-control-label" for="c1"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c2" checked>
                                                                    <label class="custom-control-label" for="c2"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c3" checked>
                                                                    <label class="custom-control-label" for="c3"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c4">
                                                                    <label class="custom-control-label" for="c4"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Products</td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c5">
                                                                    <label class="custom-control-label" for="c5"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c6" checked>
                                                                    <label class="custom-control-label" for="c6"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c7">
                                                                    <label class="custom-control-label" for="c7"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c8" checked>
                                                                    <label class="custom-control-label" for="c8"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories</td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c9" >
                                                                    <label class="custom-control-label" for="c9"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c10" checked>
                                                                    <label class="custom-control-label" for="c10"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c11">
                                                                    <label class="custom-control-label" for="c11"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c12" checked>
                                                                    <label class="custom-control-label" for="c12"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Reports</td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c13" checked>
                                                                    <label class="custom-control-label" for="c13"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c14" checked>
                                                                    <label class="custom-control-label" for="c14"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c15" checked>
                                                                    <label class="custom-control-label" for="c15"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="c16" checked>
                                                                    <label class="custom-control-label" for="c16"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Save Changes</button>
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
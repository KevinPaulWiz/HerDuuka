<?php include 'main/header.php'; ?>
<?php include 'main/controllers.php'; ?>


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
                <div class="col-md-12">
             <div class="card">
                        <div class="card-body">
                            <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                    <?php echo $Error; ?>
                   
                               <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="submit_suppliers" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                            </div>
                            <ul class="nav nav-tabs mb-3  col-md-12" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">SEO</a>
                                </li>
                            </ul>
                            <div class="tab-content">
 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">  
  <div class="form-group row">
    <label for="companyname" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="companyname" placeholder="companyname">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_fname" class="col-sm-2 col-form-label">Contact First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_fname" placeholder="contact_fname">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_lname" class="col-sm-2 col-form-label">Contact Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_lname" placeholder="contact_lname">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_title" class="col-sm-2 col-form-label">Contact Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_title" placeholder="contact_title">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" placeholder="address">
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-sm-2 col-form-label">Country</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="country" placeholder="country">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="phone" placeholder="phone">
    </div>
  </div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="email">
    </div>
  </div>
    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Logo </label>
                            <div class="col-sm-9">
                                <input type="file" name="file_img" class="form-control" id="inputEmail3" placeholder="Images">
                            </div>
                        </div>

                                </div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">   
  <div class="form-group row">
    <label for="payment_method" class="col-sm-2 col-form-label">Payment Method</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="payment_method" placeholder="payment method">
    </div>
  </div>
   <div class="form-group row">
    <label for="type_goods" class="col-sm-2 col-form-label">Type Goods</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="type_goods" placeholder="type_goods">
    </div>
  </div>
  <div class="form-group row">
    <label for="discount_type" class="col-sm-2 col-form-label">Discount Type</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="discount_type" placeholder="discount type">
    </div>
  </div>
  <div class="form-group row">
    <label for="discount_available" class="col-sm-2 col-form-label">Discount Available</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="discount_available" placeholder="discount_available">
    </div>
  </div>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="table-responsive">
  <div class="form-group row">
    <label for="user_name" class="col-sm-2 col-form-label">username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="password">
    </div>
  </div>
    
<!-- <button type="submit" name="SUBMIT" class="btn btn-primary">Save</button> -->
                                </div>
                            </div>
                          </div>
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


        <?php include 'main/footer.php'; ?>
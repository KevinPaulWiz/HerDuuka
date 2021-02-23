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
                            <ul class="nav nav-tabs mb-3  col-md-12" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link"  href="suppliers" role="tab"
                                       aria-controls="home" aria-selected="true">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active"  href="suppliers-approved" >Approved</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                       aria-controls="contact" aria-selected="false">Denied</a>
                                </li>
                            </ul>
                            <div class="tab-content">
 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">  
  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Action</th>
                  <th>image</th>
                  <th>Shop Name</th>
                  <th>Email</th>
                  <th>Contact Name</th>
                  <th>Phone</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php    
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT * FROM `shops` WHERE status='Approved' ORDER BY `shops`.`shop_id` DESC";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['shop_id'];
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
                <a class="dropdown-item" href=""><i class="fa fa-eye"> </i> Enable</a>
                <a class="dropdown-item" href=""><i class="fa fa-eye-slash"> </i> Disbale</a>
                  <!-- <a class="dropdown-item" href="#"><i class="fa fa-check-square"> </i> Approve</a> -->
                <!--<a class="dropdown-item" href="#">Something else here</a> -->
                </div>
                </div>
                </td>
                   <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                    if ($rows['ShopLogo']!='') {
                      ?><img src='<?php echo $rows['ShopLogo']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span></td>
                  <td><?php echo $rows['shopname']; ?></td>
                  <td><?php echo $rows['CompanyEmail']; ?></td>
                  <td><?php echo $rows['fname']." ".$rows['lname']; ?></td>
                  <td><?php echo $rows['contact']; ?> </td>
                  <td><span class="badge bg-success text-black"><?php echo $rows['status']; ?></span></td>
                
                </tr>
               <?php endwhile; ?>
                </tbody>
              </table>
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
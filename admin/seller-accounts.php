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
                                       aria-controls="home" aria-selected="true">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">Approved</a>
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
                                        <th>Logo</th>
                                        <th>Shop Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Contact Name</th>
                                        <th>Title</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php    
                                         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                        $sql_query = "SELECT * FROM `shops` WHERE status='Approved' ORDER BY `shops`.`shop_id` DESC ";
                                        $fetch_query = $pdo->query($sql_query);
                                        $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                                        $i=1;
                                        while ($rows = $fetch_query->fetch()): 
                                        $no = $i++;
                                        $id = $rows['supplier_id'];
                                        ?>
                                      <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                                        <td><?php echo $no; ?></td>
                                         <td> <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                                          data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                           <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
                                      </td>
                                         <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                                          if ($rows['image_path']!='') {
                                            ?><img src='<?php echo $rows['ShopLogo']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                                          }else{
                                          ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                                          }
                                       ?></span></td>
                                        <td><?php echo $rows['shopname']; ?></td>
                                        <td><?php echo $rows['CompanyEmail']; ?></td>
                                        <td><?php echo $rows['phone']; ?></td>
                                        <td><?php echo $rows['RegistratedMTNNumber']; ?> </td>
                                        <td><?php echo $rows['contact_title']; ?></td>
                                      </tr>
                                     <?php endwhile; ?>
                                      </tbody>
                                    </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">   
                               <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                                      <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Action</th>
                                        <th>Logo</th>
                                        <th>Shop Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Contact Name</th>
                                        <th>Title</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php    
                                         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                        $sql_query = "SELECT * FROM `shops` WHERE status='Approved' ORDER BY `shops`.`shop_id` DESC ";
                                        $fetch_query = $pdo->query($sql_query);
                                        $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                                        $i=1;
                                        while ($rows = $fetch_query->fetch()): 
                                        $no = $i++;
                                        $id = $rows['supplier_id'];
                                        ?>
                                      <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                                        <td><?php echo $no; ?></td>
                                         <td> <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                                          data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                           <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
                                      </td>
                                         <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                                          if ($rows['image_path']!='') {
                                            ?><img src='<?php echo $rows['ShopLogo']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                                          }else{
                                          ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                                          }
                                       ?></span></td>
                                        <td><?php echo $rows['shopname']; ?></td>
                                        <td><?php echo $rows['CompanyEmail']; ?></td>
                                        <td><?php echo $rows['phone']; ?></td>
                                        <td><?php echo $rows['RegistratedMTNNumber']; ?> </td>
                                        <td><?php echo $rows['contact_title']; ?></td>
                                      </tr>
                                     <?php endwhile; ?>
                                      </tbody>
                                    </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                               <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                                      <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Action</th>
                                        <th>Logo</th>
                                        <th>Shop Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Contact Name</th>
                                        <th>Title</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php    
                                         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                        $sql_query = "SELECT * FROM `shops` WHERE status='Approved' ORDER BY `shops`.`shop_id` DESC ";
                                        $fetch_query = $pdo->query($sql_query);
                                        $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                                        $i=1;
                                        while ($rows = $fetch_query->fetch()): 
                                        $no = $i++;
                                        $id = $rows['supplier_id'];
                                        ?>
                                      <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                                        <td><?php echo $no; ?></td>
                                         <td> <a href="javascript:void(0);"  title="Delete" data-toggle="tooltip" class="btn btn-danger btn-sm" data-role="deleted"
                                          data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                           <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
                                      </td>
                                         <td><span style="float: left; margin-right:10px;  border: 1px solid #ddd; padding: 3px;"> <?php 
                                          if ($rows['image_path']!='') {
                                            ?><img src='<?php echo $rows['ShopLogo']; ?>'  class="img-circle"  style="max-width:50px; height:auto;  "><?php
                                          }else{
                                          ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                                          }
                                       ?></span></td>
                                        <td><?php echo $rows['shopname']; ?></td>
                                        <td><?php echo $rows['CompanyEmail']; ?></td>
                                        <td><?php echo $rows['phone']; ?></td>
                                        <td><?php echo $rows['RegistratedMTNNumber']; ?> </td>
                                        <td><?php echo $rows['contact_title']; ?></td>
                                      </tr>
                                     <?php endwhile; ?>
                                      </tbody>
                                    </table>
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
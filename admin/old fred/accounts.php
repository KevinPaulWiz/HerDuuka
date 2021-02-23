<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>
        <!-- end::navigation -->

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
         <div>
            <a href="product-list.html" class="btn btn-outline-primary active" title="List" data-toggle="tooltip">
                <i class="fa fa-th-list"></i>
            </a>
            <a href="product-grid.html" class="btn btn-outline-primary ml-2" title="Grid" data-toggle="tooltip">
                <i class="fa fa-th-large"></i>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-body">
                            <!-- Sign Up Modal Form -->
    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="<?php echo $_SERVER[""];?>" enctype="multipart/form-data">
                  <div class="modal-header">
                  <h3 class="modal-title text-uppercase">user Registration</h3 >
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>           
                  </div>
                    
                  <div class="modal-body">                
                            
                    <div class="row">
                      <div class="col-lg-12">
                      <div class="form-group">
                      <label>Full name <span class="text-danger">*</span></label>
                      <input class="form-control" placeholder="surname othername" name="name" type="text" required />
                      </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Valid Email <span class="text-danger">*</span></label>
                      <input class="form-control" name="email" placeholder="Enter Email Address" type="email" required />
                      </div>
                      </div>  
                      
                      
                      <div class="col-lg-6">
                      <div class="form-group">
                      <label>Username (optional)</label>
                      <input class="form-control" name="UserName" placeholder="Enter UserName" type="text" />
                      </div>
                      </div>  
                    </div> 
                    
                    <div class="row">
                    
                      <div class="col-lg-12">
                      <div class="form-group">
                      <label>Role</label>
                      <select name="role" class="form-control" required>
                      <option value="">- select -</option>
                      <optgroup label="Staff member">
                      <option>Administrator</option>
                      </optgroup>
                      <optgroup label="Registered member">
                      <option value="User">User</option>
                      </optgroup>
                      </select>
                      </div>
                      </div>                         
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label>Password <span class="text-danger">*</span></label>
                      <input class="form-control" id="password1" name="password"  placeholder="Enter Password" type="password" required />
                      </div>
                      </div>
                       <div class="col-lg-6">
                      <div class="form-group">
                      <label>Comfirm Password </label>
                      <input class="form-control" id="password2" placeholder="Re-Type Password" type="password"  required />
                      </div>
                      </div>       
                    </div>
                  </div>             
                  
                  <div class="modal-footer">
                    <button type="submit" name="submit_user" class="btn btn-primary">Submit Form</button>
                  </div>
                    
                  </form> 
                  
                </div>
              </div>
            </div>
    <!-- Sign Up Modal Form -->
            <div class="row">
<?php echo $Error; ?>
          <div class="">
                <div class="x_panel">
                  <div class="x_title float-right col-md-12 p-2">
                    <h4 class="float-left text-uppercase">Manage Admin Accounts</h4>
                     <button class="btn btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-plus-square"> </i> Add New User </button>
                    <!-- <h2>Students <small>Information</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content card card-body">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Action</th>
                  <th>User Details</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Added By</th>
                  <th>Creation Date</th>
                </tr>
                </thead>
                <tbody>
                  <?php    
                   $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                  $sql_query = "SELECT *FROM `users` WHERE deleted !='-1' ORDER BY `users`.`id` ASC";
                  $fetch_query = $pdo->query($sql_query);
                  $fetch_query->setFetchMode(PDO::FETCH_ASSOC);
                  $i=1;
                  while ($rows = $fetch_query->fetch()): 
                  $no = $i++;
                  $id = $rows['id'];
                  ?>
                <tr class="delete_mem<?php echo $id ?>" id="<?php echo $id ?>" >
                  <td><?php echo $no; ?></td>
                   <td>
                    <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $id; ?>" id="updateUser" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </button>
                     <a href="javascript:void(0);" class="btn btn-danger btn-sm" data-role="deleted"
                    data-id="<?php echo $id; ?>" id="<?php echo $id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                  <td><span style="float: left; margin-right:10px;"> <?php 
                    if ($rows['img_path']!='') {
                      ?><img src='<?php echo $rows['img_path']; ?>'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }else{
                    ?><img src='dist/img/user.png'  class="img-circle"  style="max-width:50px; height:auto;"><?php
                    }
                 ?></span>
                            <strong><?php echo $rows['fullname']; ?></strong>             <br />
                            <small><?php echo $rows['Email']; ?></small>
                  </td>
                  <td><?php echo $rows['UserName']; ?></td>
                  <td><?php echo $rows['Role']; ?></td>
                  <td> <?php 
                  $row_fetch=$rows['submittedby']; 
                  $sql_query = "SELECT * FROM  users WHERE id='$row_fetch'";
                  $results = $conn->query($sql_query);
                  $row = $results->fetch_assoc();
                  echo $row['fullname'];
                  ?></td>
                  <td><?php echo $rows['Date']; ?></td>
                 
                </tr>
               <?php endwhile; ?>
                </tbody>
              </table>
                  </div>
                </div>
              </div>
            </div>

             </form>
           
          </div>
        </div>
        <!-- /page content -->
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


            </div>
   <!-- More information -->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog lg"> 
     <div class="modal-content">  
 <?php 
    include "include/db_connect.php";
    if (isset($_POST['updateinventory'])) {
       $id = $_POST["id"];
     session_start();
      $user_email=$_SESSION['Email'];
      $date=date('D dS M,Y h:i a');
      $new_role = $_POST["new_role"];
        // $email = $_POST["email"];
        $user_pass = $_POST["user_pass"];
        $pswdcrypt='^%#?&*';
        $pswrd = $pswdcrypt.$user_pass.$pswdcrypt;
        $pswrd1=md5($pswrd);
        $pswrd2 = sha1($pswrd1);
        $pswrd3= crypt($pswrd2,RM);
if (!empty($_POST['user_pass'])) {
  try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `Role`='$new_role',`Password`='$pswrd3',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$id'";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo "<script> location.href=''; </script>";
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }

}else{
try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `users` SET `Role`='$new_role',`updateddate`='$date',`updatedby`='$user_email' WHERE id='$id'";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo "<script> location.href=''; </script>";
            }
            catch(PDOException $e)
            {
            $Error= $sql . "<br>" . $e->getMessage();
            }
}
}
        ?>  
        <div class="modal-header"> 
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
           <h3 class="text-uppercase">Update Record</h3>
           <!-- <a class="no-print btn btn-primary" href="javascript:printDiv('print-area-2');">
            <i class="fa fa-print"></i> Print Reciept
           </h4> 
         </a><h4 class="modal-title text-uppercase"> -->
        </div> 
            
        <div class="modal-body">                     
           <div id="modal-loader" style="display: none; text-align: center;">
           <!-- ajax loader -->
           <img src="dist/img/loading.gif">
           </div>
             <div   id="print-area-2" class="print-area">
           <!-- mysql data will be load here -->                          
           <div id="dynamic-content"></div>
             </div>               
        </div> 
                        
        <div class="modal-footer"> 
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              
            <!-- <button type="button"  class="btn btn-primary pull-right" href="javascript:printDiv('print-area-1');">Print Detials</button>   -->
        </div> 
                        
    </div> 
  </div>
</div>

<!-- More information -->
<?php include 'main/footer.php'; ?>
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
                    url: "user-del.php",
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
<!-- Print Reciept for a single record -->
<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click', '#updateUser', function(e){
// alert('true');

  
     e.preventDefault();
  
     var uid = $(this).data('id'); // get id of clicked row
  
     $('#dynamic-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: 'user-update.php',
          type: 'POST',
          data: 'id='+uid,
          dataType: 'html'
     })
     .done(function(data){
          console.log(data); 
          $('#dynamic-content').html(''); // blank before load.
          $('#dynamic-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });

    });
});
</script>
<!-- Print Reciept for a single record -->

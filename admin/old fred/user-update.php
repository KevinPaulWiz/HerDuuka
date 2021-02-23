<?php 
 $id = intval($_REQUEST['id']);
// $id='1';
include 'config/connection.php';  
$sql = "SELECT * FROM  users WHERE  deleted!='-1' AND id='$id'";
$result = $conn->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
$id = $row['id'];
$role = $row['Role'];
?>
 
         <form method="post" action="<?php echo $_SERVER[""];?>" enctype="multipart/form-data">
   
 <div class="table-responsive">
<div class="card mx-auto mt-3">
      <div class="card-header">
        <!-- <p><h5 class="text-uppercase"><b>UPDATE Inventory </b></h5></p> -->
      </div>
      <div class="card-body">
        
          <div class="col-sm-12">
          <div class="form-group">
          <label>Role (required)</label>
          <select name="new_role"  class="form-control" required>
                      <option value="">- select -</option>
                      <optgroup label="Staff member">
                                  <option value="Administrator" <?php if($role=="Administrator"){echo "selected";}?>>Administrator</option>
                                    <option value="Sales" <?php if($role=="Sales"){echo "selected";}?>>Sales</option>
                                    <option value="Accounts" <?php if($role=="Accounts"){echo "selected";}?>>Accounts</option>
                                  </optgroup>
                      
                      <optgroup label="Registered member">
                                  <option value="User" <?php if($role=="User"){echo "selected";}?>>User</option>
                                  </optgroup>
                      </select>
          </div>
          </div>  
          <div class="col-sm-12">
          <div class="form-group">
          <label>Password (leave empty not to change)</label>
          <input class="form-control" id="password1" name="user_pass" type="password" value="" />
          </div>
          </div>                                                    
          
          <div class="col-sm-12">
          <div class="form-group">
          <label>Re-type Password</label>
          <input class="form-control" id="password2"  type="password" value="" placeholder="Confirm Password" />
          </div>
          </div>   
        </div>
          <div class="form-group col-md-12 pt-3">
            <div class="form-row">
              <div class="float-right">
        <input class="btn btn-primary" name="updateinventory" type="submit" value="Submit Form">
        
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                              </div>
              
            </div>
          </div>
          </div>
        </form>




 </div>
      </div>
   <!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- <script src="assets/parsleyjs/parsley.min.js"></script> -->
 </div>

 <?php    
}
// }
?>


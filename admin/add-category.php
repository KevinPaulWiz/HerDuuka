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

                       <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                    <?php echo $Error; ?>
                    <?php echo $statusMsg; ?>
                    
                    <div class="card">
                        <div class="card-body">
                                <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="submit_categories" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                            </div>
                            <ul class="nav nav-tabs mb-3 col-md-12" role="tablist">
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
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
   
   
    
  
  <div class="form-group row">
    <label for="category_name" class="col-sm-2 col-form-label text-right font-weight-bold">Category Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="category_name" placeholder="Category Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label text-right font-weight-bold">Description</label>
    <div class="col-sm-10">
      <!-- <input type="textarea" class="form-control" name="description" placeholder="description"> -->
      <textarea class="form-control" name="description" placeholder="description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="picture" class="col-sm-2 col-form-label text-right font-weight-bold">Banner Images</label>
    <div class="col-sm-10">
      <div class="img">
          <input type="file" name="file_img[]" multiple="" class="form-control dropzone" id="inputEmail3" placeholder="Images">
          <span class="small text-default" style="color:#777;">Allowed types are jpg, png, jpeg, gif and  below 1MB</span>
    </div>
    </div>
  </div>

   <div class="form-group row">
    <label for="picture" class="col-sm-2 col-form-label text-right font-weight-bold">Category Icon</label>
    <div class="col-sm-10">
      <div class="img">
 <input type="file" name="icon" class="form-control" id="inputEmail3" placeholder="Images">
                                <span class="small text-default" style="color:#777;">Allowed types are jpg, png, jpeg, gif and  below 1MB</span>
</div>
    </div>
  </div>
  

</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                     
  <div class="form-group row">
    <label for="parent" class="col-sm-2 col-form-label text-right font-weight-bold">Parent</label>
    <div class="col-sm-10">
      <select name="parent" class="form-control select2">
  <option value="">Open this select menu</option>
<?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT  category_id, category_name, parent  FROM category WHERE parent='0'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      

foreach ($row as $rs) { ?>
  <option value="<?php echo $rs['category_id'] ?>"><?php echo $rs['category_name']; ?> > </option>
<?php } ?> 
<?php
// $pdo = connect();             
include 'config/connection.php';
$sql = "SELECT  category_id, category_name, parent  FROM category WHERE parent='0'";
$query = $pdo->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);      
foreach ($row as $rs) { ?>
            <?php
                $sql = "SELECT  category_id, category_name, parent 
                        FROM category
                        WHERE parent = '".$rs['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                
                            <option value="<?php echo $sub['category_id'] ?>"><?php echo $rs['category_name']; echo ", ";  echo $sub['category_name']; echo " > ";?></option>
<?php   } ?>
<?php   } ?>

    
</select>

    </div>
  </div>
  <div class="form-group row">
    <label for="meta_tag_title" class="col-sm-2 col-form-label text-right font-weight-bold">Meta tag title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_tag_title" placeholder="meta tag title">
    </div>
  </div>
  <div class="form-group row">
    <label for="meta_keywords" class="col-sm-2 col-form-label text-right font-weight-bold">Meta Keywords</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_keywords" placeholder="meta keywords">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label text-right font-weight-bold">Status</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="status" placeholder="status">
    </div>
  </div>
  
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="table-responsive col-md-12">
  <table class="table table-bordered" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col" align="right">Stores</th>
        <th scope="col">Keyword</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" align="right">Default</th>
        <td><form>
    <div class="form-group">
        
        <input type="text" class="form-control" name="keyword" placeholder="keyword">
       
    </div></td>
      </tr>
      
      
    </tbody>
  </table>
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


        <?php include 'main/footer.php'; ?>
<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>

        <div class="content-body">

            <div class="content">

                
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
               <!--  <li class="breadcrumb-item">
                    <a href="#">Components</a>
                </li> -->
                <li class="breadcrumb-item active" aria-current="page">Tab</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                                <form   enctype="multipart/form-data"  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
<?php echo $Error; ?>
                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>
                                    
                                </legend> <div class="col-md-12"> 
                            <h6 class="card-title float-left text-uppercase"><?php echo $title; ?></h6>
                             <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                             <button type="submit" name="add_manafacturer" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                            </div>
                            </fieldset>
                           
                            <ul class="nav nav-tabs mb-3 col-md-12" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">General</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Manufacturer Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="name" required="" class="form-control" id="inputEmail3" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label pull-right">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="file_img" class="form-control dropzone" id="inputEmail3" placeholder="Product Name">
                            </div>
                        </div>
                           <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label pull-right">Sort Order </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="sort_order" id="inputEmail3" placeholder="Sort Order">
                            </div>
                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
</form>

                </div>
            </div>

        </div>
    </div>

 
            </div>

    <?php   include 'main/footer.php'; ?>
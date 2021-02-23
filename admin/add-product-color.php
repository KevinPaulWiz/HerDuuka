<?php   include 'main/header.php'; ?>
<?php   include 'main/controllers.php'; ?>
<!-- Modernizr -->
        <script src="assets/js/modernizr.min.js"></script>

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- Moment -->
        <script src="assets/js/moment.min.js"></script>
        
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
        <!-- END CSS for this page -->
                
        <!-- BEGIN CSS for this page -->
        <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
        <!-- END CSS for this page -->

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
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </nav>
    </div>

    <?php 
        if (isset($_POST['add_product_color'])) {
            include 'config/connection.php';
            $product_id = addslashes($_POST['product_id']);
            $colorArr = $_POST['color'];
            $submittedby = $_SESSION['id'];
            $submitteddate = date('Y-m-d');
            for ($i=0; $i <count($colorArr) ; $i++) { 
                if (!empty($colorArr[$i])&&!empty($product_id)) {
                    $color = addslashes($colorArr[$i]);
                    $conn->query("INSERT INTO product_color(product_id,color,submitteddate,submittedby) VALUES('$product_id','$color','$submitteddate','$submittedby')");
                 $bonswa =  "<script type=\"text/javascript\"> alert(\"Record has been added successfully.\"); window.location = \"\"</script>";
                }
            }
            if (isset($bonswa)) {
                echo $bonswa;
            }else{
                echo "<script type=\"text/javascript\"> alert(\"Submission Failed.\"); window.location = \"\"</script>";
            }
         } ?>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
            <form  method="post" action="<?php echo htmlspecialchars($_SERVER[""]);?>" class="needs-validation" novalidate >
                    <?php echo $Error; ?>
                    <?php echo $statusMsg; ?>

            <div class="card">
                <div class="card-body">
                    <fieldset>
                <legend>
                    
                </legend> <div class="col-md-12"> 
                <h4 class="card-title float-left text-uppercase"><?php echo $title; ?> <small> (<span class="text-danger"> * </span> fields are Mandatory)</small></h4>
                 <button type="reset" class="btn btn-light btn-square float-right" title="cancel" data-toggle="tooltip"><i class="fa fa-reply"></i></button>
                 <button type="submit" name="add_product_color" class="btn btn-primary btn-square float-right" title="Save" data-toggle="tooltip"><i class="fa fa-save"></i></button>
                </div>
                </fieldset>
               
                <!-- <div class="border-bottom col-md-12"></div> -->
                <ul class="nav nav-tabs mb-3 col-md-12" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">General</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                         aria-labelledby="home-tab">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold"> Product <span class="text-danger font-weight-bold">*</span></label>
                            <div class="col-sm-9">
                                <select required="" name="product_id" id="input-weight-class" class="form-control select2" style="width: 100%;">
                                    <option value="">-Select-</option>
                                        <?php           
                                        include 'config/connection.php';
                                        $sql = "SELECT product_id, product_name FROM products";
                                        $query = $pdo->prepare($sql);
                                        $query->execute();
                                        $row = $query->fetchAll(PDO::FETCH_ASSOC);      
                                        foreach ($row as $rs) { ?>
                                        <option value="<?php echo $rs['product_id']; ?>"><?php echo $rs['product_name']; ?></option>
                                        <?php } ?>                                
                                </select>
                            </div>
                        </div>
                            <div class="fieldGroup form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold"> Color <span class="text-danger font-weight-bold">*</span></label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="color" class="form-control" id="defaultInput" name="color[]"  value="#585858" required="">
                                        </div>
                                    <div class=" col-md-2">
                                        <button type="button" class="btn-sm btn-success form-control addMore"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                       <div class="fieldGroup-copy form-group row" style="display: none;">
                                <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold"> Color <span class="text-danger font-weight-bold">*</span></label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="color" class="form-control" id="defaultInput" name="color[]"  value="#585858" required="">
                                        </div>
                                    <div class=" col-md-2">
                                        <button type="button" class="btn-sm btn-danger form-control remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
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
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<!-- <script src="assets/js/pikeadmin.js"></script> -->
<script type="text/javascript">
                           
    $(document).ready(function(){
    //group add limit
    var maxGroup = 15;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="row fieldGroup">'+$(".fieldGroup-copy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+', records are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>
<script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
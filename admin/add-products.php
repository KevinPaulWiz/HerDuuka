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
                <li class="breadcrumb-item">
                    <a href="#">Forms</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">

  

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title text-uppercase"> Add Products</h6>
                            <div id="wizard2">
                                <h3>General</h3>
                                <section class="card card-body border mb-0">
                                    <!-- <h5>General Information</h5> -->
                                    <!-- <p>Try the keyboard navigation by clicking arrow left or right!</p> -->
                                    <form id="form1">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Name <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="text" required="" name="productname" class="form-control" id="inputEmail3" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label text-right font-weight-bold">Description</label>
                            <div class="col-sm-9">
                                 <textarea rows="3" class="form-control editor" name="product_description" id="editor" placeholder="Type Here...."></textarea>
                            </div>
                             
                        </div>
                       <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Title <span class="text-danger font-weight-bold">*</span></label></label>
                            <div class="col-sm-9">
                                <input type="text" required="" class="form-control" name="meta" id="inputEmail3" placeholder="Meta Tag Title">
                            </div>
                        </div>
                        
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Description</label>
                            <div class="col-sm-9">
                             <textarea class="form-control" id="inputEmail3" name="meta_desc" placeholder="Meta Tag Description"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Meta Tag Keywords</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name"> -->
                                <textarea class="form-control" name="meta_keywords" id="inputEmail3" placeholder="Meta Tag Keywords"></textarea>
                            </div>
                        </div>
                              <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold">Product Tags </label>
                            <div class="col-sm-9">
                                <input type="text" name="productstag" class="form-control" id="inputEmail3" placeholder="Product Tags">
                            </div>
                                    </form>
                                </section>
                                <h3>Billing Information</h3>
                                <section class="card card-body border mb-0">
                                    <h5>Billing Information</h5>
                                    <p>Wonderful transition effects.</p>
                                    <form id="form2">
                                        <div class="form-group wd-xs-300">
                                            <label class="form-control-label">Email: <span
                                                    class="tx-danger">*</span></label>
                                            <input id="email" class="form-control" name="email"
                                                   placeholder="Enter email address"
                                                   type="email" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div><!-- form-group -->
                                    </form>
                                </section>
                                <h3>Payment Details</h3>
                                <section class="card card-body border mb-0">
                                    <h5>Payment Details</h5>
                                    <p>The next and previous buttons help you to navigate through your content.</p>
                                </section>
                            </div>
                          
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


            </div>

            <!-- begin::footer -->
<?php   include 'main/footer.php'; ?>
<!-- BEGIN Java Script for this page -->
<script>
$(document).ready(function () {
    'use strict';
    $('#editor').trumbowyg();                           
}); 
</script>
<script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
<!-- END Java Script for this page -->
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
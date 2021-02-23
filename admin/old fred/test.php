<script src="vendor/select2/js/select2.min.js"></script>
    <script src="vendor/select2/dist/js/select2.full.min.js"></script>
<div class="col-sm-9">
                                <select required="" name="product_id" id="input-weight-class" onchange="getColors(this.value)" class="form-control select2" style="width: 100%;">
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
                        <script type="text/javascript">
                            function getColors(c){
                                var id = c;
                                var x = document.getElementById('colors');
                                $.ajax({
                                            type: "POST",
                                            url: "product-color-fetch.php",
                                            data: ({
                                                id: id
                                            }),
                                            cache: false,
                                            success: function(data) {
                                                data = JSON.parse(data);
                                                var fes = '<option value="">-Select-</option>';
                                                // alert(data[]['color']);
                                                // alert(c);
                                                for (var i = 0; i <= data.length; i++) {
                                                    var color = 
                                                    var color_id = data[i]['id'];
                                                    fes =  '<option id="'+color+'" value="'+color_id+'">'+color+'</option>';
                                                    var option = document.createElement("option");
                                                    option.text = data[i]['color'];
                                                    option.value = data[i]['color_id'];
                                                    option.id = data[i]['color'];
                                                    x.add(option);
                                                // alert(fes);
                                                }
                                                
                                                // // document.getElementByClassName('PutHere').html(fes);
                                                // document.getElementById('colors').html(fes);
                                            }
                                        });
                            }
                        </script>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label text-right font-weight-bold"> Color <span class="text-danger font-weight-bold">*</span></label>
                            <div class="col-sm-5">
                                <select required="" name="color_id" id="colors" class="form-control select2" onchange="showOptions(this);" style="width: 100%;">
                                                               
                                </select>
                            </div>
                            <div class="col-md-4">
                                <i style="background-color: #ffffff" class="form-control" id="color-display">&nbsp;</i>
                            </div>
                            <script type="text/javascript">
                                function showOptions(s){
                                    document.getElementById('color-display').style.backgroundColor = s[s.selectedIndex].id;
                                }
                            </script>
                        </div>
<?php   include 'main/footer.php'; ?>
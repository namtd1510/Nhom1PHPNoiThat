<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Manager</h1>
        </div>
    </div> 
    <script type="text/javascript">
        var controller = '_productController';
        function edit_ajax(id)
        {
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string

            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('admin') ?>/" + controller + "/ajax_edit/" + id,
                type: "GET",
                dataType: "JSON",
                success: function (data)
                {
                    var items = '';

                    /*$("#category_id").append(function () {
                     return $.map(data1, function (el, i) {
                     return '<option value=' + el.val + '>' + el.text + '</option>';
                     });
                     });*/

                    $('[name="id"]').val(data[0].id);
                    //$('[name="category_id"]').val(data.category_id);
                    $('[name="product_name"]').val(data[0].product_name);
                    $('[name="sku"]').val(data[0].sku);
                    $('[name="vote"]').val(data[0].vote);
                    $('[name="color"]').val(data[0].color);
                    $('[name="metarial"]').val(data[0].metarial);
                    $('[name="detail"]').val(data[0].detail);
                    $('[name="product_date"]').val(data[0].product_date);
                    $('[name="price"]').val(data[0].price);
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Product'); // Set title to Bootstrap modal title

                    $.each(data[1], function (name, value)
                    {
                        if (data[0].category_id == value.id)
                            items += "<option selected value='" + value.id + "'>" + value.category_name + "</option>";
                        else
                            items += "<option value='" + value.id + "'>" + value.category_name + "</option>";
                    });
                    $("#category_id").html(items);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }


        function add_ajax2()
        {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string

            $("#category_id").find('option').remove();
            $.ajax({
                url: "<?php echo site_url('admin') ?>/" + controller + "/get_category",
                type: "GET",
                dataType: "JSON",
                success: function (data)
                {
                    var items = '';
                    $.each(data, function (name, value)
                    {
                        items += "<option value='" + value.id + "'>" + value.category_name + "</option>";
                    });
                    $("#category_id").html(items);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });




            $('#modal_form').modal('show'); // show bootstrap modal
            $('.modal-title').text('Add'); // Set Title to Bootstrap modal title
        }

        function upload_ajax()
        {
            save_method = 'upload';
            $('#form')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string
            $('#modal_form').modal('show'); // show bootstrap modal
            $('.modal-title').text('Upload'); // Set Title to Bootstrap modal title
        }
        $(document).ready(function () {
            $('.datepicker').datepicker({
                autoclose: true,
                format: "yyyy-mm-dd",
                todayHighlight: true,
                orientation: "top auto",
                todayBtn: true,
                todayHighlight: true,
            });
            
        });




    </script>


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div align="right" class="panel-heading">
                    <button class="btn btn-success" onclick="add_ajax2()"><i class="glyphicon glyphicon-plus"></i>Add Product</button>
                    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
                </div>
                <div class="panel-body">                    
                    <div class="dataTable_wrapper">
                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product Name</th>
                                    <th>Sku</th>
                                    <th>Vote</th>
                                    <th>Color</th>
                                    <th>Metarial</th>
                                    <th>Detail</th>
                                    <th>Product date</th>
                                    <th>Price</th>
                                    <th style="width:125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>                                       
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>  

    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Product Form</h3>
                </div>
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id"/> 
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Category</label>
                                <div class="col-md-5">
                                    <!--<input name="category_id" placeholder="Category" class="form-control" type="text">-->
                                    <select name="category_id" id="category_id" class="form-control"></select>
                                    <span class="help-block"></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Name</label>
                                <div class="col-md-5">
                                    <input name="product_name" placeholder="Product Name" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label col-md-3">Sku</label>
                                <div class="col-md-5">
                                    <input name="sku" placeholder="Sku" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-3">Vote</label>
                                <div class="col-md-5">
                                    <input name="vote" placeholder="Vote" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-md-3">Color</label>
                                <div class="col-md-5">
                                    <input name="color" placeholder="Color" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-3">Metarial</label>
                                <div class="col-md-5">
                                    <input name="metarial" placeholder="Metarial" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label class="control-label col-md-3">Detail</label>
                                <div class="col-md-5">
                                    <input name="detail" placeholder="Detail" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-md-3">Product Date</label>
                                <div class="col-md-5">
                                    <input class="form-control datepicker" type="text" placeholder="yyyy-mm-dd" name="product_date" kl_virtual_keyboard_secure_input="on">
                                    <span class="help-block"></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="control-label col-md-3">Price</label>
                                <div class="col-md-5">
                                    <input name="price" placeholder="Price" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- End Bootstrap modal -->
</div>

<!-- /#page-wrapper -->
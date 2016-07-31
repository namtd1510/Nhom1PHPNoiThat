<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Slide Manager</h1>
        </div>
    </div> 
    <script type="text/javascript">
        var controller = '_slideController';
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

                    $('[name="id"]').val(data.id);
                    $('[name="slide_url"]').val(data.slide_url);
                    $('[name="slide_date"]').val(data.slide_date);
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Slide'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

    </script>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div align="right" class="panel-heading">
                    <button class="btn btn-success" onclick="add_ajax()"><i class="glyphicon glyphicon-plus"></i>Add Slide</button>
                    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i>Reload</button>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Slide URL</th>
                                    <th>Date</th>
                                    <th style="width:125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
                    <h3 class="modal-title">Slide Form</h3>
                </div>
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id"/> 
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Slide URL</label>
                                <div class="col-md-5">
                                    <input name="slide_url" placeholder="Slide URL" class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                                <label class="btn btn-default btn-file">
                                    Browse <input type="file" style="display: none;">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Slide Date</label>
                                <div class="col-md-5">
                                    <input name="slide_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
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
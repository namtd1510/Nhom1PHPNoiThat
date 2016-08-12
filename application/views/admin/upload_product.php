<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Upload Product</title>
        <!-- load bootstrap css file -->
        <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery footer-->
        <script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 well">
                    <legend>Add Product</legend>
                    <table border="5">
                        <?php
                        echo "<tr>";
                        $check = '';
                        foreach ($product as $p)
                            echo "<td><a href='#' class='pop'><image style='width: 150px; height: 150px;' id='imageresource' src=" . $p->image_url . "></a></td>";
                        echo "</tr><tr>";
                        foreach ($product as $p)
                        //echo "<td align='center'><label class='radio-inline'><input type='radio' " .$p->status=='0'?:' checked=checked '. "  name='optradio' onclick='radio(" . $p->id . "," . $p->image_id . ");'>Main</label></td>";
                            if ($p->status == 0)
                                echo "<td align='center'><label class='radio-inline'><input type='radio' name='optradio' onclick='radio(" . $p->id . "," . $p->image_id . ");'>Main</label></td>";
                            else
                                echo "<td align='center'><label class='radio-inline'><input checked type='radio' name='optradio' onclick='radio(" . $p->id . "," . $p->image_id . ");'>Main</label></td>";
                        echo "</tr><tr>";
                        foreach ($product as $p)
                            echo "<td align='center'><a href='#' class='pop' onclick='remove_image(" . $p->id . "," . $p->image_id . ");'>remove</a></td>";

                        echo "</tr>";
                        ?>
                    </table>
                    <br>
                    <?php echo form_open_multipart('admin/_ProductController/upload'); ?>
                    <input type="hidden" name="product_id" value="<?php echo $product_id ?>">    
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="filename" class="control-label">Select File to Upload</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="file" name="filename" size="20" />
                                    <span class="text-danger"><?php
                                        if (isset($upload_error['error'])) {
                                            echo $upload_error['error'];
                                        }
                                        ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Upload File" class="btn btn-primary"/>
                                    <a class="btn btn-default" href="<?php echo site_url('admin/_productController') ?>">
                                        <i class="glyphicon glyphicon-arrow-left"></i>
                                        Back
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <?php echo form_close(); ?>
                    <?php
                    if (isset($success_msg)) {
                        echo $success_msg;
                    }
                    ?>
                    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">              
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <img src="" class="imagepreview" style="width: 100%;" >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            function remove_image(product_id, image_id)
            {
                if (confirm('Are you sure delete this data?'))
                    //window.location.href = "<?php //echo site_url('_productController/delete_image')                   ?>/".image_id;
                    window.location.href = "<?php echo site_url('admin/_productController/delete_image') ?>/" + image_id + '/' + product_id;
            }
            $(function () {
                $('.pop').on('click', function () {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
            function radio(product_id, image_id)
            {

                // ajax delete data to database
                $.ajax({
                    url: "<?php echo site_url('admin/_productController/update_image') ?>/" + image_id + '/' + product_id,
                    type: "POST",
                    dataType: "JSON",
                    success: function (data)
                    {
                         
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error data');
                    }
                });

            }
        </script>
    </body>
</html>
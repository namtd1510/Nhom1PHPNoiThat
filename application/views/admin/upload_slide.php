<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Upload Silde</title>
        <!-- load bootstrap css file -->
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
                    <legend>Upload Slide</legend>
                    <table border="5">
                        <?php
                        echo "<tr>";
                        foreach ($slide as $s)
                            echo "<td><a href='#' class='pop'><image style='width: 150px; height: 150px;' id='imageresource' src=" . $s->slide_url . "></a></td>";
                        echo "</tr><tr>";
                        foreach ($slide as $s)
                            echo "<td align='center'><a href='#' class='pop' onclick='remove_image(" . $s->id . ");'>remove</a></td>";
                        echo "</tr>";
                        ?>
                    </table>
                    <?php echo form_open_multipart('admin/_slideController/upload'); ?>

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
                                        if (isset($error)) {
                                            echo $error;
                                        }
                                        ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Upload File" class="btn btn-primary"/>
                                    <a class="btn btn-default" href="<?php echo site_url('admin/_slideController') ?>">
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
            function remove_image(image_id)
            {
                if (confirm('Are you sure delete this data?'))
                    window.location.href = "<?php echo site_url('admin/_slideController/delete_image') ?>/" + image_id;
            }
            $(function () {
                $('.pop').on('click', function () {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
        </script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Upload Silde</title>
        <!-- load bootstrap css file -->
        <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 well">
                    <legend>Upload Product</legend>
                    <?php echo form_open_multipart('admin/_ProductController/upload'); ?>
                    <input type="hidden" name="product_id" value="<?php echo $product_id?>">    
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
                </div>
            </div>
        </div>
    </body>
</html>
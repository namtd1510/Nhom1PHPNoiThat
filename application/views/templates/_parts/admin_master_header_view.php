<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Furniture Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
              
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <!--<link href="<?php //echo base_url(); ?>assets/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">-->
    
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrapValidator.js" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    
    
    
    <!-- jQuery footer-->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/dist/js/sb-admin-2.js"></script>
    
        
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo site_url('admin/userController/index')?>">Furniture Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('admin/userController/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            

        

   

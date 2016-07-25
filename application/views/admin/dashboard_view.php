<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Manager</h1>
        </div>


    </div> 
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div align="right" class="panel-heading"><button data-toggle="modal" data-target="#myModal" class="btn btn-outline btn-success" type="button">Add New</button></div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">                            
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($user as $u) {
                                    echo '<tr class="odd gradeX">';
                                    echo '<td>' . $u['user_id'] . '</td>';
                                    echo '<td>' . $u['user_name'] . '</td>';
                                    echo '<td>' . $u['email'] . '</td>';
                                    echo '<td>' . $u['full_name'] . '</td>';
                                    echo '<td><button class="btn btn-outline btn-warning" type="button">Edit</button></td>';
                                    echo '<td><button class="btn btn-outline btn-danger" type="button">Delete</button></td>';
                                    echo '</tr>';
                                }
                                ?>

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



    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add User</h4>
                    </div>
                    
                    <div class="modal-body">
                        <div class = "form-group">
                            <label for="ex2">col-xs-3</label>
                            <input class = "form-control input-sm" type = "text" placeholder =".input-lg">
                        </div>                    
                    </div>                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .form-control{
            
            width:20%;
        }
        .modal {
            text-align: center;
            padding: 0!important;
        }
        
        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }
    </style>

</div>
<!-- /#page-wrapper -->
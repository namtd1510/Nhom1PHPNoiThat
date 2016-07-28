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
                <div align="right" class="panel-heading"><button data-toggle="modal" data-target="#loginModal" class="btn btn-outline btn-success" type="button">Add New</button></div>
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


    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title"><b>Add User</b></h3>
                </div>

                <div class="modal-body">
                    <!-- The form is placed inside the body of modal -->
                    <form id="loginForm" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Username</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Full Name</label>
                            <div class="col-lg-6">
                                <input type="fullname" class="form-control" name="fullname" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#loginModal')
                    .bootstrapValidator({
                        message: 'This value is not valid',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            username: {
                                message: 'The username is not valid',
                                validators: {
                                    notEmpty: {
                                        message: 'The username is required and can\'t be empty'
                                    },
                                    stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'The username must be more than 6 and less than 30 characters long'
                                    },
                                    /*remote: {
                                     url: 'remote.php',
                                     message: 'The username is not available'
                                     },*/
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'The email is required and can\'t be empty'
                                    },
                                    emailAddress: {
                                        message: 'The input is not a valid email address'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required and can\'t be empty'
                                    }
                                }
                            },
                            fullname: {
                                validators: {
                                    notEmpty: {
                                        message: 'The full name is required and can\'t be empty'
                                    }
                                }
                            }
                        }
                    })
                    .on('success.form.bv', function (e) {
                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);

                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');

                        // Use Ajax to submit form data
                        $.ajax({
                            url: 'http://localhost/furniture/index.php/admin/UserController/add_user/',
                            method: 'POST',
                            data: $form.serialize()
                        }).success(function (response) {
                                    alert('a');
                        });
                    });
        });
    </script>




</div>

<!-- /#page-wrapper -->
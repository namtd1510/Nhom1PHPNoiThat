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
                <div align="right" class="panel-heading"><button class="btn btn-outline btn-success" type="button">Add New</button></div>
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



    <h3>JQuery Popup Dialogs</h3>

    <input type="button" id="btnShowSimple" value="Simple Dialog" />
    <input type="button" id="btnShowModal" value="Modal Dialog" />

    <br /><br />      

    <div id="output"></div>

    <div id="overlay" class="web_dialog_overlay"></div>

    <div id="dialog" class="web_dialog">
        <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
            <tr>
                <td class="web_dialog_title">Online Survey</td>
                <td class="web_dialog_title align_right">
                    <a href="#" id="btnClose">Close</a>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left: 15px;">
                    <b>Choose your favorite mobile brand? </b>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left: 15px;">
                    <div id="brands">
                        <input id="brand1" name="brand" type="radio" checked="checked" value="Nokia" /> Nokia
                        <input id="brand2" name="brand" type="radio" value="Sony" /> Sony
                        <input id="brand3" name="brand" type="radio" value="Motorola" /> Motorola
                    </div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input id="btnSubmit" type="button" value="Submit" />
                </td>
            </tr>
        </table>
    </div>
    <style type="text/css">

        .web_dialog_overlay
        {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            background: #000000;
            opacity: .15;
            filter: alpha(opacity=15);
            -moz-opacity: .15;
            z-index: 101;
            display: none;
        }
        .web_dialog
        {
            display: none;
            position: fixed;
            width: 380px;
            height: 200px;
            top: 50%;
            left: 50%;
            margin-left: -190px;
            margin-top: -100px;
            background-color: #ffffff;
            border: 2px solid #336699;
            padding: 0px;
            z-index: 102;
            font-family: Verdana;
            font-size: 10pt;
        }
        .web_dialog_title
        {
            border-bottom: solid 2px #336699;
            background-color: #336699;
            padding: 4px;
            color: White;
            font-weight:bold;
        }
        .web_dialog_title a
        {
            color: White;
            text-decoration: none;
        }
        .align_right
        {
            text-align: right;
        }

    </style>
    <script type="text/javascript">

        $(document).ready(function ()
        {
            $("#btnShowSimple").click(function (e)
            {
                ShowDialog(false);
                e.preventDefault();
            });

            $("#btnShowModal").click(function (e)
            {
                ShowDialog(true);
                e.preventDefault();
            });

            $("#btnClose").click(function (e)
            {
                HideDialog();
                e.preventDefault();
            });

            $("#btnSubmit").click(function (e)
            {
                var brand = $("#brands input:radio:checked").val();
                $("#output").html("<b>Your favorite mobile brand: </b>" + brand);
                HideDialog();
                e.preventDefault();
            });

        });

        function ShowDialog(modal)
        {
            $("#overlay").show();
            $("#dialog").fadeIn(300);

            if (modal)
            {
                $("#overlay").unbind("click");
            } else
            {
                $("#overlay").click(function (e)
                {
                    HideDialog();
                });
            }
        }

        function HideDialog()
        {
            $("#overlay").hide();
            $("#dialog").fadeOut(300);
        }

    </script>

</div>
<!-- /#page-wrapper -->
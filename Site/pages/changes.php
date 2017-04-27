<!DOCTYPE html>
<?php
//Define um geschuetze Seiten aufzurufen
define('WERDICHLEGALGERUFEN', 1);
require_once('../includes/helper.php');
require_once('../models/topbar.php');
require_once('../models/sidebar.php');
header('Content-Type: text/html; charset=UTF-8');
if(!isset($_SESSION))
{
    session_start();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(!isset($_SESSION["LogedInUser"])){
    header("location:login.php");
    die;
}

if(isset($_GET["lang"])){
    HELPER::set_language($_GET["lang"]);
    header("location:index.php");
    die;
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SmallCL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <?php TOPBAR::get_Topbar(); ?>

            <?php SIDEBAR::get_Sidebar(); ?>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo HELPER::get_langString('changes.PageTitle') ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo HELPER::get_langString('changes.TableHeader') ?>
                            </div>
                            <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-changes">
                                <thead>
                                    <tr>
                                        <th><?php echo HELPER::get_langString('changes.THObject') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCType') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCTitle') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCTime') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THUser') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THDetails') ?> </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th><?php echo HELPER::get_langString('changes.THObject') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCType') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCTitle') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THCTime') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THUser') ?> </th>
                                        <th><?php echo HELPER::get_langString('changes.THDetails') ?> </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!-- TODO: Inhalt einfügen -->
                                    <tr>
                                        <td>Switch-1OG</td>
                                        <td>Switch</td>
                                        <td>Update Firmware</td>
                                        <td>27.04.2017</td>
                                        <td>M.Mustermann</td>
                                        <td><a href="changeDetails.php?id=1"><i class="fa fa-info" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>sv-file</td>
                                        <td>Windows Server</td>
                                        <td>Install Windows Updates</td>
                                        <td>27.03.2017</td>
                                        <td>G.Gras</td>
                                        <td><a href="changeDetails.php?id=2"><i class="fa fa-info" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>sv-web</td>
                                        <td>Linux Server</td>
                                        <td>Install apt Updates</td>
                                        <td>27.02.2017</td>
                                        <td>T.Schroeder</td>
                                        <td><a href="changeDetails.php?id=3"><i class="fa fa-info" aria-hidden="true"></i></a></td>
                                    </tr>
                                    <!-- END TODO -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Tables Script -->
    <script>
    $(document).ready(function() {
        $('#dataTables-changes').DataTable({
            responsive: true,
            initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
        });
    });
    </script>

</body>

</html>

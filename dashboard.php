<?php

include("config.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIKKCYiWgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIgKCYiuygmIhgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJDKCYi7SgmIlIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJzKCYi/SgmIqAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIgooJiKmKCYi/ygmIuAoJiIOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIh8oJiLPKCYi/ygmIv4oJiI/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIkEoJiLrKCYi/ygmIv8oJiKMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmInAoJiL8KCYi/ygmIv8oJiL/KCYiySgmIpwoJiJzKCYiKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIhYoJiJyKCYinCgmIsIoJiL8KCYi/ygmIv8oJiL/KCYinygmIgkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJTKCYi/ygmIv8oJiL5KCYiaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIeKCYi7ygmIv8oJiLjKCYiNwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIDKCYixCgmIv8oJiK+KCYiFQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYigigmIv8oJiKJKCYiAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiPigmIvAoJiJSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiEigmIrooJiInAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIlooJiIMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP/3AAD/7wAA/88AAP8fAAD+PwAA/D8AAPgfAAD4DwAA/j8AAPx/AAD4/wAA8f8AAPf/AADv/wAA//8AAA==" rel="icon" type="image/x-icon" />
    
    <title>Ebill</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/dash_admin.css" rel="stylesheet">
    <!-- <link href="../assets/css/font-awesome.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <!-- <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- email = email i.e one and the same thing -->
<!-- convert to mysqli -->

<body>

    <div id="wrapper">
    
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> Toll gate management</a>
    </div>
    <!-- /.navbar-header -->
    
    <a style="position:absolute;top:35px;left:-1px;font-size:20px;color:#7f7f7f;padding:5px;background-color: #000;border-bottom-right-radius:10px; " href="#menu-toggle" id="menu-toggle" <i class="fa fa-dedent"></i></a>


    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ADMIN <b class="caret"></b></a>             <ul class="dropdown-menu">
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.top-nav -->
</nav>
<!-- /.navbar -->
<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="active">
            <a href="index2.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="profile2.php"><i class="fa fa-fw fa-user"></i> USERS </a>
        </li>
        <li>
            <a href="bill.php"><i class="fa fa-fw fa-bar-chart-o"></i> BILLS </a>
        </li>
        <li>
            <a href="complaint.php"><i class="fa fa-fw fa-edit"></i> COMPLAINTS </a>
        </li>
        <!-- processed bills as bootstrap badges -->
    </ul>
</div>
<!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                            <small> Overview</small>
                            <!-- Like bills processed by the admin ; bills generated , unprocessed complaint
                            maybe a stats infograph -->
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-bolt">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-rupee fa-3x"></i>
                                    </div>
                                    <div class="col-md-9 text-right">
                                        <div class="huge"><b></b>0</div>
                                        <div>USER LATE!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#late">
                                <div class="panel-footer">
                                    <span class="pull-left"><b>ADD DUES</b></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!-- ./panel-closes -->

                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-bolt2">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bullhorn fa-3x"></i>
                                    </div>
                                    <div class="col-md-9 text-right">
                                        <div class="huge"><b></b>0</div>
                                        <div>USER DEFAULTING!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#defaulting">
                                <div class="panel-footer">
                                    <span class="pull-left"><b>REMOVE USER(s)</b></span>
                                    <span class="pull-right"><i class="fa fa-trash fa-2x"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- ./panel-closes -->
                </div><!-- ./row -->

                <!-- STATISTICS -->
                <h1 style="padding-left:30px; "><small>Stats</small></h1>
                <div class="row" style="margin-top: 20px;">
                    <div class=".col-lg-3 col-xs-8">
                                            <table class="table  ">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>Number of Bills | Generated</h4>
                                    </td>
                                    <td class="success">
                                    <h4>
                                        16                                    </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h4>Number of Bills | Unprocessed</h4>
                                    </td>
                                    <td class="success">
                                        <h4>
                                            0                                        </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h4>Number of Complaints | Unprocessed</h4>
                                    </td>
                                    <td class="success">
                                        <h4>
                                            1                                        </h4>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- ./col-md-12 -->

                </div><!-- ./row -->

                 <!-- New Modal FOR DISHING OUT DUES-->
                                <div class="modal fade" id="late" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title"><b>ADD DUES TO USERS</b></h3>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p><h4>ARE YOU SURE?</h4></p>
                                                <!-- <p>Do it today or forever hold your speech!</p> -->
                                            </div>
                                            <div class="modal-footer">
                                                <form action="dash_defaulting_users.php" method="post">                                               
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                                    <button type="submit" id="late_user" name="late_user" class="btn btn-success ">YES</button>
                                                </form> 
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                 <!-- New Modal FOR REMOVING USERS-->
                                <div class="modal fade" id="defaulting" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title"><b>DELETE USERS</b></h3>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p><h4>ARE YOU SURE?</h4></p>
                                                <!-- <p>Do it today or forever hold your speech!</p> -->
                                            </div>
                                            <div class="modal-footer">
                                                <form action="dash_defaulting_users.php" method="post">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                                    <button type="submit" id="defaulting_user" name="defaulting_user" class="btn btn-success ">YES</button>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    

<!-- FOOTER -->
    <!-- <a href="#menu-toggle" class="btn btn-primary toggler" id="menu-toggle" style="z-index:1000;position:absolute;left:30px;bottom:0px"><i class="icon-circle-arrow-left"></i>Toggle DASH</a> -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                Created by <a href="">BILLING </a> SYSTEM
            </div>
        </div>
    </footer>
    <!-- jQuery Version 1.11.0 -->
    <script src="../assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>
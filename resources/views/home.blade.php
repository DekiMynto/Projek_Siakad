<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon"
        href="https://cdn.vectorstock.com/i/preview-1x/34/96/flat-business-man-user-profile-avatar-in-suit-vector-4333496.jpg">
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{ asset('AdminLTE/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('AdminLTE/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('AdminLTE/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('AdminLTE/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('AdminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="{{ asset('AdminLTE/css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('AdminLTE/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('AdminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="#" class="logo">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>Admin<i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="https://cdn.vectorstock.com/i/preview-1x/34/96/flat-business-man-user-profile-avatar-in-suit-vector-4333496.jpg"
                                    class="img-circle" alt="User Image" />
                                <p>
                                    Admin
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <!-- Form for logout -->
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-default btn-flat">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://cdn.vectorstock.com/i/preview-1x/34/96/flat-business-man-user-profile-avatar-in-suit-vector-4333496.jpg"
                            class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a>
                            </li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a>
                            </li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline
                                    charts</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a>
                            </li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a>
                            </li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a>
                            </li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General
                                    Elements</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced
                                    Elements</a></li>
                            <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i>
                                    Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple
                                    tables</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data
                                    tables</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i>
                                    Register</a></li>
                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i>
                                    Lockscreen</a></li>
                            <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404
                                    Error</a></li>
                            <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500
                                    Error</a></li>
                            <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank
                                    Page</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    150
                                </h3>
                                <p>
                                    Tahun Akademik
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar-o bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat<i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    53<sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>
                                    Program Studi
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-check-circle-o bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    44
                                </h3>
                                <p>
                                    Dosen
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Mata Kuliah
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Kurikulum
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Jadwal
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Mahasiswa Aktif
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    Keuangan
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    65
                                </h3>
                                <p>
                                    KRS
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book bg-icon"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                Lihat <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="{{ asset('AdminLTE/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('AdminLTE/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('AdminLTE/cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script src="{{ asset('AdminLTE/js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{ asset('AdminLTE/js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{ asset('AdminLTE/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('AdminLTE/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript">
    </script>
    <!-- fullCalendar -->
    <script src="{{ asset('AdminLTE/js/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('AdminLTE/js/plugins/jqueryKnob/jquery.knob.js') }}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('AdminLTE/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('AdminLTE/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"
        type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('AdminLTE/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/js/AdminLTE/app.js') }}" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('AdminLTE/js/AdminLTE/dashboard.js') }}" type="text/javascript"></script>

</body>

</html>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/style.min.css" rel="stylesheet" />
    <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->

        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="navbar-form full-width">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell-o"></i>
                    <span class="label">5</span>
                </a>

                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-red"><i class="fa fa-bug"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted">35 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-green"><i class="fa fa-plus"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-blue"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/user-13.jpg" alt="" />
                    <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="javascript:;">Edit Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:;">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end #header -->

<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
<!-- begin sidebar scrollbar -->
<div data-scrollbar="true" data-height="100%">
<!-- begin sidebar user -->
<ul class="nav">
    <li class="nav-profile">
        <div class="image">
            <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
        </div>
        <div class="info">
            Sean Ngu
            <small>Front end developer</small>
        </div>
    </li>
</ul>
<!-- end sidebar user -->
<!-- begin sidebar nav -->
<ul class="nav">
<li class="nav-header">Navigation</li>
<li class="has-sub active">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-laptop"></i>
        <span>Dashboard</span>
    </a>
    <ul class="sub-menu">
        <li class="active"><a href="index.html">Dashboard v1</a></li>
        <li><a href="index_v2.html">Dashboard v2</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <span class="badge pull-right">10</span>
        <i class="fa fa-inbox"></i>
        <span>Email <span class="label label-theme m-l-5">NEW</span></span>
    </a>
    <ul class="sub-menu">
        <li><a href="email_inbox.html">Inbox v1</a></li>
        <li><a href="email_inbox_v2.html">Inbox v2 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
        <li><a href="email_compose.html">Compose <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
        <li><a href="email_detail.html">Detail <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-suitcase"></i>
        <span>UI Elements</span>
    </a>
    <ul class="sub-menu">
        <li><a href="ui_general.html">General</a></li>
        <li><a href="ui_typography.html">Typography</a></li>
        <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
        <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
        <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
        <li><a href="ui_media_object.html">Media Object</a></li>
        <li><a href="ui_buttons.html">Buttons</a></li>
        <li><a href="ui_icons.html">Icons</a></li>
        <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-file-o"></i>
        <span>Form Stuff</span>
    </a>
    <ul class="sub-menu">
        <li><a href="form_elements.html">Form Elements</a></li>
        <li><a href="form_plugins.html">Form Plugins</a></li>
        <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
        <li><a href="form_validation.html">Form Validation</a></li>
        <li><a href="form_wizards.html">Wizards</a></li>
        <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
        <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
        <li><a href="form_editable.html">X-Editable</a></li>
        <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
    </ul>
    <i class="fa fa-th"></i>
    <span>Tables</span>
    </a>
    <ul class="sub-menu">
        <li><a href="table_basic.html">Basic Tables</a></li>
        <li><a href="table_manage.html">Managed Tables</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-star"></i>
        <span>Front End <span class="label label-theme m-l-5">NEW</span></span>
    </a>
    <ul class="sub-menu">
        <li><a href="../../frontend/one-page-parallax/index.html" target="_blank">One Page Parallax <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-envelope"></i>
        <span>Email Template</span>
    </a>
    <ul class="sub-menu">
        <li><a href="email_system.html">System Template</a></li>
        <li><a href="email_newsletter.html">Newsletter Template</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-area-chart"></i>
        <span>Chart</span>
    </a>
    <ul class="sub-menu">
        <li><a href="chart-flot.html">Flot Chart</a></li>
        <li><a href="chart-morris.html">Morris Chart</a></li>
    </ul>
</li>
<li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-map-marker"></i>
        <span>Map</span>
    </a>
    <ul class="sub-menu">
        <li><a href="map_vector.html">Vector Map</a></li>
        <li><a href="map_google.html">Google Map</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-camera"></i>
        <span>Gallery</span>
    </a>
    <ul class="sub-menu">
        <li><a href="gallery.html">Gallery v1</a></li>
        <li><a href="gallery_v2.html">Gallery v2</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-cogs"></i>
        <span>Page Options</span>
    </a>
    <ul class="sub-menu">
        <li><a href="page_blank.html">Blank Page</a></li>
        <li><a href="page_with_footer.html">Page with Footer</a></li>
        <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
        <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
        <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
        <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
        <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
        <li><a href="page_full_height.html">Full Height Content</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-gift"></i>
        <span>Extra</span>
    </a>
    <ul class="sub-menu">
        <li><a href="extra_timeline.html">Timeline</a></li>
        <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
        <li><a href="extra_search_results.html">Search Results</a></li>
        <li><a href="extra_invoice.html">Invoice</a></li>
        <li><a href="extra_404_error.html">404 Error Page</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-key"></i>
        <span>Login</span>
    </a>
    <ul class="sub-menu">
        <li><a href="login.html">Login</a></li>
        <li><a href="login_v2.html">Login v2</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-medkit"></i>
        <span>Helper</span>
    </a>
    <ul class="sub-menu">
        <li><a href="helper_css.html">Predefined CSS Classes</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-align-left"></i>
        <span>Menu Level</span>
    </a>
    <ul class="sub-menu">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                Menu 1.1
            </a>
            <ul class="sub-menu">
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        Menu 2.1
                    </a>
                    <ul class="sub-menu">
                        <li><a href="javascript:;">Menu 3.1</a></li>
                        <li><a href="javascript:;">Menu 3.2</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Menu 2.2</a></li>
                <li><a href="javascript:;">Menu 2.3</a></li>
            </ul>
        </li>
        <li><a href="javascript:;">Menu 1.2</a></li>
        <li><a href="javascript:;">Menu 1.3</a></li>
    </ul>
</li>
<!-- begin sidebar minify button -->
<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
<!-- end sidebar minify button -->
</ul>
<!-- end sidebar nav -->
</div>
<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL VISITORS</h4>
                    <p>3,291,922</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>BOUNCE RATE</h4>
                    <p>20.44%</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>UNIQUE VISITORS</h4>
                    <p>1,291,922</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>AVG TIME ON SITE</h4>
                    <p>00:12:23</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->



    <!-- begin row -->
    <div class="row">
        <!-- begin col-8 -->
        <div class="col-md-8">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">World Visitors</h4>
                </div>
                <div class="panel-body p-0">
                    <div id="world-map" class="height-sm width-full"></div>
                </div>
            </div>
        </div>
        <!-- end col-8 -->


    </div>
    <!-- end row -->
</div>
<!-- end #content -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
<script src="assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!-- <script src="assets/plugins/gritter/js/jquery.gritter.js"></script> -->
<script src="assets/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/dashboard.min.js"></script>
<script src="assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
        Dashboard.init();
    });
</script>
</body>
</html>

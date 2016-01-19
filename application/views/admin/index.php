<?php require_once 'template/header.php'; ?>
<!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <img src="assets/img/menu-toggler.png" alt=""/>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="assets/img/avatar1_small.jpg"/>
                            <span class="username">
                                احمد
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="inbox.html">
                                    <i class="fa fa-envelope"></i> الرسائل الواردة
                                    <span class="badge badge-danger">
                                        3
                                    </span>
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="javascript:;" id="trigger_fullscreen">
                                    <i class="fa fa-arrows"></i> ملئ الشاشة
                                </a>
                            </li>
                            <li>
                                <a href="extra_lock.html">
                                    <i class="fa fa-lock"></i> تأمين الشاشة
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-key"></i> تسجيل خروج
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
    <?php require_once 'template/sidebar.php'; ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler">
                        </div>
                        <div class="toggler-close">
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span>
                                    THEME COLOR
                                </span>
                                <ul>
                                    <li class="color-black current color-default" data-style="default">
                                    </li>
                                    <li class="color-blue" data-style="blue">
                                    </li>
                                    <li class="color-brown" data-style="brown">
                                    </li>
                                    <li class="color-purple" data-style="purple">
                                    </li>
                                    <li class="color-grey" data-style="grey">
                                    </li>
                                    <li class="color-white color-light" data-style="light">
                                    </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Layout
                                </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Header
                                </span>
                                <select class="header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Sidebar
                                </span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Sidebar Position
                                </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Footer
                                </span>
                                <select class="footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END STYLE CUSTOMIZER -->
                    <!-- BEGIN PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                لوحة التحكم <small>الإحصائيات وأكثر من ذلك</small>
                            </h3>
                            <ul class="page-breadcrumb breadcrumb">
                               <li>
                                   <i class="fa fa-home"></i>
                                    <a href="<?php echo base_url() . 'admin_area/'; ?>">
                                        لوحة التحكم
                                    </a>
                                   <i class="fa fa-angle-left"></i>
                                </li>
                                <li>
                                        
                                    <a href="<?php echo base_url() . 'admin_area/index/'; ?>">
                                        الرئيسية
                                    </a>
                                    
                                </li>
                                
                                <li class="pull-right">
                                    <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                        <i class="fa fa-calendar"></i>
                                        <span>
                                        </span>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </li>
                            </ul>
                            <!-- END PAGE TITLE & BREADCRUMB-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php echo $feeds; ?>
                                    </div>
                                    <div class="desc">
                                        New Feedbacks
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        549
                                    </div>
                                    <div class="desc">
                                        New Orders
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        +89%
                                    </div>
                                    <div class="desc">
                                        Brand Popularity
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        12,5M$
                                    </div>
                                    <div class="desc">
                                        Total Profit
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    View more <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END DASHBOARD STATS -->
                    <div class="clearfix">
                    </div>
                  
                    <div class="row ">
                        
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet">
                                <div class="portlet-title line">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i>Chats
                                    </div>
                                    <div class="tools">
                                        <a href="" class="collapse">
                                        </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config">
                                        </a>
                                        <a href="" class="reload">
                                        </a>
                                        <a href="" class="remove">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body" id="chats">
                                    <div class="scroller" style="height: 435px;" data-always-visible="1" data-rail-visible1="1">
                                        <ul class="chats">
                                            <li class="in">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Bob Nilson
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar2.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Lisa Wong
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Bob Nilson
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Richard Doe
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Richard Doe
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Bob Nilson
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="in">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar3.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Richard Doe
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="out">
                                                <img class="avatar img-responsive" alt="" src="assets/img/avatar1.jpg"/>
                                                <div class="message">
                                                    <span class="arrow">
                                                    </span>
                                                    <a href="#" class="name">
                                                        Bob Nilson
                                                    </a>
                                                    <span class="datetime">
                                                        at Jul 25, 2012 11:09
                                                    </span>
                                                    <span class="body">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-form">
                                        <div class="input-cont">
                                            <input class="form-control" type="text" placeholder="Type a message here..."/>
                                        </div>
                                        <div class="btn-cont">
                                            <span class="arrow">
                                            </span>
                                            <a href="" class="btn blue icn-only">
                                                <i class="fa fa-check icon-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner">
                2014 &copy; Metronic by keenthemes.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="assets/plugins/respond.min.js"></script>
        <script src="assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/core/app.js" type="text/javascript"></script>
        <script src="assets/scripts/custom/index.js" type="text/javascript"></script>
        <script src="assets/scripts/custom/tasks.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                App.init(); // initlayout and core plugins
                Index.init();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                Index.initDashboardDaterange();
                Index.initIntro();
                Tasks.initDashboardWidget();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>

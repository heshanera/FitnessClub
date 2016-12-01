<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/charts-highcharts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:19 GMT -->
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>myAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="charts-highcharts" data-spy="scroll" data-target="#nav-spy" data-offset="100">


<!-- Body Wrap -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <a class="navbar-logo-image" href="<?php echo base_url(); ?>index-2.html">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="sb-l-o-logo">
                <img src="<?php echo base_url(); ?>assets/img/logo_small.png" alt="" class="sb-l-m-logo">
            </a>
        </div>
        <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>
        <form class="navbar-form navbar-left search-form square" role="search">
            <div class="input-group add-on">

                <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder=''"
                       onblur="this.placeholder='Search'">

                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>

            </div>
        </form>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu w230" role="menu">
                    <li><a href="<?php echo base_url(); ?>#">Action</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Another action</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Something else</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>#">Separated link</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-fuse">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm"><span class="name">John Iverson</span></span>
                    <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                    <span class="profile-online">
                        <img src="<?php echo base_url(); ?>assets/img/avatars/profile_avatar.jpg" alt="avatar">
                    </span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w190" role="menu">
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Profile
                            <span class="fa fa-user"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Settings
                            <span class="fa fa-cog"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            My Calendar
                            <span class="fa fa-calendar-o"></span> 
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Help
                            <span class="fa fa-question-circle"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>#">
                            Logout
                            <span class="fa fa-sign-out"></span> 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr25">
            <li class="dropdown dropdown-fuse ml20">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-envelope fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle bg-color-1 fs10 visible-xl">
                        3
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter activity-container fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="activity-content">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="<?php echo base_url(); ?>#nav-tab1" data-toggle="tab" class="btn active">Notifications</a>
                                        <a href="<?php echo base_url(); ?>#nav-tab2" data-toggle="tab" class="btn br-l-n br-r-n">Messages</a>
                                        <a href="<?php echo base_url(); ?>#nav-tab3" data-toggle="tab" class="btn ">Activity</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane scroller-navbar alerts-widget active" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left bg-success" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-user2"></span> 
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Registration
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Order
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-system" href="<?php echo base_url(); ?>#"> 
                                                    <span class="imoon imoon-tag"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        New Order
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-system">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-info" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-comment"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-info">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left bg-warning" href="<?php echo base_url(); ?>#"> 
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                    </h5>
                                                    David Johnson - 1 day ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn bg-warning">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button type="button" class="btn">
                                                            <i class="glyphicon glyphicon-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane scroller-navbar chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                    adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body bg-success">
                                                    <h5 class="media-heading">Paul Pirce 1:25am</h5>
                                                    Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body bg-info">
                                                    <h5 class="media-heading">Monica Smith 1:25am</h5>
                                                    Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="<?php echo base_url(); ?>#">
                                                        <img class="media-object" alt="64x64" src="<?php echo base_url(); ?>assets/img/avatars/chat_2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane scroller-navbar activity-widget" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/4.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/4.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Colin </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="<?php echo base_url(); ?>#"> 
                                                        <img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">
                                                            Article - 08/16/22
                                                        </h5>
                                                        Last Updated 36 days ago by 
                                                        <a class="" href="<?php echo base_url(); ?>#"> Rebecca </a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn bg-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button type="button" class="btn">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="<?php echo base_url(); ?>#" class="btn fw600"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-bell fs16"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs10 bg-color-2 visible-xl">
                        8
                    </button>
                    <div class="dropdown-menu keep-dropdown w370 animated animated-shorter fadeIn activity-container timeline-container" role="menu">
                        <div class="panel activity-content mbn">
                            <div class="panel-menu">
                                <span class="panel-title fw600"> Activity reports</span>
                            </div>
                            <div class="panel-body scroller-navbar pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> 
                                            Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> 
                                            Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">9:59am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-info">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> 
                                            created invoice:
                                            <a href="<?php echo base_url(); ?>#">iPhone 6s</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-timeline-massage">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="<?php echo base_url(); ?>#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                </ol>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="<?php echo base_url(); ?>#" class="btn"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr5">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">English
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>#">English</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Spanish</a></li>
                    <li><a href="<?php echo base_url(); ?>#">Turkish</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /Header  -->

   <!-- Sidebar  -->
        <?php require_once ("admin-sidebar.php") ;?>
    <!-- /Sidebar  -->

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="<?php echo base_url(); ?>index-2.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="<?php echo base_url(); ?>index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">HighCharts</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Left -->
            <aside class="chute chute-left chute290 chute-icon-style bg-info" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-container">
                    <div id="nav-spy">
                        <ul class="nav chute-nav" data-smoothscroll="-70" data-spy="affix" data-offset-top="200">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>#pchart1">
                                    Basic Column Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart2">
                                    Filterable Column Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart3">
                                    Pie Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart3">
                                    Circular Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart4">
                                    Column Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart5">
                                    Column Chart with Filter</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart6">
                                    Filterable Area Chart</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart7">
                                    Bar Chart with Filter</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart8">
                                    Area Chart with Filter</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart9">
                                    Line Chart with Submenu</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#pchart10">
                                    Sparklines Table</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- /Column Left -->

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- Basic Column Chart -->
                <div class="panel" id="pchart1">
                    <div class="panel-heading">
                        <span class="panel-title"> Basic Column Chart</span>
                    </div>
                    <div class="panel-body bg-light dark">

                        <div id="high-column2" style="width: 100%; height: 430px; margin: 0 auto"></div>

                    </div>
                </div>

                <!-- Filterable Column Chart -->
                <div class="panel" id="pchart2">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Filterable Column Chart</span>
                    </div>
                    <div class="panel-menu hidden">
                        <div class="chart-legend" data-chart-id="#high-line">
                            <button type="button" data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">
                                Data 1
                            </button>
                            <button type="button" data-chart-id="1" class="legend-item btn btn-info btn-sm">Data 2
                            </button>
                        </div>
                    </div>
                    <div class="panel-body pn">
                        <div id="high-line" style="width: 100%; height: 275px; margin: 0 auto"></div>

                        <div class="p15 pt5 mt15 bg-light br-t">
                            <div class="table-responsive">
                                <table class="table mbn allcp-form fs13 table-legend" data-chart-id="#high-line">
                                    <thead>
                                    <tr class="">
                                        <th class="w30">ID</th>
                                        <th class="w50">Chart</th>
                                        <th>URL</th>
                                        <th class="text-right">Leads</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="fs15 fw600">1.</td>
                                        <td>
                                            <div class="flipswitch switch-custom block switch-info switch-inline-table">
                                                <input type="checkbox" name="features" class="legend-switch flipswitch-cb" id="s1" value="0">
                                                <label class="flipswitch-label no-br" for="s1">
                                                    <span class="flipswitch-inner"></span>
                                                    <span class="flipswitch-switch"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="va-m fw600 text-muted">
                                            <span class="news-sprite google mr15"></span>http://google.com
                                        </td>
                                        <td class="fs15 fw600 text-right">15,163</td>
                                    </tr>
                                    <tr>
                                        <td class="fs15 fw600">2.</td>
                                        <td>
                                            <div class="flipswitch switch-custom block switch-info switch-inline-table">
                                                <input type="checkbox" name="features" class="legend-switch flipswitch-cb" id="s2" value="1">
                                                <label class="flipswitch-label no-br" for="s2">
                                                    <span class="flipswitch-inner"></span>
                                                    <span class="flipswitch-switch"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="va-m fw600 text-muted">
                                            <span class="news-sprite bing mr15"></span>http://bing.com/
                                        </td>
                                        <td class="fs15 fw600 text-right">9,858</td>
                                    </tr>
                                    <tr>
                                        <td class="fs15 fw600">3.</td>
                                        <td>
                                            <div class="flipswitch switch-custom block switch-info switch-inline-table">
                                                <input type="checkbox" name="features" class="legend-switch flipswitch-cb" id="s3" value="3">
                                                <label class="flipswitch-label no-br" for="s3">
                                                    <span class="flipswitch-inner"></span>
                                                    <span class="flipswitch-switch"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="va-m fw600 text-muted">
                                            <span class="news-sprite twttr mr15"></span>http://twitter.com/
                                        </td>
                                        <td class="fs15 fw600 text-right">2,525</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie/Circle Stats -->
                <div class="row mhn10" id="pchart3">
                    <div class="col-md-5">
                        <!-- Pie Chart -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title fw600 text-info">Pie Chart</span>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-pie" style="width: 100%; height: 210px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- Circle Stats -->
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title fw600 text-info">Circulars</span>
                            </div>
                            <div class="panel-body">
                                <div class="mb20 text-right">
                                <span class="fs11 text-muted">
                                  <i class="fa fa-circle text-primary fs12 pr5"></i> Google</span>
                                <span class="fs11 text-muted ml10">
                                  <i class="fa fa-circle text-info fs12 pr5"></i> Bing</span>
                                </div>
                                <div class="info-circle-container style-2">
                                    <div class="text-center p10">
                                        <div class="info-circle" id="c1" title="Google" value="90" data-circle-color="primary"></div>
                                    </div>
                                    <div class="text-center p10">
                                        <div class="info-circle" id="c2" title="Bing" value="5" data-circle-color="info"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column Graph -->
                <div class="panel" id="pchart4">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Column Chart</span>
                    </div>
                    <div class="panel-body pn">

                        <div id="high-column" style="width: 100%; height: 200px; margin: 0 auto"></div>

                    </div>
                </div>

                <!-- Column Graph -->
                <div class="panel" id="pchart5">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Column Chart with Filter</span>
                    </div>
                    <div class="panel-menu pn bg-white br3 mt20">
                        <ul class="nav nav-justified text-center fw600 chart-legend" data-chart-id="#high-column3">
                            <li>
                                <a href="<?php echo base_url(); ?>#" class="legend-item" data-chart-id="0"> HostGator </a>
                            </li>
                            <li class="br-l">
                                <a href="<?php echo base_url(); ?>#" class="legend-item" data-chart-id="1"> BlueHost </a>
                            </li>
                            <li class="br-l">
                                <a href="<?php echo base_url(); ?>#" class="legend-item" data-chart-id="2"> HostLife </a>
                            </li>
                            <li class="br-l">
                                <a href="<?php echo base_url(); ?>#" class="legend-item" data-chart-id="3"> ScalaHosting </a>
                            </li>
                        </ul>

                    </div>
                    <div class="panel-body pbn">
                        <div id="high-column3" style="width: 100%; height: 400px; margin: 0 auto"></div>

                    </div>
                    <div class="panel-footer p15">
                        <p class="text-muted text-center mbn">Ticket reply time</p>
                    </div>
                </div>

                <!-- Filtrable Area Graph -->
                <div class="panel" id="pchart6">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Filterable Area Chart</span>
                    </div>
                    <div class="panel-menu br3 mt20">
                        <div class="chart-legend" data-chart-id="#high-line3">
                            <a href="<?php echo base_url(); ?>#" data-chart-id="0" class="legend-item btn btn-sm btn-warning">Google</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="1" class="legend-item btn btn-primary btn-sm">Bing</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="2" class="legend-item btn btn-info btn-sm">Twitter</a>
                        </div>
                    </div>
                    <div class="panel-body pn">
                        <div id="high-line3" style="width: 100%; height: 210px; margin: 0 auto"></div>
                    </div>
                </div>

                <!-- Bar Graph -->
                <div class="panel" id="pchart7">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Bar Chart with Filter</span>
                    </div>
                    <div class="panel-menu br3 mt20">
                        <div class="chart-legend" data-chart-id="#high-bars">
                            <a href="<?php echo base_url(); ?>#" data-chart-id="0" class="legend-item btn btn-warning btn-sm">Visitors</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="1" class="legend-item btn btn-primary btn-sm">Google</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="2" class="legend-item btn btn-info btn-sm">Bing</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="3" class="legend-item btn btn-alert btn-sm">Twitter</a>
                        </div>
                    </div>
                    <div class="panel-body pn">
                        <div id="high-bars" style="width: 100%; height: 150px; margin: 0 auto"></div>
                    </div>
                </div>

                <!-- Area Graph -->
                <div class="panel" id="pchart8">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Area Chart with Filter</span>
                    </div>
                    <div class="panel-menu br3 mt20">
                        <div class="chart-legend" data-chart-id="#high-area">
                            <a href="<?php echo base_url(); ?>#" data-chart-id="0" class="legend-item btn btn-sm btn-warning ph20">Google</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="1" class="legend-item btn btn-sm btn-primary">Bing</a>
                            <a href="<?php echo base_url(); ?>#" data-chart-id="2" class="legend-item btn btn-sm btn-info">Twitter</a>
                        </div>
                    </div>
                    <div class="panel-body pn">
                        <div id="high-area" style="width: 100%; height: 250px; margin: 0 auto"></div>
                    </div>
                </div>

                <!-- Line Chart with Submenu Chart -->
                <div class="panel" id="pchart9">
                    <div class="panel-heading">
                        <span class="panel-title text-info fw600">Line Chart with Submenu</span>
                    </div>
                    <div class="panel-body pn bg-light dark">
                        <div id="high-datamap" style="width: 100%; height: 300px; margin: 0 auto"></div>
                    </div>
                    <div class="panel-footer bg-light pn">
                        <div id="high-siblingmap" style="width: 100%; height: 150px; margin: 0 auto"></div>
                    </div>
                </div>

                <!-- Sparklines Chart -->
                <div class="panel" id="pchart10">
                    <div class="panel-heading">
              <span class="panel-title text-info fw600">
                <i class="fa fa-pencil hidden"></i> Sparklines Chart</span>
                    </div>
                    <div class="panel-body of-a pn">
                        <div class="table-responsive">
                            <table class="table mbn table-bordered">
                                <thead>
                                <tr class="bg-light">
                                    <th style="width: 20%">Name</th>
                                    <th style="width: 20%">All visitors</th>
                                    <th style="width: 20%">Returning</th>
                                    <th style="width: 20%">New</th>
                                    <th style="width: 20%">Trends</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="p15 mnw150">
                                        <h4 class="mb15 text-muted">Google</h4>

                                        <div class="progress progress-bar-sm mb5">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                 aria-valuenow="90"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                <span class="sr-only">90%</span>
                                            </div>
                                        </div>
                                        <p>
                                            <b class="text-primary">90%</b>
                                            <span class="pull-right text-muted">Overall</span>
                                        </p>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">100 B</h4>
                                          <span class="inlinesparkline" data-spark-color="primary" values="8,6,7,6,7,9,9,7,8,6,7,9,9,5,8,6,9,6,9,7,8,9,7"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">80 B</h4>
                                        <span class="inlinesparkline" data-spark-color="primary" values="8,6,7,6,7,9,9,7,8,6,7,9,9,5,8,6,9,6,9,7,8,9,7"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">20 B</h4>
                                       <span class="inlinesparkline" data-spark-color="primary" values="8,6,7,6,7,9,9,7,8,6,7,9,9,5,8,6,9,6,9,7,8,9,7"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">> 10 B</h4>
                                        <span class="inlinesparkline" data-spark-color="primary" values="8,6,7,6,7,9,9,7,8,6,7,9,9,5,8,6,9,6,9,7,8,9,7"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p15">
                                        <h4 class="mb15 text-muted">Bing</h4>

                                        <div class="progress progress-bar-sm mb5">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="8"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 8%;">
                                                <span class="sr-only">8%</span>
                                            </div>
                                        </div>
                                        <p>
                                            <b class="text-info">8%</b>
                                            <span class="pull-right text-muted">Overall</span>
                                        </p>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">8 B</h4>
                      <span class="inlinesparkline" data-spark-color="info"
                            values="5,6,7,9,6,7,9,9,5,6,7,2,4,6,7,3,2,9,5,3,2,2,4"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">6 B</h4>
                      <span class="inlinesparkline" data-spark-color="info"
                            values="5,6,7,9,6,7,9,9,5,6,7,2,4,6,7,3,2,9,5,3,2,2,4"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">2 B</h4>
                      <span class="inlinesparkline" data-spark-color="info"
                            values="5,6,7,9,6,7,9,9,5,6,7,2,4,6,7,3,2,9,5,3,2,2,4"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted"> > 500 M </h4>
                      <span class="inlinesparkline" data-spark-color="info"
                            values="5,6,7,9,6,7,9,9,5,6,7,2,4,6,7,3,2,9,5,3,2,2,4"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p15">
                                        <h4 class="mb15 text-muted">Twitter</h4>

                                        <div class="progress progress-bar-sm mb5">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="4"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 4%;">
                                                <span class="sr-only">2%</span>
                                            </div>
                                        </div>
                                        <p>
                                            <b class="text-success">2%</b>
                                            <span class="pull-right text-muted">Overall</span>
                                        </p>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">2 B</h4>
                      <span class="inlinesparkline" data-spark-color="success"
                            values="1,7,3,2,5,3,2,2,4,3,4,3,4,2,4,5,3,2,2,4,6,3,2"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">1 B</h4>
                      <span class="inlinesparkline" data-spark-color="success"
                            values="1,7,3,2,5,3,2,2,4,3,4,3,4,2,4,5,3,2,2,4,6,3,2"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted">300 M</h4>
                      <span class="inlinesparkline" data-spark-color="success"
                            values="1,7,3,2,5,3,2,2,4,3,4,3,4,2,4,5,3,2,2,4,6,3,2"></span>
                                    </td>
                                    <td class="p15">
                                        <h4 class="mb25 text-muted"> > 30 M</h4>
                      <span class="inlinesparkline" data-spark-color="success"
                            values="1,7,3,2,5,3,2,2,4,3,4,3,4,2,4,5,3,2,2,4,6,3,2"></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

    </section>


</div>
<!-- /Body Wrap  -->


<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Sparklines JS -->
<script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Charts JS -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/circles/circles.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url(); ?>assets/js/demo/charts/highcharts.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // ChighCharts JS
        demoHighCharts.init();

    });
</script>
<!-- /Scripts -->
</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/charts-highcharts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:19 GMT -->
</html>

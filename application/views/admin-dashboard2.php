<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:51 GMT -->
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

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/icomoon/icomoon.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sales-stats-page">


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
        <header id="topbar" class="ph10">
            <div class="topbar-left">
                <ul class="nav nav-list nav-list-topbar pull-left">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>dashboard2.html">Overview</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sales-stats-products.html">Products</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sales-stats-purchases.html">Orders</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sales-stats-clients.html">Clients</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sales-stats-general-settings.html">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="topbar-right hidden-xs hidden-sm mt5 mr35">
                <a href="<?php echo base_url(); ?>sales-stats-purchases.html" class="btn btn-primary btn-sm ml10" title="New Order">
                    <span class="fa fa-plus pr5"></span><span class="fa fa-file-o pr5"></span></a>
                <a href="<?php echo base_url(); ?>sales-stats-products.html" class="btn btn-primary btn-sm ml10" title="New Product">
                    <span class="fa fa-plus pr5"></span><span class="fa fa-shopping-cart pr5"></span></a>
                <a href="<?php echo base_url(); ?>sales-stats-clients.html" class="btn btn-primary btn-sm ml10" title="New User">
                    <span class="fa fa-plus pr5"></span><span class="fa fa-user pr5"></span></a>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- Products Status Table -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title hidden-xs"> Products status</span>
                            </div>
                            <div class="panel-body pn">
                                <div class="table-responsive">
                                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13">
                                        <thead>
                                        <tr class="bg-light">
                                            <th class="text-center"></th>
                                            <th class="">Image</th>
                                            <th class="">Product Title</th>
                                            <th class="">SKU</th>
                                            <th class="">Price</th>
                                            <th class="">Stock</th>
                                            <th class="text-right">Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/1.jpg">
                                            </td>
                                            <td class="">BSN SYNTHA-6 PROTEIN</td>
                                            <td class="">#123</td>
                                            <td class="">$20</td>
                                            <td class="">50</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-success br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Active
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/2.jpg">
                                            </td>
                                            <td class="">HARBINGER : FLEXFIT GLOVES</td>
                                            <td class="">#1234</td>
                                            <td class="">$30</td>
                                            <td class="">100</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-success br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Active
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/3.jpg">
                                            </td>
                                            <td class="">BSN SYNTHA-6 PROTEIN</td>
                                            <td class="">#2345</td>
                                            <td class="">$25</td>
                                            <td class="">50</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-success br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Active
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/4.jpg">
                                            </td>
                                            <td class="">Apple iPad Air</td>
                                            <td class="">#4563</td>
                                            <td class="">$800</td>
                                            <td class="">500</td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-success br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Active
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/9.jpg">
                                            </td>
                                            <td class="">Apple iPhone 6S 32GB</td>
                                            <td class="">#1011</td>
                                            <td class="">$1195</td>
                                            <td class="text-danger">
                                                <b>0 - Sold Out</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-danger br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Sold Out
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <label class="option block mn">
                                                    <input type="checkbox" name="inputname" value="FR">
                                                    <span class="checkbox mn"></span>
                                                </label>
                                            </td>
                                            <td class="w100">
                                                <img class="img-responsive mw40 ib mr10" title="user" alt=""
                                                     src="<?php echo base_url(); ?>assets/img/pages/products/10.jpg">
                                            </td>
                                            <td class="">Apple iPhone 6S 64GB</td>
                                            <td class="">#1012</td>
                                            <td class="">$1395</td>
                                            <td class="text-danger">
                                                <b>0 - Sold Out</b>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-danger br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Sold Out
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Delete</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Archive</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Active</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Inactive</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>#">Low Stock</a>
                                                        </li>
                                                        <li class="active">
                                                            <a href="<?php echo base_url(); ?>#">Out of Stock</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Area Chart -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Area Chart -->
                        <div class="panel" id="pchart1">
                            <div class="panel-heading">
                                <span class="panel-title"> Best Sellers</span>
                            </div>
                            <div class="panel-body">
                                <div id="area-chart1" style="height: 420px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Line Chart with Submenu Chart -->
                        <div class="panel" id="pchart9">
                            <div class="panel-heading">
                                <span class="panel-title fw600">Visitor Activity</span>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-datamap" style="width: 100%; height: 300px; margin: 0 auto"></div>
                            </div>
                            <div class="panel-footer bg-light pn">
                                <div id="high-siblingmap" style="width: 100%; height: 150px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <!-- Filterable Column Chart -->
                        <div class="panel">
                            <div class="panel-heading">
                              <span class="panel-title fw600">
                                <i class="fa fa-pencil hidden"></i> Sales stats</span>
                            </div>
                            <div class="panel-body pn">


                                <div id="high-line2" style="width: 100%; height: 250px; margin: 0 auto"></div>


                                <div class="p15 pt5 mt15 bg-light br-t">
                                    <div class="table-responsive">
                                        <table class="table mbn allcp-form fs13 table-legend"
                                               data-chart-id="#high-line2">
                                            <thead>
                                            <tr class="">
                                                <th class="w30">ID</th>
                                                <th class="w50">Chart</th>
                                                <th>Year</th>
                                                <th class="text-right">Total Sales</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fs15 fw600">1.</td>
                                                <td>
                                                    <div class="flipswitch switch-info switch-inline-table block mbn">
                                                        <input type="checkbox" class="legend-switch flipswitch-cb" name="features" id="s1" value="0">
                                                        <label class="flipswitch-label no-br" for="s1">
                                                            <span class="flipswitch-inner"></span>
                                                            <span class="flipswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="fs20 va-m fw600 text-muted">
                                                    2013
                                                </td>
                                                <td class="fs15 fw600 text-right">15,163</td>
                                            </tr>
                                            <tr>
                                                <td class="fs15 fw600">2.</td>
                                                <td>
                                                    <div class="flipswitch switch-info switch-inline-table block mbn">
                                                        <input type="checkbox" class="legend-switch flipswitch-cb" name="features" id="s2" value="1">
                                                        <label class="flipswitch-label no-br" for="s2">
                                                            <span class="flipswitch-inner"></span>
                                                            <span class="flipswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="fs20 va-m fw600 text-muted">
                                                    2014
                                                </td>
                                                <td class="fs15 fw600 text-right">19,858</td>
                                            </tr>
                                            <tr>
                                                <td class="fs15 fw600">3.</td>
                                                <td>
                                                    <div class="flipswitch switch-info switch-inline-table block mbn">
                                                        <input type="checkbox" class="legend-switch flipswitch-cb" name="features" id="s3" value="3">
                                                        <label class="flipswitch-label no-br" for="s3">
                                                            <span class="flipswitch-inner"></span>
                                                            <span class="flipswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="fs20 va-m fw600 text-muted">
                                                    2015
                                                </td>
                                                <td class="fs15 fw600 text-right">17,525</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 col-md-6 ph10">
                                <div class="panel panel-tile info-block info-block-bg-success mb20">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-5 ph10 text-center ">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div class="col-xs-7 pl35 prn text-center">
                                                <h2>406</h2>
                                                <h6>New Orders</h6>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="info-block-stat">
                                                    <span>Last Week’s Orders</span>
                                                    <span>85</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-md-6 ph10">
                                <div class="panel panel-tile info-block info-block-bg-system mb20">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-5 ph10 text-center">
                                                <i class="imoon imoon-rocket"></i>
                                            </div>
                                            <div class="col-xs-7 pl35 text-center">
                                                <h2 class="">120</h2>
                                                <h6 class="text-muted">Products Shipped</h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="info-block-stat">
                                                    <span>Last Week’s Shipped</span>
                                                    <span>53</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-md-6 ph10">
                                <div class="panel panel-tile info-block info-block-bg-info mb20">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-5 ph10 text-center">
                                                <i class="imoon imoon-users2"></i>
                                            </div>
                                            <div class="col-xs-7 pl35 text-center">
                                                <h2 class="">6789</h2>
                                                <h6 class="text-muted">Happy Customers</h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="info-block-stat">
                                                    <span>Last Week’s Customers</span>
                                                    <span>1207</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-md-6 ph10">
                                <div class="panel panel-tile info-block info-block-bg-warning mb20">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-5 ph10 text-center">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="col-xs-7 pl35 text-center">
                                                <h2 class="">7509</h2>
                                                <h6 class="text-muted">Total Profit</h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="info-block-stat">
                                                    <span>Last Week’s Profit</span>
                                                    <span>4153</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visitors Map -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Visitors Map</span>
                            </div>
                            <div class="panel-body pn">
                                <div id="map1" style="width: 100%; height: 100%;" class="mh-400"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Country List -->
                        <div class="panel country-widget">
                            <div class="panel-heading">
                                <span class="panel-title">Country List</span>
                            </div>
                            <div class="panel-body panel-scroller scroller-lg">
                                <ul class="country-list">
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-us"></i>
                                        </div>
                                        <div class="country-desc">
                                            United States
                                            <span class="country-date">17%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-sw"></i>
                                        </div>
                                        <div class="country-desc">
                                            sweden
                                            <span class="country-date">24%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-tu"></i>
                                        </div>
                                        <div class="country-desc">
                                            turkey
                                            <span class="country-date">32%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-po"></i>
                                        </div>
                                        <div class="country-desc">
                                            portugal
                                            <span class="country-date">10%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-uk"></i>
                                        </div>
                                        <div class="country-desc">
                                            United kingdom
                                            <span class="country-date">17%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-us"></i>
                                        </div>
                                        <div class="country-desc">
                                            United States
                                            <span class="country-date">17%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-sw"></i>
                                        </div>
                                        <div class="country-desc">
                                            sweden
                                            <span class="country-date">24%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-tu"></i>
                                        </div>
                                        <div class="country-desc">
                                            turkey
                                            <span class="country-date">32%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-po"></i>
                                        </div>
                                        <div class="country-desc">
                                            portugal
                                            <span class="country-date">10%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                    <li class="country-item">
                                        <div class="country-handle">
                                            <i class="flag-m flag-uk"></i>
                                        </div>
                                        <div class="country-desc">
                                            United kingdom
                                            <span class="country-date">17%</span>
                                        </div>
                                        <div class="country-menu"></div>
                                    </li>
                                </ul>
                            </div>
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

<!-- JvectorMap Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/assets/jquery-jvectormap-world-mill-en.js"></script>

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/c3charts/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/c3charts/c3.min.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard2.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url(); ?>assets/js/demo/charts/highcharts.js"></script>

<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:58 GMT -->
</html>

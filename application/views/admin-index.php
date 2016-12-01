<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:34 GMT -->
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>myAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="myAdmin - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/css/theme.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page with-customizer">

<!-- Body Wrap  -->
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
                    <span class="hidden-xs hidden-sm"><span class="name">John Iverson</span> </span>
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
                    <li class="breadcrumb-current-item">Dashboard</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- Quick Links -->
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-success">
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
                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-info">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-5 ph10 text-center">
                                        <i class="imoon imoon-users2"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 text-center">
                                        <h2 class="">6089</h2>
                                        <h6 class="text-muted">Unique Users</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-block-stat">
                                            <span>Last Week’s Users</span>
                                            <span>2096</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-warning">
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
                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-system">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-5 ph10 text-center">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 text-center">
                                        <h2 class="">186</h2>
                                        <h6 class="text-muted">Support Questions</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-block-stat">
                                            <span>Last Week’s Questions</span>
                                            <span>153</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AllCP Info -->
                <div class="allcp-panels fade-onload">

                    <div class="row">

                        <!-- AllCP Grid -->
                        <div class="col-md-12 allcp-grid">

                            <!-- Perfomance -->
                            <div class="panel mbn pt25" data-panel-title="false">
<!--                                 <div class="text-dark lh20 fs26">
                                    Performance
                                </div> -->
                                <div class="panel-body mtn pn">
                                    <div class="row">
                                        <!-- Chart -->
                                        <div class="col-md-8 mb10">
                                            <div id="high-area" style="" class="pln prn high-area-style-1"></div>
                                        </div>

                                        <!-- Text -->
                                        <div class="col-md-4">
                                            <div class="mw400 mt67 ml70">
                                                <div class="mb20 fs13">
                                                    <div class="text-dark ml2 mb7 fs16 fw600">January - March:</div>
                                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum
                                                </div>

                                                <div class="mb20 fs13">
                                                    <div class="text-dark ml2 mb7 fs16 fw600">April - June:</div>
                                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum
                                                </div>

                                                <div class="mb20 fs13">
                                                    <div class="text-dark ml2 mb7 fs16 fw600">July - September:</div>
                                                    Processus dynamicus, qui sequitur mutationem  consuetudium
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /AllCP Grid -->
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-9 allcp-grid hidden-xs">

                            <!-- Widget Calendar -->
                            <div class="panel mbn">
                                <div class="text-dark fs26">
                                    Monthly Events: March 2016
                                </div>
                                <div class="panel-body mt10 pln prn">
                                    <div id="calendar" class="events-calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3">

                            <!-- Poll -->
                            <div class="panel of-h" id="spy1">
                                <div class="panel-heading br-b-o w-mt-15">
                                    <span class="panel-title">Poll</span>
                                </div>
                                <div class="panel-body pn mt25">
                                    <div class="radio-custom mb5">
                                        <input type="radio" id="browser1" name="radioExample">
                                        <label for="browser1" class="small">Option 1: Semper magna mauris ac dolor</label>
                                    </div>
                                    <div class="radio-custom mb5">
                                        <input type="radio" id="browser2" name="radioExample">
                                        <label for="browser2" class="small">Option 2: Curabitur ex massa</label>
                                    </div>
                                    <div class="radio-custom mb5">
                                        <input type="radio" id="browser3" name="radioExample">
                                        <label for="browser3" class="small">Option 3: Quisque aliquam consecte</label>
                                    </div>
                                    <div class="mt20 text-center">
                                        <div class="btn btn-danger btn-lg mr30 mb5 br0">Vote</div>
                                        <div class="btn btn-dark btn-lg mb5 br0">Hide Results</div>
                                    </div>
                                </div>
                                <div class="panel-body pn">

                                    <div id="pie-chart1" class="mt15 pie-chart1-style-1"></div>

                                </div>

                            </div>
                            
                            <!-- News -->
                            <div class="panel news-widget bg_image_1 gradient gradient-color-1" id="spy12">
                                <div class="panel-heading mt5">
                                    <span class="panel-title">News</span>
                                </div>
                                <div class="panel-content mt90">
                                    <span class="fs28 lh30 mw225 block-object">So much more to see at a glance.</span>
                                    <span class="br-b block-object mt10"></span>
                                    <p class="fs13 lh20 mt15 mw255">Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit l</p>
                                    <div class="block-object mt25 mr15 t-right">
                                        <a href="<?php echo base_url(); ?>#" class="fw600">read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- Task-list -->
                            <div class="panel panel-widget task-widget phn pbn" id="spy11">
                                <div class="panel-heading cursor ph25">
                                    <span class="panel-title">Task List</span>
                                </div>
                                <div class="panel-body pn br-t mt13">

                                    <h6 class="fs16 mh10 mv20 text-muted-alt">
                                        <i class="fs26 imoon imoon-user4 posa mtn5 ml5"></i>
                                        <span class="pl45">Personal Tasks</span>
                                    </h6>
                                    <ul class="task-list task-current mb55">
                                        <li class="task-item info">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task0">
                                                    <label for="task0"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Remove announcement
                                                <span class="task-date"><i class="fa fa-warning"></i>Today</span>
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item primary">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task1">
                                                    <label for="task1"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Post an announcement
                                                <span class="task-date">Friday, 13</span>
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item warning">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task2">
                                                    <label for="task2"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Add new products
                                                <span class="task-date no-date">no date</span>
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item system">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task3">
                                                    <label for="task3"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Ban a few users
                                                <span class="task-date">Thursday, 24</span>
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item item-alert">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" id="task4">
                                                    <label for="task4"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">
                                                Clean comments
                                                <span class="task-date no-date">no date</span>
                                            </div>
                                            <div class="task-menu"></div>
                                        </li>
                                    </ul>

                                    <h6 class="fs16 mh10 mv20 text-muted-alt">
                                        <i class="fs24 imoon imoon-checkmark posa mtn5 ml5"></i>
                                        <span class="pl45">Completed Tasks</span>
                                    </h6>
                                    <ul class="task-list task-completed">
                                        <li class="task-item danger item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task7">
                                                    <label for="task7"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Add article review</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item system item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task8">
                                                    <label for="task8"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Add iPad review</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item item-alert item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task9">
                                                    <label for="task9"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Ban THATuser user</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item info item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task10">
                                                    <label for="task10"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Create new pages</div>
                                            <div class="task-menu"></div>
                                        </li>
                                        <li class="task-item info item-checked">
                                            <div class="task-handle">
                                                <div class="checkbox-custom">
                                                    <input type="checkbox" checked="" id="task11">
                                                    <label for="task10"></label>
                                                </div>
                                            </div>
                                            <div class="task-desc">Remove old pages</div>
                                            <div class="task-menu"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-bottom p20 text-center">
                                    <a class="btn fs14 pn" href="<?php echo base_url(); ?>#">View More</a>
                                </div>

                            </div>

                            <!-- News -->
                            <div class="panel news-widget pb15 bg_image_2 gradient gradient-color-2" id="spy14">
                                <div class="panel-heading mt5">
                                    <span class="panel-title">News</span>
                                </div>
                                <div class="panel-content mt125">
                                    <span class="fs28 block-object fw300 lh30 mb10">So much more to see at a glance.</span>
                                    <span class="br-b block-object mt5"></span>
                                    <p class="fs13 lh20 mt15 mw700">Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                    <div class="block-object mt20 mrn5 t-right">
                                        <a href="<?php echo base_url(); ?>#" class="fs14 fw600">read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Crawler-list -->
                            <div class="panel crawler-widget phn" id="spy2">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Crawler List</span>
                                </div>
                                <div class="panel-body pn mt13">
                                    <ul class="crawler-list">
                                        <li class="crawler-item primary">
                                            <div class="crawler-handle">
                                                <i class="imoon imoon-google"></i>
                                            </div>
                                            <div class="crawler-desc">
                                                PAGES.COM/img/15
                                                <span class="crawler-date">17%</span>
                                            </div>
                                            <div class="crawler-menu"></div>
                                        </li>
                                        <li class="crawler-item item-alert">
                                            <div class="crawler-handle">
                                                <i class="imoon imoon-blogger"></i>
                                            </div>
                                            <div class="crawler-desc">
                                                Pages.com/popular
                                                <span class="crawler-date">24%</span>
                                            </div>
                                            <div class="crawler-menu"></div>
                                        </li>
                                        <li class="crawler-item system">
                                            <div class="crawler-handle">
                                                <i class="imoon imoon-yahoo"></i>
                                            </div>
                                            <div class="crawler-desc">
                                                PAGES.COM/img/15
                                                <span class="crawler-date">32%</span>
                                            </div>
                                            <div class="crawler-menu"></div>
                                        </li>
                                        <li class="crawler-item primary">
                                            <div class="crawler-handle">
                                                <i class="imoon imoon-google"></i>
                                            </div>
                                            <div class="crawler-desc">
                                                Pages.com/popular
                                                <span class="crawler-date">27%</span>
                                            </div>
                                            <div class="crawler-menu"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Country-list -->
                            <div class="panel country-widget phn" id="spy8">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Country List</span>
                                </div>
                                <div class="panel-body pn mt13">
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
                                    </ul>
                                </div>
                            </div>

                            <!-- Visitor Geography -->
                            <div class="panel phn" id="spy10">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Visitor Geography</span>
                                </div>
                                <div class="br-t mt13">
                                    <div class="panel-menu allcp-form pn mt5 mb10 ml15 br-v-n br-h-n bg-none w150">
                                        <!-- Block Widget -->
                                        <div class="smart-widget sm-right">
                                            <label class="field">
                                                <input type="text" name="sub1" id="sub1" class="gui-input br-v-n br-h-n bg-none" placeholder="United States" disabled>
                                            </label>
                                            <button type="submit" class="button br-v-n br-h-n pn">
                                                <i class="fs16 fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="legend-widget">
                                        <ul class="legend-list">
                                            <li class="legend-item info">
                                                <div class="legend-handle">
                                                    <i class="imoon imoon-location"></i>
                                                </div>
                                                <div class="legend-desc pl25">
                                                    Montana
                                                    <span class="legend-date fs15 fw500">68%</span>
                                                </div>
                                                <div class="legend-menu"></div>
                                            </li>
                                            <li class="legend-item primary">
                                                <div class="legend-handle">
                                                    <i class="imoon imoon-location"></i>
                                                </div>
                                                <div class="legend-desc pl25">
                                                    Nevada
                                                    <span class="legend-date fs15 fw500">22%</span>
                                                </div>
                                                <div class="legend-menu"></div>
                                            </li>
                                            <li class="legend-item system">
                                                <div class="legend-handle">
                                                    <i class="imoon imoon-location"></i>
                                                </div>
                                                <div class="legend-desc pl25">
                                                    iowa
                                                    <span class="legend-date fs15 fw500">10%</span>
                                                </div>
                                                <div class="legend-menu"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body pn ph25">
                                    <div id="WidgetMap" class="jvector-colors widgetmap-style-1 hide-jzoom"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">

                            <!-- User Project List -->
                            <div class="panel phn" id="spy6">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">User Project List</span>
                                </div>
                                <div class="panel-body mt13 pn">
                                    <div class="bs-component">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="bg-dark-blue">
                                                <tr>
                                                    <th class="br-t-n pl35">Project</th>
                                                    <th class="br-t-n hidden-xs">Start Date</th>
                                                    <th class="br-t-n">Deadline</th>
                                                    <th class="br-t-n">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="pl35">#30014</td>
                                                    <td class="hidden-xs">Feb 24, 2016</td>
                                                    <td>Feb 28, 2016</td>
                                                    <td><span class="label label-info">Done</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl35">#30588</td>
                                                    <td class="hidden-xs">Feb 24, 2016</td>
                                                    <td>Feb 28, 2016</td>
                                                    <td><span class="label label-warning">Failed</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl35">#27891</td>
                                                    <td class="hidden-xs">Feb 24, 2016</td>
                                                    <td>Feb 28, 2016</td>
                                                    <td><span class="label label-primary">In Progress</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl35">#17488</td>
                                                    <td class="hidden-xs">Feb 24, 2016</td>
                                                    <td>Feb 28, 2016</td>
                                                    <td><span class="label label-info">Done</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="pl35">#27891</td>
                                                    <td class="hidden-xs">Feb 24, 2016</td>
                                                    <td>Feb 28, 2016</td>
                                                    <td><span class="label label-primary">In Progress</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Activities -->
                            <div class="panel activities-widget phn" id="spy13">
                                <div class="panel-heading cursor ph25">
                                    <span class="panel-title">Recent Activities</span>
                                </div>
                                <div class="panel-body pn mt13">
                                    <ul class="activities-list">
                                        <li class="activities-item info">
                                            <div class="activities-handle">
                                                <i class="fa fa-rss"></i>
                                            </div>
                                            <div class="activities-desc">
                                                You have 4 pending tasks
                                                <span class="activities-date activities-new">Now</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                        <li class="activities-item primary">
                                            <div class="activities-handle">
                                                <i class="fa fa-info"></i>
                                            </div>
                                            <div class="activities-desc">
                                                You have 5 pending membership that requires a quick review.
                                                <span class="activities-date activities-new">Now</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                        <li class="activities-item warning">
                                            <div class="activities-handle">
                                                <i class="fa fa-wrench"></i>
                                            </div>
                                            <div class="activities-desc">
                                                Web server hardware needs to be upgraded
                                                <span class="activities-date">15 mins ago</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                        <li class="activities-item system">
                                            <div class="activities-handle">
                                                <i class="fa fa-bell"></i>
                                            </div>
                                            <div class="activities-desc">
                                                Finance Report for year 2013 has been released.
                                                <span class="activities-date">30 mins ago</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                        <li class="activities-item item-alert">
                                            <div class="activities-handle">
                                                <i class="fa fa-tag"></i>
                                            </div>
                                            <div class="activities-desc">
                                                New order received with Reference Number: DR23923 
                                                <span class="activities-date">1 day ago</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                        <li class="activities-item dark">
                                            <div class="activities-handle">
                                                <i class="fa fa-bullseye"></i>
                                            </div>
                                            <div class="activities-desc">
                                                New order received with Reference Number: DR23923 
                                                <span class="activities-date">2 days ago</span>
                                            </div>
                                            <div class="activities-menu"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Traphic Sources -->
                            <div class="panel phn pb10" id="spy7">
                                <div class="panel-heading pt5 ph25">
                                    <span class="panel-title">Skills & Expertise</span>
                                </div>
                                <div class="panel-body br-t pt25 ph25">
                                    <div class="info-circle-container style-1">
                                        <div class="text-center p10">
                                            <div class="info-circle" id="c1" value="78" data-circle-color="info"></div>
                                            <div class="text-dark fs15 mt10 text-uppercase fw500">Designer Skills</div>
                                        </div>
                                        <div class="text-center p10">
                                            <div class="info-circle" id="c2" value="67" data-circle-color="primary"></div>
                                            <div class="text-dark fs15 mt10 text-uppercase fw500">Manager Skills</div>
                                        </div>
                                        <div class="text-center p10">
                                            <div class="info-circle" id="c3" value="41" data-circle-color="system"></div>
                                            <div class="text-dark fs15 mt10 text-uppercase fw500">Developer skills</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Browser-list -->
                            <div class="panel browser-widget phn" id="spy3">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Browser List</span>
                                </div>
                                <div class="panel-body pn mt13">
                                    <ul class="browser-list">
                                        <li class="browser-item">
                                            <div class="browser-handle">
                                                <i class="favicons-m ie"></i>
                                            </div>
                                            <div class="browser-desc">
                                                United States
                                                <span class="browser-date">17%</span>
                                            </div>
                                            <div class="browser-menu"></div>
                                        </li>
                                        <li class="browser-item">
                                            <div class="browser-handle">
                                                <i class="favicons-m chrome"></i>
                                            </div>
                                            <div class="browser-desc">
                                                Germany
                                                <span class="browser-date">24%</span>
                                            </div>
                                            <div class="browser-menu"></div>
                                        </li>
                                        <li class="browser-item">
                                            <div class="browser-handle">
                                                <i class="favicons-m firefox"></i>
                                            </div>
                                            <div class="browser-desc">
                                                france
                                                <span class="browser-date">32%</span>
                                            </div>
                                            <div class="browser-menu"></div>
                                        </li>
                                        <li class="browser-item">
                                            <div class="browser-handle">
                                                <i class="favicons-m safari"></i>
                                            </div>
                                            <div class="browser-desc">
                                                Spain
                                                <span class="browser-date">27%</span>
                                            </div>
                                            <div class="browser-menu"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Column Graph -->
                            <div class="panel phn" id="spy9">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Column Graph</span>
                                </div>
                                <div class="panel-body pn br-t">
                                    <div class="row mn">
                                        <div class="col-md-7 col-sm-7 va-m pn pr50 pt10">
                                            <div class="progress progress-bar-xl mt55 mb10">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </div>
                                            <div class="progress progress-bar-xl mb10">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                            </div>
                                            <div class="progress progress-bar-xl mb10">
                                                <div class="progress-bar progress-bar-system" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="progress progress-bar-xl mbn">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-dribbble"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-5 col-sm-5 pn pln">
                                            <div class="allcp-form mv5">
                                                <!-- Block Widget -->
                                                <div class="smart-widget sm-right smr-50">
                                                    <label class="field">
                                                        <input type="text" name="sub2" id="sub2" class="gui-input br-v-n br-h-n" placeholder="Add social network">
                                                    </label>
                                                    <button type="submit" class="button br-v-n br-h-n">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="legend-widget">
                                                <ul class="legend-list">
                                                    <li class="legend-item wo-i info">
                                                        <div class="legend-desc pl25">
                                                            facebook
                                                            <span class="legend-date">45%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i primary">
                                                        <div class="legend-desc pl25">
                                                            google+
                                                            <span class="legend-date">15%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i system">
                                                        <div class="legend-desc pl25">
                                                            twitter
                                                            <span class="legend-date">20%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i danger">
                                                        <div class="legend-desc pl25">
                                                            dribble
                                                            <span class="legend-date">20%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Area Graph -->
                            <div class="panel legend-widget phn" id="spy4">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Area Graph</span>
                                </div>
                                <ul class="legend-list chart-legend mt13" data-chart-id="#high-area2">
                                    <li class="legend-item info">
                                        <a data-chart-id="0" class="legend-item"></a>
                                        <div class="legend-handle">
                                            <i class="fa fa-thumb-tack"></i>
                                        </div>
                                        <div class="legend-desc pl25">
                                            China
                                            <span class="legend-date fs15 fw500">68%</span>
                                        </div>
                                        <div class="legend-menu"></div>
                                    </li>
                                    <li class="legend-item primary">
                                        <a data-chart-id="1" class="legend-item"></a>
                                        <div class="legend-handle">
                                            <i class="fa fa-thumb-tack"></i>
                                        </div>
                                        <div class="legend-desc pl25">
                                            Brazil
                                            <span class="legend-date fs15 fw500">22%</span>
                                        </div>
                                        <div class="legend-menu"></div>
                                    </li>
                                    <li class="legend-item system">
                                        <a data-chart-id="2" class="legend-item"></a>
                                        <div class="legend-handle">
                                            <i class="fa fa-thumb-tack"></i>
                                        </div>
                                        <div class="legend-desc pl25">
                                            Italy
                                            <span class="legend-date fs15 fw500">10%</span>
                                        </div>
                                        <div class="legend-menu"></div>
                                    </li>
                                </ul>

                                <div class="panel-body ph25">
                                    <div id="high-area2" style="height: 260px; width: 100%;"></div>
                                </div>
                            </div>

                            <!-- Column Graph Vertical -->
                            <div class="panel phn" id="spy5">
                                <div class="panel-heading ph25">
                                    <span class="panel-title">Column Graph Vertical</span>
                                </div>
                                <div class="panel-body pn br-t">
                                    <div class="row mn">
                                        <div class="col-md-7 col-sm-7 pn ph40 mt70 mbn10">
                                            <div class="progress vertical progress-bar-xl">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </div>
                                            <div class="progress vertical progress-bar-xl">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                            </div>
                                            <div class="progress vertical progress-bar-xl">
                                                <div class="progress-bar progress-bar-system" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </div>
                                            <div class="progress vertical progress-bar-xl">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <i class="fa fa-dribbble"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-5 col-sm-5 pn pln">
                                            <div class="allcp-form mv5">
                                                <!-- Block Widget -->
                                                <div class="smart-widget sm-right smr-50">
                                                    <label class="field">
                                                        <input type="text" name="sub" id="sub" class="gui-input br-v-n br-h-n" placeholder="Add social network">
                                                    </label>
                                                    <button type="submit" class="button br-v-n br-h-n">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="legend-widget">
                                                <ul class="legend-list">
                                                    <li class="legend-item wo-i info">
                                                        <div class="legend-desc pl25">
                                                            facebook
                                                            <span class="legend-date">45%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i primary">
                                                        <div class="legend-desc pl25">
                                                            google+
                                                            <span class="legend-date">15%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i system">
                                                        <div class="legend-desc pl25">
                                                            twitter
                                                            <span class="legend-date">20%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                    <li class="legend-item wo-i danger">
                                                        <div class="legend-desc pl25">
                                                            dribble
                                                            <span class="legend-date">20%</span>
                                                        </div>
                                                        <div class="legend-menu"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.col-md-6 -->


                    </div>


                </div>


            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

        <!-- Page Footer -->
        <footer id="content-footer">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">Copyright © 2016. All rights reserved. <a href="<?php echo base_url(); ?>#">Therms of use</a> | <a href="<?php echo base_url(); ?>#">Privacy Policy</a></span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta"></span>
                    <a href="<?php echo base_url(); ?>#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- /Page Footer -->

    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/utility/fullscreen/jquery.fullscreen.js"></script> -->

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/c3charts/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/c3charts/c3.min.js"></script>

<!-- Simple Circles Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/circles/circles.js"></script>

<!-- Maps JSs -->
<script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

<!-- FullCalendar Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Date/Month - Pickers -->
<script src="<?php echo base_url(); ?>assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>

<!-- Magnific Popup Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- Widget JS -->
<script src="<?php echo base_url(); ?>assets/js/demo/widgets.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard1.js"></script>
<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:34 GMT -->
</html>

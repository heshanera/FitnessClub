<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:41 GMT -->
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

    <!-- CSS - plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/magnific/magnific-popup.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="basic-calendar">

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
                    <li class="breadcrumb-current-item">Basic Calendar</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center ph45">

                <!-- Calendar -->
                <div id="calendar" class="events-calendar"></div>

            </div>
            <!-- /Column Center -->

            <aside class="chute chute-right chute-icon-style chute290 taphover chute-hidden-xs" data-chute-mobile="#content > .chute-center" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-of-ht"></div>
                <div class="scroller-chute scroller-primary chute-fh-xs mrn">
                    <div class="fc-title-clone"></div>

                    <div class="section allcp-form theme-primary">
                        <div class="inline-mp minimal-mp center-block"></div>
                    </div>

                    <h5 class="mt25 ml5 mr40"> Events
                        <a id="compose-event-btn" href="<?php echo base_url(); ?>#calendarManagment" data-effect="mfp-flipInY">
                            <span class="fa fa-plus-square"></span>
                        </a>
                    </h5>

                    <div id="external-events" class="bg-dotted">

                        <div class='fc-event fc-event-primary' data-event="primary">
                            <div class="fc-event-icon">
                                <span class="fa fa-exclamation"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>1:25pm </b>Go to San Park
                            </div>
                        </div>
                        <div class='fc-event fc-event-info' data-event="info">
                            <div class="fc-event-icon">
                                <span class="fa fa-info"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>4:30pm </b>Meeting With Boss
                            </div>
                        </div>
                        <div class='fc-event fc-event-info' data-event="info">
                            <div class="fc-event-icon">
                                <span class="fa fa-info"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>5:00pm </b>Meeting With John Doe
                            </div>
                        </div>
                        <div class='fc-event fc-event-info' data-event="info">
                            <div class="fc-event-icon">
                                <span class="fa fa-info"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>6:00pm </b>Meeting With Jane Doe
                            </div>
                        </div>

                        <h6 class="mt30 ml10 text-muted"> Reoccuring Events: </h6>

                        <div class='fc-event fc-event-alert event-recurring' data-event="alert">
                            <div class="fc-event-icon">
                                <span class="fa fa-bell"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>1:00pm </b>Take medicine
                            </div>
                        </div>
                        <div class='fc-event fc-event-system event-recurring' data-event="system">
                            <div class="fc-event-icon">
                                <span class="fa fa-bell"></span>
                            </div>
                            <div class="fc-event-desc">
                                <b>8:00pm </b>Security Check
                            </div>
                        </div>

                    </div>
                </div>
            </aside>
            <!-- /Column Left -->


        </section>
        <!-- /Content -->

    </section>


</div>
<!-- /Body Wrap  -->

<!-- Calendar Management Form -->
<div class="allcp-form theme-primary popup-basic popup-lg mfp-with-anim mfp-hide" id="calendarManagment">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-title">
          <i class="fa fa-pencil-square-o"></i>New Calendar Event
        </span>
        </div>

        <form method="post" action="http://myadmin-html.axiomthemes.com/" id="calendarManagmentForm">
            <div class="panel-body p25">
                <div class="section-divider mt10 mb40">
                    <span>Event Details</span>
                </div>

                <div class="section row">
                    <div class="col-md-6">
                        <label for="firstname" class="field prepend-icon">
                            <input type="text" name="firstname" id="firstname" class="gui-input"
                                   placeholder="Event Coordinator">
                            <span class="field-icon">
                                <i class="fa fa-user"></i>
                            </span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label for="eventDate" class="field prepend-icon">
                            <input type="text" id="eventDate" name="eventDate" class="gui-input"
                                   placeholder="Event Date">
                            <span class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </label>
                    </div>
                </div>
                <!-- /section -->

                <div class="section row">
                    <div class="col-xs-12">
                        <label for="email" class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input" placeholder="Contact Email">
                            <span class="field-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </label>
                    </div>
                </div>
                <!-- /section -->

                <div class="section row">
                    <div class="col-xs-12">
                        <div class="smart-widget sm-right smr-140">
                            <label for="username" class="field prepend-icon">
                                <input type="text" name="username" id="username" class="gui-input"
                                       placeholder="Event Title">
                                <span class="field-icon">
                                    <i class="fa fa-flag"></i>
                                </span>
                            </label>
                            <label for="username" class="button">yoursite.com</label>
                        </div>
                    </div>
                </div>
                <!-- /section -->

                <div class="section row">
                    <div class="col-xs-12">
                        <label class="field prepend-icon">
                        <textarea class="gui-textarea" id="comment" name="comment"
                                  placeholder="Event Description"></textarea>
                            <span class="field-icon">
                                <i class="fa fa-comments"></i>
                            </span>
                            <span class="input-footer hidden">
                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                        </label>
                    </div>
                </div>
                <!-- /section -->

            </div>
            <div class="panel-footer text-right">
                <button type="submit" class="button btn-primary">Create Event</button>
            </div>
        </form>
    </div>
</div>


<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Date/Month - Pickers -->
<script src="<?php echo base_url(); ?>assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>

<!-- Magnific Popup Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

<!-- FullCalendar Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/basic-calendar.js"></script>
<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:42 GMT -->
</html>

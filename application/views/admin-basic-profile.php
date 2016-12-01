<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:39 GMT -->
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

<body class="basic-profile">


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
                    <li class="breadcrumb-current-item">Profile</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <!-- Content -->
        <section id="content" class="animated fadeIn">

            <div class="row">
                <div class="col-md-8 mb40">

                    <div class="tab-block">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>#tab1" data-toggle="tab">Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#tab2" data-toggle="tab">Activity</a>
                            </li>
                        </ul>
                        <div class="tab-content p30">
                            <div id="tab1" class="tab-pane active">

                                <div class="row">
                                    <div class="col-sm-3 col-md-6">
                                        <a href="<?php echo base_url(); ?>#">
                                            <img class="media-object img-responsive"
                                                 src="<?php echo base_url(); ?>assets/img/avatars/profile_avatar_big.jpg" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-sm-9 col-md-6">
                                        <h2 class="media-heading fs30 mb20">Douglas Adams</h2>

                                        <p class="fw400">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros
                                            et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                                            delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum
                                            soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                            placerat facer possim assum. </p>

                                        <p class="fw400">Typi non habent claritatem insitam; est usus legentis in iis
                                            qui facit eorum claritatem. Investigationes demonstraverunt lectores legere
                                            me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui
                                            sequitur mutationem consuetudium lectorum. Mirum est notare quam littera
                                            gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                            humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui
                                            nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                        </p>
                                        <ul class="list-inline list-unstyled">
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="google plus link">
                                                    <span class="fa fa-google-plus-square fs35 text-danger"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="facebook link">
                                                    <span class="fa fa-facebook-square fs35 text-primary"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="pinterest link">
                                                    <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="twitter link">
                                                    <span class="fa fa-twitter-square fs35 text-primary"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="github link">
                                                    <span class="fa fa-github-square fs35 text-system"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>#" title="email link">
                                                    <span class="fa fa-envelope-square fs35 text-muted"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="media clearfix">
                                    <div class="media-left pr30">
                                        <a href="<?php echo base_url(); ?>#">
                                            <img class="media-object mw320 mnw150" src="<?php echo base_url(); ?>assets/img/avatars/profile_avatar_big.jpg" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body va-t">
                                        <h2 class="media-heading fs30 mb20">Douglas Adams</h2>
                                        <p class="fw400">
                                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                                        <p class="fw400">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                        </p>

                                        <div class="media-links mt40">
                                            <ul class="list-inline list-unstyled">
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="google plus link">
                                                        <span class="fa fa-google-plus-square fs35 text-danger"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="facebook link">
                                                        <span class="fa fa-facebook-square fs35 text-primary"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="pinterest link">
                                                        <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="twitter link">
                                                        <span class="fa fa-twitter-square fs35 text-primary"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="github link">
                                                        <span class="fa fa-github-square fs35 text-system"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>#" title="email link">
                                                        <span class="fa fa-envelope-square fs35 text-muted"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>-->
                                <p class="mt40">
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                    quod mazim placerat facer possim assum. </p>
                                <blockquote class="blockquote-rounded mv20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <small>John Doe</small>
                                </blockquote>
                            </div>
                            <div id="tab2" class="tab-pane">
                                <div class="media">
                                    <a class="pull-left" href="<?php echo base_url(); ?>#"> <img class="media-object mn thumbnail mw50"
                                                                        src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" alt="..."> </a>

                                    <div class="media-body">
                                        <h5 class="media-heading mb20">John Doe Posted
                                            <small> - 1 day ago</small>
                                        </h5>
                                        <img src="<?php echo base_url(); ?>assets/img/pages/1.jpg" class="mw140 mr25 mb20" alt="">
                                        <img src="<?php echo base_url(); ?>assets/img/pages/2.jpg" class="mw140 mr25 mb20" alt=""> 
                                        <img src="<?php echo base_url(); ?>assets/img/pages/3.jpg" class="mw140 mb20" alt="">

                                        <div class="media-links">
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-share text-primary mr5"></span> Share </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt25">
                                    <a class="pull-left" href="<?php echo base_url(); ?>#"> 
                                        <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" alt="...">
                                    </a>

                                    <div class="media-body mb5">
                                        <h5 class="media-heading mbn">Ivan Brand Posted
                                            <small> - 1 day ago</small>
                                        </h5>
                                        <p class="fw400"> Lorem ipsum dolor amet pud.</p>

                                        <div class="media pb10">
                                            <a class="pull-left" href="<?php echo base_url(); ?>#"> <img
                                                    class="media-object mn thumbnail thumbnail-sm rounded mw40"
                                                    src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" alt="..."> </a>

                                            <div class="media-body mb5">
                                                <h5 class="media-heading mbn">Clair Chan
                                                    <small> - 1 day ago</small>
                                                </h5>
                                                <p class="fw400">Quisque a turpis sit amet ligula</p>
                                            </div>
                                        </div>
                                        <div class="media mtn">
                                            <a class="pull-left" href="<?php echo base_url(); ?>#"> 
                                                <img class="media-object mn thumbnail thumbnail-sm rounded mw40" src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" alt="..."> 
                                            </a>

                                            <div class="media-body mb5">
                                                <h5 class="media-heading mbn">Clair Chan
                                                    <small> - 1 day ago</small>
                                                </h5>
                                                <p class="fw400">Pellentesque aliquet sapien vitae erat gravida
                                                    volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt25">
                                    <a class="pull-left" href="<?php echo base_url(); ?>#"> 
                                        <img class="media-object thumbnail mw50" src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" alt="..."> 
                                    </a>

                                    <div class="media-body">
                                        <h5 class="media-heading mb20">John Doe Posted
                                            <small> - 1 day ago</small>
                                        </h5>
                                        <img src="<?php echo base_url(); ?>assets/img/pages/4.jpg" class="mw140 mr25 mb20" alt="">
                                        <img src="<?php echo base_url(); ?>assets/img/pages/2.jpg" class="mw140 mr25 mb20" alt="">
                                        <img src="<?php echo base_url(); ?>assets/img/pages/5.jpg" class="mw140 mb20" alt="">

                                        <div class="media-links">
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-thumbs-o-up text-primary mr5"></span> Like </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-share text-primary mr5"></span> Share </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-floppy-o text-primary mr5"></span> Save </span>
                                          <span class="text-light fs12 mr10">
                                            <span class="fa fa-comment text-primary mr5"></span> Comment </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt25">
                                    <a class="pull-left" href="<?php echo base_url(); ?>#"> <img
                                            class="media-object mn thumbnail thumbnail-sm rounded mw40"
                                            src="<?php echo base_url(); ?>assets/img/avatars/2.jpg" alt="..."> </a>

                                    <div class="media-body mb5">
                                        <h5 class="media-heading mbn">Clair Chan
                                            <small> - 1 day ago</small>
                                        </h5>
                                        <p class="fw400">Pellentesque aliquet sapien vitae erat gravida volutpat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">Achievements</span>
                        </div>
                        <div class="panel-body pn pb5">

                            <hr class="short br-lighter">

                            <h6>Education</h6>

                            <h4>Bachelor of Science &amp; Technology, PhD</h4>

                            <p class="text-muted"> Berkeley College, New York
                                <br> New York University, June 2005 through Aug 2010
                            </p>

                            <h6>Experience</h6>

                            <h4>Google inc. Internship</h4>

                            <p class="text-muted"> Google inc.
                                <br> 1600 Amphitheatre Parkway Mountain View
                            </p>

                            <hr class="short br-lighter">

                            <h6>Accomplishments</h6>

                            <h5><a href="<?php echo base_url(); ?>#">Alliance Admin Template</a></h5>

                            <p class="text-muted">Duis sed dui enim. Curabitur mi dui, accumsan eget lobortis nec,
                                vestibulum in nulla. Aliquam lorem ex, sodales at euismod eget, ullamcorper eu odio.
                            </p>
                            <h5><a href="<?php echo base_url(); ?>#">Alliance Wordrpress Admin Template</a></h5>

                            <p class="text-muted">Duis sed dui enim. Curabitur mi dui, accumsan eget lobortis nec,
                                vestibulum in nulla. Aliquam lorem ex, sodales at euismod eget, ullamcorper eu odio.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Content -->

    </section>


</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();


    });
</script>
<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:49 GMT -->
</html>

<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/sales-stats-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:35:58 GMT -->
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

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

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

<body class="sales-stats-products">


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
                    <li>
                        <a href="<?php echo base_url(); ?>dashboard2.html">Overview</a>
                    </li>
                    <li class="active">
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

            <!-- Column Left -->
            <aside class="chute chute-left chute290 chute-icon-style" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-of-ht"></div>
                <div class="scroller-chute scroller-primary chute-fh-xs mrn">
                    <!-- Menu Block -->
                    <div class="allcp-form theme-primary">

                        <h5 class="pln"> Filter Products</h5>

                        <h6 class="mb15"> by SKU</h6>

                        <div class="section mb20">
                            <label for="order-id" class="field prepend-icon">
                                <input type="text" name="order-id" id="order-id" class="gui-input"
                                       placeholder="Product SKU #">
                                <span class="field-icon">
                                    <i class="fa fa-tag"></i>
                                </span>
                            </label>
                        </div>

                        <h6 class="mb15"> by price</h6>

                        <div class="section row mb20">
                            <div class="col-md-6 ph10">
                                <label for="price1" class="field prepend-icon mb5">
                                    <input type="text" name="price1" id="price1" class="gui-input" placeholder="0">
                                    <span class="field-icon">
                                        <i class="fa fa-usd"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-6 ph10">
                                <label for="price2" class="field prepend-icon">
                                    <input type="text" name="price2" id="price2" class="gui-input" placeholder="1000">
                                    <span class="field-icon">
                                        <i class="fa fa-usd"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <h6 class="mb15"> by date</h6>

                        <div class="section row mb20">
                            <div class="col-md-6 ph10">
                                <label for="datepicker1" class="field prepend-icon mb5">
                                    <input type="text" id="datepicker1" name="datepicker1"
                                           class="gui-input fs13"
                                           placeholder="From">
                                    <span class="field-icon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-6 ph10">
                                <label for="datepicker2" class="field prepend-icon">
                                    <input type="text" id="datepicker2" name="datepicker2"
                                           class="gui-input fs13"
                                           placeholder="To">
                                    <span class="field-icon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <h6 class="mb15"> by category</h6>

                        <div class="section mb20">
                            <label class="field select">
                                <select id="filter-categories" name="filter-categories">
                                    <option value="0" selected="selected">Filter by Categories</option>
                                    <option value="1">iPhone</option>
                                    <option value="2">iPad</option>
                                    <option value="3">iMac</option>
                                </select>
                                <i class="arrow double"></i>
                            </label>
                        </div>

                        <hr class="short">

                        <div class="section pb30 clr">
                            <button class="btn btn-primary pull-right ph30" type="button">Search</button>
                        </div>

                    </div>
                </div>
            </aside>
            <!-- /Column Left -->

            <!-- Column Center -->
            <div class="chute chute-center pt30">

                <!-- New Product -->
                <div class="panel mb25 mt5">
                    <div class="panel-heading">
                        <span class="panel-title hidden-xs"> Add New Product</span>
                        <ul class="nav panel-tabs-border panel-tabs">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>#tab1_1" data-toggle="tab">General</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>#tab1_2" data-toggle="tab">Details</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body pn">
                        <div class="tab-content pn br-n allcp-form theme-primary">
                            <div id="tab1_1" class="tab-pane active">

                                <div class="section row mbn">
                                    <div class="col-md-4 ph10">
                                        <div class="fileupload fileupload-new allcp-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                                <img data-src="<?php echo base_url(); ?>holder.js/100%x140" alt="holder">
                                            </div>
                                            <div class="row mhn10">
                                                <div class="col-xs-12 col-sm-7 pr5 ph10">
                                                    <input type="text" name="name2" id="name2"
                                                           class="text-center event-name gui-input br-light bg-light"
                                                           placeholder="Image tags">
                                                    <label for="name2" class="field-icon"></label>
                                                </div>
                                                <div class="col-xs-12 col-sm-5 ph10">
                                                    <span class="button button-big btn-primary btn-file btn-block">
                                                      <span class="fileupload-new">Select</span>
                                                      <span class="fileupload-exists">Change</span>
                                                      <input type="file">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ph10">
                                        <div class="section mb10">
                                            <label for="name21" class="field prepend-icon">
                                                <input type="text" name="name21" id="name21"
                                                       class="event-name gui-input br-light light"
                                                       placeholder="Product Name">
                                                <span class="field-icon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="section mb10">
                                            <label class="field prepend-icon">
                                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="comment" placeholder="Product Description"></textarea>
                                                <span class="field-icon">
                                                    <i class="fa fa-file"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div id="tab1_2" class="tab-pane">

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label for="product-category" class="field select">
                                            <select id="product-category" name="product-category">
                                                <option value="0" selected="selected">Category...</option>
                                                <option value="1">iPhone</option>
                                                <option value="2">iPad</option>
                                                <option value="3">iMac</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="product-status">
                                                <option value="0" selected="selected">Availability</option>
                                                <option value="1">Available</option>
                                                <option value="2">Unavailable</option>
                                                <option value="2">Preorder</option>
                                                <option value="3">Discontinued</option>
                                                <option value="4">Out of Stock</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                    <div class="col-md-4 ph10">
                                        <label for="product-quantity" class="field prepend-icon">
                                            <input type="text" name="product-quantity" id="product-quantity"
                                                   class="gui-input"
                                                   placeholder="Quantity">
                                            <span class="field-icon">
                                                <i class="fa fa-sort-amount-desc"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                </div>
                                <!-- /Section -->

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label for="product-price" class="field prepend-icon">
                                            <input type="text" name="product-price" id="product-price"
                                                   class="gui-input"
                                                   placeholder="Price...">
                                            <span class="field-icon">
                                                <i class="fa fa-usd"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                    <div class="col-md-4 ph10">
                                        <label for="product-vendor" class="field prepend-icon">
                                            <input type="text" name="product-vendor" id="product-vendor"
                                                   class="gui-input"
                                                   placeholder="Vendor...">
                                            <span class="field-icon">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                    <div class="col-md-4 ph10">
                                        <label for="product-sku" class="field prepend-icon">
                                            <input type="text" name="product-sku" id="product-sku" class="gui-input"
                                                   placeholder="SKU...">
                                            <span class="field-icon">
                                                <i class="fa fa-barcode"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- /section -->

                                </div>
                                <!-- /Section -->

                                <div class="section br10">
                                    <input id="tagsinput" type="text" value="Apple, Device, Gadget, iPhone, iPad, iMac">
                                </div>
                                <!-- /Section -->

                                <hr class="short alt">

                                <div class="section mbn text-right">
                                    <p class="text-right">
                                        <button class="btn btn-primary" type="button">Add product</button>
                                    </p>
                                </div>
                                <!-- /section -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="panel">
                    <div class="panel-menu p12 allcp-form theme-primary mtn">
                        <div class="row">
                            <div class="col-md-2 pb5">
                                <label class="field select">
                                    <select id="bulk-action" name="bulk-action">
                                        <option value="0">Actions</option>
                                        <option value="1">Edit</option>
                                        <option value="2">Delete</option>
                                        <option value="3">Active</option>
                                        <option value="4">Inactive</option>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>
                            <div class="col-md-5 pb5">
                                <label class="field select">
                                    <select id="filter-category" name="filter-category">
                                        <option value="0">Filter by Category</option>
                                        <option value="1">iPhone</option>
                                        <option value="2">iPad</option>
                                        <option value="3">iMac</option>
                                    </select>
                                    <i class="arrow"></i>
                                </label>
                            </div>
                            <div class="col-md-5 pb5">
                                <label class="field select">
                                    <select id="filter-status" name="filter-status">
                                        <option value="0">Filter by Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Low Stock</option>
                                        <option value="4">Out of Stock</option>
                                    </select>
                                    <i class="arrow"></i>
                                </label>
                            </div>
                        </div>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/1.jpg">
                                    </td>
                                    <td class="">Apple iPhone 5</td>
                                    <td class="">#123</td>
                                    <td class="">$500</td>
                                    <td class="">300</td>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/2.jpg">
                                    </td>
                                    <td class="">Apple iPhone 6</td>
                                    <td class="">#1234</td>
                                    <td class="">$600</td>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/3.jpg">
                                    </td>
                                    <td class="">Apple iPad</td>
                                    <td class="">#2345</td>
                                    <td class="">$400</td>
                                    <td class="">300</td>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/5.jpg">
                                    </td>
                                    <td class="">Apple iMac</td>
                                    <td class="">#5555</td>
                                    <td class="">$999</td>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/6.jpg">
                                    </td>
                                    <td class="">Apple iMac 27"</td>
                                    <td class="">#5656</td>
                                    <td class="">$1999</td>
                                    <td class="">300</td>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/7.jpg">
                                    </td>
                                    <td class="">Apple iPhone 4S</td>
                                    <td class="">#6666</td>
                                    <td class="">$300</td>
                                    <td class="text-warning">
                                        <b>15</b>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group text-right">
                                            <button type="button"
                                                    class="btn btn-warning br2 btn-xs fs12 dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"> Disabled
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
                                                <li class="active">
                                                    <a href="<?php echo base_url(); ?>#" class="text-warning">Inactive</a>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
                                             src="<?php echo base_url(); ?>assets/img/pages/products/8.jpg">
                                    </td>
                                    <td class="">Apple iPhone 6S 16GB</td>
                                    <td class="">#1010</td>
                                    <td class="">$995</td>
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
                                                    <a href="<?php echo base_url(); ?>#" class="text-warning">Out of Stock</a>
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
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
                                        <img class="img-responsive mw40 ib mr10" alt="" title="user"
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

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>

<!-- FileUpload JS -->
<script src="<?php echo base_url(); ?>assets/js/plugins/fileupload/fileupload.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/holder/holder.min.js"></script>

<!-- Tagmanager JS -->
<script src="<?php echo base_url(); ?>assets/js/plugins/tagsinput/tagsinput.min.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/sales-stats-products.js"></script>
<!-- /Scripts -->

</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/sales-stats-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:36:05 GMT -->
</html>

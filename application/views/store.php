x<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from projects.pulsarmedia.ca/energy/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:38:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.html">

    <title>Fitness Club</title>
    
    <link href="<?php echo base_url(); ?>bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- main css -->
    <link href="<?php echo base_url(); ?>css/master.css" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fontawesome/font-awesome.min.css" />
    <!-- FontAwesome Support -->
    
    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/superfish/superfish.css" />
    <!-- Superfish menu -->
    
    <!-- Theme Color selector -->
    <link href="<?php echo base_url(); ?>js/theme-color-selector/theme-color-selector.css" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.css" />
    <!-- Owl Carousel -->
    
    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/typicons/typicons.min.css" />
    <!-- Typicons -->
    
    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/wow/css/libs/animate.css" />
    <!-- WOW animations -->
    
    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/pulse/pm-slider.css" />
    <!-- Pulse Slider -->
    
    <!-- MeanMenu (mobile) -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/meanmenu/meanmenu.css" />
    <!-- MeanMenu (mobile) -->
    
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/flexslider/flexslider-post.css" />
    <!-- Flexslider -->
    
    <!-- PrettyPhoto -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/prettyphoto/css/prettyPhoto.css" />
    <!-- PrettyPhoto -->
        
    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700%7COpen+Sans:400,800italic,800,700italic,700,600italic,400italic,300italic,300,600%7COswald:400,300,700%7CLato:400,900,900italic,700italic,400italic,700,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    
  </head>

  <body>
    

    

	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->



        <?php require_once ("submenu.php") ;?>
            
        
        <!-- SUB-HEADER -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-title-container">
            
            	<div class="pm-sub-header-title-bg">
                
                	<p class="pm-sub-header-title">Store</p>
                	<p class="pm-sub-header-message">get stronger with premium energy products</p>
                
                </div>
                
                <div class="pm-sub-header-breadcrumbs">
                
                	<div class="pm-sub-header-breadcrumb-bg"></div>
                    
                    <div class="pm-sub-header-breadcrumb-list-container">
                    	<ul class="pm-sub-header-breadcrumb-list">
                            <li>Store</li>
                        </ul>
                    </div>
                
                </div>
                
            </div>
        
        </div>
        
 		<!-- SUB-HEADER end -->    
        
        <!-- BODY CONTENT starts here -->
        
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-bottom-30">
        
        	<div class="row">
            
            	<div class="col-lg-12">
                	
                    <ul class="pm-store-filter-system">
                    	<li>
                        	
                        </li>
                        <li>
                        	<div class="pm-dropdown pm-filter-system">
                                <div class="pm-dropmenu">
                                    <p class="pm-menu-title">Default Sorting</p>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="pm-dropmenu-active" style="display: none;">
                                    <ul>
                                       <li><a href="#">Sort by Popularity</a></li>
                                       <li><a href="#">Sort by price: High to Low</a></li>
                                       <li><a href="#">Sort by price: Low to High</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            
            </div>
        
        </div>
        <!-- PANEL 1 end -->
        
       	<!-- PANEL 2 -->
        <div class="container ">
        
        	<div class="row">
            
            	
                	
                    <!-- Products -->
                    
                <?php

                $i = 0;
                $size = sizeOf($item_name);
                for($i;$i < $size; $i++)
                {
                        
                    echo "<div class='col-lg-4 col-md-4 col-sm-12'>
                        
                        <div class='pm-store-item-container'>

                            <p class='pm-store-item-title'>"; echo $item_name[$i];  echo "</p>

                            <div class='pm-store-item-img-container' style='background-image:url(img/store/";echo $image[$i]; echo ");' >

                                <div class='pm-store-item-diamond-shadow'></div>
                                <div class='pm-store-item-diamond'></div>
                                <a class='pm-store-item-diamond-btn fa fa-chevron-up' href='#'></a>	

                                <div class='pm-store-item-add-to-cart-container'>

                                <div class='pm-store-item-add-to-cart-diamond-shadow'></div>
                                <div class='pm-store-item-add-to-cart-diamond'></div>

                                <a href='#' class='pm-store-item-add-to-cart-btn'>Add to cart</a>

                                <div class='pm-store-item-stock-counter'>
                                            <p>"; echo $stock[$i]; echo" in stock</p>
                                        <a href='#' class='pm-store-item-close-btn fa fa-chevron-down'></a>
                                </div>

                            </div>

                            </div>

                            <div class='pm-store-item-desc'>



                                <div class='pm-store-item-divider'>
                                    <div class='pm-store-item-divider-diamond'></div>
                                </div>

                                <p class='pm-store-item-price'> Rs "; echo $price[$i]; echo "</p>

                            </div>

                            <form method='' action=";  echo base_url(); echo "Store/showDetails/$i>
                                <button class = 'pm-square-btn store-btn' id='submit-buttons' type='submit'>View Details</button>
                            </form>    
                            
                        </div>
                    </div>";        
                            
                }

                ?>
                <!-- Product end -->
                
                    
            </div>
        
        </div>
        <!-- PANEL 2 end -->
        
        <!-- PANEL 3 -->
       
        
        <!-- PANEL 3 end -->
        
        
        
        <!-- BODY CONTENT end -->
        <?php
        include_once ("site_footer_content.php");
        include_once ("js_attachments.php");
        ?>
    
    </div><!-- /pm_layout-wrapper -->
    
    <!-- Bootstrap core JavaScript
   
    <!--<p id="back-top" class="visible-lg visible-md visible-sm"> </p>-->
    
  </body>

<!-- Mirrored from projects.pulsarmedia.ca/energy/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:45:10 GMT -->
</html>

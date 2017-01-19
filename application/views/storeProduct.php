<!DOCTYPE html>
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
    

	
    
    	<!-- Sub-Menu -->
    	
        <div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->

        <?php require_once ("submenu.php") ;?>
        
        
                
        <!-- SUB-HEADER -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-title-container store-post">
            
            	<div class="pm-sub-header-title-bg post-title">
                
                	<p class="pm-sub-header-title post-title"><?php echo $item_name[0]  ?></p>
                
                </div>
                
                <div class="pm-sub-header-breadcrumbs">
                
                	<div class="pm-sub-header-breadcrumb-bg"></div>
                    
                    <div class="pm-sub-header-breadcrumb-list-container">
                    	<ul class="pm-sub-header-breadcrumb-list">
                            <li>Home &nbsp; <i class="fa fa-angle-right"></i></li>
                            <li>Store</li>
                        </ul>
                    </div>
                
                </div>
                
            </div>
        
        </div>
        
 		<!-- SUB-HEADER end -->
        
        <!-- BODY CONTENT starts here -->
        
       	<!-- PANEL 1 -->
        <div class="container pm-containerPadding-bottom-80">
        
        	<div class="row">
            
            	<div class="col-lg-12">
                
                	<div class="row">
            
                        <div class="col-lg-12 pm-column-spacing">
                            <div itemprop="breadcrumb" class="woocommerce-breadcrumb pm-woocommerce-breadcrumbs">
                            <p><a href="<?php echo base_url(); ?>" class="home">Home</a></p>
                            <p> / </p>
                            <p><a href="<?php echo base_url(); ?>/store">Store</a></p>
                            <p> / </p>
                            <p><?php echo $item_name[0]  ?></p></div>
                        </div>
                    
                    </div>
                    <!-- /.row -->
                    
                    
                    <div class="row">
                            
                        <div class="col-lg-6 col-md-6 col-sm-6 pm-column-spacing">
                            
                            <div class='pm-store-item-img-container' style='background-image:url(<?php echo base_url(); ?>img/store/<?php echo $image[0] ?>);' >
                                <div class="pm-woocomm-item-sale-tag">Item</div>
                            </div>
                            
                            
                            
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p class="pm-woocom-item-title"><?php echo $item_name[0]  ?></p>
                            <ul id="pm-widget-star-rating-single" class="pm-widget-star-rating">
                            <?php
                            
                                $colorStars = $rating[0];
                                $otherStars = 5-$rating[0];
                                
                                for($i = 0; $i < $colorStars; $i++)
                                {
                                    echo "<li><i class='fa fa-star'></i></li>";
                                }
                                
                                for($i = 0; $i < $otherStars; $i++)
                                {
                                    echo "<li><i class='fa fa-star inactive'></i></li>";
                                }
                   
                            
                            ?>
                            </ul>        
                            <p class="pm-woocom-item-price">Rs <?php echo $price[0]  ?></p>
                            
                            <div class="pm-woocom-item-short-description">
                                <p> <?php echo $discription[0]  ?> </p>
                            </div>
                            
                            <div class="pm-woocom-tags-container">
                                
                                
                            </div>
                            
                            <div class="quantity buttons_added">
                                                        
                            </div><!-- quantity buttons end -->
                        
                            <div class="pm-item-add-to-cart">
                                    <input type="submit" class="pm-woocomm-submit-btn" value="Add to cart" />
                            </div>
                            
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                
                </div><!-- /.col-lg-12 -->
                
            </div>
        
        </div>
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        
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
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!--<p id="back-top" class="visible-lg visible-md visible-sm"> </p>-->
    
  </body>

<!-- Mirrored from projects.pulsarmedia.ca/energy/store-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:45:29 GMT -->
</html>

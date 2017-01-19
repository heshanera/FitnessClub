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
    
  

	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
    
    	
    
    	<!-- Sub-Menu -->
        <?php require_once ("submenu.php") ;?>
        
        <!-- SUB-HEADER -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-title-container">
            
            	<div class="pm-sub-header-title-bg">
                
                	<p class="pm-sub-header-title">Gallery</p>
                	<p class="pm-sub-header-message">feel the energy through our vibrant gallery</p>
                
                </div>
                
                <div class="pm-sub-header-breadcrumbs">
                
                	<div class="pm-sub-header-breadcrumb-bg"></div>
                    
                    <div class="pm-sub-header-breadcrumb-list-container">
                    	<ul class="pm-sub-header-breadcrumb-list">
                            <li>Gallery</li>
                        </ul>
                    </div>
                
                </div>
                
            </div>
        
        </div>
        
        <!-- BODY CONTENT starts here -->
        
       	<!-- PANEL 1 -->
<!--        <div class="container pm-containerPadding-bottom-60">-->
<!--        -->
<!--        	<div class="row">-->
<!--            	<div class="col-lg-12">-->
<!--                	-->
<!--                    <ul class="pm-isotope-filter-system">-->
<!--                    	<li class="pm-isotope-filter-system-expand">Currently viewing <i class="fa fa-angle-down"></i>-->
<!--                        </li>-->
<!--                    	<li><a href="#">All</a></li>-->
<!--                        <li><a href="#">Fitness</a></li>-->
<!--                        <li><a href="#">Exercise</a></li>-->
<!--                        <li><a href="#">Equipment</a></li>-->
<!--                        <li><a href="#">Cardio</a></li>-->
<!--                    </ul>-->
<!--                    -->
<!--                </div>-->
<!--            </div>-->
<!--        -->
<!--        </div>-->
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        <div class="container pm-containerPadding-bottom-60">
        
        	<div class="row">
                <?php
                $conn = null;
                try{
                    $conn = mysqli_connect("heysulo.cwzrfls5iwit.us-west-2.rds.amazonaws.com","heysulo","H3LL0W1F1","fitnessclub");
                }catch (mysqli_sql_exception $e){
                    echo "Error occured";
                    die();
                }

                if ($conn == null) {
                    echo "Error occured";
                    die();
                }
                $sql = "SELECT * FROM gallery_items WHERE publish=1;";
                $res = mysqli_query($conn,$sql);
                $count = 1;
                while ($row_qt =  mysqli_fetch_assoc($res)){


                ?>

                <div class="col-lg-4 col-md-6 col-sm-12">

                    <div class="pm-gallery-post-container" style="background-image:url(<?php echo base_url(); ?>assets/img/gallery/<?php echo $row_qt['image'];?>);">

                        <div class="pm-gallery-post-title-container">
                            <p><?php echo $row_qt['title']?></p>
                            <a href="#" class="pm-expand-gallery-post fa fa-expand"></a>
                        </div>

<!--                        <div class="pm-gallery-post-like-diamond-shadow"></div>-->
<!--                        <div class="pm-gallery-post-like-diamond"></div>-->
                        <a href="#" class="pm-gallery-post-like-btn fa fa-thumbs-up"></a>
<!--                        <div class="pm-gallery-post-like-counter">-->
<!--                            <span>16</span>-->
<!--                        </div>-->

                        <div class="pm-gallery-post-gradient"></div>

                        <div class="pm-gallery-post-details">

                            <div class="pm-gallery-post-details-excerpt">

                                <p><?php echo $row_qt['description']?><p>
                            </div>

                            <div class="pm-gallery-post-details-diamond-shadow"></div>
                            <div class="pm-gallery-post-details-diamond"></div>
                            <a href="<?php echo base_url(); ?>assets/img/gallery/<?php echo $row_qt['image'];?>" data-rel="prettyPhoto[gallery]" class="pm-gallery-post-view-btn fa fa-camera expand lightbox"></a>

                            <ul class="pm-gallery-post-details-actions">
                                <li>
                                    <a href="#" class="pm-gallery-post-close fa fa-chevron-left"></a>
                                </li>
                                <li><a href="#" class="pm-gallery-post-view-more">View post</a></li>
                            </ul>

                        </div>

                    </div>
                </div>

                <?php }?>
                
            </div>
        
        </div>
        <!-- PANEL 2 end -->
        
        <!-- PANEL 3 -->
        <div class="container pm-containerPadding-bottom-80">
        
        	<div class="row">
            
            	<div class="col-lg-12">
                	
                    <ul class="pm-post-loaded-info">
                    	<li>
                        	<p>viewing 4 of 19</p>
                        </li>
                        <li>
                        	<a href="#">Load more &nbsp; <i class="fa fa-cloud-download"></i></a>
                        </li>
                    </ul>
                    
                </div>
            
            </div>
        
        </div>
        <!-- PANEL 3 end -->
        
        
        <!-- BODY CONTENT end -->
        <?php
        include_once ("site_footer_content.php");
        include_once ("js_attachments.php");
        ?>
  </body>

<!-- Mirrored from projects.pulsarmedia.ca/energy/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:45:04 GMT -->
</html>

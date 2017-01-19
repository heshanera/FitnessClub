
<div class="pm-fat-footer pm-parallax-panel" data-stellar-background-ratio="0.5">

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

                <p class="pm-fat-footer-sub-title">stay up to date</p>
                <h6 class="pm-fat-footer-title">subscribe to our newsletter</h6>
                <div class="pm-fat-footer-title-divider"></div>

                <p>Receive weekly e-mail notifications from Energy Fitness and stay up to date on news, events and specials classes.</p>

                <br />

                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                    <input name="MERGE1" type="text" class="pm-mailchimp-field reset-pulse-sizing" id="MERGE1" placeholder="first name">

                    <input name="MERGE0" type="email" class="pm-mailchimp-field reset-pulse-sizing" id="MERGE0" placeholder="email address">

                    <input name="subscribe" id="mc-embedded-subscribe" type="submit" value="subscribe" class="pm-mailchimp-submit">

                </form>

                <p class="pm-center"><a href="#">Click here</a> to unsubscribe</p>

            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

                <p class="pm-fat-footer-sub-title">follow @energyfitness</p>
                <h6 class="pm-fat-footer-title">our latest tweets</h6>
                <div class="pm-fat-footer-title-divider"></div>

                <div id="pm-twitter-news" class="pm-tweet-list"></div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">

                <p class="pm-fat-footer-sub-title">fueling the fire</p>
                <h6 class="pm-fat-footer-title">latest from our gallery</h6>
                <div class="pm-fat-footer-title-divider"></div>

                <ul class="pm-gallery-widget-items">
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
                    $sql = "SELECT * FROM gallery_items WHERE publish=1 LIMIT 4;";
                    $res = mysqli_query($conn,$sql);
                    $count = 1;
                    while ($row_qt =  mysqli_fetch_assoc($res)){

                    ?>
                    <li style="background-image:url(<?php echo base_url(); ?>assets/img/gallery/<?php echo $row_qt['image'];?>);">
                        <a href="<?php echo base_url(); ?>assets/img/gallery/<?php echo $row_qt['image'];?>" data-rel="prettyPhoto[gallery-widget]" class="pm-gallery-widget-item-expand fa fa-expand expand lightbox"></a>
                    </li>
                    <?php } ?>
                </ul>

                <br />

                <p class="pm-right-align"><a href="gallery" class="pm-gallery-widget-view-more">View Gallery &nbsp;<i class="fa fa-angle-right"></i></a></p>

            </div>
        </div>
    </div>

</div>

<footer>


    <div class="pm-footer-triangle-data">


        <ul class="pm-footer-social-icons">
            <li title="Twitter" class="pm_tip_static_top tw">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li title="Facebook" class="pm_tip_static_top fb">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li title="Google Plus" class="pm_tip_static_top gp">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li title="Linkedin" class="pm_tip_static_top linked">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li title="YouTube" class="pm_tip_static_top yt">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </li>
            <li title="StumbleUpon" class="pm_tip_static_top st">
                <div class="pm-social-icon-diamond"></div>
                <a href="#"><i class="fa fa-stumbleupon"></i></a>
            </li>
        </ul>
        <h6>Connect with us!</h6>

        <a class="fa fa-chevron-up" id="pm-back-to-top"></a>

    </div>


</footer>

<div class="pm-footer-copyright">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 pm-footer-copyright-col">
                <a href=""><img src="<?php echo base_url(); ?>img/energy-fitness.png" class="img-responsive pm-header-logo" alt="Energy Fitness Studio"></a>
                <p>© 2014 Energy - Designed &amp; Developed by <a href="www.pulsarmedia.ca/" target="_blank">Pulsar Media</a></p>
            </div>
        </div>
    </div>

</div>
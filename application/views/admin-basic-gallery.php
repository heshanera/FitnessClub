<!DOCTYPE html>
<html>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:53 GMT -->
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

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/magnific/magnific-popup.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">


    <!-- Favicon -->

    <!--    <script src="--><?php //echo base_url(); ?><!--/bootstrap3/js/bootstrap.min.js"></script>-->
    <!--    <link href="--><?php //echo base_url(); ?><!--/bootstrap3/css/bootstrap.css" rel="stylesheet">-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="basic-gallery">


<!-- Body Wrap -->
<div id="main">

    <!-- Header  -->
        <?php require_once ("adminheader.php"); ?>
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
                    <li class="breadcrumb-current-item">Gallery</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->
        <?php if($paramater == "success"){?>
                <div class="alert alert-success">
                    <strong>Success!</strong> The new gallery item added to the system.
                </div>
        <?php }elseif($paramater == "error"){?>
                <div class="alert alert-danger">
                    <strong>Failed!</strong> Unable to add the new gallery item added to the system.
                </div>
        <?php }?>

        <section id="content" class="table-layout animated fadeIn">

            <div class="chute chute-center">

                <div class="mh15 pv15 br-b br-light">
                    <div class="row">
                        <div class="col-sm-7 col-xs-11">
                            <button type="button" class="btn btn-ls btn-primary" data-toggle="modal" data-target="#myModal">Add New Gallery Item</button>



                        </div>
                        <div class="col-sm-5 col-xs-11 ta-l-xs text-right">

                            <div class="btn-group mb5">
                                <button type="button" class="btn btn-default to-grid">
                                    <span class="fa fa-th"></span>
                                </button>
                                <button type="button" class="btn btn-default to-list">
                                    <span class="fa fa-navicon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mixitup-controls hidden">
                        <form class="controls allcp-form" id="checkbox-filters">

                            <fieldset class="">
                                <h4>Cars</h4>

                                <label class="option block mt10">
                                    <input type="checkbox" value=".circle">
                                    <span class="checkbox"></span>Circle
                                </label>

                            </fieldset>

                            <button id="mixitup-reset2">Clear All</button>
                        </form>

                    </div>
                </div>

                <div id="mixitup-container">

                    <div class="filter-error-message">
                        <span>No items were found matching the selected filters</span>
                    </div>

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
                    $sql = "SELECT * FROM gallery_items;";
                    $res = mysqli_query($conn,$sql);
                    $count = 1;
                    while ($row_qt =  mysqli_fetch_assoc($res)){


                    ?>

                    <div class="mix label<?php echo $count%3+1;?> folder<?php echo $count%3+1;?>">
                        <div class="panel p6 pbn">
                            <div class="of-h">
                                <img src="<?php echo base_url(); ?>assets/img/gallery/<?php echo $row_qt['image'];?>" class="img-responsive" alt="" title="img_1.jpg">


                                <div class="row table-layout">
                                    <div class="col-xs-8 va-m pln">
                                        <h6><?php echo $row_qt['title']; ?></h6>
                                    </div>
                                    <div class="col-xs-4 text-right va-m prn">
                                        <span class="fa fa-circle fs10 text-info ml10"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="of-h">
                                <div class="form-group">
                                    <input type="checkbox" <?php if($row_qt['publish']==1){echo "checked";}?> id="chk_<?php echo $row_qt['gallery_item_id']; ?>" onclick="publish(<?php echo $row_qt['gallery_item_id']; ?>);">
                                    <div style="font-size: 12px;">Publish this item.</div>
                                </div>

                                <button type="button" style="width: 100%" class="btn btn-xs btn-danger" onclick="drop(<?php echo $row_qt['gallery_item_id']; ?>);">Delete</button>
                            </div>

                        </div>
                    </div>

                    <?php } ?>



                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>

                </div>

            </div>

        </section>

    </section>


</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- HighCharts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Mixitup -->
<script src="<?php echo base_url(); ?>assets/js/plugins/mixitup/jquery.mixitup.min.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url(); ?>assets/js/plugins/magnific/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/fileupload/fileupload.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/holder/holder.min.js"></script>

<!-- Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/widgets_sidebar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/basic-gallery.js"></script>


<!-- /Scripts -->

<div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Gallery Item</h4>
                </div>
                <div class="modal-body" >
                    <form id="frmnewitem" method="post" action="<?php echo base_url(); ?>index.php/welcome/submitgalleryitem" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-lg-4">
                                <div style="position: absolute;top: 10px;left: 30px;color: red">
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg" required>
                                </div>
                                <img class="img-thumbnail" src="http://www.w3schools.com/bootstrap/paris.jpg" style="background-color: #c3c3c3;width: 100%;height: 250px;">
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="usr">Title:</label>
                                    <input type="text" class="form-control" maxlength="40" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Description:</label>
                                    <textarea class="form-control" maxlength="1000" name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="publish" checked >Publish
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-md">Add New Item</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function publish(x) {
        var chk = document.getElementById("chk_"+x);
        var d = 0;
        if (chk.checked){
            d = 1;
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText !="success"){
                    chk.checked = !chk.checked;
                    alert("Failed to set value : " +  this.responseText );
                }
            }
        };
        xhttp.open("POST", "modifysettings/publish/"+x+"/"+d, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }

    function drop(x) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText !="success"){
                    alert("Failed to set value : "  +  this.responseText );
                }else{
                    location.reload();
                }
            }
        };
        xhttp.open("POST", "modifysettings/drop/"+x, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }


</script>
</body>


<!-- Mirrored from myadmin-html.axiomthemes.com/basic-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 11:37:55 GMT -->
</html>

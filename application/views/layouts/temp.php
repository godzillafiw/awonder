<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="<?=$this->config->item('site_author')?>">
        <meta name="keyword" content="<?=$this->config->item('site_keyword')?>">
        <meta name="description" content="<?=$this->config->item('site_desc')?>">
        <meta name="robots" content="all">

        <title><?php  echo $template['title'];?></title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/bootstrap.min.css">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/dark-green.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/animate.min.css">
        <link href="<?php echo base_url()?>assets/front/css/green.css" rel="alternate stylesheet" title="Green color">
        <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/front/css/font-awesome.min.css">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/front/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
       <style media="screen">
            body{
            font-family: 'Kanit', sans-serif;
            }
        </style>
    </head>
<body>
    
    <div class="wrapper">
        <?php  echo modules::run('sidebar/top_menubar'); ?>

        <?php  echo modules::run('sidebar/header'); ?>

        <?php  echo modules::run('sidebar/breadcrumb'); ?>

        <?php  echo $template['body'];?>

        <?php  echo modules::run('sidebar/footer'); ?>
        
    </div><!-- /.wrapper -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/front/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?php echo base_url()?>assets/front/js/gmap3.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/css_browser_selector.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/echo.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.raty.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.prettyPhoto.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/scripts.js"></script>
    
    <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>

</body>
</html>
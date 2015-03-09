<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Theme Starz">

        <link href='assets/css/css.css' rel='stylesheet' type='text/css'>
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <title>FoneBox USA Pte. Ltd.</title>
        <link rel="shortcut icon" href="favicon.ico">
        
        <script src="assets/js/jquery-2.1.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        <script>
        $(function(){
            $(".switch").on('click' , function(){
                if( $(this).find("i").hasClass('fa-arrow-right') ){
                $(this).find("i").removeClass('fa-arrow-right').addClass('fa-arrow-down');
                 $(this).find(".point_body").removeClass('hide');
                }else{
                $(this).find("i").removeClass('fa-arrow-down').addClass('fa-arrow-right');
                $(this).find(".point_body").addClass('hide');
                }
            });
        });
        </script>
        
<!--        <script>
        $(function(){
            $(".date").on('click' , function(){
                if( $(".point_body").hasClass('hide') ){
                $(this).removeClass('hide');

                }else{
                $(this).addClass('hide');
                }
            });
        });
        </script>-->
    <script>
    var num = 50; //number of pixels before modifying styles
    
    
    $(function(){
        $('.top_menu_container').data('size','big');
    });

    $(window).scroll(function(){
        var $nav = $('.top_menu_container');
        var $nav_img = $('.nav_img');
        if ($('body').scrollTop() > 8) {
            if ($nav.data('size') == 'big') {
                $nav.data('size','small').stop().animate({
                    height:'60px'
                }, 600);
                $nav_img.stop().animate({
                    height:'40px'
                }, 600);
            }
        } else {
            if ($nav.data('size') == 'small') {
                $nav.data('size','big').stop().animate({
                    height:'100px'
                }, 600);
                $nav_img.stop().animate({
                    height:'75px'
                }, 600);
            }  
        }
    });
    
    
    

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});
    </script>
    </head>

    <body class="page-sub-page page-microsite">
        <!-- Header -->
        <div class="navigation-wrapper">
<!--            <div id="fixed_header">
            <div class="branding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <a href="index.php"><img class="img-responsive" src="assets/img/logo.png" alt="brand"></a>
                        </div>
                        <div class="col-md-offset-5 col-md-3 col-xs-9">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-1 col-xs-3">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-8 col-md-4 col-xs-12">
                            &nbsp;
                            <div class="text_color_black opacity-90 mt_no" style="margin-top: -15px;">Call Us:  <span class="opacity-70">+65 6702 4466</span></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>-->
            
            
            
            
            
            
            
            <div class="top_menu_container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <a href="index.php"><img class="img-responsive nav_img" src="assets/img/logo.png" alt="brand"></a>
                    </div>
                    <div class="col-md-5 col-xs-9">
                        <div class="pull-right">Call Us: +65 6702 4466</div>
                    </div>
                    <div class="col-md-3 col-xs-9">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            
<div class="padding_100p"></div>
            
            
            
            
            
            
            <!--<div class="Padding_top"></div>-->
            <div class="primary-navigation-wrapper">
                <header class="navbar" id="top" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php require_once('navigation.php'); ?>
                        <div class="social">
                            <div class="menu_icons">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/foneboxusa" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- end Header -->
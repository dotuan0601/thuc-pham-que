<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$assets_url = 'resources/assets/';
?>

        <!DOCTYPE HTML>
<html>
<head>
    <title>The Aditii Website Template | Contact :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo $assets_url;?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo $assets_url;?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo $assets_url;?>css/app.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="<?php echo $assets_url;?>js/jquery.min.js"></script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="<?php echo $assets_url;?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/angular.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/angular-route.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/agence/module.js"></script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/agence/service.js"></script>
    <script type="text/javascript" src="<?php echo $assets_url;?>js/agence/controller.js"></script>
</head>
<body ng-app="agenceModule">
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="<?php echo $assets_url;?>images/logo.png" alt=""/> </a>
            </div>
            <div class="h_icon">
                <ul class="icon1 sub-icon1">
                    <li><a class="active-icon c1" href="#"><i>$300</i></a>
                        <ul class="sub-icon1 list">
                            <li><h3>shopping cart empty</h3><a href=""></a></li>
                            <li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view
                                    them</p></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="h_search">
                <form>
                    <input type="text" value="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="index.html">Trang chủ</a></li>
                    |
                    <li><a href="contact.html">Liên hệ</a></li>
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                        <li class="nav-item"><a href="sale.html">Sale</a></li>
                        <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                        <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                        <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                        <li class="nav-item"><a href="service.html">Services</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
                <script src="<?php echo $assets_url;?>js/responsive.menu.js"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg" ng-view>

</div>
<!-- start footer -->
<div class="footer_bg">
    <div class="wrap">
        <div class="footer">
            <!-- start grids_of_4 -->
            <div class="grids_of_4">
                <div class="grid1_of_4">
                    <h4>featured sale</h4>
                    <ul class="f_nav">
                        <li><a href="">alexis Hudson</a></li>
                        <li><a href="">american apparel</a></li>
                        <li><a href="">ben sherman</a></li>
                        <li><a href="">big buddha</a></li>
                        <li><a href="">channel</a></li>
                        <li><a href="">christian audigier</a></li>
                        <li><a href="">coach</a></li>
                        <li><a href="">cole haan</a></li>
                    </ul>
                </div>
                <div class="grid1_of_4">
                    <h4>mens store</h4>
                    <ul class="f_nav">
                        <li><a href="">alexis Hudson</a></li>
                        <li><a href="">american apparel</a></li>
                        <li><a href="">ben sherman</a></li>
                        <li><a href="">big buddha</a></li>
                        <li><a href="">channel</a></li>
                        <li><a href="">christian audigier</a></li>
                        <li><a href="">coach</a></li>
                        <li><a href="">cole haan</a></li>
                    </ul>
                </div>
                <div class="grid1_of_4">
                    <h4>women store</h4>
                    <ul class="f_nav">
                        <li><a href="">alexis Hudson</a></li>
                        <li><a href="">american apparel</a></li>
                        <li><a href="">ben sherman</a></li>
                        <li><a href="">big buddha</a></li>
                        <li><a href="">channel</a></li>
                        <li><a href="">christian audigier</a></li>
                        <li><a href="">coach</a></li>
                        <li><a href="">cole haan</a></li>
                    </ul>
                </div>
                <div class="grid1_of_4">
                    <h4>quick links</h4>
                    <ul class="f_nav">
                        <li><a href="">alexis Hudson</a></li>
                        <li><a href="">american apparel</a></li>
                        <li><a href="">ben sherman</a></li>
                        <li><a href="">big buddha</a></li>
                        <li><a href="">channel</a></li>
                        <li><a href="">christian audigier</a></li>
                        <li><a href="">coach</a></li>
                        <li><a href="">cole haan</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!-- start footer -->
<div class="footer_bg1">
    <div class="wrap">
        <div class="footer">
            <!-- scroll_top_btn -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };


                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
            <!--end scroll_top_btn -->
            <div class="copy">
                <p class="link">&copy; All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/">
                        W3Layouts</a></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
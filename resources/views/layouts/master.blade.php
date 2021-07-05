
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="/assets/mytemplate/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/assets/mytemplate/css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="/assets/mytemplate/css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/assets/mytemplate/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/assets/mytemplate/css/magnific-popup.css">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="/assets/mytemplate/css/bootstrap-datetimepicker.min.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="/assets/mytemplate/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/mytemplate/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/assets/mytemplate/css/style.css">

    <!-- Modernizr JS -->
    <script src="/assets/mytemplate/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/assets/mytemplate/js/respond.min.js"></script>
    <![endif]-->
@yield('css')
</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation" style="background-color: #0b0b0b">
        <div class="gtco-container">

            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.html">Lash Extension <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="menu.html">About Me</a></li>
                        <li><a href="menu.html">Gallery</a></li>
                        <li class="has-dropdown">
                            <a href="services.html">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Hybrid</a></li>
                                <li><a href="#">Volume</a></li>
                                <li><a href="#">Mega volume</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>


@yield('home_header')


    <div class="gtco-section">
        <div class="gtco-container">
            @yield('content')
        </div>
    </div>

    @yield('home_footer')

    <footer id="gtco-footer" role="contentinfo" style="background-image: url(/assets/mytemplate/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">




                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Get Social</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
                </div>

            </div>



        </div>
    </footer>
    <!-- </div> -->

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="/assets/mytemplate/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/assets/mytemplate/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/assets/mytemplate/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/assets/mytemplate/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="/assets/mytemplate/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="/assets/mytemplate/js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="/assets/mytemplate/js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="/assets/mytemplate/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/mytemplate/js/magnific-popup-options.js"></script>

<script src="/assets/mytemplate/js/moment.min.js"></script>
<script src="/assets/mytemplate/js/bootstrap-datetimepicker.min.js"></script>


<!-- Main -->
<script src="/assets/mytemplate/js/main.js"></script>
@yield('js')
</body>
</html>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- META -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:title" itemprop="headline" content="Elsvan" />
        <meta property="og:description" itemprop="description" content="Zhimpa Tattoo ha estado ofreciendo trabajos de calidad desde el 2002.
Contamos con artistas con la experiencia necesaria para garantizar la seguridad a todos nuestros clientes." />
        <meta property="og:keywords" itemprop="keywords" content="zhimpa, tattos, tatuajes, piercing">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta property="og:image" itemprop="image" content="/assets/img/logo/logo-min.png" />
        <meta property="og:url" itemprop="url" content="https://www.elsvan.pe/" />
        <!-- FB -->
        <meta property="fb:app_id" content="" />
        <meta property="fb:admins" content="" />
        <meta property="fb:pages" content="" /> 
        <meta name="lang" content="es" itemprop="inLanguage" />
        <base href="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Zhimpa Tattoo ha estado ofreciendo trabajos de calidad desde el 2002.
Contamos con artistas con la experiencia necesaria para garantizar la seguridad a todos nuestros clientes.">
        <meta name="keywords" content="zhimpa, tattos, tatuajes, piercing">
        <meta name="news_keywords" content="zhimpa, tattos, tatuajes, piercing">
        <meta name="author" content="Ing. Juan Carlos Torres del Castillo">
        <!-- APPLE -->
        <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
        <!-- Google -->
        <link rel="icon" type="image/png" sizes="192x192" href="/icon/favicon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">

        <link href="/assets/img/logo/logo-min.png" rel="icon" type="image/x-icon"> 

    <!-- Fonts -->
    <?php
        $version = '1993.2.19';
    ?>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--CSS-->
    
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?v=<?php echo $version ?>">
    <link rel="stylesheet" href="{{asset('assets/css/propios.css')}}?v=<?php echo $version ?>">

    @stack('css')

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="{{asset('assets/img/logo/logo-min.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>     
        @include('layouts.header')
        <main class="">
            
            @yield('content')
            @include('layouts.whatsapp')
            

        </main>
        @include('layouts.footer')
            <!-- Scroll Up -->
            <div id="back-top" >
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>
       
        <!-- JS here -->

        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Date Picker -->
        <script src="{{asset('assets/js/gijgo.min.js')}}"></script>
        <!-- Nice-select, sticky -->
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        
        <!-- counter , waypoint,Hover Direction -->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/hover-direction-snake.min.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('assets/js/contact.js')}}"></script>
        <script src="{{asset('assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script src="{{asset('assets/js/propios.js')}}"></script>
        @stack('javascript')
</body>
</html>

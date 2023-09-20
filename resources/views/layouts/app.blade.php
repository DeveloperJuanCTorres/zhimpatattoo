<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <?php
        $version = '1993.1.3';
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
                        <img src="assets/img/logo/logo-min.png" alt="">
                    </div>
                </div>
            </div>
        </div>     
        @include('layouts.header')
        <main class="">
            
            @yield('content')
            

        </main>
        @include('layouts.footer')
            <!-- Scroll Up -->
            <div id="back-top" >
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
            </div>
       
        <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- counter , waypoint,Hover Direction -->
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>
        <script src="./assets/js/jquery.countdown.min.js"></script>
        <script src="./assets/js/hover-direction-snake.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        @stack('javascript')
</body>
</html>

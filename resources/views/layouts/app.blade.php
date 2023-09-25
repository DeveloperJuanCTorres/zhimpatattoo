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
        $version = '1993.2.8';
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

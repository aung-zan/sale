<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
    <title>Resale a Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <!-- //css -->

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- //for-mobile-apps -->
</head>
<body>

    <!-- header section start -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('users.home') }}"><span>Re</span>sale</a>
                </div>
                <div class="header-right">

                <a class="account" href="login.html">My Account</a>
                <span class="active uls-trigger">Select language</span>
            </div>
        </div>
    <!-- header section end -->

    <!-- content section start -->
        <section>
            @yield('content')
        </section>
    <!-- content section end -->

    <!--footer section start-->
        <footer class="diff">
           <p class="text-center">&copy 2016 Resale. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
        </footer>
    <!--footer section end-->

    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- js -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.leanModal.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easyResponsiveTabs.js') }}"></script>

    <link href="{{ asset('css/jquery.uls.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/jquery.uls.grid.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/jquery.uls.lcd.css') }}" rel="stylesheet"/>

    <!-- Source -->
    <script src="{{ asset('js/jquery.uls.data.js') }}"></script>
    <script src="{{ asset('js/jquery.uls.data.utils.js') }}"></script>
    <script src="{{ asset('js/jquery.uls.lcd.js') }}"></script>
    <script src="{{ asset('js/jquery.uls.languagefilter.js') }}"></script>
    <script src="{{ asset('js/jquery.uls.regionfilter.js') }}"></script>
    <script src="{{ asset('js/jquery.uls.core.js') }}"></script>
</body>
</html>
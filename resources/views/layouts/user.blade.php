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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/easy-responsive-tabs.css') }}" />
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

                <a class="account" href="{{ route('users.loginForm') }}">My Account</a>
                <span class="active uls-trigger">Select language</span>

                <!-- modal -->
                <div class="selectregion">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Select Your Region</button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        Please Choose Your Location
                                    </h4>
                                </div>

                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <select id="basic2" class="show-tick form-control" multiple id="basic2">
                                                <optgroup label="Popular Cities">
                                                    <option selected style="display:none;color:#eee;">Select City</option>
                                                    <option>Birmingham</option>
                                                    <option>Phoenix</option>
                                                    <option>Los Angeles</option>
                                                    <option>Jacksonville</option>
                                                    <option>Atlanta</option>
                                                    <option>Honolulu</option>
                                                    <option>Chicago</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!-- header section end -->

    <!-- content section start -->
        <div class="banner text-center">
            <div class="container">
                <h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a href="post-ad.html">Post Free Ad</a>
            </div>
        </div>

        <div class="categories-section main-grid-border">
            <div class="container">
                <h2 class="head">Main Categories</h2>
                <div class="category-list">
                    <div id="parentVerticalTab">

                        <ul class="resp-tabs-list hor_1">
                            <li>Profile</li>
                            <li>Product</li>
                        </ul>

                        <div class="resp-tabs-container hor_1">
                            @yield('content')
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- content section end -->

    <!--footer section start-->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="foo-grids">
                        <div class="col-md-3 footer-grid">
                            <h4 class="footer-head">Who We Are</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
                        </div>
                        <div class="col-md-3 footer-grid">
                            <h4 class="footer-head">Help</h4>
                            <ul>
                                <li><a href="howitworks.html">How it Works</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="feedback.html">Feedback</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="typography.html">Shortcodes</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 footer-grid">
                            <h4 class="footer-head">Information</h4>
                            <ul>
                                <li><a href="regions.html">Locations Map</a></li>
                                <li><a href="terms.html">Terms of Use</a></li>
                                <li><a href="popular-search.html">Popular searches</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 footer-grid">
                            <h4 class="footer-head">Contact Us</h4>
                            <span class="hq">Our headquarters</span>
                            <address>
                                <ul class="location">
                                    <li><span class="glyphicon glyphicon-map-marker"></span></li>
                                    <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                                    <div class="clearfix"></div>
                                </ul>
                                <ul class="location">
                                    <li><span class="glyphicon glyphicon-earphone"></span></li>
                                    <li>+0 561 111 235</li>
                                    <div class="clearfix"></div>
                                </ul>
                                <ul class="location">
                                    <li><span class="glyphicon glyphicon-envelope"></span></li>
                                    <li><a href="mailto:info@example.com">mail@example.com</a></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </address>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="footer-logo">
                        <a href="index.html"><span>Re</span>sale</a>
                    </div>
                    <div class="footer-social-icons">
                        <ul>
                            <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                            <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                            <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                            <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                            <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
                        </ul>
                    </div>
                    <div class="copyrights">
                        <p> © 2016 Resale. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
                    </div>
                <div class="clearfix"></div>
            </div>
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
    <script src="{{ asset('js/easyResponsiveTabs.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Salesprof">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    {{-- <title>Sales Prof</title> --}}
    @yield('title')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                    <ul class="header-info d-inline-block">
                        <li><a href="#"><i class="fas fa-phone"></i>+234-7038295419, +234-9058483487
                            </a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>mickey64all@gmail.com</a></li>
                        {{-- <li><a href="#"><i class="fas fa-question"></i>Ask Your Question</a></li> --}}
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                    <ul class="header-social d-inline-block">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        {{-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> --}}
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= -->

    <!-- Start: Navigation
    ============================= -->
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="index-2.html">
                                <img class="responsive" src="{{ asset('img/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                    @if ($name == "home")
                                        <li class="active"><a href="/">Home</a></li>                                      
                                    @else
                                        <li><a href="/">Home</a></li> 
                                    @endif

                                    @if ($name == "about")
                                    <li class="active"><a href="/about-us">About Us</a></li>                                   
                                    @else
                                    <li><a href="/about-us">About Us</a></li>
                                    @endif

                                    @if ($name == "service")
                                    <li class="active"><a href="/our-services">Our Services</a></li>                                
                                    @else
                                    <li><a href="/our-services">Our Services</a></li>
                                    @endif

                                    @if ($name == "train")
                                    <li class="active"><a href="/our-trainings">Training</a></li>                                      
                                    @else
                                    <li><a href="/our-trainings">Training</a></li>
                                    @endif

                                    @if ($name == "contact")
                                    <li class="active"><a href="/contact-us">Contact</a></li>                                 
                                    @else
                                    <li><a href="/contact-us">Contact</a></li>
                                    @endif                                     
                            </ul>
                        </nav>
                        {{-- <ul class="header-right-bar d-lg-inline-block d-none">
                            <li class="search-button">
                                <a class="" href="#search"><i class="fas fa-search"></i></a>
                            </li>
                            <li>
                                <a class="quote-btn boxed-btn" href="#">Get a Quote</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                            @if ($name == "home")
                                            <li class="active"><a href="/">Home</a></li>                                      
                                        @else
                                            <li><a href="/">Home</a></li> 
                                        @endif
    
                                        @if ($name == "about")
                                        <li class="active"><a href="/about-us">About Us</a></li>                                   
                                        @else
                                        <li><a href="/about-us">About Us</a></li>
                                        @endif
    
                                        @if ($name == "service")
                                        <li class="active"><a href="/our-services">Our Services</a></li>                                
                                        @else
                                        <li><a href="/our-services">Our Services</a></li>
                                        @endif
    
                                        @if ($name == "train")
                                        <li class="active"><a href="/our-trainings">Training</a></li>                                      
                                        @else
                                        <li><a href="/our-trainings">Training</a></li>
                                        @endif
    
                                        @if ($name == "contact")
                                        <li class="active"><a href="/contact-us">Contact</a></li>                                 
                                        @else
                                        <li><a href="/contact-us">Contact</a></li>
                                        @endif  
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>        
    </section>
    <!-- End: Navigation
    ============================= -->

    @yield('content')

    <!-- Start: Footer Sidebar
    ============================= -->
    <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo">
                            <img src="{{ asset('img/logo.png') }}" alt="logo">
                        </div>
                        <p>SALESPROF is a company registered as a wholly for services such as Sales and Marketing Management, Sales Promotion, Distribution and Consultancy.</p>
                        <ul class="widget-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>                        
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>                        
                    </aside>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                                <li class="active">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/our-services">Our Services</a></li>
                                    <li><a href="/our-trainings">Training</a></li>
                                    <li><a href="/contact-us">Contact</a></li>
                        </ul>
                    </aside>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-4">
                    <aside class="widget widget_recent">
                        <h4 class="widget-title">Latest News</h4>
                        <ul>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="{{ asset('img/news-widget/news-widget-01.jpg') }}">
                                    <h5>Top Energy Trend Business</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="{{ asset('img/news-widget/news-widget-02.jpg') }}">
                                    <h5>Chief Financial Officer Role</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                    <img src="{{ asset('img/news-widget/news-widget-03.jpg') }}">
                                    <h5>Our to Sustainability Team</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div> --}}
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <aside class="widget widget_contact">
                        <h4 class="widget-title">Contact information</h4>
                        <ul>
                            <li><i class="fas fa-map-marker"></i>6B, ATLANTIC BOULEVARD OCEAN BAY ESTATE, 
                                OFF ORCHID HOTEL ROAD, 
                                LEKKI, 
                                LAGOS.
                                </li>
                            <li><i class="fas fa-envelope"></i>mickey64all@gmail.com</li>
                            <li><i class="fas fa-phone"></i>+234-7038295419, +234-9058483487</li>
                        </ul>
                        {{-- <form class="#" action="#">
                            <input type="text" placeholder="Enter your email">
                            <button class="subscribe-btn boxed-btn" type="submit">Subscribe</button>
                        </form> --}}
                    </aside>
                </div>
            </div>

        </div>
    </footer>
    <!-- End: Footer Sidebar
    ============================= -->

    <!-- Start: Footer Copyright
    ============================= -->

    <section id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights © 2018 All Rights Reserved, Softprof.</p></div>
                {{-- <div class="col-lg-6 col-12">
                    <ul class="text-lg-right text-center payment-method">
                        <li><a href="#"><i class="fab fa-paypal"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-amazon-pay"></i></a></li>
                    </ul>
                    <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- End: Footer Copyright
    ============================= -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>

    <!-- Smooth Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    
    <!-- Map Script -->
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script>
 -->
    <!-- Custom Script -->
    <script src="{{ asset('js/custom.js') }}"></script>
    
</body>

</html>
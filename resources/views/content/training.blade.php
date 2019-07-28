@extends('layouts.user')

@section('content')


    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Portfolio Three Column</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: Portfolio 3 Column
    ============================= -->
 
    <section id="portfolio" class="section-padding project-masonary portfolio-page">
        <div class="container">

            <div class="row project-tab">
                <div class="col-md-12">
                    <ul class="project-tab-sorting sorting-btn" id="filter">
                        <li><a href="#" data-group="Show All" class="active"><i class="fas fa-align-justify"></i>All Business</a></li>
                        <li><a href="#" data-group="Corporate"><i class="fab fa-renren"></i>Corporate</a></li>
                        <li><a href="#" data-group="Insurance"><i class="fab fa-codepen"></i>Insurance</a></li>
                        <li><a href="#" data-group="Agency"><i class="fab fa-joget"></i>Agency</a></li>
                        <li><a href="#" data-group="More"><i class="fas fa-euro-sign"></i>Finance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row project" id="grid">
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-01.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-01.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">About Creative Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-12.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-12.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Customer Insights Jobs</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Agency", "Finance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-02.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-02.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Sustainability Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-03.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-03.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-04.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-04.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Ideas to Improve Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-05.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-05.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Customer Insights Jobs</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-06.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-06.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-07.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-07.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-08.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-08.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-09.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-09.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-10.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-10.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-11.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-11.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="portfolio-pagination" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End: Portfolio
    ============================= -->

    <!-- Start: Excluesive
    ============================= -->
    <section id="exclusive" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Excluesive Portfolio <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="exclusive-carousel three-column">
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-01.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-02.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-03.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-01.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-02.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-03.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Excluesive
    ============================= -->

    <!-- Start: Footer Sidebar
    ============================= -->
    <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo"><img src="assets/img/logo.png')}}" alt=""></div>
                        <p>There are many variations of dummy passages of Lorem Ipsum a available, but the majority have suffered that is alteration in some that form  injected humour or randomised.</p>
                        <ul class="widget-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        
                    </aside>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-4">
                    <aside class="widget widget_recent">
                        <h4 class="widget-title">Latest News</h4>
                        <ul>
                            <li class="latest-news">
                                <a href="#">
                                   <img src="{{ asset('img/news-widget/news-widget-01.jpg')}}" alt="">
                                    <h5>Top Energy Trend Business</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                   <img src="{{ asset('img/news-widget/news-widget-02.jpg')}}" alt="">
                                    <h5>Chief Financial Officer Role</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                   <img src="{{ asset('img/news-widget/news-widget-03.jpg')}}" alt="">
                                    <h5>Our to Sustainability Team</h5>
                                    <p>August 15, 2017</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <aside class="widget widget_contact">
                        <h4 class="widget-title">Contact information</h4>
                        <ul>
                            <li><i class="fas fa-map-marker"></i>1102 Saint Marys, Jackson Blvd, Chicago, United States</li>
                            <li><i class="fas fa-envelope"></i>exampleemail.com</li>
                            <li><i class="fas fa-phone"></i>(123) 456 789 1002</li>
                        </ul>
                        <form class="#" action="#">
                            <input type="text" placeholder="Enter your email">
                            <button class="subscribe-btn boxed-btn" type="submit">Subscribe</button>
                        </form>
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
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights © 2018 All Rights Reserved, Powered by <a href="#">Conceptly</a>.</p></div>
                <div class="col-lg-6 col-12">
                    <ul class="text-lg-right text-center payment-method">
                        <li><a href="#"><i class="fab fa-paypal"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-amazon-pay"></i></a></li>
                    </ul>
                    <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Footer Copyright
    ============================= -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- Smooth Scroll -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

    <!-- Map Script -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script> -->

    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from nayrathemes.com/demo/html/conceptly/portfolio-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2019 21:22:42 GMT -->
</html>

@endsection

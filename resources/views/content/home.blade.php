@extends('layouts.user', [
    'name' => 'home',
])

@section('title')
<title>Salesprof - Home</title>

@section('content')

    <!-- Start: Header Slider
    ============================= -->
    <header>
        <div class="row">
            <div class="col-md-12">
                <div class="header-slider">
                    <div class="header-single-slider">
                        <figure>
                            <img src="{{ asset('img/sliders/slider01.jpg') }}">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                    <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        {{--<a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>--}}
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="{{ asset('img/sliders/slider02.jpg') }}">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-center">
                                        <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        {{--<a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>--}}
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="{{ asset('img/sliders/slider03.jpg') }}">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-right">
                                        <h1>We Build Your<br><span>Business</span> IDEA</h1>
                                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered injected humour dummy now.</p>
                                        {{--<a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>--}}
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End: Header Slider
    ============================= -->


    <!-- Start: Contact
    ============================= -->
    <section id="contact">
        <div class="container contact-wrapper text-center text-lg-left">
            <div class="">
                <div class="row">
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img src="{{ asset('img/icons/icon01.png') }}">
                        <p>
                            <b>

                                2, Osho Street,
                                Opebi (Near Adebola House Roundabout)
                                Ikeja, Lagos

                            </b>
                            
                            
                            </p>
                    </div>
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img class="pt-2" src="{{ asset('img/icons/icon02.png') }}">
                        <p><b> info@salesprof.com.ng
                            </b></p>
                    </div>
                    <div class="col-md-4 col-sm-6 single-contact">
                        <img src="{{ asset('img/icons/call.png') }}">
                        <p><b>+234-7038295419,<br> +234-9058483487</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Contact
    ============================= -->


    <!-- Start: Service
    ============================= -->
    <section id="our-service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>SALESPROF<span></span></h2>
                        <p>We are salesprof,
                            we mean sales and marketing growth,
                            we mean profitability,
                            we got you covered with all our services,
                            we mean product development and promotion,
                            we take the burden while you take the profit and growth.
                        </p>

                        <br><br>

                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="service-box">                        
                        <figure>
                            <img src="{{ asset('img/service/service01.jpg') }}">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-cubes"></i>
                                    </div>
                                    <h3>Sales <br> and Marketing Mgt </h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-4 mb-md-0">
                    <div class="service-box">                        
                        <figure>
                            <img src="{{ asset('img/service/service02.jpg') }}">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h3>Sales <br>Promotion </h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-box">                        
                        <figure>
                            <img src="{{ asset('img/service/service03.jpg') }}">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h3>Distribution,   <br> and Consultancy </h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End: Service
    ============================= -->


     <!-- Start: Our Features
    ============================= -->
    <section id="ourfeatures" class="section-padding">
        <div class="container">            
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>OUR SERVICES<span></span></h2>
                        <p>SALESPROF approaches every job with utmost dedication by ensuring that not stone is left unturned in the expeditious delivery of goods and services.</p>
                        <br><br>
                        <p>We have in recent times built a reputation in each of our specific areas of specialization</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon01.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Sales and Marketing Management</h3>
                            <p>We offer good plans, we find answers and solve problems while we get inspired by our result delivery.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon02.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Sales Promotion</h3>
                            <p>We know, recognise and have all the tools needed to make your product a household and official name accross leaps and bounds, having a very good relationship with media houses, a very productive social media presence and in-house promotional specialists for effective services and promotional delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon03.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Distribution</h3>
                            <p>We have our customer base cut accross all markets and sector in all the geo political zones of Nigeria, africa and other countries of the world (we have stronger business interests in Asia). we have all the resources to serve your demands.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon04.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Consultancy </h3>
                            <p>We offer  operational improvement, Sales and marketing advice. our consulting service is full fledged and result oriented because we have been here for a very long time and our results speak for us, we also have a young, skillful, exciting, dynamic and experienced team waiting to add to your gains why we get inspired.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon05.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Other areas</h3>
                            <p>we are actively involved in real estate development (we buy, sell, develop and Market).
                                Oil and Gas (We have very experienced and skillful team of oil and gas Marketers who have proven them selves over time and again)
                                By virtue of our position as a Sales and Marketing firm, we carry along all activities that have to do with selling and hence always happy to serve you accordingly.
                                we also provide trained bar, on trade and open market promoters and merchandisers. we got you covered on any of our services and dwe offer you maximum results.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon06.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon01.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon02.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                                <img src="{{ asset('img/features-icon/features-icon03.png') }}">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div> --}}

               
            </div>
        </div>
    </section>
    <!-- End: Our Features
    ============================= -->



    <!-- Start: Latest Projects
    ============================= -->

    {{-- <section id="latest-projects" class="section-padding project-masonary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Latest Projects <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row project-tab">
                <div class="col-md-12">
                    <ul class="project-tab-sorting sorting-btn" id="filter">
                        <li><a href="#" data-group="Show All" class="active"><i class="fas fa-align-justify"></i>All Business</a></li>
                        <li><a href="#" data-group="Branding"><i class="fab fa-renren"></i>Corporate</a></li>
                        <li><a href="#" data-group="Web"><i class="fab fa-codepen"></i>Insurance</a></li>
                        <li><a href="#" data-group="Creative"><i class="fab fa-joget"></i>Agency</a></li>
                        <li><a href="#" data-group="More"><i class="fas fa-euro-sign"></i>Finance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row project" id="grid">
                <div class="col-lg-3 col-md-6 col-sm-12" data-groups='["Branding", "Web", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project03.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Business Style</h4>
                                <p>Randomised words which don look even slightly believable. If going to use a passage of Lorem</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-groups='["Branding","Creative", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project04.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Business Style</h4>
                                <p>Randomised words which don look even slightly believable. If going to use a passage of Lorem</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12" data-groups='["Creative", "More", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project01.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Corporate Business</h4>
                                <p>There are many variations of passages of that Lorem Ipsum available but the majority.</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12" data-groups='["Branding", "Creative", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project02.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Business Style</h4>
                                <p>Randomised words which don look even slightly believable. If going to use a passage of Lorem</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-9 col-md-12" data-groups='["Branding","Creative", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project06.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Business Style</h4>
                                <p>Randomised words which don look even slightly believable. If going to use a passage of Lorem</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-groups='["Branding", "Web", "Show All"]'>
                    <figure>
                        <img src="{{ asset('img/project/project05.jpg') }}">
                        <figcaption>
                            <div class="inner-text">
                                <h4>Business Style</h4>
                                <p>Randomised words which don look even slightly believable. If going to use a passage of Lorem</p>
                                <a href="#" class="boxed-btn">View more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
        </div>
    </section> --}}

    <!-- End: Latest Projects
    ============================= -->


    <!-- Start: Projects Future
    ============================= -->

    {{-- <section id="projects-fututre" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Projects Future <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default active">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Great Professional Staff Abroad
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        We Create Brilliant Buildings
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Premium Support Services
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Why Would a Successful Entrepreneur Hire a Coach?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero that   luctus quam iaculis the porttitor nulla.Cras quis enim ac nisi por vulputate. Morbi bibendum ac sapien a fm lorem .</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="projects-mockup">
                        <img src="{{ asset('img/mockup.png') }}">
                    </div>
                </div>
            </div>
            
        </div>
    </section> --}}

    <!-- End: Projects Future
    ============================= -->



    <!-- Start: Our Gallery
    ============================= -->

    {{-- <section id="our-gallery" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Latest Projects <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>                
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="gallery-items" class="gallery-items popup-gallery">
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary1.jpg">
                            <img src="{{ asset('img/gallery/gallary1.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary2.jpg">
                            <img src="{{ asset('img/gallery/gallary2.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary3.jpg">
                            <img src="{{ asset('img/gallery/gallary3.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary4.jpg">
                            <img src="{{ asset('img/gallery/gallary4.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary5.jpg">
                            <img src="{{ asset('img/gallery/gallary5.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary6.jpg">
                            <img src="{{ asset('img/gallery/gallary6.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary7.jpg">
                            <img src="{{ asset('img/gallery/gallary7.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary8.jpg">
                            <img src="{{ asset('img/gallery/gallary8.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary9.jpg">
                            <img src="{{ asset('img/gallery/gallary9.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                    <div class="single-item">
                        <a href="assets/img/gallery/gallary10.jpg">
                            <img src="{{ asset('img/gallery/gallary10.jpg') }}">
                            <div><i class="fas fa-expand"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End: Our Gallery
    ============================= -->

    <!-- Start: Call to action
    ============================= -->

    {{-- <section id="cta">
        <div class="container">
            <div class="row cta">
                <div class="col-lg-9 col-md-7 col-12 text-md-left text-center mb-md-0 mb-4">
                    <h3>Become a Part of Community !</h3>
                    <p>Get in touch with us and send some basic info for a quick quote</p>
                </div>
                <div class="col-lg-3 col-md-5 col-12 text-md-right text-center">
                    <a href="#" class="boxed-btn purchase-btn"><i class="fas fa-shopping-cart"></i>purchase now</a>
                </div>
            </div>
        </div>
    </section>   --}}

    <!-- End: Call to action
    ============================= -->

    <!-- Start: Pricing
    ============================= -->

    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>OUR CLIENTELE <span></span></h2>
                        <p>We have within the shortest period of our registration as a business maintained and provided professional services to a wide range of organization, cutting across both private and public sectors of the economy.</p>
                        <br><br>
                        <p>We have maintained a track record that is anchored on excellence, dedication to job, transparency and professionalism, which are reflected on the quality of jobs we render.</p>
                        <br><br>

                        <p>The under-listed are the clients that have enjoyed our efficient services:
                            <br>
                            <ul>
                                <li><b> (1)	GSK CONSUMERS PLC</b></li>
                                <li><b> (2)	UAC FOODS LIMITED</b></li>
                                <li><b> (3)	A HOST OF OTHER PRIVATE SATISFIED INDIVIDUALS</b></li>
                            </ul>
                           
                            
                                                       
                        </p>                            
                    </div>
                </div>                
            </div>

            {{-- <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <div class="single-pricing">
                        <div class="pricing">$ <span class="price">29</span><br>Per month</div>
                        <h2>Corporate</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li class="deselct">Access to All Project</li>
                            <li class="deselct">Layered Photshop Files</li>
                            <li class="deselct">No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <div class="single-pricing popular-plan">
                        <div class="popular-text"><span>Popular Plan</span></div>
                        <div class="pricing">$ <span class="price">45</span><br>Per month</div>
                        <h2>Professional</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li>Access to All Project</li>
                            <li>Layered Photshop Files</li>
                            <li class="deselct">No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-pricing">
                        <div class="pricing">$ <span class="price">99</span><br>Per month</div>
                        <h2>Enterprise</h2>
                        <ul>
                            <li>Access to All Themes</li>
                            <li>Perpetual Theme Updates</li>
                            <li>Premium Technical Support</li>
                            <li>Access to All Project</li>
                            <li>Layered Photshop Files</li>
                            <li>No Yearly Fees</li>
                        </ul>
                        <a href="#" class="boxed-btn">Buy Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End: Pricing
    ============================= -->

    <!-- Start: Testimonial
    ============================= -->
{{-- 
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Client Testimonial <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel">
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="{{ asset('img/quote.png') }}">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="{{ asset('img/tesimonial/speaker01.png') }}">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="{{ asset('img/quote.png') }}">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="{{ asset('img/tesimonial/speaker02.png') }}">
                                <h3>Benjamin Graham</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="{{ asset('img/quote.png') }}">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="{{ asset('img/tesimonial/speaker01.png') }}">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="icon">
                                <img src="{{ asset('img/quote.png') }}">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="{{ asset('img/tesimonial/speaker02.png') }}">
                                <h3>Benjamin Graham</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <i class="fas fa-quote-left"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the an dumm majority have suffered alteration in some form by that is injected humour or about randomised words which.</p>
                            <hr>
                            <div class="info">
                                <img src="{{ asset('img/tesimonial/speaker01.png') }}">
                                <h3>Ben Horowitz</h3>
                                <p>Co-Founder & CEO of Business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End: Testimonial
    ============================= -->

    <!-- Start: Creative Team
    ============================= -->

    {{-- <section id="team" class="section-padding-top mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Creative Team <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: {{asset('img/team/team01.jpg')}}">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Andrew Reed</h3>
                            <p>Creative Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: {{asset('img/team/team02.jpg')}}">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Lauren Czisch</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-4">
                    <div class="team-member" style="background-image: {{asset('img/team/team03.jpg')}}">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Michael Moritz</h3>
                            <p>Apps Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: {{asset('img/team/team04.jpg')}}">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Don Valentine</h3>
                            <p>Web Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End:  Creative Team
    ============================= -->

    <!-- Start: Fun Fact
    ============================= -->

    {{-- <section id="fun-fact" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box light-bg bb">
                    <img src="{{ asset('img/fun-fact/note.png') }}">
                    <h3><span class="counter">1845</span></h3>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box dark-bg bb">
                    <img src="{{ asset('img/fun-fact/people.png') }}">
                    <h3><span class="counter">146</span></h3>
                    <p>Team Members</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box light-bg">
                    <img src="{{ asset('img/fun-fact/face.png') }}">
                    <h3><span class="counter">1246</span></h3>
                    <p>Happy Customers</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box dark-bg">
                    <img src="{{ asset('img/fun-fact/cup.png') }}">
                    <h3><span class="counter">2416</span></h3>
                    <p>Cups Of Coffee</p>
                </div>
            </div>
        </div>
    </section>  --}}

    <!-- End:  Fun Fact
    ============================= -->

    <!-- Start: Latest News
    ============================= -->

    {{-- <section id="latest-news" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Latest News <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/latest-news/latest-news-01.jpg') }}" alt="" class="img-responsive center-block">
                            <div class="post-overlay">
                                <img src="{{ asset('img/author01.png') }}" alt="">
                            </div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/latest-news/latest-news-02.jpg') }}" alt="" class="img-responsive center-block">
                            <div class="post-overlay"><img src="{{ asset('img/author01.png') }}"></div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/latest-news/latest-news-03.jpg') }}" alt="" class="img-responsive center-block">
                            <div class="post-overlay">
                                <img src="{{ asset('img/author01.png') }}" alt="">
                            </div>
                            <ul class="meta-info list-inline">
                                <li class="posted-by"><a href="#"><i class="fas fa-user"></i>Lily Simith</a></li>
                                <li class="tags"><a href="#"><i class="fas fa-newspaper"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="blog-single.html">Welcome To Our New Head Of Production..</a></h3>
                                <p>Consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliquauis aute irure dolor eiusmod.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-single.html" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End:  Latest News
    ============================= -->
    
    <!-- Start: Our Client
    ============================= -->
    {{-- <section id="our-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-carousel">
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="{{ asset('img/partner/partner01.png') }}">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="{{ asset('img/partner/partner02.png') }}">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="{{ asset('img/partner/partner03.png') }}">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="{{ asset('img/partner/partner04.png') }}">
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="inner-partner">
                                <img src="{{ asset('img/partner/partner05.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End: Our Client
    ============================= -->
@endsection

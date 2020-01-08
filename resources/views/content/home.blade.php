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
                        <p><b>+234-01-4536071, <br> +234-8090507675</b></p>
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
                    </div>
                </div>
            </div>


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
                        <p>SALESPROF approaches every job with utmost dedication by ensuring that no stone is left unturned in the expeditious delivery of goods and services.</p>
                        <br><br>
                        <p>We have in recent times built a reputation in each of our specific areas of specialization</p>
                </div>
            </div>

           
        </div>
    </section>
   


    

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

@endsection

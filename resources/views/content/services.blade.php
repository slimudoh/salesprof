@extends('layouts.user',[
    'name' => 'service',
])


@section('title')
    <title>Salesprof - Our Services</title>

@section('content')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="/">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

   
    <section id="our-service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>OUR SERVICES <span></span></h2>


                        <p>
                            SALESPROF approaches every job with utmost dedication by ensuring that no stone is left
                            unturned in the expeditious delivery of goods and services, Giving solutions to ailing sales
                            and marketing problems, Developing good sales and marketing promotional programs
                            manage sales for optimum development and Corporate Sales and Marketing partners.

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>NATURE OF SERVICE DELIVERY<span></span></h2>
                        <p>We have in recent times built a reputation in each of our specific areas of specialization
                            such as</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">
                        <figure>
                            <img src="{{ asset('img/service/service01.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-cubes"></i>
                                    </div>
                                    <h3>Sales and Marketing <br>Management </h3>
                                    <div class="devider"></div>
                                    <p>We offer good plans, we find answers and solve problems while we get inspired by
                                        our result delivery.

                                        <br/><br/>

                                        <strong>HOW WE DO IT:</strong>

                                        We provide perfect sales and marketing plans, good trained and experienced
                                        promoters and sales administrators with specialty in your brand. we also have
                                        built a very solid relationship with the markets, hence we have them on our
                                        side.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">
                        <figure>
                            <img src="{{ asset('img/service/service02.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h3>Sales <br>Promotion</h3>
                                    <div class="devider"></div>
                                    <p>We know, recognise and have all the tools needed to make your product a household
                                        and official name accross leaps and bounds, having a very good relationship with
                                        media houses, a very productive social media presence and in-house promotional
                                        specialists for effective services and promotional delivery. </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">
                        <figure>
                            <img src="{{ asset('img/service/service03.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h3>Distribution</h3>
                                    <div class="devider"></div>
                                    <p>We have our customer base cut accross all markets and sector in all the geo
                                        political zones of Nigeria, africa and other countries of the world (we have
                                        stronger business interests in Asia). we have all the resources to serve your
                                        demands.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="service-box">
                        <figure>
                            <img src="{{ asset('img/service/service04.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-audible"></i>
                                    </div>
                                    <h3>Consultancy </h3>
                                    <div class="devider"></div>
                                    <p>We offer operational improvement, Sales and marketing advice. our consulting
                                        service is full fledged and result oriented because we have been here for a very
                                        long time and our results speak for us, we also have a young, skillful,
                                        exciting, dynamic and experienced team waiting to add to your gains why we get
                                        inspired.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-md-0 mb-4">
                    <div class="service-box">
                        <figure>
                            <img src="{{ asset('img/service/service05.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-stack-overflow"></i>
                                    </div>
                                    <h3>Other areas</h3>
                                    <div class="devider"></div>
                                    <p>we are actively involved in real estate development (we buy, sell, develop and Market).
                                        Oil and Gas (We have very experienced and skillful team of oil and gas Marketers who have proven them selves over time and again)
                                        By virtue of our position as a Sales and Marketing firm, we carry along all activities that have to do with selling and hence always happy to serve you accordingly.
                                        we also provide trained bar, on trade and open market promoters and merchandisers. we got you covered on any of our services and dwe offer you maximum results.
                                    </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service06.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-reddit-alien"></i>
                                    </div>
                                    <h3>Developer <br> Solutions and Consulting</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div> --}}
            </div>
        </div>
        </div>
    </section>
@endsection

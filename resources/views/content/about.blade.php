@extends('layouts.user', [
    'name' => 'about',
])


@section('title')
<title>Salesprof - About Us</title>

@section('content')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="/">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: About US
    ============================= -->
    <section id="about-us" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-5">

                    <div class="section-title section-before-border">
                        <h2>OUR PROFILE  </h2>

                    </div>

                    <div class="section-info">
                        <p>SALESPROF is a company registered wholly for services such as Sales and Marketing Management, Sales Promotion, Distribution and Consultancy and have massively excelled in its qualitative services since its registration as a business in recent times. </p>
                        <br>
                        <p>The development of our service delivery has been carefully structured to guarantee maximum job satisfaction at all time by our seasoned staff as professionalism is maintained on every job executed.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                   <img src="{{ asset('img/mockup.png')}}" alt="">
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End: About US
    ============================= -->

    <!-- Start: Our skill
    ============================= -->
    <section id="what-we-do" class="section-padding-top">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-5">
                    <div class="what-we-do">
                        <h2>OUR VISION</h2>
                        <hr class="devider">
                        <p>To be the first global sales and marketing firm that can profer solutions to all sectors and stamp our name in all nations. we want our second name to be "Result"

                            </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="what-we-do" class="section-padding-top">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-5">
                    <div class="what-we-do">
                        <h2>OUR MISSION STATEMENT</h2>
                        <hr class="devider">
                        <p>To build and retain a high profile clientele through effective and efficient delivery of satisfactory services as a basis for quality management at all times: based on professionalism, expertise and dedication to duty.

                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="what-we-do" class="section-padding-top">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-5">
                        <div class="what-we-do">
                            <h2>OUR MANAGEMENT TEAM</h2>
                            <hr class="devider">
                            <p>Being a young company, the dedicated and vibrant staff's dedication over the years has also ensured our growth as a team for this progressive enterprise and we are ably led by;
                                <br /><br />
                            </p>

                            <ul>
                                <li>NAME:		        MR. MICHAEL INAH</li>
                                <li>POSITION:		MANAGING DIRECTOR/CEO</li>
                                <li>NATIONALITY:		NIGERIAN</li>
                            </ul>
                            <br /><br />



                           <p>
                               Mike Inah holds a bachelor's degree in Computer Science from a very prestigious University. his versatility in the distribution and marketing business has been of great value to the enterprise.
                               He have been actively involved in Sales delopment, planning and operations at very different levels, different
                               companies and at different times (key account manager, Distributor support, project manager and Sales manager).
                               <br /><br />
                               His experience have always shown in every organisation he's involved in.
                               He has a certificate in Account Management from the Lagos Business School.
                               He has all the capacity and acumen to ensure qualitative services to the business.

                           </p>
                        </div>
                    </div>
                       <div class="col-lg-6">
                   <img src="{{ asset('img/mockup.png')}}" alt="">
                </div>

                </div>

            </div>
        </section>
    <!-- End: Our skill
    ============================= -->

     <!-- Start: Our Features
    ============================= -->
    {{-- <section id="ourfeatures" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Our Features <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon01.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon02.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Sustainability</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon03.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Performance</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon04.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Organization</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon05.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Saving Strategy</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon06.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon01.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon02.png')}}" alt="">
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
                               <img src="{{ asset('img/features-icon/features-icon03.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 more-load">
                    <!-- Load More Content Button  -->
                    <a class="load-btn boxed-btn" href="#" id="feature-load-pro"><span id="feature-ti-port-load" class="ti-port-load-hide"></span>Load More <i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End: Our Features
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
                    <div class="team-member" style="background-image: url(assets/img/team/team01.jpg);">
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
                    <div class="team-member" style="background-image: url(assets/img/team/team02.jpg);">
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
                    <div class="team-member" style="background-image: url(assets/img/team/team03.jpg);">
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
                    <div class="team-member" style="background-image: url(assets/img/team/team04.jpg);">
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
                   <img src="{{ asset('img/fun-fact/note.png')}}" alt="">
                    <h3><span class="counter">1845</span></h3>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box dark-bg bb">
                   <img src="{{ asset('img/fun-fact/people.png')}}" alt="">
                    <h3><span class="counter">146</span></h3>
                    <p>Team Members</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box light-bg">
                   <img src="{{ asset('img/fun-fact/face.png')}}" alt="">
                    <h3><span class="counter">1246</span></h3>
                    <p>Happy Customers</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box dark-bg">
                   <img src="{{ asset('img/fun-fact/cup.png')}}" alt="">
                    <h3><span class="counter">2416</span></h3>
                    <p>Cups Of Coffee</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End:  Fun Fact
    ============================= -->




@endsection

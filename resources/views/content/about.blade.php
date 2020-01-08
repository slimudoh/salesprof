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
               
            </div>
        </div>
    </section>
   
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



@endsection

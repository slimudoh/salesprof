@extends('layouts.user', [
    'name' => 'train',
])


@section('title')
<title>Salesprof - Our Trainings</title>


@section('content')


    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Logistics</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="/">Home</a></li>
                        <li class="active">Logistics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: Portfolio 3 Column
    ============================= -->
 
    <section id="what-we-do" class="section-padding">
            <div class="container">
    
                <div class="row">
                    <div class="col-lg-12 mb-lg-0 mb-5">
                        <div class="what-we-do">
                            {{-- <h2>OUR MISSION STATEMENT</h2> --}}
                            <hr class="devider">
                            <p>SALESPROF has over the year put in place acquired logistics to fast track its operations, for instance, we have:    
                                </p>
                                <ul>
                                    <li>(i)	Mini Sales Trucks for efficient delivery of goods </li>
                                    <li> (ii)	Buses and Smaller vehicles for emergency deliveries to  Satisfy our esteemed and valuable customers   </li>
                                </ul>
                        </div>
                    </div>
                  
                </div>
    
            </div>
        </section>

        <section id="what-we-do" class="section-padding">
                <div class="container">
        
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 mb-5">
                            <div class="what-we-do">
                                <h2>SERVICES</h2>
                                <hr class="devider">
                                <p>We are available to clarify any issues you may find necessary within short notice.
                                    </p>
                            </div>
                        </div>
                      
                    </div>
        
                </div>
            </section>
    <!-- End: Portfolio
    ============================= -->

    <!-- Start: Excluesive
    ============================= -->
  
    <!-- End: Excluesive
    ============================= -->


@endsection

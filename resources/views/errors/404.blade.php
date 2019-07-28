@extends('layouts.user')

@section('content')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>404</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->


    <!-- Start: 404
    ============================= -->

    <section id="page-404" class="section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('img/404-image.png')}}" alt="">                    
                    <h1>Oops..</h1>
                    <h3>Someething Went Wrong Here</h3>
                    <a href="#" class="boxed-btn">Back To Home</a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: 404
    ============================= -->

@endsection

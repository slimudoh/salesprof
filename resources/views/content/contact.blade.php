@extends('layouts.user', [
    'name' => 'contact',
])


@section('title')
<title>Salesprof - Contact Us</title>

@section('content')
    <!-- Start: Breadcrumb Area
    ============================= -->

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->


    <!-- Start: Contact Info
    ============================= -->

    <section id="contact-info" class="section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                   <img src="{{ asset('img/icons/address.png')}}" alt="">
                    <h3>Address</h3>
                    <p>2, Osho Street,
                        <br>
                        Opebi (Near Adebola House Roundabout)
                        <br>
                        Ikeja, Lagos<br> </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                   <img src="{{ asset('img/icons/mail.png')}}" alt="">
                    <h3>E-mail</h3>
                    <p>info@salesprof.com.ng</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 single-box text-center">
                   <img src="{{ asset('img/icons/phone.png')}}" alt="">
                    <h3>Phone</h3>
                    <p>+234-01-4536071,<br> +234-8090507675</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Contact Info
    ============================= -->

    <section id="send-message">
        <form method="post" action="/sent-mail">
            {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 order-2 order-md-2">
                    {{-- <div id="map"></div> --}}
                </div>
                <div class="col-lg-6 col-md-8 order-md-2 order-sm-1 contact-us-form">
                    <h3>Send Us a Message</h3>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" rows="3" name="msg" placeholder="Your Mesage"></textarea>
                        </div>
                        <button class="boxed-btn">Send Us a Message</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 order-2 order-md-2">
                        {{-- <div id="map"></div> --}}
                    </div>
            </div>
        </div>
        </form>
    </section>

    <!-- End: Contact Info
    ============================= -->
@endsection

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

    <section id="contact-info" style="padding-top: 50px;font-size: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-md-0 mb-5 single-box text-center">
                    <p>
                        Message Sent.
                    </p>
                </div>
            </div>
        </div>
    </section>


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
                    <p>+234-7038295419,  <br>+234-9058483487</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Contact Info
    ============================= -->
    <!-- End: Contact Info
    ============================= -->
@endsection

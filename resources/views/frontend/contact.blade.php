@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Contact Us</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
        <!-- Form ad info -->
        <section id="form-info" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 m-auto text-center">
                        <div class="heading d-flex justify-content-center align-items-center flex-wrap mb-4">
                            <div class="head">
                                <div class="head-icon mx-auto mb-2 text-center">
                                    <img class="svg-color" src="{{asset('frontend/assets/images/head-icon.png')}}">
                                </div>
                                <h2 class="text-uppercase mb-5"><a>Get In Touch With Us</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-6 m-auto contact-image">
                        <img src="frontend/assets/images/contact.png" class="img-fluid" alt="">
                    </div> -->
                    <div class="col-lg-8 col-12 mx-auto my-3">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-12">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="icon mr-3">
                                        <i class="fa fa-2x fa-map"></i>
                                    </div>
                                    <div class="content">
                                        {{$setting->address}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="icon mr-3">
                                        <i class="fa fa-2x fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <ul class="p-0">
                                            <li> <a href="tel:{{$setting->contact}}">{{$setting->contact}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="icon mr-3">
                                        <i class="fa fa-2x fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <a href=" mailto:{{$setting->email}}">{{$setting->email}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="row py-3" method="post" action="{{route('contact_us')}}">
                            @csrf
                            <input type="hidden" name="type" value="contact">
                            <div class="col-lg-4 col-12 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    value="" required>
                            </div>
                            <div class="col-lg-4 col-12 form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" value="" required>
                            </div>
                            <div class="col-lg-4 col-12 form-group">
                                <input type="number" name="phone" class="form-control" placeholder="Your Phone Number" required>
                            </div>
                            <div class="col-12 form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message"
                                    style="width: 100%; height: 100px"></textarea>
                            </div>
                            <div class="col-12 form-group text-center">
                                <button type="submit" class="anchor-btn2 bg-transparent">
                                    Submit
                                </button>
                                <!-- <a href="#" class="btn mt-4">OUR SERVICES</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form ad info Ends -->
        <!-- Google Map -->
        <section id="map">
            <div class="row">
                <div class="col-12 google-map">
                    <div class="map">
                        <iframe
                            src="{{\App\Models\SocialSetting::first()->map}}"
                            width="100%" height="300px" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Google Map Ends -->

@include('frontend.includes.donate')

@endsection
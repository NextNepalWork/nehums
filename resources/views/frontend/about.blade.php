@extends('frontend.layouts.app')
@section('content')
<section id="about-us-wrapper">

    <!-- Breadcrumbs -->
    <section id="breadcrumb-wrapper" class="position-relative">
        <div class="image">
            <img src="frontend/assets/images/product-images/1.jpg" alt="breadcrumb-image" class="img-fluid">
        </div>
        <div class="overlay position-absolute">
            <div class="title p-4">About Us</div>
        </div>
    </section>
    <!-- Breadcrumbs Ends -->
    <!-- About Us -->
    <section id="about-us-wrapper" class="py-5">
        <div class="container">

            <div class="about-us-list">
                <div class="row">
                    {!! $about->content !!}

                    {{-- <div class="col-lg-6 col-md-6 order-lg-2 order-md-2 order-1 mb-2">
                        <div class="founder text-center">
                            <img src="frontend/assets/images/product-images/17.jpg" class="img-fluid ">
                        </div>
                    </div>
                    <!-- Parallax -->
                    <div class="col-12 order-lg-2 order-md-2 order-3 my-3">
                        <section id="parallax" class="position-relative">
                            <div class="discription2 px-4 py-3">
                                <div class="head-icon mx-auto mb-2 text-center">
                                    <img class="svg-color" src="frontend/assets/images/head-icon.png">
                                </div>
                                <div class="head">
                                    <h1 class="font-weight-bold">BECOME A VOLUNTEER</h1>
                                    <p class="">The patriot volunteer, fighting for country and his rights, makes
                                        the
                                        most reliable soldier on earth.</p>
                                </div>
                                <a href="" class="effect anchor-btn mt-2" tabindex="0">Join Us</a>
                            </div>
                        </section>
                    </div>
                    <!-- Parallax Ends -->
                    <div class="col-lg-6 col-md-6 order-lg-4 order-md-4 order-4 mt-2 mb-2">
                        <div class="about-us-image ">
                            <img src="https://electro.madrasthemes.com/wp-content/uploads/2016/03/3column2.jpg"
                                class="img-fluid ">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-lg-5 order-md-5 order-5 mb-2">
                        <div
                            class="about-us-image-discription d-flex h-100 justify-content-center align-items-center flex-column py-3">
                            <h2>Our Goals</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora commodi corporis
                                omnis aliquid minima sapiente exercitationem nemo ad amet, quae voluptatem fugit
                                eaque quo. Eaque aperiam at blanditiis! Doloribus, sunt.</p>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>
    <!-- About Us Ends -->
    <!-- Newsletter  -->
    <section id="parallax-newsletter" class="position-relative">
        <div class="discription4 px-4 py-3">
            <div class="newsletter-wrapper mb-4">
                <div class="title text-center mb-3">
                    <h1>Connect With Us Today</h1>
                </div>
                <div class="discription text-center w-75 m-auto"> Ready To Grow </div>
            </div>

            <div class="subscribe-wrapper subscribe2-wrapper mb-15">
                <div class="subscribe-form">
                    <form action="{{route('subscriber')}}" method="post">
                        @csrf
                        <input placeholder="enter your email address" type="email" name="email">
                        <button class="mt-xl-0 mt-md-3 mt-3" type="submit">Subscribe <i class="fa fa-angle-right ml-2"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>


        </div>
    </section>

    <!-- Newsletter Ends -->
    @include('frontend.includes.donate')
    

</section>
@endsection
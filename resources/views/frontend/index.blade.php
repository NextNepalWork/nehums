@extends('frontend.layouts.app')

@section('content')
    
<!-- Banner Categories Slider -->
<section id="banner-categories-wrapper" class="position-relative">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="slick-slider">
                @foreach ($sliders as $slider)
                <div class="slick-item position-relative">
                    @if (!empty($slider->image))
                        @if(file_exists('uploads/sliders/'.$slider->image))
                            <img src="{{asset('uploads/sliders/'.$slider->image)}}" class="img-fluid w-100">
                        @else
                            <img src="{{asset('frontend/assets/images/banner/1 (1).jpg')}}" class="img-fluid w-100">
                        @endif
                    @else
                        <img src="{{asset('frontend/assets/images/banner/1 (1).jpg')}}" class="img-fluid w-100">
                    @endif
                    <div class="description text-center">
                        <h1>{{$slider->title}}</h1>
                        <a href="{{$slider->link}}" class="anchor-btn">Donate<span class="ml-2"><i
                                    class="fa fa-angle-right"></i></span> </a>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Banner Categories Slider Ends-->
<!-- Category -->
<section id="category-wrapper" class="default-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="heading d-flex justify-content-center align-items-center flex-wrap mb-4">
                    <div class="head">
                        <div class="head-icon mx-auto mb-2 text-center">
                            <img class="svg-color" src="frontend/assets/images/head-icon.png" class="img-fluid">
                        </div>
                        <h2 class="text-uppercase"><a href="product-listing.html">How Could We Help You?</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-5">
                <div class="row text-center">
                    @foreach ($steps as $step)
                        <div class="col-lg-4 col-md-6 col-12 my-lg-0 my-2 mx-auto">
                            <a class="category_block bg-white px-4" href="product-listing.html">
                                <div class="category_img"> 
                                    {{-- <img class="svg-color" src="frontend/assets/images/hand.svg" class="img-fluid W-100" alt="category-image">  --}}
                                    <i class="{{$step->icon}}"></i>
                                    </div>
                                <div class="category_content mx-auto mt-3">
                                    <h5 class="main-head font-weight-normal mb-4">{{$step->title}}</h6>
                                        <p class="content-discp">{{$step->text}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-10 mt-5 text-center">

                <img src="{{asset('uploads/banners/'.$banner->image)}}"
                    class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Category Ends -->
<!-- Parallax -->
<section id="parallax" class="position-relative">
    <div class="discription2 px-4 py-3">
        <div class="head-icon mx-auto mb-2 text-center">
            <img class="svg-color" src="frontend/assets/images/head-icon.png" class="img-fluid">
        </div>
        <div class="head">
            <h1 class="font-weight-bold">BECOME A VOLUNTEER</h1>
            <p class="">The patriot volunteer, fighting for country and his rights, makes the
                most reliable soldier on earth.</p>
        </div>
        <a href="volunteer-internship.html" class="effect anchor-btn mt-2" tabindex="0">Join Us</a>
    </div>
</section>
<!-- Parallax Ends -->
<!-- Testimonial  -->
<!-- <section id="testimonial-wrapper" class="position-relative default-padding ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex justify-content-center align-items-center flex-wrap mb-4">
                    <div class="head">
                        <div class="head-icon mx-auto mb-2 text-center">
                            <img class="svg-color" src="frontend/assets/images/head-icon.png" class="img-fluid">
                        </div>
                        <h2 class="text-uppercase"><a href="product-listing.html">Testimonial</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 mx-auto py-4">
                <div class="testimonial-slider">
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png"
                                        class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div
                                    class="testimonial-content d-flex flex-column justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title ">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid
                                saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora
                                aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png"
                                        class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div
                                    class="testimonial-content d-flex flex-column text-center justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title ">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid
                                saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora
                                aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                    <div class="slick-item position-relative">
                        <div class="testimonial-content-wrap text-center active m-auto pb-2">
                            <div class="testimonial-image-content d-block d-lg-flex justify-content-center">
                                <div class="image">
                                    <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png"
                                        class="m-auto img-fluid" alt="testimonial-image">
                                </div>
                                <div
                                    class="testimonial-content d-flex flex-column text-center justify-content-center align-items-start ml-3">
                                    <h5 class="testimonial-title ">
                                        Jessya Inn
                                    </h5>
                                    <p class="dark-text m-0">Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <p class="our-services-text mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquid
                                saepe quibusdam soluta dolore dolor quas voluptatibus. Recusandae tempora
                                aspernatur, dolor quas voluptatibus. Recusandae, consequatur neque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Testimonial Ends -->
<!-- Events -->
<section id="events" class="default-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="heading d-flex justify-content-center align-items-center flex-wrap mb-4">
                    <div class="head">
                        <div class="head-icon mx-auto mb-2 text-center">
                            <img class="svg-color" src="frontend/assets/images/head-icon.png" class="img-fluid">
                        </div>
                        <h2 class="text-uppercase"><a href="product-listing.html">events</a>
                        </h2>
                    </div>
                </div>
            </div>
            @foreach ($events as $event)
            <div class="col-lg-5 col-12 mb-2 mt-4">
                @if (!empty($event->thumbnail_img))
                    @if(file_exists('uploads/events/'.$event->thumbnail_img))
                        <img src="{{asset('uploads/events/'.$event->thumbnail_img)}}" class="img-fluid">
                    @else
                        <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                    @endif
                @else
                    <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                @endif
            </div>
            <div class="col-lg-7 col-12 mb-2">
                <div class="title d-flex justify-content-between align-items-center flex-wrap">
                    <a href="events.html" class="font-weight-bold">{{$event->title}}
                    </a>
                    <div class="date">
                        {{$event->date}}
                    </div>
                </div>
                <div class="location my-3">
                    <i class="fa fa-map mr-2"></i> <span>{{$event->location}}</span>
                </div>
                <div class="discription">
                    <p>{!! Str::words($event->description , 50, ' ...') !!}</p>
                </div>
                <div class="btn-wrapper">
                    <a href="{{route('event.detail',$event->id)}}" class="effect anchor-btn">View Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Events Ends -->
<!-- Blog  -->
<section id="index-event-wrapper" class="default-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="heading d-flex justify-content-center align-items-center flex-wrap mb-4">
                    <div class="head">
                        <div class="head-icon mx-auto mb-2 text-center">
                            <img class="svg-color" src="frontend/assets/images/head-icon.png" class="img-fluid">
                        </div>
                        <h2 class="text-uppercase"><a href="product-listing.html">PROGRAMS</a>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Content in col -->
            @foreach ($programs as $program)
            <div class="col-lg-4 col-11 my-2">
                <div class="blog-content position-relative">
                    <div class="image">
                        @if (!empty($program->image))
                            @if(file_exists('uploads/programs/'.$program->image))
                                <img src="{{asset('uploads/programs/'.$program->image)}}" class="img-fluid">
                            @else
                                <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                            @endif
                        @else
                            <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                        @endif
                    </div>
                    <div class="content px-4 py-3">
                        <h5 class="title font-weight-bold text-white">
                            {{$program->title}}
                        </h5>
                        {{-- <div class="date-comment d-flex justify-content-center">
                            <div class="date mr-2 text-white">Nov 19, 2021</div>

                        </div> --}}
                        <div class="button-wrapper">
                            <a href="{{route('program.detail',$program->id)}}" class=" text-white">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Content in col ends -->

        </div>
    </div>
</section>
<!-- Blog Ends -->
<!-- Newsletter -->
<section id="newsletter" class="default-padding bg-light">
    <div class="container">
        <div class="newsletter-wrapper mb-4">
            <div class="title text-center mb-3">
                <h1>Connect With Us Today</h1>
            </div>
            <div class="discription text-center w-75 m-auto"> Ready To Grow </div>
        </div>
        <div class="row">
            <div class="col-md-8 text-center m-auto">
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
        </div>
    </div>
</section>
<!-- Newsletter Ends -->
@include('frontend.includes.donate')

    
@endsection
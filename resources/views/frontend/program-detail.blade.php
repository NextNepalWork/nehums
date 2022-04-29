@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">{{$program->title}}</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Blog detail -->
<section id="blog-detail-wrapper" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 p-0">
                <div class="col-lg-12 col-12 order-2 order-lg-1">
                    <div class="image-block">
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
                </div>
                <div class="col-lg-12 col-12 mb-5 mb-lg-0 order-3 order-lg-3">
                    <div class="section-title h-100 d-flex flex-column justify-content-center">
                        <h2 class="pt-4 font-weight-bold">
                            {{$program->title}}
                        </h2>
                        <p class="text_gray_ptext">{!! $program->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-12 mb-5">
                    <div class="section-title h-100 d-flex flex-column justify-content-center">
                        <h2 class="pt-4 font-weight-bold">Photo Gallery
                        </h2>
                        <div id="gallery" class=" py-3">

                            <div id="lightgallery" class="row p-0">
                                @foreach ($photos as $photo)
                                    @if (!empty($photo->photos))
                                        @if(file_exists('uploads/gallery/photos/'.$photo->photos))
                                            <div class="col-xl-3 col-md-6 col-12" data-src="{{asset('uploads/gallery/photos/'.$photo->photos)}}">
                                                <a href="{{asset('uploads/gallery/photos/'.$photo->photos)}}" target="_blank">
                                                    <img src="{{asset('uploads/gallery/photos/'.$photo->photos)}}" class="img-fluid img-responsive">
                                                </a>
                                            </div>
                                        @else
                                            <div class="col-xl-3 col-md-6 col-12">
                                                <img src="{{asset('placeholder.jpg')}}" class="img-fluid img-responsive">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-xl-3 col-md-6 col-12">
                                            <img src="{{asset('placeholder.jpg')}}" class="img-fluid img-responsive">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="sidebar mb-5 p-4">
                    <div class="popular-post">
                        <div class="title position-relative">
                            <h4 class="title mb-4">Media Coverage </h4>
                        </div>
                        @foreach ($media_coverages as $media_coverage)
                            <div class="d-flex align-items-center mb-4">
                                <div class="post-image mr-4 w-xl-25 w-md-0">
                                    @if (!empty($media_coverage->thumbnail_img))
                                        @if(file_exists('uploads/medias/'.$media_coverage->thumbnail_img))
                                            <img src="{{asset('uploads/medias/'.$media_coverage->thumbnail_img)}}">
                                        @else
                                            <img src="{{asset('placeholder.jpg')}}">
                                        @endif
                                    @else
                                        <img src="{{asset('placeholder.jpg')}}">
                                    @endif
                                </div>
                                <div class="post-content w-75">
                                    <div class="date">
                                        <p class="text-uppercase mb-1">{{$media_coverage->date}}</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="{{route('media-coverage.detail',$media_coverage->id)}}">
                                            <h6 class="">{{$media_coverage->title}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="sidebar mb-5 p-4">
                    <div class="popular-post">
                        <div class="title position-relative">
                            <h4 class="title mb-4">Press Release </h4>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="program-details.html">
                                        <h6 class=""> Market is Changing</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="program-details.html">
                                        <h6 class="">E-comerce is everywhere </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="program-details.html">
                                    </a>
                                    <h6 class=""><a href="program-details.html"> Digital Marketing
                                            Strategies in top
                                            companies
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="post-image mr-4 w-xl-25 w-md-0">
                                <img src="frontend/assets/images/product-images/1.jpg" alt="">
                            </div>
                            <div class="post-content w-75">
                                <div class="date">
                                    <p class="text-uppercase mb-1"> Jan 21, 2021 </p>
                                </div>
                                <div class="post-title">
                                    <a href="program-details.html">
                                        <h6 class=""> Single Vender Multi Vender all over the
                                            world
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</section>
<!-- Blog detail Ends -->
@include('frontend.includes.donate')

@endsection
@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Job Detail</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<section id="blog-detail-wrapper" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 p-0">
                <div class="col-lg-12 col-12 mb-5 mb-lg-0 order-3 order-lg-3">
                    <div class="section-title h-100 d-flex flex-column justify-content-center">
                        <h2 class="pt-4 font-weight-bold">{{$job->title}}
                        </h2>
                        <p class="text_gray_ptext">{!! $job->description !!}</p>


                    </div>
                    <div class="btn-wrapper mt-2">
                        <a href="" class="effect anchor-btn" data-toggle="modal"
                            data-target=".jobapply-modal">Apply Now</a>
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
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.donate')

@endsection
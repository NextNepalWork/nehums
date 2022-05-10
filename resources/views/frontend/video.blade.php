@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Video Gallery</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<section id="gallery" class="default-padding">
    <div class="container">
        <div class="row p-0">
            @if (!empty($videos))
                @foreach (json_decode($videos->videos) as $video)
                    {{-- <div class="col-xl-3 col-md-6 col-12" data-src="{{asset('uploads/gallery/videos/'.$video)}}">
                        <a data-src="{{asset('uploads/gallery/videos/'.$video)}}" class="position-relative">
                            <img class="img-responsive"
                                src="{{asset('uploads/gallery/videos/'.$video)}}" />
                            <div class="video-play-button" href="#">
                                <span></span>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-xl-3 col-md-6 col-12">
                        <a href="{{asset('uploads/gallery/videos/'.$video)}}" class="position-relative" target="_blank">
                            <video loop autoplay muted style="width: 100%;">
                                <source src="{{asset('uploads/gallery/videos/'.$video)}}" >
                            </video>
                            {{-- <div class="video-play-button" href="#">
                                <span></span>
                            </div> --}}
                        </a>
                    </div>
                @endforeach    
            @else
                Sorry, No Data Found....          
            @endif
        </div>
    </div>
</section>

@include('frontend.includes.donate')

@endsection
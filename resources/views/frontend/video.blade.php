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
        <div id="lightgallery" class="row p-0">
            @if (count($videos)>0)
                @foreach ($videos as $video)
                    <div class="col-xl-3 col-md-6 col-12" data-src="{{asset('uploads/gallery/videos/'.$video->videos)}}">
                        {{-- <a data-src="{{asset('uploads/gallery/videos/'.$video->videos)}}" class="position-relative">
                            <img class="img-responsive"
                                src="{{asset('uploads/gallery/videos/'.$video->videos)}}" />
                            <div class="video-play-button" href="#">
                                <span></span>
                            </div>
                        </a> --}}
                        <a href="{{ asset('uploads/gallery/videos/'.$video->videos) }}" target="_blank">
                            <video style="width: 100%;">
                                <source src="{{asset('uploads/gallery/videos/'.$video->videos)}}" >
                            </video>
                            </a>
                            <div class="video-play-button" href="#">
                                <span></span>
                            </div>
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
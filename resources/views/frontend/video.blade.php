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
            @if (!empty($videos))
                @foreach ($videos as $video)
                    <div class="col-xl-3 col-md-6 col-12" data-src="{{$video->link}}">
                        <a data-src="{{$video->link}}" class="position-relative">
                            <img class="img-responsive"
                                src="http://demo.kevthemes.com/hugs/wp-content/uploads/2016/07/img-blog-3-150x150.jpg" />
                            <div class="video-play-button" href="#">
                                <span></span>
                            </div>
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
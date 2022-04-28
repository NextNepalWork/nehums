@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Photo Gallery</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<section id="gallery" class="default-padding">
    <div class="container">
        <div id="lightgallery" class="row p-0">
            @if (count($photos)>0)
                @foreach ($photos as $photo)
                    @if (!empty($photo->photos))
                        @if(file_exists('uploads/gallery/photos/'.$photo->photos))
                            <div class="col-lg-3 col-md-6" data-src="{{asset('uploads/gallery/photos/'.$photo->photos)}}">
                                <a href="{{asset('uploads/gallery/photos/'.$photo->photos)}}" target="_blank">
                                    <img src="{{asset('uploads/gallery/photos/'.$photo->photos)}}" class="img-fluid img-responsive">
                                </a>
                            </div>
                        @else
                            <div class="col-lg-3 col-md-6">
                                <img src="{{asset('placeholder.jpg')}}" class="img-fluid img-responsive">
                            </div>
                        @endif
                    @else
                        <div class="col-lg-3 col-md-6">
                            <img src="{{asset('placeholder.jpg')}}" class="img-fluid img-responsive">
                        </div>
                    @endif
                @endforeach
            @else
                Sorry, No Data Found...
            @endif
        </div>
    </div>
</section>

@include('frontend.includes.donate')

@endsection
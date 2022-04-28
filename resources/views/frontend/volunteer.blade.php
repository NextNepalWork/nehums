@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Volunteer Internship</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

    <!-- Vacancy-Internship -->
    <section id="vacancy-internship" class="default-padding">
        <div class="container">
            @if (count($volunteers)>0)
                @foreach ($volunteers as $volunteer)
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-2">
                            <div class="about-us-image-discription d-flex h-100 justify-content-center flex-column py-3">
                                <h2 class="font-weight-bold title">{{$volunteer->title}}</h2>
                                <p class="w-75">{!! Str::words($volunteer->description , 150, ' ...') !!}</p>
                                <div class="btn-wrapper">
                                    <a href="tel:{{$setting->contact}}" class="effect anchor-btn">Call Us</a>
                                    <a href="" class="effect anchor-btn" data-toggle="modal" data-target=".jobapply-modal">
                                        Connect With Us</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 mt-2 mb-2">
                            <div class="volunteer-us-image ">
                                <img src="https://a6e8z9v6.stackpathcdn.com/chariti/demo1/wp-content/uploads/sites/2/2020/02/girl-image.jpg"
                                    class="img-fluid ">
                            </div>
                        </div> --}}
                    </div>
                @endforeach
            @else
                Sorry, No Data Found...
            @endif
        </div>
    </section>
    <!-- Vacancy-Internship Ends -->

@include('frontend.includes.donate')

@endsection
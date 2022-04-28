@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumbs -->
    <section id="breadcrumb-wrapper" class="position-relative">
        <div class="image">
            <img src="frontend/assets/images/product-images/1.jpg" alt="breadcrumb-image" class="img-fluid">
        </div>
        <div class="overlay position-absolute">
            <div class="title p-4">Programs</div>
        </div>
    </section>
    <!-- Breadcrumbs Ends -->
    <!-- Programs -->
    <section id="programs-wrapper" class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                @if (count($programs)>0)
                    @foreach ($programs as $program)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
                        <div class="card">
                            <div class="card-head"> 
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
                            <div class="card-body text-center">
                                <h5 class="card-title font-weight-bold">{{$program->title}}
                                </h5>
                                <div class="btn-wrapper">
                                    <a href="{{route('program.detail',$program->id)}}" class="effect anchor-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    Sorry,No Data Found...
                @endif
            </div>
        </div>
    </section>
    <!-- Programs Ends -->
    @include('frontend.includes.donate')


@endsection
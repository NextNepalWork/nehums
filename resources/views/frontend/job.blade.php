@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Job Vacancy</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

    <!-- Vacancy-Internship -->
    <section id="vacancy-internship" class="default-padding">
        <div class="container">
            @if (count($jobs)>0)
                @foreach ($jobs as $job)
                    <div class="row align-items-center my-3">
                        {{-- <div class="col-lg-5 col-12">
                            <img src="frontend/assets/images/product-images/1.jpg" class="img-fluid job-image">
                        </div> --}}
                        <div class="col-lg-12 col-12">
                            <div class="title d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{route('job-detail',$job->id)}}" class="font-weight-bold"> {{$job->title}}
                                </a>
                            </div>
                            {{-- <div class="location my-3">
                                <i class="fa fa-map mr-2"></i> <span>Kathmandu, Nepal</span>
                            </div> --}}
                            <div class="discription">
                                <p>{!! Str::words($job->description , 100, ' ...') !!}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{route('job-detail',$job->id)}}" class="effect anchor-btn">View Details</a>
                                <a href="" class="effect anchor-btn" data-toggle="modal" data-target=".jobapply-modal">Apply
                                    Now</a>
                            </div>
                        </div>
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
@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Admission Procedure</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

<section id="admission-procedure" class="default-padding">
    <div class="container">
        <div class="row w-100 m-auto">
            <div id="accordion" class="w-100">
                @if (count($admissions)>0)
                    @foreach ($admissions as $key => $admission)
                        <div class="card">
                            <div class="card-heading p-0" id="heading{{$key}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link w-100 text-left" data-toggle="collapse"
                                        data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                        {{$admission->title}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$key}}" class="collapse {{($key==0) ? 'show' : ''}}" aria-labelledby="heading{{$key}}"
                                data-parent="#accordion">
                                <div class="card-body">
                                    {!! $admission->description !!}
                                    <div class="btn-wrapper">
                                        <a href="" class="effect anchor-btn" data-toggle="modal" data-target=".jobapply-modal">Apply
                                            Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    Sorry, No Data Found...
                @endif
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.donate')

@endsection
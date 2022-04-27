@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumbs -->
    <section id="breadcrumb-wrapper" class="position-relative">
        <div class="image">
            <img src="frontend/assets/images/product-images/1.jpg" alt="breadcrumb-image" class="img-fluid">
        </div>
        <div class="overlay position-absolute">
            <div class="title p-4">Events</div>
        </div>
    </section>
    <!-- Breadcrumbs Ends -->
    <!-- Events -->
    <section id="events" class="default-padding">
        <div class="container">
            @foreach ($events as $key => $event)
                @if ($loop->even)
                    <div class="row align-items-center my-3">
                        <div class="col-lg-5 col-12 mb-lg-0 mb-2">
                            @if (!empty($event->thumbnail_img))
                                @if(file_exists('uploads/events/'.$event->thumbnail_img))
                                    <img src="{{asset('uploads/events/'.$event->thumbnail_img)}}" class="img-fluid events-image">
                                @else
                                    <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                                @endif
                            @else
                                <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                            @endif
                        </div>
                        <div class="col-lg-7 col-12 mb-lg-0 mb-2">
                            <div class="title d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{route('event.detail',$event->id)}}" class="font-weight-bold">{{$event->title}}
                                </a>
                                <div class="date">
                                    {{$event->date}}
                                </div>
                            </div>
                            <div class="location my-3">
                                <i class="fa fa-map mr-2"></i> <span>{{$event->location}}</span>
                            </div>
                            <div class="discription">
                                <p>{!! Str::words($event->description , 50, ' ...') !!}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{route('event.detail',$event->id)}}" class="effect anchor-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    
                @else
                    <div class="row align-items-center my-3 bg-light">
                        <div class="col-lg-7 col-12 mb-lg-0 mb-2 order-lg-1 order-2">
                            <div class="title d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{route('event.detail',$event->id)}}" class="font-weight-bold"> {{$event->title}}
                                </a>
                                <div class="date">
                                    {{$event->date}}
                                </div>
                            </div>
                            <div class="location my-3">
                                <i class="fa fa-map mr-2"></i> <span>{{$event->location}}</span>
                            </div>
                            <div class="discription">
                                <p>{!! Str::words($event->description , 50, ' ...') !!}</p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{route('event.detail',$event->id)}}" class="effect anchor-btn">View Details</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 mb-lg-0 mb-2 order-lg-2 order-1">
                            @if (!empty($event->thumbnail_img))
                                @if(file_exists('uploads/events/'.$event->thumbnail_img))
                                    <img src="{{asset('uploads/events/'.$event->thumbnail_img)}}" class="img-fluid events-image">
                                @else
                                    <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                                @endif
                            @else
                                <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                            @endif
                        </div>
                    </div>
                    
                @endif
            @endforeach
        </div>
    </section>
    <!-- Events Ends -->

    @include('frontend.includes.donate')


@endsection
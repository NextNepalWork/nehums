@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Our Teams</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->
<!-- Our Team  -->
<section id="our-team-wrapper" class="default-padding">
    <div class="container">
        <!-- Team member -->
        {{-- <div class="row justify-content-center align-items-center organization-head mb-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4 mb-xl-0">
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://goodwish.qodeinteractive.com/wp-content/uploads/2017/04/team-member-img-1.jpg"
                            alt="" class="img-fluid">
                    </div>
                    <div class="team-content py-4 py-md-3 px-3 px-md-4 text-center">
                        <h3><a href="our-team-detail.html" class="name">Rahul Sharma</a></h3>
                        <span>Chairperson</span>
                        <ul class="list-inline mt-2 mb-0">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4 mb-xl-0">
                <div class="team-block">
                    <div class="team-img">
                        <img src="https://a6e8z9v6.stackpathcdn.com/chariti/demo1/wp-content/uploads/sites/2/2020/03/cause-education-600x600.jpg"
                            alt="" class="img-fluid">
                    </div>
                    <div class="team-content py-4 py-md-3 px-3 px-md-4 text-center">
                        <h3><a href="our-team-detail.html" class="name">Jack Jones</a></h3>
                        <span>Vice Chairperson</span>
                        <ul class="list-inline mt-2 mb-0">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center align-items-center">
            @if (count($teams)>0)
                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4 mb-xl-0">
                        <div class="team-block">
                            <div class="team-img">
                                @if (!empty($team->image))
                                    @if(file_exists('uploads/teams/'.$team->image))
                                        <img src="{{asset('uploads/teams/'.$team->image)}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                                    @endif
                                @else
                                    <img src="{{asset('placeholder.jpg')}}" class="img-fluid">
                                @endif
                            </div>
                            <div class="team-content py-4 py-md-3 px-3 px-md-4 text-center">
                                <h3><a href="{{route('team.detail',$team->id)}}" class="name">{{$team->name}}</a></h3>
                                <span>{{$team->designation}}</span>
                                <ul class="list-inline mt-2 mb-0">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" target="_blank" href="{{$team->facebook}}">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" target="_blank" href="{{$team->twitter}}">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" target="_blank" href="{{$team->instagram}}">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" target="_blank" href="{{$team->linkedin}}">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                Sorry, No Data Found....
            @endif
        </div>
    </div>
    <!-- ./Team member -->
</section>
<!-- Our Team  Ends -->

@include('frontend.includes.donate')

@endsection
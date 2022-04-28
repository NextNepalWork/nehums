@extends('frontend.layouts.app')
@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">
        <img src="{{asset('frontend/assets/images/product-images/1.jpg')}}" alt="breadcrumb-image" class="img-fluid">
    </div>
    <div class="overlay position-absolute">
        <div class="title p-4">Donate Us</div>
    </div>
</section>
<!-- Breadcrumbs Ends -->

@include('frontend.includes.donate')

@endsection
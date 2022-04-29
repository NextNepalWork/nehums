<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nehums</title>
    <!-- Bootstrap link Starts -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap-4.3.1/css/bootstrap.min.css.map')}}">
    <!-- Bootstrap link Ends -->
    <!-- Font Awesome Link Starts -->
    <link rel="stylesheet" href="{{asset('frontend/assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!-- Font Awesome Link Ends -->
    <!-- Slick Css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/slick/slick-theme.css')}}">
    <!-- Slick Css Ends-->
    <!-- Custom Links -->
    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <!-- Font Link Ends -->
    <!-- Lightbox Gallery -->
    <link rel="stylesheet" href="{{asset('frontend/assets/lighbox-gallery-1.6.14/lightbox1.6.14.css')}}">
    <!-- Lightbox Gallery Ends -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .dropdown-menu .active{
            background-color:var(--main-color) !important;
            /* color: #ffffff!important; */
        }
    </style>
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Custom Links Ends -->
    <link rel="stylesheet" type="text/css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body onload="myFunction()">
    <div id="loading"></div>
    <!-- Whole Body Wrapper Starts -->
    <section id="index-wrapper">
        <!-- Header -->
        @include('frontend.includes.nav')

        @yield('content')
        @include('frontend.includes.footer')
    
        {{-- @include('frontend.partials.modal') --}}
    </section>

<!-- Scroll Button -->
<section id="scroll-btn">
    <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</section>
<!-- Scroll Button Ends -->
<!-- Whole Body Wrapper Ends -->
<!-- 1st Jquery Link Starts-->
<script src="{{asset('frontend/assets/jquery-3.5.1/jquery-3.5.1.js')}}"></script>
<!-- Jquery Link Ends-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- 2nd Popper Js Starts -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<!-- Popper Js Ends -->
<!-- 3rd Bootstrap Js Link Starts -->
<script src="{{asset('frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/bootstrap-4.3.1/js/bootstrap.min.js.map')}}"></script>
<!-- Bootstrap Js Link Ends -->
<!-- Slick Js -->
<script src="{{asset('frontend/assets/slick/slick.min.js')}}"></script>
<!-- Slick Js Ends-->
<!-- Magnific Popup -->
<script src="{{asset('frontend/assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!-- Magnific Popup Ends-->
<!-- Lightbox Gallery -->
<script src="{{asset('frontend/assets/lighbox-gallery-1.6.14/lightbox.1.6.14.js')}}"></script>
<!-- Lightbox Gallery Ends -->
<!-- Custom Js  -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<!-- Custom Js Ends -->

<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>
  
  @include('frontend.includes.modal')


</body>

</html>
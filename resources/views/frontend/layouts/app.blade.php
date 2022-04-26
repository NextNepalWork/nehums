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
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <!-- Custom Links Ends -->
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
<!-- Mobile Nav -->
<div class="modal fade" id="rightsidebarfilter" tabindex="-1" role="dialog"
    aria-labelledby="rightsidebarfilterlabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content h-100">
            <div class="modal-header px-3 py-3 align-items-center w-100" style="margin: unset;">
                <div class="cart-wishlist" style="margin: unset;">
                    <div class="image">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('frontend/assets/images/logo/3.png')}}" alt="navigation-logo" class="img-fluid">
                        </a>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body d-flex justify-content-between h-100 px-4">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>Our Work<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="programs.html">Programs</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="events.html">Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span>Gallery<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="photo-gallery.html">Photo
                                                    Gallery</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="video-gallery.html">Video
                                                    Gallery</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="our-team.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span>Our Team</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                    aria-hidden="true"></i></span> Opportunity<span class="ml-1">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container d-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0"
                                                    href="admission-procedure.html">Admission Procedure</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="job-vacancy.html">Job Vacancy</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0"
                                                    href="volunteer-internship.html">Volunteer Internship</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="modal-footer py-3">
                <a class="w-50 text-center text-white" href="under-construction.html"> <span class="mr-2"><i
                            class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                <a class="w-50 text-center text-white" href="under-construction.html"> <span class="mr-2"><i
                            class="fa fa-paper-plane" aria-hidden="true"></i></span>Register</a>
            </div> -->
        </div>
    </div>
</div>
<!-- Mobile Nav -->
<!-- Job Apply -->
<div class="modal fade jobapply-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-5">
            <form class="row">
                <div class="col-6 form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="First Name" value="">
                </div>
                <div class="col-6 form-group">
                    <input type="email" name="" class="form-control" placeholder="Your Email" value="">
                </div>
                <div class="col-6 form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number"
                        value="">
                </div>
                <div class="col-12 form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message"
                        style="width: 100%; height: 100px"></textarea>
                </div>
                <div class="col-12 form-group text-center">
                    <button type="submit" class="anchor-btn2 bg-transparent">
                        Submit
                    </button>
                    <!-- <a href="#" class="btn mt-4">OUR SERVICES</a> -->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Job Apply Ends -->
</body>

</html>
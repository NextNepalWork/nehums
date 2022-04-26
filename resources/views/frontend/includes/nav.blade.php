<!-- Top Header Navigation -->
<header id="top-header-navigation-wrapper">
    <div class="container">
        <div class="top-header py-1">
            <ul class="d-flex justify-content-end align-items-center m-0">
                <!-- <li>
                <a class="nav-link" href="login-register.html">
                    <span class=" mr-2">
                        <i class=" fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
            </li>
            <li>
                <a class="nav-link" href="register-login.html">
                    <span class="mr-2">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i></span>Register</a>
            </li> -->
                <!-- <li>
                <a class="nav-link" href="">Save more on App</a>
            </li> -->
                <li>
                    <a class="nav-link" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- Top Header Navigation Ends -->
<!-- Navigation Starts -->
<section id="navigation-wrapper" class="navigation-wrap">
    <nav class="navbar header-sticky justify-content-around">
        <div class="image">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('admin/image/'.$setting->logo)}}" alt="{{$setting->title}}" class="img-fluid">
            </a>
        </div>
        <div class="navbar-menus d-xl-block d-lg-block d-none" id="navbarmain">
            <ul class="navbar-nav py-4 py-md-0 d-flex flex-row flex-wrap" role="menu">
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Our Work<span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu position-absolute p-0 border-0">
                        <a class="dropdown-item" href="programs.html">Programs</a>
                        <a class="dropdown-item" href="events.html">Events</a>
                    </div>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Gallery<span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu position-absolute p-0 border-0">
                        <a class="dropdown-item" href="video-gallery.html">Video Gallery</a>
                        <a class="dropdown-item" href="photo-gallery.html">Photo Gallery</a>
                    </div>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="our-team.html">Our Team</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Opportunity<span class="ml-1">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu position-absolute p-0 border-0">
                        <a class="dropdown-item" href="admission-procedure.html">Admission Procedure</a>
                        <a class="dropdown-item" href="job-vacancy.html">Job Vacancy</a>
                        <a class="dropdown-item" href="volunteer-internship.html">Volunteer Internship</a>
                    </div>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                </li>
                <!-- Popup Search Modal Anchor -->
                <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="btn" data-toggle="modal" data-target="#searchpopupmodal"><i
                        class="fa fa-search"></i></a>
            </li> -->
                <!-- Popup Search Modal Anchor Ends -->
            </ul>
        </div>
        <div class="donate-btn desk-nav d-xl-block d-lg-block d-none">
            <ul class="d-flex align-items-center justify-content-between m-0">
                <li>
                    <a href="donate.html" class="anchor-btn2 py-2">Donate<span class="ml-2"><i
                                class="fa fa-angle-right"></i></span> </a>
                </li>
            </ul>
        </div>
        <!-- Mobile Popup Search Modal Anchor -->
        <!-- <a class="btn d-xl-none d-lg-none d-md-block search-button" data-toggle="modal"
            data-target="#searchpopupmodal"><i class="fa fa-search"></i></a> -->
        <!-- Mobile Popup Search Modal Anchor Ends -->
        <!-- Small Desktop & mobile Cart-wishlist and Profile -->
        <!-- Button trigger modal -->
        <div class="mobile-menu d-lg-none d-md-block mr-4 position-absolute" data-toggle="modal"
            data-target="#rightsidebarfilter"><span class="mr-2"><i class="fa fa-bars fa-2x"
                    aria-hidden="true"></i></span>
        </div>
        <!-- Button trigger modal -->
        <!-- Small Desktop & mobile Cart-wishlist and Profile End-->
    </nav>
</section>
<!-- Navigation Ends -->
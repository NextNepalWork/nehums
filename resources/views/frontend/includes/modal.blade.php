<!-- Mobile Nav -->
<div class="modal fade" id="rightsidebarfilter" tabindex="-1" role="dialog"
    aria-labelledby="rightsidebarfilterlabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content h-100">
            <div class="modal-header px-3 py-3 align-items-center w-100" style="margin: unset;">
                <div class="cart-wishlist" style="margin: unset;">
                    <div class="image">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('admin/image/'.$setting->logo)}}" alt="{{$setting->title}}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body d-flex justify-content-between h-100 px-4">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}"> <span class="nav-indication mr-2"><i
                                    class="fa fa-eercast" aria-hidden="true"></i></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}"> <span class="nav-indication mr-2"><i
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
                                                <a class="nav-link head m-0" href="{{route('programs')}}">Programs</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="{{route('events')}}">Events</a>
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
                                                <a class="nav-link head m-0" href="{{route('photos')}}">Photo
                                                    Gallery</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="{{route('videos')}}">Video
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
                        <a class="nav-link" href="{{route('teams')}}"> <span class="nav-indication mr-2"><i
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
                                                    href="{{route('admission')}}">Admission Procedure</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0" href="{{route('job')}}">Job Vacancy</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-12  -->
                                    <div class="col-md-12">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link head m-0"
                                                    href="{{route('volunteer')}}">Volunteer Internship</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"> <span class="nav-indication mr-2"><i
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
            <form class="row py-3" method="post" action="{{route('contact_us')}}">
                @csrf
                <input type="hidden" name="type" value="{{Route::Is('volunteer') ? 'volunteer' : 'job'}}">
                <div class="col-lg-4 col-12 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                        value="" required>
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="" required>
                </div>
                <div class="col-lg-4 col-12 form-group">
                    <input type="number" name="phone" class="form-control" placeholder="Your Phone Number" required>
                </div>
                <div class="col-12 form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message"
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
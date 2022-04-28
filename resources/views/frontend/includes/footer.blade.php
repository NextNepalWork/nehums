        <!-- Footer -->
        <section id="footer-wrapper" class="default-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12 my-2">
                        <div class="image">
                            <a href="{{route('home')}}" class=""> 
                                @if (!empty($setting->logo))
                                    @if(file_exists('admin/image/'.$setting->logo))
                                        <img src="{{asset('admin/image/'.$setting->logo)}}" alt="{{$setting->title}}" class="img-fluid">
                                    @else
                                        <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                                    @endif
                                @else
                                    <img src="{{asset('placeholder.jpg')}}" class="img-fluid events-image">
                                @endif
                            </a>
                        </div>
                        <div class="content mt-3">
                            <p class="font-weight-normal m-0">
                               {{$setting->footer}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 my-2">
                        <ul class="footer-nav-list">
                            <div class="heading">
                                <div class="head">
                                    <a href="">
                                        <h2 class="mb-3">Quick Links</h2>
                                    </a>
                                </div>
                            </div>
                            <li>
                                <a href="{{route('home')}}"><span class="mr-2"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span>Home</a>
                                </h5>
                            </li>
                            <li>
                                <a href="{{route('about')}}"><span class="mr-2"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span>About Us</a></h5>
                            </li>
                            <li>
                                <a href="{{route('contact')}}"><span class="mr-2"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span>Contact Us</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12 my-2">
                        <ul class="footer-nav-list">
                            <div class="heading">
                                <div class="head">
                                    <a href="">
                                        <h2 class="mb-3">Find Us</h2>
                                    </a>
                                </div>
                            </div>
                            <li>
                                <a href=" mailto:{{$setting->email}}"><span class="mr-2"><i
                                            class="fa fa-envelope-square"
                                            aria-hidden="true"></i></span>{{$setting->email}}</a>
                                </h5>
                            </li>
                            <li>
                                <a href="tel:{{$setting->contact}}"><span class="mr-2"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>{{$setting->contact}}</a></h5>
                            </li>
                            <li>
                                <a href="#"><span class="mr-2"><i class="fa fa-map"
                                            aria-hidden="true"></i></span>{{$setting->address}}</a></h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Ends -->
        <!-- Copyright -->
        <section id="copyright-wrapper" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto text-center">
                        <p class="text-white m-0">Copyright © 2022 All rights reserved | NextNepal </p>
                        <!-- <ul class="p-0 d-flex justify-content-center">
                        <li class="mr-3"><a href=""><img
                                    src="data:image/png;base64,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"
                                    class="img-fluid"></a></li>
                        <li class="mr-3"><a href=""><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png"
                                    class="img-fluid"></a></li>
                        <li class="mr-3"><a href=""><img
                                    src="https://www.investopedia.com/thmb/JPZyTxQvXhP0EA7TQumPMJPQzWc=/1280x720/filters:fill(auto,1)/Discover-logo-28a70026a79d4023adafb0f5e2e773cf.jpg"
                                    class="img-fluid"></a></li>
                        <li class="mr-3"><a href=""><img
                                    src="https://telegraphstar.com/wp-content/uploads/2021/05/saupload_am_amex_06.jpg"
                                    class="img-fluid"></a></li>
                    </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright Ends -->
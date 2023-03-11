    <!--====== FOOTER PART START ======-->
    @php
        use App\Models\Contact;
        $conatact = Contact::first();
    @endphp
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo logo2">
                                <a href="#"><img src="{{ asset('assets/frontend/images/logo-2.png') }}"
                                        alt="Logo"></a>
                            </div>
                            <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh
                                id elit. Duis sed odio sit amet nibh vulputate.</p>
                            <ul class="mt-20">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('index') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="{{ route('aboutus') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="{{ route('all-courses') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>All Courses</a></li>
                                <li><a href="{{ route('stories') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>Stories</a></li>
                                <li><a href="{{ route('news') }}" target="_blank"><i class="fa fa-angle-right"></i>News
                                        & Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('teachers') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="{{ route('contact') }}" target="_blank"><i
                                            class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-angle-right"></i>Documentation</a>
                                </li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                {{-- <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{ $conatact->address ??'' }}</p>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{ $conatact->phone ??'' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{ $conatact->email ??'' }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->


    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->

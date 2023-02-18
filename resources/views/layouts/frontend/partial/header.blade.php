{{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif --}}
<!--====== PRELOADER PART START ======-->

{{-- <div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div> --}}

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">


    <div class="header-logo-support pt-2 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{route('index')}}">
                            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 align-center">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/images/all-icon/support.png') }}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Need Help? call us free</p>
                                <span>321 325 5678</span>
                            </div>
                        </div>
                        <div class="button float-left">
                            <a href="#" class="main-btn" style="padding: 0 30px; line-height: 45px;">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{route('index')}}">Home</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('aboutus')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('service')}}">Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('courses')}}">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses.html">Design & Development</a></li>
                                        <li><a href="courses-singel.html">Design & Development</a></li>
                                        <li><a href="courses-singel.html">Design & Development</a></li>
                                        <li><a href="courses-singel.html">Design & Development</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('teachers')}}">Our teachers</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('stories')}}">Stories</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{route('clints')}}">Our Clints</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('news')}}">News & Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}">Contact Us</a>

                                </li>

                            </ul>
                            <ul class="navbar-nav">
                                {{-- @auth
                                <li class="nav-item dropdown  navig-link">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo "<img src='" . asset(Auth::user()->image) . "' alt='sdfd' style='height: 30px;width: 30px;border-radius: 100%;object-fit: cover;object-position: center center;'>"; ?> {{ Auth::user()->fullname }}
                                    </a>
                                    <div class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('user/dashboard') }}">Dashboard</a>
                                        <a class="dropdown-item" href="{{ url('live-chat') }}">Message</a>
                                        <a class="dropdown-item" href="{{ url('notification') }}">Notifications</a>
                                        <a class="dropdown-item" href="#">Purchase History</a>
                                        <a class="dropdown-item" href="{{ url('help') }}">Help</a>
                                        <a class="dropdown-item" href="{{ url('logout') }}">Log Out</a>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item {{ request()->is('login') ? 'active' : '' }}  navig-link">
                                    <a class="nav-link text-success-custom" href="{{ url('login') }}">Log in</a>
                                </li>
                                <li class="nav-item  navig-link">
                                    <a class="nav-link text-success-custom" href="#">|</a>
                                </li>
                                <li class="nav-item {{ request()->is('user-type') ? 'active' : '' }}  navig-link">
                                    <a class="nav-link text-success-custom" href="{{ url('register') }}">Sign up</a>
                                </li>
                            @endauth --}}
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 sm:block d-flex">
                                        @auth
                                            <li class="nav-item btn-group">
                                                <li type="button"  data-bs-toggle="dropdown">
                                                    <a type="button" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role=""
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php echo "<img src='" . asset(Auth::user()->prodicle) . "'  style='height: 30px;width: 30px;border-radius: 100%;object-fit: cover;object-position: center center;'>"; ?> {{ Auth::user()->name }}
                                                    </a>
                                                </li>
                                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                                    <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                                                    <a class="dropdown-item" href="{{ url('live-chat') }}">Message</a>
                                                    <a class="dropdown-item" href="{{ url('notification') }}">Notifications</a>
                                                    <a class="dropdown-item" href="#">Purchase History</a>
                                                    <a class="dropdown-item" href="{{ url('help') }}">Help</a>
                                                   <a class="dropdown-item" href="{{ route('logout') }}">Log out </a>

                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                                                <a class="nav-link text-success-custom" href="{{ url('login') }}">Log in</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-success-custom" href="#">|</a>
                                            </li>

                                            @if (Route::has('register'))
                                            <li class="nav-item {{ request()->is('user-type') ? 'active' : '' }}">
                                                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                            <div class="">

                              </div>

                        </div>
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

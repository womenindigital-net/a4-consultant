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
@php
    use App\Models\CourseCategory;
    $categorys = CourseCategory::get();
@endphp


<header id="header-part">
    <div class="header-logo-support pt-2 pb-2">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{ route('index') }}">
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
                            <div class="cont text-right">
                                <p>Need Help? call us free</p>
                                <span>321 325 5678</span>
                            </div>
                        </div>
                        {{-- <div class="button float-left">
                            <a href="#" class="main-btn" style="padding: 0 30px; line-height: 45px;">Apply Now</a>
                        </div> --}}
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
                                    <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('index') }}">Home</a>

                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('aboutus')) ? 'active' : '' }}" href="{{ route('aboutus') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('service')) ? 'active' : '' }}" href="{{ route('service') }}">Our Services</a>
                                </li>
                                <li class="nav-item dropdown show">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                                    <ul class="sub-menu dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a href="{{ route('all-courses') }}" class="dropdown-item">All Courses</a>
                                        </li>
                                        @foreach ($categorys as $cat)
                                            <li><a href="{{ route('category.course.show', $cat->id) }}"
                                                    class="dropdown-item">{{ $cat->categoryTitle }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('teachers')) ? 'active' : '' }}" href="{{ route('teachers') }}">Our teachers</a>

                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('stories')) ? 'active' : '' }}" href="{{ route('stories') }}">Stories</a>

                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('clints')) ? 'active' : '' }}" href="{{ route('clints') }}">Our Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('news')) ? 'active' : '' }}" href="{{ route('news') }}">News & Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>

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
                                    <div class="hidden top-0 right-0 px-6 sm:block d-flex">
                                        @auth
                                            <li class="nav-item btn-group dropdown show">
                                                <a type="button" class="nav-link dropdown-toggle" href="#"
                                                    id="navbarDropdown" role="" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <?php if (Auth::user()->picture__input) {
                                                        echo "<img src='" . asset(Auth::user()->picture__input) . "'  style='height: 30px;width: 30px;border-radius: 100%;object-fit: cover;object-position: center center;'>";
                                                    } else {
                                                        echo "<img src='" . asset('uploads/defoultImage/comic-boy.png') . "'  style='height: 30px;width: 30px;border-radius: 100%;object-fit: cover;object-position: center center;'>";
                                                    }
                                                    ?> {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-lg-end sub-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ url('/dashboard') }}">Dashboard</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log out </a>
                                                    </li>

                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                                                <a class="nav-link text-success-custom" href="{{ url('login') }}">Log
                                                    in</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-success-custom" href="#">|</a>
                                            </li>

                                            @if (Route::has('register'))
                                                <li class="nav-item {{ request()->is('user-type') ? 'active' : '' }}">
                                                    <a href="{{ route('register') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
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

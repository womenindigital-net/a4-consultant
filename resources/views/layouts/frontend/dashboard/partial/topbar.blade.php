
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    /* user dropdown  */
.dropdown-item:hover{
    color: #ffc600 !important;
    /* padding-left: 20px !important; */
    background-color: #00719E;
}
.dropdown-item{
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 198, 0, 0.5);
    color: #fff;
    background-color: #00719E;
}
.dropdown-menu{
    padding: 0px;
}
.dropdown-menu li{
    margin-right: 0px !important;
}
#page-topbar {
    box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 18%);
}
</style>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin') }}/assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/frontend/img/LOGO/billto-logo-main.png')}}" alt="" height="17">
                    </span>
                </a>

                <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/image/favicon.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/image/favicon.png') }}" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm font-size-16 header-item waves-effect" style="padding: 10px;" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="dash-menu">
                <ul class="d-flex" style="padding-left:0px;">
                    <li class="">
                        <a class="active" href="{{route('index')}}">Home</a>

                    </li>
                    <li class="">
                        <a href="{{route('aboutus')}}">About Us</a>
                    </li>
                    <li class="">
                        <a href="{{route('service')}}">Our Services</a>
                    </li>
                    <li class="">
                        <a href="{{route('courses')}}">Courses</a>
                        {{-- <ul class="sub-menu">
                            <li><a href="courses.html">Design & Development</a></li>
                            <li><a href="courses-singel.html">Design & Development</a></li>
                            <li><a href="courses-singel.html">Design & Development</a></li>
                            <li><a href="courses-singel.html">Design & Development</a></li>
                        </ul> --}}
                    </li>
                    <li class="">
                        <a href="{{route('teachers')}}  ">Our teachers</a>

                    </li>
                    <li class="">
                        <a href="{{route('stories')}}">Stories</a>

                    </li>
                    <li class="">
                        <a href="{{route('clints')}}">Our Clints</a>
                    </li>
                    <li class="">
                        <a href="{{route('news')}}">News & Events</a>
                    </li>
                    <li class="">
                        <a href="{{route('contact')}}">Contact Us</a>

                    </li>

                </ul>
            </div>
        </div>
        <div class="" style="margin-right:10px;">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 sm:block d-flex">
                @auth
                    <li class="nav-item btn-group nav-item">
                        <li type="button"  data-bs-toggle="dropdown">
                            <a type="button" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo "<img src='" . asset(Auth::user()->prodicle) . "'  style='height: 30px;width: 30px;border-radius: 100%;object-fit: cover;object-position: center center;'>"; ?> {{ Auth::user()->name }}
                            </a>
                        </li>
                        <ul class="dropdown-menu dropdown-menu-lg-end sub-menu">
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
        </div>

    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

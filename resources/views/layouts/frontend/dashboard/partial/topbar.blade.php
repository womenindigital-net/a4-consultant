<style>
    


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
                        <a href="{{route('teachers')}}">Our teachers</a>

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

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>







            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/image/logo.jpg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                           <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="dropdown-item text-danger">
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

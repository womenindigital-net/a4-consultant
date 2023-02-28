<style>
    .metismenu li {
        display: block;
        width: 91%;
        margin-left: 10px;
    }
    .vertical-menu {
        box-shadow: 0 0.75rem 1.5rem rgb(173 176 181 / 36%);
    }
    body[data-sidebar=dark].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a {
        background: #0081B5 !important;
        color: #fff  !important;
    }
</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" style="margin-top: 15px;">
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">DASHBORARD</span>
                    </a>
                </li>
                {{-- Create Corses --}}
                <li>
                    <a href="{{ route('profile') }}" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">PROFILE</span>
                    </a>

                </li>

                {{-- Create Catergory Courses --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">ENROLL COURSES</span>
                    </a>

                </li>
                {{-- Enroll --}}
                



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End --

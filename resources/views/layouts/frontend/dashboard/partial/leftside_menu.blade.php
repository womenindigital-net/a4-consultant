<style>
    .metismenu li {
        display: block;
        width: 91%;
        margin-left: 10px;
    }
    .vertical-menu {
        box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 26%);
    }
</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
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
                        <span key="t-dashboards">COURSES</span>
                    </a>
                    
                </li>
                {{-- Enroll --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">ENROLL</span>
                    </a>
                    
                </li>
                {{-- Courses instructor --}}
                <li>
                    <a href="{{ route('instructor.create') }}" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">COURSES INSTRUCTOR</span>
                    </a>
                    
                </li>
                {{-- Consultant --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">OUR CONSULTANT</span>
                    </a>
                    
                </li>
                {{-- Slider  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-crosshairs"></i>
                        <span key="t-dashboards">SLIDER</span>
                    </a>
                    
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End --

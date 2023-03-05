<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-danger float-end">04</span>
                        <span key="t-dashboards">DASHBORARD</span>
                    </a>
                </li>
                {{-- Create Catergory Courses --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">COURSES CATEGORY </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('course.category.create') }}" key="t-horizontal">Courses Category
                                create</a></li>
                        <li><a href="{{ route('course.category.list') }}" key="t-horizontal">Courses Category list</a>
                        </li>
                    </ul>
                </li>
                {{-- Courses instructor --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">COURSES INSTRUCTOR</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('instructor.create') }}" key="t-horizontal">Create Courses instructor</a>
                        </li>
                        <li><a href="{{ route('instructor.list') }}" key="t-horizontal">Courses instructor list</a></li>
                    </ul>
                </li>
                {{-- Create Corses --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">COURSES</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('course.create') }}" key="t-horizontal">Courses Create</a></li>
                        <li><a href="{{ route('course.list') }}" key="t-horizontal">Courses List
                                list</a></li>
                    </ul>
                </li>


                {{-- Enroll --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">ENROLL</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('enroll.list')}}" key="t-horizontal">List Enroll</a></li>
                    </ul>
                </li>

                {{-- Consultant --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">OUR CONSULTANT</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('consultant.create') }}" key="t-horizontal">Create Consultant</a>
                        </li>
                        <li><a href="{{ route('consultant.list') }}" key="t-horizontal">Consultant list</a></li>
                    </ul>
                </li>
                {{-- service category --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">SERVICE CATEGORY</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('service.category.create')}}" key="t-horizontal">Service Category
                                create</a></li>
                        <li><a href="{{route('service.category.list')}}" key="t-horizontal">Service Category list</a>
                        </li>
                    </ul>
                </li>
                {{-- service --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">SERVICE</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('service.create') }}" key="t-horizontal">Service Create</a></li>
                        <li><a href="{{ route('service.list') }}" key="t-horizontal">Service List
                                list</a></li>
                    </ul>
                </li>
                {{-- Slider  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">SLIDER</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('slider.create') }}" key="t-horizontal">Create Slider </a></li>
                        <li><a href="{{ route('slider.list') }}" key="t-horizontal">Courses Slider list</a></li>
                    </ul>
                </li>
                {{-- about us  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">About Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('aboutus.create') }}" key="t-horizontal">Create About Us </a></li>
                        <li><a href="{{route('aboutus.list')}}" key="t-horizontal">About Us List</a></li>
                    </ul>
                </li>
                {{-- story  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">STORIES</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('stories.create') }}" key="t-horizontal">Create story</a></li>
                        <li><a href="{{ route('stories.list') }}" key="t-horizontal">Story list</a></li>
                    </ul>
                </li>
                {{-- NEWS & EVENTS  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">NEWS & EVENTS</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('event.create') }}" key="t-horizontal">Create News & Events</a></li>
                        <li><a href="{{ route('event.list') }}" key="t-horizontal">News & Events list</a></li>
                    </ul>
                </li>
                {{-- NEWS & EVENTS  --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">Client</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('client.create') }}" key="t-horizontal">Create Client</a></li>
                        <li><a href="{{ route('client.list') }}" key="t-horizontal">Client list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-copy text-info"></i>
                        <span key="t-dashboards">contact</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.create') }}" key="t-horizontal">Create Contact</a></li>
                        <li><a href="{{ route('contact.list') }}" key="t-horizontal">Contact list</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End --

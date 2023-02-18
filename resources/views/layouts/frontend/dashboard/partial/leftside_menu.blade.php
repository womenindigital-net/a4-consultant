
<style>
/* .vertical-menu {
    background: #0081B5 !important;
} */
</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>



                 {{--Create Corses --}}
                 <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-film text-danger"></i>
                        <span key="t-dashboards">Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('course.create') }}" key="t-horizontal">Courses Create</a></li>
                            <li><a href="{{route('course.list')}}" key="t-horizontal">Courses List
                                list</a></li>
                    </ul>
                </li>

                {{-- Create Catergory Courses --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-film text-danger"></i>
                        <span key="t-dashboards">Category Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('course.category.create') }}" key="t-horizontal">Courses Category create</a></li>
                        <li><a href="{{ route('course.category.list')}}" key="t-horizontal">Courses Category list</a></li>
                    </ul>
                </li>
                {{-- Enroll --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-film text-danger"></i>
                        <span key="t-dashboards">Enroll</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/organization/package/page') }}" key="t-horizontal">hello
                            create</a></li>
                            <li><a href="{{ url('admin/organization/package/list') }}" key="t-horizontal">Hi
                                list</a></li>
                    </ul>
                </li>
                {{-- Courses instructor --}}
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fa-solid fa-film text-danger"></i>
                        <span key="t-dashboards">Courses instructor</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('instructor.create') }}" key="t-horizontal">Create Courses instructor</a></li>
                            <li><a href="{{ route('instructor.list')}}" key="t-horizontal">Courses instructor list</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End --

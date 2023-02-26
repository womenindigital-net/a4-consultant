
@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('assets/frontend/images/page-banner-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $categoriesDetails->courseCategory->categoryTitle }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $categoriesDetails->courseCategory->categoryTitle }}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES SINGEl PART START ======-->

    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3>{{ $categoriesDetails->courseTitle }}</h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img  src="{{ asset($categoriesDetails->Instructor->instructorImage)}}" alt="Teacher">
                                        </div>
                                        <div class="name">
                                            <span>Teacher</span>
                                            <h6>{{ $categoriesDetails->Instructor->instructorName }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6>{{ $categoriesDetails->courseCategory->categoryTitle }} </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Review</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="rating">(20 Reviws)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="{{ asset($categoriesDetails->coursesImage)}}" alt="Courses">
                        </div> <!-- corses singel image -->

                        <div class="corses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="singel-description pt-40">
                                            <h6>Course Description</h6>
                                            <p>{{ $categoriesDetails->courseDescription }}</p>
                                        </div>
                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                                <img src="{{ asset($categoriesDetails->Instructor->instructorImage)}}" alt="Instructor">
                                            </div>
                                            <div class="author-name">
                                                <a href="#"><h5>{{ $categoriesDetails->Instructor->instructorName }}</h5></a>
                                                <span>{{ $categoriesDetails->Instructor->instructorPosition }}</span>
                                                {{-- <ul class="social">
                                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                        <div class="instructor-description pt-25">
                                            <p>{{ $categoriesDetails->Instructor->instructorDescription }}</p>
                                        </div>
                                    </div> <!-- instructor cont -->
                                </div>
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- corses singel left -->

                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duaration : <span>{{  $categoriesDetails->duration }}</span></li>
                                    <li><i class="fa fa-clone"></i>Leactures : <span>{{  $categoriesDetails->leactures }}</span></li>
                                    <li><i class="fa fa-beer"></i>Quizzes :  <span>{{  $categoriesDetails->quizzes }}</span></li>
                                    <li><i class="fa fa-user-o"></i>Time :  <span>{{  $categoriesDetails->time }}</span></li>
                                </ul>
                                <div class="price-button pt-10">
                                    <!-- <span>Price : <b>$25</b></span> -->
                                    <a href="{{ route('enroll', $categoriesDetails->id) }}" class="main-btn">Enroll Now</a>
                                </div>
                            </div> <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You make like </h4>

                                 @foreach ($latestCourses as $latestCourse)
                                 <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="{{ asset($latestCourse->coursesImage)}}" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="{{ route('course.details', $latestCourse->id) }}"><h4>{{ $latestCourse->courseTitle }}</h4></a>
                                        <ul>
                                            {{-- <li><a href="#"><i class="fa fa-user"></i>31</a></li> --}}
                                            <li>{{ $latestCourse->price }}</li>
                                        </ul>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES SINGEl PART ENDS ======-->

@endsection


@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('assets/frontend/images/page-banner-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->

    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/images/course/cu-1.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Fee <br> 10,000TK</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="{{route('course.details')}}"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="button float-left">
                                    <a href="{{ route('course.details') }}" class="main-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                        </div>

                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->
@endsection

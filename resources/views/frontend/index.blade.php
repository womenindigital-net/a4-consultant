@extends('layouts.frontend.master')
@section('content')
<style>
    .page-link {
        z-index: 1;
        color: #000;
        background-color: #ffc600;
        border-color: #007bff;
        font-size: 15px;
        color: #000;
        width: 40px;
        height: 40px;
        border: 2px solid #aaa;
        border-radius: 5px;
        margin-left:5px !important;
    }
    .page-item.disabled .page-link {
        z-index: 1;
        color: #000;
        background-color: #ffc600;
        border-color: #007bff;
        font-size: 15px;
        color: #000;
        width: 40px;
        height: 40px;
        border: 2px solid #aaa;
        border-radius: 5px;
        margin-left:5px !important;
    }

    .pagination {
        justify-content: center;
    }
</style>
    <!--====== SLIDER PART START ======-->
    <section id="slider-part" class="slider-active">
        @foreach ($sliders as $slider)
            <div class="single-slider bg_cover pt-150"
                style="background-image: url('{{ asset($slider->sliderImage) }}');" data-overlay="4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9">
                            <div class="slider-cont">
                                <h1 data-animation="bounceInLeft" data-delay="1s">{{ $slider->sliderTitle }}
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.3s">{{ $slider->sliderDescription }}</p>
                                <ul>
                                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ route('service') }}">Our
                                            Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        @endforeach
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4">
                        <div class="category-text">
                            <h2>Giving 100% in all our dealings</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/frontend/images/all-icon/ctg-1.png') }}"
                                                alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Human Resources Development</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('assets/frontend/images/all-icon/ctg-2.png') }}"
                                                alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Management Services</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('assets/frontend/images/all-icon/ctg-3.png') }}"
                                                alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Empowerment Program</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-4">
                                        <span class="icon">
                                            <img src="{{ asset('assets/frontend/images/all-icon/ctg-4.png') }}"
                                                alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Training & Development</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to <br> A4 Consultants</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>{{ $aboutus->des ??'' }}</p>
                        <a href="#" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>
                            @forelse ($upcomingEvents as $Event)
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> {{ $Event->date }}</span>
                                    <a href="events-singel.html">
                                        <h4>{{ $Event->title }}</h4>
                                    </a>

                                    <span><i class="fa fa-clock-o"></i> {{ date('h:i A', strtotime($Event->time)) }} - {{ date('h:i A', strtotime($Event->finishTime))}}</span>
                                    <span><i class="fa fa-map-marker"></i> {{ $Event->address }}</span>
                                </div>
                            </li>

                            @empty
                              <h1 class="text-danger">No Upcoming Event Available.</h1>
                            @endforelse

                        </ul>
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{ asset('assets/frontend/images/about/bg-1.png') }}" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for fall 2019</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat
                                ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for scholarship</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat
                                ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h2>Our courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                @forelse ($allCourses as $allCourse )
                <div class="col-lg-4 course-slider">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset($allCourse->coursesImage) }}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Fee <br>{{ $allCourse->price }}TK</span>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="d-flex align-items-center">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="pl-3">(20 Reviws)</span>
                            </div>
                            <div class="course-cart" style="height: 120px;">
                                <a href="courses-singel.html">
                                    <h4>{{ $allCourse->courseTitle }}</h4>
                                </a>
                            </div>
                            <div class="course-teacher">
                                <div class="button float-left">
                                    <a href="{{ route('course.details', $allCourse->id) }}" class="main-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                @empty
                <h1 class="text-danger">No Couses available</h1>
                @endforelse


            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Consulstants</h5>
                        <h2>Meet our Consultants</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons
                            equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi
                            accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. <br> <br> auci elit cons equat
                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi
                            accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris</p>
                        <a href="#" class="main-btn-notHover mt-55">Career with us</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                           @foreach ( $consultants as $consultant)
                           <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset($consultant->consultantImage) }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html">
                                            <h6>{{$consultant->consultantName}}</h6>
                                        </a>
                                        <span>{{$consultant->consultantDesignation}}</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                           @endforeach

                        </div> <!-- row -->
                        <div class="row text-end">
                            <div class="mt-5 text-end">
                                {{ $consultants->links() }}
                            </div>
                        </div>
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->


    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
        style="background-image: url('{{ asset('assets/frontend/images/bg-2.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('assets/frontend/images/testimonial/t-1.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('assets/frontend/images/testimonial/t-2.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{ asset('assets/frontend/images/testimonial/t-3.jpg') }}" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed
                                odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->


    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 partner-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title d-flex justify-content-center">
                        <h2 style="border-bottom: 2px solid #0081B5; width:auto;">Partners</h2>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row patnar-slied">
                @foreach ($clients as $client)
                    <div class="col-lg-12">
                        <div class="singel-patnar text-center mt-40">
                            <img src="{{ asset($client->image) }}" alt="Logo">
                        </div>
                    </div>
                @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->
@endsection

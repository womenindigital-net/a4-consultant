
@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{ asset('assets/frontend/images/page-banner-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Stories</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Stories</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="singel-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset($story->storiesImage)}}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <a href="#"><h3>{{$story->title}}</h3></a>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>{{$story->date}}</a></li>
                               {{-- <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li> --}}
                               {{-- <li><a href="#"><i class="fa fa-tags"></i>Education</a></li> --}}
                           </ul>
                           <p>{{$story->description}}</p>
                       </div>
                   </div> <!-- singel blog -->
               </div>
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-post mt-30">
                                   <h4>Popular Posts</h4>
                                   <ul>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('assets/frontend/images/blog/blog-post/bp-1.jpg')}}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Introduction to languages</h6>
                                                       <span>20 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('assets/frontend/images/blog/blog-post/bp-2.jpg')}}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>How to build a game with java</h6>
                                                       <span>10 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('assets/frontend/images/blog/blog-post/bp-1.jpg')}}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Basic accounting from primary</h6>
                                                       <span>07 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                   </ul>
                               </div> <!-- saidbar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
@endsection


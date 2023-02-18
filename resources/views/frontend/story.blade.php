
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
               <div class="col-lg-4">
                   <div class="singel-blog mt-30">
                       <div class="blog-image">
                           <img src="{{ asset('assets/frontend/images/blog/b-1.jpg')}}" alt="Blog">
                       </div>
                       <div class="blog">
                           <a href="{{route('story.details')}}"><h3>Few tips for get better results in examination</h3></a>
                           <a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
               </div>
               <div class="col-lg-4">
                   <div class="singel-blog mt-30">
                       <div class="blog-image">
                           <img src="{{ asset('assets/frontend/images/blog/b-1.jpg')}}" alt="Blog">
                       </div>
                       <div class="blog">
                           <a href="{{route('story.details')}}"><h3>Few tips for get better results in examination</h3></a>
                           <a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
               </div>
               <div class="col-lg-4">
                   <div class="singel-blog mt-30">
                       <div class="blog-image">
                           <img src="{{ asset('assets/frontend/images/blog/b-1.jpg')}}" alt="Blog">
                       </div>
                       <div class="blog">
                           <a href="{{route('story.details')}}"><h3>Few tips for get better results in examination</h3></a>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
               </div>
               <div class="col-lg-4">
                   <div class="singel-blog mt-30">
                       <div class="blog-image">
                           <img src="{{ asset('assets/frontend/images/blog/b-1.jpg')}}" alt="Blog">
                       </div>
                       <div class="blog">
                           <a href="{{route('story.details')}}"><h3>Few tips for get better results in examination</h3></a>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
               </div>

           </div> <!-- row -->
           <div class="row">
               <div class="col-12">
                   <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-lg-end justify-content-center">
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
           </div>
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
@endsection


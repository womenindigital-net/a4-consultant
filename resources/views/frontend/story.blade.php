@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->


    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('assets/frontend/images/page-banner-1.jpg') }})">
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
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                @foreach ($stories as $story)
                    <div class="col-lg-4">
                        <div class="singel-blog mt-30">
                            <div class="blog-image">
                                @foreach ($story->StoriesImages as $images)
                                    <img src="{{  $images->image }}" alt="">
                                @break
                            @endforeach
                        </div>
                        <div class="blog">
                            <a href="{{ route('story.details', $story->id) }}">
                                <h3>{{ $story->title }}</h3>
                            </a>
                            <a href="#"><i class="fa fa-calendar"></i>{{ $story->date }}</a>
                            <p>{{ substr($story->description, 0, 100) }}...</p>

                        </div>
                    </div> <!-- singel blog -->
                </div>
            @endforeach


        </div> <!-- row -->
        <div class="row text-end">
            <div class="mt-5 text-end">
                {{ $stories->links() }}
            </div>
        </div>

    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->
@endsection

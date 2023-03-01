@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('assets/frontend/images/page-banner-4.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Clints</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Clints</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 partner-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title d-flex justify-content-center">
                        <h2 style="border-bottom: 2px solid #0081B5; width:auto;">Our Clints</h2>
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

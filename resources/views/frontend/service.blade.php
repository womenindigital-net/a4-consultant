@extends('layouts.frontend.master')
@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('assets/frontend/images/page-banner-2.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== SERVICE PART START ======-->
    <section id="about-page" class="pt-70 pb-110 ">
        <div class="container">
            <div class="row">
                @php
                    use App\Models\Service;
                @endphp
                @foreach ($servicesCategories as $category)
                    <div class="col-lg-5">
                        <div class="section-title mt-50">
                            <h5>Our Service</h5>
                            <h2>{{ $category->categoryTitle }}</h2>
                        </div> <!-- section title -->
                        <div class="about-cont">
                            <p>{{ $category->categoryDescription }}</p>
                        </div>
                    </div> <!-- about cont -->
                    <div class="col-lg-7">
                        <div class="about-image mt-50">
                            <img src="{{ asset($category->image) }}" alt="About">
                        </div> <!-- about imag -->
                    </div>
                    @php
                        $categoryId = $category->id;
                        $services = Service::where('service_category_id', $categoryId)->get();
                    @endphp
                    <div class="row mb-5">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="about-singel-items mt-30">
                                    <h4>{{ $service->name }}</h4>
                                    <p>{{ $service->description }}</p>
                                </div> <!-- about singel -->
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
    </section>

@endsection

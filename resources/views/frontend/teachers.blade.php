
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
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('assets/frontend/images/page-banner-3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Teachers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Teachers</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
            @foreach ($instractor as $teacher )
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                     <div class="image">
                         <img src="{{ asset($teacher->instructorImage)}}" alt="Teachers">
                     </div>
                     <div class="cont">
                         <a href="#"><h6>{{$teacher->instructorName}}</h6></a>
                         <span>{{$teacher->instructorPosition}}</span>
                     </div>
                 </div> <!-- singel teachers -->
            </div>
            @endforeach
               
           </div> <!-- row -->
           <div class="row text-end">
            <div class="mt-5 text-end">
                {{ $instractor->links() }}
            </div>
        </div>

        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

@endsection

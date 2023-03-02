@extends('layouts.frontend.master')
@section('content')
{{-- use \Illuminate\Support\Str::limit($string, 150, $end='...')  --}}
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
            @foreach ( $news_event as $newsEvent)
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset($newsEvent->image)}}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i>{{$newsEvent->date}}</span>
                            <a href="{{route('event.details', $newsEvent->id)}}"><h4>{{$newsEvent->title}}</h4> </a>
                            <span><i class="fa fa-clock-o"></i> {{$newsEvent->time}} - {{$newsEvent->finishTime}}</span>
                            <span><i class="fa fa-map-marker"></i>{{$newsEvent->address}}</span>
                            <p>{{ substr($newsEvent->description, 0,  80) }}...</p>
                       </div>
                   </div>
               </div>
               @endforeach
           </div> <!-- row -->
           <div class="row text-end">
            <div class="mt-5 text-end">
                {{ $news_event->links() }}
            </div>
        </div>
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

@endsection
@section('scripts')
    {{-- <script>
    jQuery(".description").text(function (i, text) {
    return text.length > 200 ? text.substr(0, text.lastIndexOf(' ', 50)) + '...' : text;
    });
    </script> --}}
@endsection

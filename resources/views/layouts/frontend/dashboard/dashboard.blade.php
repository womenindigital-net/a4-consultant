<x-app-layout>
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div> --}}
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <!--====== Bootstrap ======-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/png">
        <!--====== Font ======-->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
        <!--====== dashboard css ======-->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/dashboard.css') }}">
        <style>
        .Trush_bg {
            background: #ffb317;
        }
        </style>
   
    </head>
    <body>
        <section class="container-fluid bg-color ">
            <div class="row">
                <div class="col-md-3 col-lg-2 m-0 p-0">
                    @include('layouts.frontend.dashboard.sidebar')
                </div>
                <div class="col-md-9 col-lg-10 m-0 p-0 mt-1">
                
                </div>
            </div>
        </section>
        
    
        @yield('content')
    
    

    
        <!--====== Main js ======-->
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @push('frontend_js')
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        paging: true,
                    });
                });
            </script>
        @endpush
    </body>
    </html>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--  fontawosome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- font Css -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/frontend/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/frontend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!--custom css -->
    <link href="{{ URL::asset('assets/frontend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .propic {
            width: 100px;
            height: 100px;
            /* aspect-ratio: 16/9; */
            background: #ddd;
            align-items: center;
            display: flex;
            justify-content: center;
            margin: auto;
            color: #aaa;
            border: 2px dashed currentcolor;
            cursor: pointer;
            font-family: sans-serif;
            transition: color 300ms ease-in-out, background 300ms ease-in-out;
            outline: none;
            overflow: hidden;
            border-radius: 50%;
        }
        
        
    </style>
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.dashboard.partial.topbar')

        @include('layouts.frontend.dashboard.partial.leftside_menu')
      <!-- page content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('page_content')
                </div>
            </div>
        </div>
    </div>

    @include('layouts.frontend.dashboard.partial.footer')

    <!-- END wrapper -->
    @include('layouts.vendor-scripts')

    {{-- <script>
        var resizefunc = [];
    </script> --}}
    <script src="{{ asset('assets/frontend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!--====== Bootstrap js ======-->
      <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/pages/dashboard.init.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/assets/js/app.js') }}"></script> --}}
    <script src="{{ asset('assets/frontend/assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/pages/form-validation.init.js') }}"></script>
    



    {{-- custom js --}}
    <script src="{{ asset('assets/frontend/assets/custom/custom.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Castellan') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('atmos/light/assets/img/logo.png') }}"/>
    <link rel="icon" href="{{ asset('atmos/light/assets/img/logo.png') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('atmos/light/assets/vendor/pace/pace.css') }}">
    <script src="{{ asset('atmos/light/assets/vendor/pace/pace.min.js') }}"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/light/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/light/assets/vendor/jquery-scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/light/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/light/assets/vendor/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/light/assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('atmos/light/assets/vendor/timepicker/bootstrap-timepicker.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/light/assets/fonts/materialdesignicons/materialdesignicons.min.css') }}">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/light/assets/fonts/feather/feather-icons.css') }}">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('atmos/light/assets/css/atmos.css') }}">
    <link rel="stylesheet" href="{{ asset('summernote/summernote.min.css') }}">

    <style>
        .swal-title-custom{
            font-size: 1.5rem !important;
        }
        .swal-text-custom{
            font-size: 1rem !important;
        }
        .swal-popup-custom{
            width: 25em !important;
        }
        .swal-input-custom{
            font-size: 1rem !important;
        }
        .datepicker{ z-index:99999 !important; }
        #logoutLink:hover{
            cursor: pointer;
        }
        .dataTables_processing{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
        }
        .select2-selection__clear{
            margin-right: 10px;
            z-index: 1;
        }
        .pointer_card {cursor: pointer;}
        .no-drop_cursor {cursor: no-drop;}
        .datepicker{z-index:9999 !important}
    </style>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body class="jumbo-page">
    <main class="py-0">
        @yield('content')
    </main>

<script src="{{ asset('atmos/light/assets/vendor/jquery/jquery.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/jquery-ui/jquery-ui.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/popper/popper.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/bootstrap/js/bootstrap.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/select2/js/select2.full.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/listjs/listjs.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('atmos/light/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('atmos/light/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('atmos/light/assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"   ></script>
<script src="{{ asset('atmos/light/assets/js/atmos.min.js') }}"></script>
</body>
</html>

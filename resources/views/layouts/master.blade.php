<!DOCTYPE html>
<html dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
    <title>@yield('title') &ndash; {{ config('app.name', 'Wecan') }}</title>
    <link href="{{ asset('backend/fonts/mona-sans.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .alert {
            transition: opacity 0.5s ease;
        }
        a{
            text-decoration: none;
        }
    </style>
    @yield('style')
</head>

<body>
    <div class="wrapper" id="app-wrapper">
        @include('layouts.backend.partials.header')
        @include('layouts.backend.partials.sidebar')
        @yield('content')
    </div>
    <!-- Load Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137274529-2"
        type="8ccd07d3e85ecb3134d68cdc-text/javascript"></script>

    <script src="{{ asset('backend/js/main.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backend/js/rocket-loader.min.js')}}"></script>
    <script src="{{ asset('backend/js/beacon.min.js')}}"></script>

    <script>
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(function () {
                successMessage.style.opacity = '0';
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 500);
            }, 5000);
        }
    </script>
@yield('script')
</body>

</html>

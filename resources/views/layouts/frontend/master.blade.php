<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Create Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    <title>@yield('title') - {{ config('app.name', 'Wecan') }}</title>
</head>

<body>
    @include('layouts.frontend.partials.navbar');
    @yield('content')
    @include('layouts.frontend.partials.footer');

    <!-- JAVASCRIPT SECTION -->
    <script data-cfasync="false" src="{{ asset('frontend/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/api.js') }}" async defer type="text/javascript"></script>

    <script src="{{ asset('frontend/js/home.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/rocket-loader.min.js') }}" data-cf-settings="4b8e036a1be2e5502ad979e6-|49" defer></script>
    <script src="{{ asset('frontend/js/beacon.min.js') }}"></script>
</body>

</html>

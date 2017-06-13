<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Coffee Project</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="../libs/flat-ui/flat-ui/images/favicon.ico">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/flat-ui/flat-ui/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/flat-ui/flat-ui/bootstrap/css/bootstrap-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/flat-ui/flat-ui/css/flat-ui.min.css') }}">

</head>
<body>
<div id="app">
    <header class="header-11">
        <div class="container">
            <!-- Navbar - Als de gebruiker niet is ingelogd-->
        @if (Auth::guest())
            @include('layouts.header-guest')


            <!-- Navbar - Als de gebruiker is ingelogd -->
        @elseif (Auth::user()->admin == false)
            @include('layouts.header-loggedin')
            <!-- Als de gebruiker admin is -->
            @else
                @include('layouts.header-admin')
            @endif
        </div>
    </header>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('libs/flat-ui/flat-ui/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('libs/flat-ui/flat-ui/js/bootstrap.min.js') }}"></script>
<!--[if lt IE 8]>
<script src="{{ asset('flat-ui/js/icon-font-ie7.js') }}"></script>
<![endif]-->
<script src="{{ asset('libs/common-files/common-files/js/startup-kit.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="/css/icons.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="/css/black-dashboard.min.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/css/styles.min.css" rel="stylesheet" />
</head>
<body id="mainBody">
    <div>
        @if (!empty($hasNav))
            @include('layouts.nav')
        @endif
        <main>
            <div class="wrapper">
                <div class="sidebar">
                    @include ('layouts.sidebar')
                    <div class="main-panel">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include ('fixed')
        </main>
    </div>
<script>
    document.getElementById("whiteBadge").addEventListener("click", clickToWhite);

    document.getElementById("blackBadge").addEventListener("click", clickToBlack);

    function clickToWhite() {
        document.getElementById("mainBody").classList.add("white-content");
    }

    function clickToBlack() {
        document.getElementById("mainBody").classList.remove("white-content");
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
     <!-- header -->
    @if (Auth::check())
        @include('includes.navbarauth')
    @else
        @include('includes.navbar')
    @endif
     <!-- //header -->

      <!-- background -->
        <div class="shape">
            <div class="child-shape1"></div>
            <div class="child-shape2"></div>
            <div class="child-shape3"></div>
        </div>
        <!-- //background -->

    {{-- content --}}
        @yield('content')
    {{-- //content --}}
   
</body>
</html>
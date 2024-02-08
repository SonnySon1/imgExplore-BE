<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/upload.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/review.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/review-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/favorite.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/image-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uploaded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/followers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/following.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/album.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/add-album.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/update-album.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/add-category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/update-category.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
     <!-- header -->
    @if (Auth::check())
        @include('partials.navbarauth')
    @else
        @include('partials.navbar')
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
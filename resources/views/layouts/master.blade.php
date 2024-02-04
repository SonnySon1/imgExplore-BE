<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
     <!-- header -->
     <head>
        <div class="container">
        <ul class="header">
            <li class="title">.imgExplore</li>
            <nav class="navbar">
                 <li>
                     <ul>
                         <li><a href=""  class="active">Explore</a></li>
                         <li><a href="categories.html">Category</a></li>
                         <li><a href="/upload.html">Create </a></li>
                     </ul>
                 </li>
             </nav>
             <li>
                <div class="not-prof">
                    <a href="notification.html">
                        <i class="bi bi-bell-fill"></i>
                    </a>
                    <a href="dashboard.html">
                        <div class="profile-nav-container">
                            <img src="assets/img/img-p/7.jpg" alt="">
                        </div>
                    </a>
                </div>
            </li>
         </ul>
        </div>
    </head>
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
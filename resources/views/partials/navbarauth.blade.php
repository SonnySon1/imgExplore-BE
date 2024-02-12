<head>
    <div class="container">
    <ul class="header">
        {{-- <li class="title">.imgExplore</li> --}}
        <li class="">.img<strong>Explore</strong></li>
        <nav class="navbar">
             <li>
                 <ul>
                     <li><a href="/explore" class="{{ Request::is('explore') ? 'active' : ' ' }}">Explore</a></li>
                     <li><a href="/categories" class="{{ Request::is('categories') ? 'active' : ' ' }}">Category</a></li>
                     <li><a href="/upload" class="{{ Request::is('upload') ? 'active' : ' ' }}">Create </a></li>
                 </ul>
             </li>
         </nav>
         <li>
            <div class="not-prof">
                <a href="/notification">
                    <i class="bi bi-bell-fill"></i>
                </a>
                <a href="/dashboard">
                    <div class="profile-nav-container">
                        <img src="{{ asset('assets/img/profile/'. Auth::user()->picture) }}" alt="">
                    </div>
                </a>
            </div>
        </li>
     </ul>
    </div>
</head>
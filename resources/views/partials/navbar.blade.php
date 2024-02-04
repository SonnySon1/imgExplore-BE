 <!-- header -->
 <head>
    <div class="container" id="navbar">
    <ul class="header" id="header">
        <li class="title">.imgExplore</li>
        <nav class="navbar">
             <li>
                 <ul>
                     <li><a href="/" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
                     <li><a href="explore" class="{{ Request::is('explore') ? 'active' : '' }}">Explore</a></li>
                     <li><a href="categories" class="{{ Request::is('categories') ? 'active' : '' }}">Category</a></li>
                     <li><a href="" class="{{ Request::is('home') ? 'active' : '' }}">About </a></li>
                 </ul>
             </li>
         </nav>
         <li>
            <a href="/signin" class="sign-in">Sign in</a>
            <a href="/signup" class="sign-up">Sign up</a>
        </li>
     </ul>
    </div>
</head>
 <!-- //header -->
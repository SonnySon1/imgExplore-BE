<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- aos animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
     <!-- header -->
     <head>
        <div class="container" id="navbar">
        <ul class="header" id="header">
            <li class="title">.imgExplore</li>
            <nav class="navbar">
                 <li>
                     <ul>
                         <li><a href="" class="active">Home</a></li>
                         <li><a href="/explore">Explore</a></li>
                         <li><a href="/categories">Category</a></li>
                         <li><a  href="/about">About </a></li>
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

      <!-- background -->
   <div class="shape">
        <div class="child-shape1"></div>
        <div class="child-shape2"></div>
        <div class="child-shape3"></div>
    </div>
    <!-- //background -->
    <!-- main -->
        <main>
                <section class="container" id="content_hiro">
                     <div class="main">
                        <div class="container-text-top-home">
                            <P  data-aos="fade-right" data-aos-duration="1000" class="title-home">Show off your work & find your inspiration</P>
                            <div data-aos="fade-left" data-aos-duration="1000" class="sub-title-home">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas facere non quasi consequuntur laboriosam, alias accusamus, quia unde nobis </p>
                                <a href="">Explore Now</a>
                            </div>
                        </div>
                        <div class="container-tr-element-home">
                            <div>
                                <div data-aos="fade-right" data-aos-duration="1000" class="container-text-memrev">
                                    <div>
                                        <p class="point">3k</p>
                                        <p>Members</p>
                                    </div>
                                    <div>
                                        <p class="point">20k+</p>
                                        <p>Review</p>
                                    </div>
                                </div>
                                <div>
                                    <div data-aos="fade-up" data-aos-duration="1000" class="container-creator-information">
                                        <div class="container-img-creator">
                                            <div class="wrapping-img-creator"><img src="assets/img/img-p/13.jpg" alt=""></div>
                                            <div class="wrapping-img-creator"><img src="assets/img/img-p/5.jpg" alt=""></div>
                                            <div class="wrapping-img-creator"><img src="assets/img/img-p/12.jpg" alt=""></div>
                                        </div>
                                        <p class="point">2k+</p>
                                        <p>creators create digital </p>
                                        <p>and photographic works</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-aos="zoom-in-up" data-aos-duration="1000">
                                    <div class="container-image-hiro-home">
                                        <div class="wrapping-image-hiro-home"><img class="first-img-child-hiro" src="assets/img/hiro/1.jpg"></div>
                                        <div class="wrapping-image-hiro-home"><img class="last-img-child-hiro" src="assets/img/hiro/2.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="container-video" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="wrappin-image-video"><div></div><img src="assets/img/hiro/3.jpg" alt=""></div>
                                    Amet, consectetur ipsum
                                    lorem ipsum dolor sit 
                                    amet, consectetur ipsum
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gradient-section-to-r container-sec2">
                    <div class="main">
                        <div class="container wrapping-sec2">
                            <div data-aos="fade-up" data-aos-duration="1000" class="container-image-sec2">
                                <div class="wrapping-image-sec2">
                                    <img src="assets/img/section/2.svg" alt="">
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-duration="1000" class="container-text-imgsec2">
                                <div class="wrapping-text-imgsec2">
                                    <h1>Discover the best photography works</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla</p>
                                    <a href="" class="btn-explore-sec2">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="dark-section container-sec3">
                    <div class="main">
                        <div class="container wrapping-sec3">
                            <div class="container-text-imgsec3" data-aos="fade-right" data-aos-duration="1000" >
                                <div class="wrapping-text-imgsec3">
                                    <h1>Search ideas you like</h1>
                                    <p>Vestibulum lacinia arcu eget nulla</p>
                                    <a href="" class="btn-explore-sec3">Explore</a>
                                </div>
                            </div> 
                            <div class="container-image-sec3" data-aos="fade-up" data-aos-duration="1000" >
                                <div class="wrapping-image-sec3">
                                    <img src="assets/img/section/3.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gradient-section-to-l container-sec4">
                    <div class="main">
                        <div class="container wrapping-sec4">
                            <div class="wrapping-text-sec4">
                                <h1>LOG IN TO START YOUR NEW WORLD</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                            </div>
                            <div class="container-register-sec4">
                                <div class="wrapping-register-sec4">
                                    <div class="head-register-te">
                                        <h1>Welcome To ImgExplore</h1>
                                        <p>Search for various works</p>
                                    </div>
                                    <div class="container-register-input">
                                        <form action="/signup" method="POST">
                                            @csrf
                                            <div class="input-register-distance">
                                                <label for="">Username</label>
                                                <input name="username" type="text">
                                                @error('username')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-register-distance">
                                                <label for="">Password</label>
                                                <input name="password" type="password">
                                                @error('password')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-register-distance btn-continue">
                                                <button>Continue</button>
                                            </div>
                                        </form>
                                        <div class="split-line-register">
                                            <hr>
                                            <p style="display: flex;">OR</p>
                                        </div>
                                        <div>
                                            <a href="/auth/google" class="google-btn-register">
                                             <div class="wrapping-btn-google">
                                                    Google
                                                </div>
                                            </a>
                                        </div>
                                        <div class="not-register">
                                            <p>By continuing, you argree to imgExplore <strong>Terms of Service</strong> and acknowledge that you've read our <strong>Privacy Policy Notice at collection.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    <!-- //main -->

    <!-- footer -->
        <footer>
            <div class="footer-container">
                    <p>© Copyright imgExplore. All Rights Reserved Designed by imgExplore</p>
                </div>
        </footer>

        {{-- Aos animation --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
</body>
</html>
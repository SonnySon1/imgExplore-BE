<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      {{-- aos animation --}}
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="signin-body">
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="signin-container">
                        <div class="wrapping-signin">
                            <div class="img-signin-left">
                                <!-- <img src="https://source.unsplash.com/random/900×700/?abstract" alt=""> -->
                                <img src="assets/img/log/2.jpg" alt="">
                            </div>
                            <div class="content-signin">
                                <div class="wrapping-content-signin">
                                    <div class="top-text-signin">
                                        <h1>Welcome back ImgExplore</h1>
                                        <p>Search for various works</p>
                                    </div>
                                    <div class="form-signin">
                                        <form action="/signin" method="POST">
                                            @csrf
                                            <div class="input-distance-signin">
                                                <label for="">Username</label>
                                                <input type="text" name="username" value="{{ old('username') }}">
                                                @error('username')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-distance-signin">
                                                <label for="">Password</label>
                                                <input type="password" name="password"> 
                                                @error('password')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                                <br>
                                                @if (session('error_login'))
                                                    <small>{{ session('error_login') }}</small>
                                                @endif
                                            </div>
                                            <div class="input-distance-signin">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="container-split-line-signin">
                                        <hr>
                                        <div class="wrapping-text-or-signin"> 
                                            <h5>OR</h5>
                                        </div>
                                    </div>
                                    <div class="container-signin-with-google">
                                        <a href="/auth/google" class="btn-signin-with-google">Google</a>
                                    </div>
                                    <div class="text-bottom-signin">
                                        <p>Don't you have an account?<a href="/signup">Sign Up</a> here </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    {{-- Aos animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>
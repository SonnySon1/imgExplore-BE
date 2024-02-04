<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imgExplore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="signup-body">
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="signup-container">
                        <div class="wrapping-signup">
                            <div class="content-signup">
                                <div class="wrapping-content-signup">
                                    <div class="top-text-signup">
                                        <h1>Welcome To ImgExplore</h1>
                                        <p>Search for various works</p>
                                    </div>
                                    <div class="form-signup">
                                        <form action="/signup" method="POST">
                                            @csrf
                                            <div class="input-distance-signup">
                                                <label for="">Username</label>
                                                <input name="username" type="text" value="{{ old('username') }}">
                                                @error('username')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-distance-signup">
                                                <label for="">Password</label>
                                                <input name="password" type="password">
                                                @error('password')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-distance-signup">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="container-split-line-signup">
                                        <hr>
                                        <div class="wrapping-text-or-signup"> 
                                            <h5>OR</h5>
                                        </div>
                                    </div>
                                    <div class="container-signup-with-google">
                                        <a href="" class="btn-signup-with-google">Google</a>
                                    </div>
                                    <div class="text-bottom-signup">
                                        <p>Do you already have an account? <a href="/signin">Sign in</a> here</p>
                                    </div>
                                </div>
                            </div>
                            <div class="img-signup-right">
                                <!-- <img src="https://source.unsplash.com/random/900×700/?abstract" alt=""> -->
                                <img src="assets/img/log/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    
</body>
</html>
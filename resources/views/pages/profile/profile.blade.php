@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet-profile">
                        <div class="flex-display-center">
                            <div>
                                <h2>&#64;{{ $data_user->username }} <img src="{{ asset('assets/img/private.png') }}" alt=""></h2>
                                <div class="container-image-profile">
                                    <div class="wrapping-image-profile"> 
                                        <img class="image-profile" src="{{ asset('assets/img/profile/'. $data_user->picture ) }}" alt="">
                                    </div>
                                </div>
                                <div class="information-menu-container">
                                    <div class="information-menu">
                                        <div>
                                            <a href="#posts">
                                                <h3>293k</h3>
                                                <p>Posts</p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/profile/followers">
                                                <h3>212k</h3>
                                                <p>Followers</p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/profile/following">
                                                <h3>20</h3>
                                                <p>Following</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bio-container">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>   
                                </div>
                                <div class="ber-container">
                                    <ul>
                                        <li><a href="" class="active-menu">Posts</a></li>
                                        <li><a href="favorite.html">Favorite</a></li>
                                        <li><a href="">Email</a></li>
                                        <li><a href="" class="follow-menu"><i class="bi bi-person-fill-add"></i></a></li>
                                    </ul>
                                </div>
                                <div class="image-container-profile" id="posts">
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/1.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/2.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/3.webp') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/4.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/5.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/6.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/7.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/8.webp') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/9.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/10.jpg') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/11.webp') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/12.png') }}" alt=""></a>
                                    <a href="image-detail"><img src="{{ asset('assets/img/img-e/13.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
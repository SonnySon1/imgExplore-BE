@extends('layouts.master')

@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-explore">
                        <img class="hiro-explore" src="assets/img/explore.png">
                    </div>
                    <div class="container-category-explore">
                          <ul class="category-explore">
                            <li>For You</li>
                            <li>Art</li>
                            <li>Traditional Art</li>
                            <li>Character Design</li>
                            <li>Illustrations</li>
                            <li>Backgrounds</li>
                            <li>Anime</li>
                            <li>Cartoons</li>
                            <li>Photography</li>
                            <li>Ai Art</li>
                        </ul>
                    </div>
                    <form action="" method="post"> 
                        <div>
                            <input  class="input-search" type="text" name="search" id="search" placeholder="Search" autocomplete="off">
                            <button class="btn-search"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    <div class="image-container">
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/1.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/2.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/3.webp') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/4.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/5.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/6.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/7.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/8.webp') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/9.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/10.jpg') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/11.webp') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/12.png') }}"></a>
                        <a href="/explore/show"><img src="{{ asset('assets/img/img-e/13.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
 @endsection
@extends('layouts.master')

@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-explore">
                        <img class="hiro-explore" src="{{ asset('assets/img/explore.png') }}">
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
                        <div id="image-wrapper">
                            @foreach ($photos as $photo)
                                <a href="/explore/show={{ $photo->uuid }}"><img src="{{ asset('assets/img/img-e/'.$photo->file_location) }}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->

    <script src="{{ asset('assets/js/explore/explore.js') }}"></script>
 @endsection

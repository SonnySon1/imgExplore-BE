@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Album by <strong>{{ Auth::user()->name }}</strong></p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-album-info">
                                <div class="container-text-album">
                                    <div class="title-album">Albums</div>
                                    <div class="sub-title-album">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti.</div>
                                </div>
                                <div class="container-image-album">
                                    <div class="wrapping-image-album"><img src="{{ asset('/assets/img/album/head/1.jpg') }}" alt=""></div>
                                    <div class="wrapping-image-album"><img src="{{ asset('/assets/img/album/head/2.jpg') }}" alt=""></div>
                                    <div class="wrapping-image-album"><img src="{{ asset('/assets/img/album/head/3.jpg') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="search-and-plus-album">
                                <form action="" method="post"> 
                                    <div>
                                        <input  class="input-search-album" type="text" name="search" id="search" placeholder="Search" autocomplete="off">
                                        <button class="btn-search-album"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                                <a href="/album/create" class="plus-button-album"><i class="bi bi-plus-circle-fill"></i></a>
                        </div>
                        <div class="container-album-photo">
                            @foreach ($data_albums as $data_album)
                                <div>
                                    <a href="/album/show={{ $data_album->uuid }}">
                                        <div class="wrapping-album-photos">
                                            <div class="cover-album"></div>
                                            <div class="cover-album-foto"> <img src="{{ asset('assets/img/cover/albums/'.$data_album->cover) }}" alt=""></div>
                                        </div>
                                    </a>
                                    <div class="container-info-album">
                                        <p>{{ $data_album->album_name }}</p>
                                        <a href="/album/show={{ $data_album->uuid }}" class="btn-detail-album">Detail</a>
                                    </div>
                                </div>    
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
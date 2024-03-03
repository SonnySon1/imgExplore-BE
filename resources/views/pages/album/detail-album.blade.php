@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Album by <strong>{{ $data_user->name }}</strong></p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-album-info">
                                <div class="container-text-album">
                                    <div class="title-album">{{ $album->album_name }}</div>
                                    <div class="sub-title-album">{{ $album->description }}</div>
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
                                <a href="/album/edit={{ $album->uuid }}" class="edit-button-album"><i class="bi bi-pencil-square"></i></a>
                        </div>
                        <div class="container-album-photo-detail">
                            @foreach ($data_photos as $data_photo)
                                <div>
                                    <a href="/explore/show={{ $data_photo->uuid }}">
                                        <div class="wrapping-album-photos-detail">
                                            <div class="cover-album-foto-detail"> <img src="{{ asset('assets/img/img-e/'.$data_photo->file_location) }}" alt=""></div>
                                        </div>
                                    </a>
                                    <div class="container-info-album-detail">
                                        <p>{{ $data_photo->photo_title }}</p>
                                        <a href="/explore/show={{ $data_photo->uuid }}" class="btn-detail-album">Detail</a>
                                    </div>
                                </div>    
                            @endforeach
                        </div>
                        {{ $data_photos->links() }}
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
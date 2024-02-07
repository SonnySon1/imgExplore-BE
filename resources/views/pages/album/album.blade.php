@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Album by <strong>Virelix</strong></p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
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
                            <div>
                                <a href="">
                                    <div class="wrapping-album-photos">
                                        <div class="cover-album"></div>
                                        <div class="cover-album-foto"> <img src="{{ asset('assets/img/album/1.png') }}" alt=""></div>
                                    </div>
                                </a>
                                <div class="container-info-album">
                                    <p>Abstract Art</p>
                                    <a href="" class="btn-detail-album">Detail</a>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <div class="wrapping-album-photos">
                                        <div class="cover-album"></div>
                                        <div class="cover-album-foto"> <img src="{{ asset('assets/img/album/2.jpg') }}" alt=""></div>
                                    </div>
                                </a>
                                <div class="container-info-album">
                                    <p>Traditional</p>
                                    <a href="" class="btn-detail-album">Detail</a>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <div class="wrapping-album-photos">
                                        <div class="cover-album"></div>
                                        <div class="cover-album-foto"> <img src="{{ asset('assets/img/album/3.webp') }}" alt=""></div>
                                    </div>
                                </a>
                                <div class="container-info-album">
                                    <p>Photography</p>
                                    <a href="" class="btn-detail-album">Detail</a>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <div class="wrapping-album-photos">
                                        <div class="cover-album"></div>
                                        <div class="cover-album-foto"> <img src="{{ asset('assets/img/album/4.jpg') }}" alt=""></div>
                                    </div>
                                </a>
                                <div class="container-info-album">
                                    <p>Anime Photo</p>
                                    <a href="" class="btn-detail-album">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
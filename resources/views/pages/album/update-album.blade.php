@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Album</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-update-album">
                                <div class="form-input-update-album">
                                    <form action="/album/update={{ $album->uuid }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-distance-update-album">
                                            <label for="cover">Album Cover<span>*</span></label>
                                            <input name="cover" class="input-form" type="file" id="cover">
                                            @error('cover')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-update-album">
                                            <label for="album_name">Album Name<span>*</span></label>
                                            <input name="album_name" class="input-form" type="text" id="album_name" value="{{ $album->album_name }}">
                                            @error('album_name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-update-album">
                                            <label for="description">Album Description<span>*</span></label>
                                            <input name="description" class="input-form" type="text" id="description" value="{{ $album->description }}">
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-update-album">
                                            <button type="submit">Update album</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
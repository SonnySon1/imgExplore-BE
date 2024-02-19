@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Add Album</p>
                            <a href="/album">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-add-album">
                                <div class="form-input-add-album">
                                    <form action="/album/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-distance-add-album">
                                            <label for="cover">Album Cover<span>*</span></label>
                                            <input name="cover" class="input-form" type="file" id="cover">
                                            @error('cover')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-album">
                                            <label for="album_name">Album Name<span>*</span></label>
                                            <input name="album_name" class="input-form" type="text" id="album_name">
                                            @error('album_name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-album">
                                            <label for="description">Album Description<span>*</span></label>
                                            <input name="description" class="input-form" type="text" id="description">
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-album">
                                            <button type="submit">Add album</button>
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
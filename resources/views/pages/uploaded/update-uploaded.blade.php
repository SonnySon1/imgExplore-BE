@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Upload Image</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-upload">
                                <div class="wrapping-image-upload">
                                    <img src="{{ asset('assets/img/img-e/'.$photo->file_location) }}" alt="">
                                </div>
                                <div class="form-input-upload">
                                    <form action="/uploaded/update={{ $photo->uuid }}" method="post">
                                        @csrf
                                        <div class="input-distance-upload">
                                            <label for="photo_title">Title<span>*</span></label>
                                            <input name="photo_title" class="input-form" type="text" id="photo_title" value="{{ $photo->photo_title}}">
                                            @error('photo_title')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="category">Category<span>*</span></label>
                                            <select name="category" class="input-form" name="" id="category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" @if ($category->id == $photo->category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="photo_description">Description<span>*</span></label>
                                            <textarea name="photo_description" id="photo_description" class="input-form vertical-textarea" rows="10">{{ $photo->photo_description }}</textarea>
                                            @error('photo_description')
                                                <small>{{ $message }}</small>
                                        @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="album">Album</label>
                                            <select name="album" class="input-form" name="" id="album">
                                                @foreach ($albums as $album)
                                                    <option value="{{ $album->id }}" @if ($album->id == $photo->album->id) selected @endif>{{ $album->album_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('album')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <input @if ($photo->allow_comments == 0) checked @endif id="allow_comments" name="allow_comments" class="allow_comments"  value="0" type="checkbox">
                                            <label for="allow_comments" class="allow_comments">don't allow people to comment</label>
                                        </div>
                                        <div class="input-distance-upload">
                                            <button type="submit">Publish</button>
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
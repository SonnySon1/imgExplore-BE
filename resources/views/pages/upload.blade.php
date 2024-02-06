@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Upload Image</p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-upload">
                                <div class="wrapping-image-upload">
                                    {{-- <img src="assets/img/img-e/5.jpg" alt=""> --}}
                                    <img id="output_image" alt="" class="display-none-image-upload">
                                </div>
                                <div class="form-input-upload">
                                    <form action="/upload/store" method="post">
                                        @csrf
                                        <div class="input-distance-upload">
                                            <label for="choose_photo">Choose Photo<span>*</span></label>
                                            <input name="photo" class="input-form" type="file" id="choose_photo">
                                            @error('photo')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="photo_title">Title<span>*</span></label>
                                            <input name="photo_title" class="input-form" type="text" id="photo_title">
                                            @error('photo_title')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="category">Category<span>*</span></label>
                                            <select name="category" class="input-form" name="" id="category">
                                                <option value=""></option>
                                                <option value="1">Modern Art</option>
                                            </select>
                                            @error('category')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="photo_description">Description<span>*</span></label>
                                            <input name="photo_description" class="input-form" type="text" id="photo_description">
                                            @error('photo_description')
                                                    <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="album">Album</label>
                                            <select name="album" class="input-form" name="" id="album">
                                                <option value=""></option>
                                                <option value="2">Al 2</option>
                                            </select>
                                            @error('album')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-upload">
                                            <input id="allow_comments" name="allow_comments" class="allow_comments"  value="0" type="checkbox">
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

    <script>
        document.getElementById("choose_photo").addEventListener("change", function(e) {
            var output_image = document.getElementById("output_image");
            var reader = new FileReader();
            reader.onload = function(){
                output_image.classList.remove('display-none-image-upload');
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>
    
@endsection
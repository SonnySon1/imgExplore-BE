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
                                    <img src="assets/img/img-e/5.jpg" alt="">
                                </div>
                                <div class="form-input-upload">
                                    <form action="" method="post">
                                        <div class="input-distance-upload">
                                            <label for="choose_photo">Choose Photo<span>*</span></label>
                                            <input class="input-form" type="text" id="choose_photo">
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="title">Title<span>*</span></label>
                                            <input class="input-form" type="text" id="title">
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="category">Category<span>*</span></label>
                                            <input class="input-form" type="text" id="category">
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="description">Description<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-upload">
                                            <label for="album">Album<span>*</span></label>
                                            <select class="input-form" name="" id="album">
                                                <option value=""></option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                        <div class="input-distance-upload">
                                            <input id="allow_comments" name="allow_comments" class="allow_comments"  value="1" type="checkbox">
                                            <label for="allow_comments" class="allow_comments">Allow people to comment</label>
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
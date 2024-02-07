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
                                    <form action="" method="post">
                                        <div class="input-distance-add-album">
                                            <label for="description">Album Cover<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-add-album">
                                            <label for="description">Album Name<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-add-album">
                                            <label for="description">Album Description<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-add-album">
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
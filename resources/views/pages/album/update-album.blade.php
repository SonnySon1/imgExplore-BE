@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Album</p>
                            <a href="/album">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-update-album">
                                <div class="form-input-update-album">
                                    <form action="" method="post">
                                        <div class="input-distance-update-album">
                                            <label for="description">Album Cover<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-update-album">
                                            <label for="description">Album Name<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
                                        </div>
                                        <div class="input-distance-update-album">
                                            <label for="description">Album Description<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
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
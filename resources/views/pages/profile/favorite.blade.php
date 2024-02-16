@extends('layouts.master')
@section('content')
   <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Favorite by <strong>{{ Auth::user()->name }}</strong></p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-favorite">
                                <div class="image-container-favorite" id="posts">
                                @foreach ($data_favorites as $data_favorite)
                                    <a href="/explore/show={{ $data_favorite->photo->uuid }}"><img src="{{ asset('assets/img/img-e/'. $data_favorite->photo->file_location) }}" alt=""></a>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    @endsection
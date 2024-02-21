@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Following by <strong>Virelix</strong></p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-user-info">
                                @foreach ($followings as $following)
                                    <div class="wrapping-user-info">
                                        <div class="profile-user-following">
                                            <img src="{{ asset('assets/img/profile/'.$following->userTo->picture) }}" alt="">
                                        </div>
                                        <div class="user-identity">
                                            <div>
                                                <h5>{{ $following->userTo->name }}</h5>
                                                <p>{{ Str::limit($following->userTo->bio, 30) }}</p>
                                            </div>
                                            <div class="follow-button-container">
                                                <form action="" method="post">
                                                    <button><i class="bi bi-person-fill-check"></i> Following</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
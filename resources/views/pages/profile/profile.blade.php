@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <p id="uuid" hidden>{{ $data_user->uuid }}</p>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet-profile">
                        <div class="flex-display-center">
                            <div>
                                <h2>&#64;{{ $data_user->username }} <img src="{{ asset('assets/img/private.png') }}" alt=""></h2>
                                <div class="container-image-profile">
                                    <div class="wrapping-image-profile"> 
                                        <img class="image-profile" src="{{ asset('assets/img/profile/'. $data_user->picture ) }}" alt="">
                                    </div>
                                </div>
                                <div class="information-menu-container">
                                    <div class="information-menu">
                                        <div>
                                            <a href="#posts">
                                                <h3>{{ $data_user->photo->count() }}</h3>
                                                <p>Posts</p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/profile/followers">
                                                <h3 id="counter-follow">{{ $data_user->follow->count() }}</h3>
                                                <p>Followers</p>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="/profile/following">
                                                <h3>20</h3>
                                                <p>Following</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bio-container">
                                    <p>
                                        {{ $data_user->bio }}
                                    </p>   
                                </div>
                                <div class="ber-container">
                                    <ul>
                                        <li><a href="" class="active-menu">Posts</a></li>
                                        @if ($data_user->uuid == Auth::user()->uuid)
                                                <li><a href="/profile/favorite">Favorite</a></li>
                                        @endif
                                        <li><a href="">Email</a></li>
                                        @if ($data_user->uuid !== Auth::user()->uuid)
                                                @if ($data_follow)
                                                    <form id="followForm">
                                                        @csrf
                                                        <input name="user_identifier" type="hidden" value="{{ $data_user->id }}" id="user-identifier">
                                                        <li><button id="button-follow-profile" type="button" class="follow-menu-profile-follow"><i id="follow-icon" class="bi bi-person-x-fill"></i></button></li>
                                                    </form>
                                                @else
                                                    <form id="followForm">
                                                        @csrf
                                                        <input name="user_identifier" type="hidden" value="{{ $data_user->id }}" id="user-identifier">
                                                        <li><button id="button-follow-profile" type="button" class="follow-menu-profile"><i id="follow-icon" class="bi bi-person-plus-fill"></i></button></li>
                                                    </form>
                                                @endif
                                        @else
                                            <form id="followForm" hidden>
                                                @csrf
                                                <input name="user_identifier" type="hidden" value="{{ $data_user->id }}" id="user-identifier">
                                                <li><button id="button-follow-profile" type="button" class="follow-menu-profile"><i id="follow-icon" class="bi bi-person-plus-fill"></i></button></li>
                                            </form>
                                        @endif
                                    </ul>
                                </div>
                                <div class="image-container-profile" id="posts_user">
                                    {{-- <a href="image-detail"><img src="{{ asset('assets/img/img-e/1.jpg') }}" alt=""></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    <script>
        window.uuid = "{{ $data_user->uuid }}";
    </script>
    <script src="{{ asset('assets/js/profile/profile.js') }}"></script>
@endsection

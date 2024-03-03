@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
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
                                        <a href="/profile?show={{ $following->userTo->uuid }}">
                                            <img src="{{ asset('assets/img/profile/'.$following->userTo->picture) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="user-identity">
                                        <div>
                                            <h5>{{ $following->userTo->name }}</h5>
                                            <p>{{ Str::limit($following->userTo->bio, 30) }}</p>
                                        </div>
                                        <div class="follow-button-container">
                                            @if ($following->userTo->id == Auth::user()->id)
                                                <!-- Jika ini adalah user yang sedang login -->
                                                <form class="follow-form" id="followingForm_{{ $following->userTo->id }}">
                                                    @csrf
                                                    <input name="user_identifier" type="hidden" value="{{ $following->userTo->id }}" id="user-identifier">
                                                </form>
                                            @else
                                                <!-- Jika ini bukan user yang sedang login -->
                                                @if (in_array($following->userTo->id, $followingUsers))
                                                    <form class="follow-form" id="followingForm_{{ $following->userTo->id }}">
                                                        @csrf
                                                        <input name="user_identifier" type="hidden" value="{{ $following->userTo->id }}" id="user-identifier">
                                                        <button type="button" class="btn-unfollow-following" id="btn-follow-following"><i class="bi bi-person-x-fill"></i> <span class="text-follow-following">Unfollow</span></button>
                                                    </form>
                                                @else
                                                    <form class="follow-form" id="followingForm_{{ $following->userTo->id }}">
                                                        @csrf
                                                        <input name="user_identifier" type="hidden" value="{{ $following->userTo->id }}" id="user-identifier">
                                                        <button type="button" class="btn-follow-following" id="btn-follow-following"><i class="bi bi-person-plus-fill"></i> <span class="text-follow-following">Follow</span></button>
                                                    </form>
                                                @endif
                                            @endif
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

    <script src="{{ asset('assets/js/profile/following.js') }}"></script>
@endsection
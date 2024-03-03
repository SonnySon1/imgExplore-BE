@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Followers by <strong>{{ $user->name }}</strong></p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-user-info">
                                @foreach ($followers as $follower)
                                    <div class="wrapping-user-info">
                                        <div class="profile-user-following">
                                            <a href="/profile?show={{ $follower->userFrom->uuid }}">
                                                <img src="{{ asset('assets/img/profile/'.$follower->userFrom->picture) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="user-identity">
                                            <div>
                                                <h5>{{ $follower->userFrom->name }}</h5>
                                                <p>{{ Str::limit($follower->userFrom->bio, 30 ) }}</p>
                                            </div>
                                            <div class="follow-button-followers-container">
                                                @if ($follower->userFrom->id == Auth::user()->id)
                                                    <form class="follow-form" id="followersFrom_{{ $follower->userFrom->id }}">
                                                        @csrf
                                                        <input name="user_identifier" type="hidden" value="{{ $follower->userFrom->id }}" id="user-identifier">
                                                    </form>
                                                @else
                                                    @if (in_array($follower->userFrom->id, $followingUsers))
                                                        <form class="follow-form" id="followersFrom_{{ $follower->userFrom->id }}">
                                                                @csrf
                                                                <input name="user_identifier" type="hidden" value="{{ $follower->userFrom->id }}" id="user-identifier">
                                                                <button type="button" class="btn-unfolow-followers"  id="btn-follow-followers"><i class="bi bi-person-x-fill"></i> <span class="text-follow-followers">Unfollow</span></button>
                                                            </form>
                                                    @else
                                                            <form class="follow-form" id="followersFrom_{{ $follower->userFrom->id }}">
                                                                @csrf
                                                                <input name="user_identifier" type="hidden" value="{{ $follower->userFrom->id }}" id="user-identifier">
                                                                <button type="button" class="btn-follow-followers"  id="btn-follow-followers"><i class="bi bi-person-plus-fill"></i> <span class="text-follow-followers">Follow</span></button>
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

    <script src="{{ asset('assets/js/profile/followers.js') }}"></script>

@endsection
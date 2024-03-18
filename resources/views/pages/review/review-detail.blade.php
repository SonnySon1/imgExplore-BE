@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="container-hiro-detail">
                        <img class="hiro-detail" src="{{ asset('assets/img/img-e/'.$photo->file_location) }}">
                    </div>
                    <div class="bar-fun-conainer">
                        <div>
                            <i class="bi bi-star"></i>
                            <p>Add to Favourites</p>
                        </div>
                        <div>
                            <i class="bi bi-hand-thumbs-up"></i>
                            <p>0</p>   
                        </div>
                        <div>
                            <i class="bi bi-chat-dots"></i>
                            <p>0</p>   
                        </div>
                    </div>
                    <h1 class="img-title-detail">{{ $photo->photo_title }}</h1>
                    <div class="profile-container">
                        <div class="img-profile-container">
                            <img class="profile-image-detail-review" src="{{ asset('assets/img/profile/'.$photo->user->picture) }}">
                        </div>
                        <div class="text-profile">
                            <div>
                                <h3 class="username-text-detail">{{$photo->user->name}} <img src="{{ asset('assets/img/private.png') }}"></h3>
                                <p>Followers</p>
                                <h5>{{ $photo->user->followTo->count() }}</h5>
                            </div>
                            <div>
                                @if ($photo->user->uuid !== Auth::user()->uuid && $photo->user->status_active !== '0')
                                    @if ($data_follow && $data_follow->to == $photo->user->id)
                                        <form id="formFollowReview">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                            <button type="button" class="btn-unfollow-review" id="followReview"><i id="follow-icon" class="bi bi-person-x-fill"></i> <span id="follow-text">Unfollow</span></button>
                                        </form>
                                    @else
                                        <form id="formFollowReview">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                            <button type="button" class="btn-follow-review" id="followReview"><i id="follow-icon" class="bi bi-person-x-fill"></i> <span id="follow-text">Follow</span></button>
                                        </form>
                                    @endif
                                @else
                                    <form id="formFollowReview" hidden>
                                        @csrf
                                        <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                        <button type="button" class="btn-follow-review" id="followReview"><i id="follow-icon" class="bi bi-person-plus-fill"></i> <span id="follow-text">Follow</span></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p class="description">
                        {{ $photo->photo_description }} 
                    </p>
                    <div>
                        <button class="category-tag">{{ $photo->category->name }}</button>
                    </div>
                    <div class="container-option">
                        <div class="option-wrapping">
                            <div class="option-body">
                                <div class="option-card-nody">
                                    <div class="option-elemet">
                                        <div>
                                            <h4>Option</h4>
                                        </div>
                                        <form action="/review/show/store={{ $photo->uuid }}" method="POST" class="form-input-detail-review">
                                            @csrf
                                            <div class="input-distance-upload">
                                                <label for="publis-reject">Publish or reject<span>*</span></label>
                                                <select class="input-form" name="set_status" id="publis-reject">
                                                    <option value="">--select option--</option>
                                                    <option value="1">Publish</option>
                                                    <option value="2">Reject</option>
                                                </select>
                                                @error('set_status')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-distance-upload">
                                                <label for="choose_photo">Message<span>*</span></label>
                                                <input class="input-form" name="message" type="text" id="choose_photo">
                                                @error('message')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="input-distance-upload">
                                                <button type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
@push('footerjsexternal')
        <script src="{{ asset('assets/js/review/review-detail.js') }}"></script>
@endpush
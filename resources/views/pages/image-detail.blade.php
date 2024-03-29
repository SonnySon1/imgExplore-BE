@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-detail">
                        <img class="hiro-detail" src="{{ asset('assets/img/img-e/'.$photo->file_location) }}">
                    </div>
                    <div class="bar-fun-conainer">
                        <div>
                             @if ($data_favorite)
                                <form id="formFavorite">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-star-fill" id="btn-favorite"> Add to Favourites</p>
                                </form>
                             @else
                                <form id="formFavorite">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-star" id="btn-favorite"> Add to Favourites</p>
                                </form>
                             @endif                           
                        </div>
                        <div>
                            @if ($data_like)
                                <form id="formLike">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-hand-thumbs-up-fill" id="btn-like">{{ $data_like_counter->count() }}</p>
                                </form>
                            @else
                                <form id="formLike">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-hand-thumbs-up" id="btn-like">{{ $data_like_counter->count() }}</p>
                                </form>
                            @endif
                        </div>
                        <div>
                            <a href="#comment-body"><p class="bi bi-chat-dots" id="comment-show"> {{ $data_count_comment }}</p></a>
                        </div>
                    </div>
                    <h1 class="img-title-detail">{{ $photo->photo_title }}</h1>
                    <div class="profile-container">
                        <a href="/profile?show={{ $photo->user->uuid }}">
                        <div class="img-profile-container">
                            <img class="profile-image-detail" src="{{ asset('assets/img/profile/'.$photo->user->picture ) }}">
                        </div>
                        </a>
                        <div class="text-profile">
                                <div>
                                    <h3 class="username-text-detail">{{ $photo->user->name }} <img src="{{ asset('assets/img/private.png') }}"></h3>
                                    <p>Followers</p>
                                    <h5>{{ $data_user->followTo->count() }}</h5>
                                </div>
                            <div>
                                @if ($photo->user->uuid !== Auth::user()->uuid && $photo->user->status_active !== '0')
                                    @if ($data_follow  && $data_follow->to == $photo->user->id)
                                        <form id="followFormDetail">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                            <button type="button" class="btn-donefollow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-x-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Unfollow</span></button>
                                        </form>
                                    @else
                                        <form id="followFormDetail">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                            <button type="button" class="btn-follow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-plus-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Follow</span></button>
                                        </form>
                                    @endif
                                @else
                                    <form id="followFormDetail" hidden>
                                        @csrf
                                        <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}">
                                        <button type="button" class="btn-follow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-plus-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Follow</span></button>
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
                    <div class="container-comment">
                        <h2>Comment {{ $data_count_comment }}</h2>
                        <div class="comment-rap">
                            <div class="comment-wrapping">
                                <div class="comment-body">
                                    <div class="image-comment-container">
                                        <img class="image-comment" src="{{ asset('assets/img/profile/'.Auth::user()->picture) }}" alt="">
                                    </div>
                                    <div class="comment-card-nody">
                                        <div class="comment-elemet-text">
                                            <div class="comment-text-head">
                                                <h4>You</h4>
                                            </div>
                                            <p class="comment-text">
                                                @if ($photo->allow_comments == 1)    
                                                    <form id="formComment" autocomplete="off">
                                                        <div class="input-comment-container">
                                                            @csrf
                                                            <input name="photo" type="hidden" value="{{ $photo->id }}">
                                                            <input name="body_comment" type="text" class="input-comment" id="input-comment" placeholder="Leave a comment..">
                                                            <button type="button" id="btn-sumbit-comment" class="send-comment-button"><i class="bi bi-send-fill nonacive-input" id="btn-submit-icon"></i></button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form id="formComment" autocomplete="off" >
                                                        <div class="input-comment-container">
                                                            @csrf
                                                            <input disabled readonly  name="photo" type="hidden" value="{{ $photo->id }}">
                                                            <input  disabled readonly  name="body_comment" type="text" class="input-comment" id="input-comment" placeholder="Comments are disabled">
                                                            <button  disabled readonly type="button" id="btn-sumbit-comment" class="send-comment-button"><i class="bi bi-ban"></i></button>
                                                        </div>
                                                    </form>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @if ($photo->allow_comments == 1)
                                    <div id="comment-body">
                                        
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    <script>
        window.photo_uuid = "{{ $photo->uuid }}";
    </script>
    <script src="{{ asset('assets/js/img_detail/img_detail.js') }}"></script>
@endsection
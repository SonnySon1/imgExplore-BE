@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-detail">
                        <img class="hiro-detail" src="{{ asset('assets/img/img-p/8.jpg') }}">
                    </div>
                    <div class="bar-fun-conainer">
                        <div>
                            <i class="bi bi-star"></i>
                            <p>Add to Favourites</p>
                        </div>
                        <div>
                            <i class="bi bi-hand-thumbs-up"></i>
                            <p>280k</p>   
                        </div>
                        <div>
                            <i class="bi bi-chat-dots"></i>
                            <p>239k</p>   
                        </div>
                    </div>
                    <h1 class="img-title-detail">Magnificent palace in the mountains</h1>
                    <div class="profile-container">
                        <div class="img-profile-container">
                            <img class="profile-image-detail" src="{{ asset('assets/img/img-p/1.jpg') }}">
                        </div>
                        <div class="text-profile">
                            <div>
                                <h3 class="username-text-detail">lumenix <img src="{{ asset('assets/img/private.png') }}"></h3>
                                <p>Followers</p>
                                <h5>200k</h5>
                            </div>
                            <div>
                                <form action="">
                                    <input type="hidden" value="1">
                                    <button class="btn-follow">Follow</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. 
                    </p>
                    <div>
                        <button class="category-tag">Photography</button>
                    </div>
                    <div class="container-option">
                        <div class="option-wrapping">
                            <div class="option-body">
                                <div class="option-card-nody">
                                    <div class="option-elemet">
                                        <div>
                                            <h4>Option</h4>
                                        </div>
                                        <form action="" class="form-input-detail">
                                            <div class="input-distance-upload">
                                                <label for="publis-reject">Publish or reject<span>*</span></label>
                                                <select class="input-form" name="" id="publis-reject">
                                                    <option value=""></option>
                                                    <option value="">Publish</option>
                                                    <option value="">Reject</option>
                                                </select>
                                            </div>
                                            <div class="input-distance-upload">
                                                <label for="choose_photo">Message<span>*</span></label>
                                                <input class="input-form" type="text" id="choose_photo">
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
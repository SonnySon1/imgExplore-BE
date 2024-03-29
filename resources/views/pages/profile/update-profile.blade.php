@extends('layouts.master')
@section('content')
<!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Edit Your Profile</p>
                            <a href="/profile">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-update-profile">
                                <div class="img-container-profile-update">
                                    <div class="wrapping-image-update-profile">
                                        <label for="picture">
                                            <img src="{{ asset('assets/img/profile/'.$user->picture) }}" alt="" id="output_image">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-input-update-profile">
                                    <form action="/profile/update={{ $user->uuid }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-distance-update-profile">
                                            <input name="picture" class="input-form-update-profile" hidden type="file" id="picture">
                                        </div>
                                        <div class="input-distance-update-profile">
                                            <label for="name">Name<span>*</span></label>
                                            <input name="name" class="input-form-update-profile" type="text" id="name" value="{{ $user->name }}">
                                            @error('name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-update-profile">
                                            @if ($user->is_google_user == "1")
                                                <label for="email">Email<span>*</span> <i>cannot be changed</i></label>
                                                <input name="email" readonly class="input-form-update-profile" type="text" id="email" value="{{ $user->email }}">
                                                @error('email')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            @else
                                                <label for="email">Email<span>*</span></label>
                                                <input name="email" class="input-form-update-profile" type="text" id="email" value="{{ $user->email }}">
                                                @error('email')
                                                    <small>{{ $message }}</small>
                                                @enderror
                                            @endif
                                        </div>
                                        <div class="input-distance-update-profile">
                                            <label for="bio">Bio<span>*</span></label>
                                            <input name="bio" class="input-form-update-profile" type="text" id="bio" value="{{ $user->bio }}">
                                            @error('bio')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-update-profile">
                                            <button type="submit">Update</button>
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
    <script src="{{ asset('assets/js/profile/update-profile.js') }}"></script>
    @endsection
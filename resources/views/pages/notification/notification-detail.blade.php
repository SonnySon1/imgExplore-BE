@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Notifications</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-user-info-notification">
                                    <div class="wrapping-user-info-notification">
                                        <div class="profile-user-followers-notification">
                                            <img src="{{ asset('assets/img/profile/'.$notification->userFrom->picture) }}" alt="">
                                        </div>
                                        <div class="user-identity-notification">
                                            <div>
                                                <h5>{{ $notification->userFrom->name }}</h5>
                                                <p>{{ $notification->created_at->format('d/m/Y H:s') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-body-comment">
                                        <div class="wrapping-comment">
                                            <p>{{ $notification->message }}</p>
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
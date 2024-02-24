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
                            <div class="container-user-info">
                                @foreach ($notifications as $notification)
                                    <a href="/notification/show={{ $notification->uuid }}">
                                        <div class="wrapping-user-info">
                                            <div class="profile-user-followers">
                                                <img src="assets/img/profile/{{ $notification->userFrom->picture }}" alt="">
                                            </div>
                                            <div class="user-identity">
                                                <div class="name-massage">
                                                    <h5>{{ $notification->userFrom->name }} </h5>
                                                    <p>| {{ Str::limit($notification->message, 95) }}</p>
                                                </div>
                                                <div class="follow-button-container">
                                                    <p>{{ $notification->created_at->format('d/m/Y H:i') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        {{ $notifications->links() }}
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
 @endsection
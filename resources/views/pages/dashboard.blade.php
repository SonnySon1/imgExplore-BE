@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="dashboad-container">
                            <div class="button-slide">
                                <a href=""><i class="bi bi-speedometer"></i> Dashboard</a>
                                <a href="upload.html"><i class="bi bi-cloud-upload-fill"></i> Upload</a>
                                <a href="uploaded.html"><i class="bi bi-camera-fill"></i> Uploaded</a>
                                <a href="favorite.html"><i class="bi bi-star-fill"></i> Favorite</a>
                                <a href="album.html"><i class="bi bi-images"></i> Album</a>
                                <a href="review.html"><i class="bi bi-eye-fill"></i> Reviw</a>
                                <a href="category.html"><i class="bi bi-layers-fill"></i> Categories</a>
                                <a href="users.html"><i class="bi bi-people-fill"></i> Users</a>
                                <a href="profile.html"><i class="bi bi-person-circle"></i> Profile</a>
                                <a href="/signout"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
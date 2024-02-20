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
                                <a href="/notification/show">
                                    <div class="wrapping-user-info">
                                        <div class="profile-user-followers">
                                            <img src="assets/img/img-p/9.jpg" alt="">
                                        </div>
                                        <div class="user-identity">
                                            <div class="name-massage">
                                                <h5>Ryson </h5>
                                                <p>| Menyukai Postingan Anda Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nobis?</p>
                                            </div>
                                            <div class="follow-button-container">
                                                <p>26/12/2022 02:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/notification/show">
                                    <div class="wrapping-user-info">
                                        <div class="profile-user-followers">
                                            <img src="assets/img/img-p/9.jpg" alt="">
                                        </div>
                                        <div class="user-identity">
                                            <div class="name-massage">
                                                <h5>Ryson </h5>
                                                <p>| Menyukai Postingan Anda Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nobis?</p>
                                            </div>
                                            <div class="follow-button-container">
                                                <p>26/12/2022 02:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/notification/show">
                                    <div class="wrapping-user-info">
                                        <div class="profile-user-followers">
                                            <img src="assets/img/img-p/9.jpg" alt="">
                                        </div>
                                        <div class="user-identity">
                                            <div class="name-massage">
                                                <h5>Ryson </h5>
                                                <p>| Menyukai Postingan Anda Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nobis?</p>
                                            </div>
                                            <div class="follow-button-container">
                                                <p>26/12/2022 02:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
 @endsection
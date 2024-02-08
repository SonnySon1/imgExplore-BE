@extends('layouts.master')
@section('content')
   <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Favorite by <strong>Virelix</strong></p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-favorite">
                                <div class="image-container-favorite" id="posts">
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/1.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/2.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/3.webp') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/4.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/5.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/6.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/7.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/8.webp') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/9.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/10.jpg') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/11.webp') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/12.png') }}" alt=""></a>
                                    <a href="image-detail.html"><img src="{{ asset('assets/img/img-e/13.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    @endsection
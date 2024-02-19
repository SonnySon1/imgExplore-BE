@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-categories">
                        <img class="hiro-categories" src="assets/img/categories.jpg">
                    </div>
                    <div class="container-categories">
                        @foreach ($categories as $category)
                            <a href="explore.html">
                                <div class="child-container-categories">
                                    <img class="image-categories" src="{{ asset('assets/img/cover/categories/'.$category->cover) }}" alt="">
                                    <p class="description-categories">{{ $category->name }}</p>
                                </div>
                            </a>                            
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
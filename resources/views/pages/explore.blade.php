@extends('layouts.master')

@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-explore">
                        <img class="hiro-explore" src="{{ asset('assets/img/explore.png') }}">
                    </div>
                    <div class="container-category-explore">
                          <ul class="category-explore">
                            <li><button>For You</button></li>
                            @foreach ($categories as $category)
                                <li><button>{{ $category->name }}</button></li>
                            @endforeach
                            {{-- <li><button>Traditional Art</button></li>
                            <li><button>Character Design</button></li>
                            <li><button>Illustrations</button></li>
                            <li><button>Backgrounds</button></li>
                            <li><button>Anime</button></li>
                            <li><button>Cartoons</button></li>
                            <li><button>Photography</button></li>
                            <li><button>Ai Art</button> </li> --}}
                        </ul>
                    </div>
                    <form id="formSearch"> 
                        <div>
                            <input  class="input-search" type="text" name="search" id="search" placeholder="Search" autocomplete="off">
                            <button id="btn-search" class="btn-search"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    <div class="image-container">
                        <div id="image-wrapper">
                                {{-- <a href="/explore/show={{ $photo->uuid }}"><img src="{{ asset('assets/img/img-e/'.$photo->file_location) }}"></a> --}}
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->

    <script src="{{ asset('assets/js/explore/explore.js') }}"></script>
 @endsection

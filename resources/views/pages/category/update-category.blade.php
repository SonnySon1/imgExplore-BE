@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Category</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-add-category">
                                <div class="form-input-add-category">
                                    <form action="/admin/category/update={{ $category->name }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="input-distance-add-category">
                                            <label for="cover">Cover<span>*</span></label>
                                            <input name="cover" class="input-form" type="file" id="cover">
                                            @error('cover')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="name">Name<span>*</span></label>
                                            <input name="name" class="input-form" value="{{ $category->name }}" type="text" id="name">
                                            @error('name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="description">Description<span>*</span></label>
                                            <textarea name="description" id="description"  class="input-form vertical-textarea" rows="10">{{ $category->description }}</textarea>
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <button type="submit">Update Category</button>
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
@endsection
@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Add Category</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-add-category">
                                <div class="form-input-add-category">
                                    <form action="/admin/category/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-distance-add-category">
                                            <label for="cover">Cover<span>*</span></label>
                                            <input name="cover" class="input-form" type="file" id="cover" value="{{ old('cover') }}">
                                            @error('cover')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="name">Name<span>*</span></label>
                                            <input name="name" class="input-form" type="text" id="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="description">Description<span>*</span></label>
                                            <textarea name="description" id="description" class="input-form vertical-textarea" rows="10"></textarea>
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="input-distance-add-category">
                                            <button type="submit">Add Category</button>
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
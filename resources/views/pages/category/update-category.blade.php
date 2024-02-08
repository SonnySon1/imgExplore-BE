@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Category</p>
                            <a href="/admin/category">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-add-category">
                                <div class="form-input-add-category">
                                    <form action="" method="post">
                                        <div class="input-distance-add-category">
                                            <label for="cover">Cover<span>*</span></label>
                                            <input class="input-form" type="file" id="cover">
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="name">Name<span>*</span></label>
                                            <input class="input-form" type="text" id="name">
                                        </div>
                                        <div class="input-distance-add-category">
                                            <label for="description">Description<span>*</span></label>
                                            <input class="input-form" type="text" id="description">
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
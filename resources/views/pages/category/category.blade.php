@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Category</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
                        </div>
                        <div>
                            <div class="container-add-category">
                                <a href="/admin/category/create" class="btn-category-add"><i class="bi bi-plus-circle"></i></a>
                            </div>
                            <div class="container-category-info">
                                <table class="table-view">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        @foreach ($data_categories as $data_category)
                                            <tr>
                                                <td>{{ $data_category->name }}</td>
                                                <td>
                                                    <div class="des-category">
                                                        {{  $data_category->description }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="/admin/category/edit={{ $data_category->name }}" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="/admin/category/delete={{$data_category->name}}" class="button-action delete-btn"><i class="bi bi-trash"></i></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
@endsection
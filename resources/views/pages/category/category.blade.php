@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Category</p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
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
                                        <tr>
                                            <td>Art</td>
                                            <td>
                                                <div class="des-category">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/admin/category/edit" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="" class="button-action delete-btn"><i class="bi bi-trash"></i></i></a>
                                                </div>
                                            </td>
                                        </tr>
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
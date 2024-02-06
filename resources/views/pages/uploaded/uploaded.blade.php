@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Uploaded</p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-review-info">
                                <table class="table-view">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <td>
                                                <div class="title-review">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                </div>
                                            </td>
                                            <td>Art</td>
                                            <td>
                                                <div class="btn-group" style="display: flex; align-items: center;">
                                                    <a href="image-detail.html" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="/uploaded/edit" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
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
@endsection
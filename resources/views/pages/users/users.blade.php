@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Users</p>
                            <a href="/dashboard">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-review-info">
                                <table class="table-view">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <td>
                                                <div class="aurhor-container-table">
                                                    <div class="image-profileauthor-container">
                                                        <img src="{{ asset('assets/img/img-p/6.jpg') }}" alt="">
                                                    </div>
                                                    Nichole
                                                </div>
                                            </td>
                                            <td>nochole221@gmail.com</td>
                                            <td>
                                                <div class="badge badge-red">Admin</div>
                                            </td>
                                            <td>
                                                <div class="badge badge-orange">Active</div>
                                            </td>
                                            <td>
                                                <div class="btn-group" style="display: flex; align-items: center;">
                                                    <a href="profile.html" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="/admin/users/edit" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="aurhor-container-table">
                                                    <div class="image-profileauthor-container">
                                                        <img src="{{ asset('assets/img/img-p/6.jpg') }}" alt="">
                                                    </div>
                                                    Rio
                                                </div>
                                            </td>
                                            <td>rio1110@gmail.com</td>
                                            <td>
                                                <div class="badge badge-navy">User</div>
                                            </td>
                                            <td>
                                                <div class="badge badge-gray">Banned</div>
                                            </td>
                                            <td>
                                                <div class="btn-group" style="display: flex; align-items: center;">
                                                    <a href="profile.html" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="/admin/users/edit" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="aurhor-container-table">
                                                    <div class="image-profileauthor-container">
                                                        <img src="{{ asset('assets/img/img-p/6.jpg') }}" alt="">
                                                    </div>
                                                    Rio
                                                </div>
                                            </td>
                                            <td>rio1110@gmail.com</td>
                                            <td>
                                                <div class="badge badge-navy">User</div>
                                            </td>
                                            <td>
                                                <div class="badge badge-orange">Active</div>
                                            </td>
                                            <td>
                                                <div class="btn-group" style="display: flex; align-items: center;">
                                                    <a href="profile.html" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="/admin/users/edit" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
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
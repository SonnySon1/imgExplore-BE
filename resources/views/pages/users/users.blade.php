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
                                        @foreach ($data_users as $data_user)
                                            <tr>
                                                <td>
                                                    <div class="aurhor-container-table">
                                                        <div class="image-profileauthor-container">
                                                            <img src="{{ asset('assets/img/profile/'. $data_user->picture)}}" alt="">
                                                        </div>
                                                        {{ $data_user->name }}
                                                    </div>
                                                </td>
                                                <td>{{ $data_user->email }}</td>
                                                @if ($data_user->role == "admin")
                                                    <td>
                                                        <div class="badge badge-red">Admin</div>
                                                    </td>
                                                @else
                                                    <td>
                                                        <div class="badge badge-navy">User</div>
                                                    </td>
                                                @endif
                                                @if ($data_user->status_active == "1")
                                                    <td>
                                                        <div class="badge badge-orange">Active</div>
                                                    </td>
                                                @else
                                                    <td>
                                                        <div class="badge badge-gray">Banned</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="btn-group" style="display: flex; align-items: center;">
                                                        <a href="/profile?show={{ $data_user->uuid }}" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                        <a href="/admin/users/edit={{ $data_user->uuid }}" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
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
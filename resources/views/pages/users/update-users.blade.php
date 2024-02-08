@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Users</p>
                            <a href="/admin/users">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-update-users">
                                <div class="form-input-update-users">
                                    <form action="" method="post">
                                        <div class="input-distance-update-users">
                                            <label for="album">Banned / Un Banned</label>
                                            <select class="input-form" name="" id="album">
                                                <option>--select option--</option>
                                                <option value="1">Banned</option>
                                                <option value="0">Un Banned</option>
                                            </select>
                                        </div>
                                        <div class="input-distance-update-users">
                                            <label for="album">Role</label>
                                            <select class="input-form" name="" id="album">
                                                <option>--select option--</option>
                                                <option value="user">user</option>
                                                <option value="admin">admin</option>
                                            </select>
                                        </div>
                                        <div class="input-distance-update-users">
                                            <button type="submit">Update</button>
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
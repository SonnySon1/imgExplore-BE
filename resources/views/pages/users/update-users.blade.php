@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Update Users By<strong> {{ $user->name }}</strong></p>
                            <a href="/admin/users">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </a>
                        </div>
                        <div>
                            <div class="container-update-users">
                                <div class="form-input-update-users">
                                    <form action="/admin/users/update={{ $user->uuid }}" method="post">
                                        @csrf
                                        <div class="input-distance-update-users">
                                            <label for="album">Banned / Un Banned</label>
                                            <select class="input-form" name="status_active" id="album">
                                                <option>--select option--</option>
                                                    <option value="0" {{ ($user->status_active == "0") ?  'selected' : ' ' }}>Banned</option>
                                                    <option value="1" {{ ($user->status_active == "1") ?  'selected' : ' ' }}>Un Banned</option>
                                            </select>
                                        </div>
                                        <div class="input-distance-update-users">
                                            <label for="album">Role</label>
                                            <select class="input-form" name="role" id="album">
                                                <option {{ ($user->role == "user") ?  'selected' : ' ' }} value="user">user</option>
                                                <option {{ ($user->role == "admin") ?  'selected' : ' ' }} value="admin">admin</option>
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
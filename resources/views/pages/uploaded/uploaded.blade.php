@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Uploaded</p>
                            <button onclick="goBack()" type="button">
                                <i class="bi bi-x-circle-fill close-button"></i>
                            </button>
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
                                        @foreach ($data_uploadeds as $data_uploaded)
                                            <tr>
                                                <td>
                                                    <div class="title-review">
                                                       {{$data_uploaded->photo_title}}
                                                    </div>
                                                </td>
                                                <td>{{$data_uploaded->category->name}}</td>
                                                <td>
                                                    <div class="btn-group" style="display: flex; align-items: center;">
                                                        <a href="/explore/show={{ $data_uploaded->uuid }}" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
                                                        <a href="/uploaded/edit={{ $data_uploaded->uuid }}" class="button-action edit-btn"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="" class="button-action delete-btn"><i class="bi bi-trash"></i></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $data_uploadeds->links() }}
                    </div>
                </div>
            </div>
        </main>
@endsection
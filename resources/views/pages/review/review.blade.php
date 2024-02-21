@include('layouts.master')
@section('')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Review Image</p>
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
                                            <th>Creator</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        @foreach ($data_reviews as $data_review)
                                            <tr>
                                                <td>
                                                    <div class="title-review">
                                                        {{ $data_review->photo_title }}
                                                    </div>
                                                </td>
                                                <td>{{ $data_review->category->name }}</td>
                                                <td>
                                                    <div class="aurhor-container-table">
                                                        <div class="image-profileauthor-container">
                                                            <img src="{{ asset('assets/img/profile/'.$data_review->user->picture) }}" alt="">
                                                        </div>
                                                        {{ $data_review->user->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="/review/show={{ $data_review->uuid }}" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
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
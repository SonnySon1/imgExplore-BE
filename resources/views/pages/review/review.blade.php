@include('layouts.master')
@section('')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="header-title">
                            <p>Review Image</p>
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
                                            <th>Creator</th>
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
                                                <div class="aurhor-container-table">
                                                    <div class="image-profileauthor-container">
                                                        <img src="assets/img/img-p/6.jpg" alt="">
                                                    </div>
                                                    Lumenix
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/review/detail" class="button-action detail-btn"><i class="bi bi-eye-fill"></i></a>
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
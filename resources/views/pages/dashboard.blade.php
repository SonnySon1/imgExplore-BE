@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="container">
                    <div class="wrapping-elemet">
                        <div class="dashboad-container">
                            <div class="button-slide">
                                <a href="#uploadChart"><i class="bi bi-speedometer"></i> Dashboard</a>
                                <a href="/upload"><i class="bi bi-cloud-upload-fill"></i> Upload</a>
                                <a href="/uploaded"><i class="bi bi-camera-fill"></i> Uploaded</a>
                                <a href="profile/favorite"><i class="bi bi-star-fill"></i> Favorite</a>
                                <a href="/album"><i class="bi bi-images"></i> Album</a>
                                @can('admin')
                                    <a href="/review"><i class="bi bi-eye-fill"></i> Review</a>
                                    <a href="/admin/category"><i class="bi bi-layers-fill"></i> Categories</a>
                                    <a href="/admin/users"><i class="bi bi-people-fill"></i> Users</a>
                                @endcan
                                <a href="/profile"><i class="bi bi-person-circle"></i> Profile</a>
                                <a href="/signout" onclick="return confirm('are you sure you want to sign out?')"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                            </div>
                            <div class="chart-dashboard">
                                <canvas id="uploadChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('uploadChart').getContext('2d');
    
        var days = {!! json_encode($uploadsPerDay->pluck('day')) !!};
        var totals = {!! json_encode($uploadsPerDay->pluck('total')) !!};
        var dayLabels = [
            'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        ];
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: days.map(day => {
                    var date = new Date(day);
                    return dayLabels[date.getUTCDay()];
                }),
                
                datasets: [{
                    label: 'Upload Activity',
                    data: totals,
                    backgroundColor: 'rgb(255,91,0)',
                    borderColor: 'rgb(255,91,0)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
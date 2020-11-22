@extends('layout.app')
@section('content')
@include('layout.alert')
@guest
@include('layout.front')
@include('auth.login')

@include('auth.register')
@endguest

@auth
@if(Auth::user()->role == 'client')
@include('layout.frontclientmentor')
@endif

@if(Auth::user()->role == 'mentor')
@include('layout.frontclientmentor')
@endif

@if(Auth::user()->role == 'admin')

@include('layout.frontadmin')
<!-- chart -->
<div class="container p-5">
        <h1 class="text-center">Data Order Request tahun {{$year}}</h1>
        <canvas id="myChart" width="400" height="200"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                        labels: [
                                @foreach($results as $result)
                                '{{$result->month}}',
                                @endforeach
                        ],
                        datasets: [{
                                label: 'Jumlah order request',
                                data: [
                                        @foreach($results as $result)
                                        {{$result->data.','}}
                                        @endforeach
                                ],
                                backgroundColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                ]

                        }]
                },
        });
</script>
@endif

@csrf

@endauth
@include('dashboard.ourprofile')
@include('dashboard.team')
@endsection('content')
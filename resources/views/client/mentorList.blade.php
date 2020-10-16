@extends('layout.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pengajar</h1>
</div>

<div class="row">
    @foreach($mentors as $mentor)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/download.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="card-title">{{ $mentor->name }}</h4>
                                @foreach($mentor->skills as $skill)
                                <span class="badge badge-pill badge-primary">{{ $skill->skill }}</span>
                                @endforeach
                                <br>
                                <a href="{{ route('dashboard.mentor-detail', ['user' => $mentor]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
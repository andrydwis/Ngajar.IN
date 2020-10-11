@extends('layout.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Mentor</h1>
</div>
<div class="row">
    @foreach($users as $user)
    @if($user->role == 'mentor')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/download.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            <a href="{{ route('dashboard.user-detail', ['user' => $user]) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Client</h1>
</div>
<div class="row">
    @foreach($users as $user)
    @if($user->role == 'client')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="img/download.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            <a href="{{ route('dashboard.user-detail', ['user' => $user]) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
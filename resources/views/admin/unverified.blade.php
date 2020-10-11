@extends('layout.app')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Verifikasi Mentor</h1>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify{{ $user->id }}">Verifikasi</button>
                            <div class="modal fade" id="verify{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">Verifikasi akun</h6>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('dashboard.verify', ['user' => $user]) }}" method="post">
                                                @csrf
                                                @method('patch')
                                                <p>Are you sure to verify this user ?</p>
                                                <button type="submit" class="btn btn-success">Yes</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <h1 class="h3 mb-0 text-gray-800">Verifikasi Client</h1>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify{{ $user->id }}">Verifikasi</button>
                            <div class="modal fade" id="verify{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">Verifikasi akun</h6>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('dashboard.verify', ['user' => $user]) }}" method="post">
                                                @csrf
                                                @method('patch')
                                                <p>Are you sure to verify this user ?</p>
                                                <button type="submit" class="btn btn-success">Yes</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@extends('layout.app')
@section('content')
<section id="hero" class="d-flex align-items-center mt">
                    <div class="container">
                        <div class="row">        
         <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
         
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h2 class="h3 mb-0 text-gray-800">List Mentor</h2>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="table-responsive" style="max-height: 442px;">
                <table class="table">
                    <thead class=" text-primary">
                        <th>User</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        @if($user->role == 'mentor')
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a href="{{ route('dashboard.user-detail', ['user' => $user]) }}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h2 class="h3 mb-0 text-gray-800">List Client</h2>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="table-responsive" style="max-height: 442px;">
                <table class="table">
                    <thead class=" text-primary">
                        <th>User</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        @if($user->role == 'client')
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a href="{{ route('dashboard.user-detail', ['user' => $user]) }}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</section>
@endsection
@extends('layout.app')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                    </div>

                    <form class="user" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="name" placeholder="Full Name" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone Number" value="{{ Auth::user()->phone }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="address" placeholder="Address" value="{{ Auth::user()->address }}" disabled>
                        </div>
                    </form>

                    <a href="{{ route('dashboard.edit.profile') }}" class="btn btn-primary btn-user btn-block">Update Profile</a>
                    <a href="{{ route('dashboard.edit.password') }}" class="btn btn-primary btn-user btn-block">Update Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body">
        <div class="table-responsive" style="max-height: 442px;">
            <table class="table">
                <thead class=" text-primary">
                    <th>No</th>
                    <th>Skill</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>Memahami Algoritma</td>
                    <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editSkill">Edit</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSkill">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSkill">Add</button>

        <!-- pop up add -->
        <div class="modal fade" id="addSkill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Skill</h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-success" value="Submit" data-toggle="modal">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- pop up edit -->
        <div class="modal fade" id="editSkill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Skill</h6>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-success" value="Save" data-toggle="modal">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
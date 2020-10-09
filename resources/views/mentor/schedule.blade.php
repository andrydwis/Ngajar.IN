@extends('layout.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive" style="max-height: 442px;">
            <table class="table">
                <thead class=" text-primary">
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->day }}</td>
                        <td>{{ $schedule->hour }}</td>
                        <td>
                            <button type="button" name="edit" class="btn btn-success" value="Edit" data-toggle="modal" data-target="#editSchedule">Edit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="btn btn-primary">Add new schedule</button>
    </div>
</div>
@endsection
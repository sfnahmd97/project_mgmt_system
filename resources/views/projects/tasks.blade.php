@extends('layouts.app')

@section('content')
    <h1>Manage Tasks</h1>
    <table class="table table-striped">
    <tr>
        <th>SNo</th>
        <th>Project Name</th>
        <th>Task Name</th>
        <th>Status</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $task->project->name }}</td>
        <td>{{ $task->name }}</td>
        <td>{{ $task->status }}</td>
    </tr>
    @endforeach
</table>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Time Entry</h1>
        <a href="{{ route('time-entries.create') }}" class="btn btn-primary">Add New</a>
    </div>
<table class="table table-striped">
    <tr>
        <th>SNo</th>
        <th>Project Name</th>
        <th>Task Name</th>
        <th>Hours</th>
        <th>Date</th>
        <th>Description</th>
    </tr>
    @forelse($timeEntries as $entry)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $entry->project->name }}</td>
        <td>{{ $entry->task->name }}</td>
        <td>{{ $entry->hours }}</td>
        <td>{{ $entry->date }}</td>
        <td>{{ $entry->description }}</td>
    </tr>
    @empty
<tr>
    <td colspan="6" align="center">No Data Found.</td>
</tr>
@endforelse
</table>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Manage Projects</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SNo</th>
                <th>Project Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


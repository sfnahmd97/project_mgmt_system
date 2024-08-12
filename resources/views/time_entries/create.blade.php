@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Add New Time Entry</h1>

    <form action="{{ route('time-entries.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="project_id" class="form-label">Project</label>
            <select name="project_id" id="project_id" class="form-select" required>
                <option value="" disabled selected>Select a project</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="task_id" class="form-label">Task</label>
            <select name="task_id" id="task_id" class="form-select" required>
                <option value="" disabled selected>Select a task</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="hours" class="form-label">Hours</label>
            <input type="number" name="hours" id="hours" class="form-control" min="1" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Time Entry</button>
        <a href="{{ route('time-entries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/time_entries.js') }}"></script>
@endsection

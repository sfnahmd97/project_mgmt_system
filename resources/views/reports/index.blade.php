@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Project Reports</h1>

    <div class="mb-4">
        <label for="project_id" class="form-label">Search by Project</label>
        <select name="project_id" id="project_id" class="form-select">
            <option value="">All Projects</option>
            @foreach($projects as $project)
                <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
        </select>
    </div>

    <div id="report-results">
        @include('reports.report_table', ['reports' => $initialReports])
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/reports.js') }}"></script>
@endsection

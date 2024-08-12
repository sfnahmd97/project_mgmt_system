<table class="table table-striped">
    <thead>
        <tr>
            <th>SNo</th>
            <th>Project Name</th>
            <th>Task Name</th>
            <th>Total Hours</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reports as $report)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $report->project_name }}</td>
                <td>{{ $report->task_name }}</td>
                <td>{{ $report->total_hours }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" align="center">No Data Found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

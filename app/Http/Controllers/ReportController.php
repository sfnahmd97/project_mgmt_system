<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TimeEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $initialReports = $this->getReports();
        return view('reports.index', compact('projects', 'initialReports'));
    }

    public function filter(Request $request)
    {
        $projectId = $request->get('project_id');
        $reports = $this->getReports($projectId);
        return view('reports.report_table', compact('reports'))->render();
    }

    private function getReports($projectId = null)
    {
        $query = TimeEntry::select('projects.name as project_name', 'tasks.name as task_name', DB::raw('SUM(hours) as total_hours'))
        ->join('projects', 'time_entries.project_id', '=', 'projects.id')
        ->join('tasks', 'time_entries.task_id', '=', 'tasks.id')
        ->groupBy('projects.name', 'tasks.name');

        if ($projectId) {
            $query->where('time_entries.project_id', $projectId);
        }

        return $query->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\TimeEntry;
use Illuminate\Http\Request;

class TimeEntryController extends Controller
{
    public function index()
    {
        $timeEntries = TimeEntry::with(['project', 'task'])->get();
        return view('time_entries.index', compact('timeEntries'));
    }

    public function create()
    {
        $projects = Project::all();
        $tasks = Task::all();
        return view('time_entries.create', compact('projects', 'tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'task_id' => 'required',
            'hours' => 'required',
            'date' => 'required|date',
            'description' => 'required'
        ]);

        TimeEntry::create($request->all());

        return redirect()->route('time-entries.index');
    }

    public function getTasks($projectId)
    {
        $tasks = Task::where('project_id', $projectId)->get();
        return response()->json($tasks);
    }
}

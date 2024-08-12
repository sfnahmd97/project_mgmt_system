<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\TimeEntry;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function tasks()
    {
        $tasks = Task::with('project')->get();
        return view('projects.tasks', compact('tasks'));
    }

    public function timeEntries()
    {
        $timeEntries = TimeEntry::with(['project', 'task'])->get();
        return view('projects.time_entries', compact('timeEntries'));
    }
}

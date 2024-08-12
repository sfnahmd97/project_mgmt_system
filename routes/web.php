<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TimeEntryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/tasks', [ProjectController::class, 'tasks'])->name('tasks.index');

Route::get('/time-entries', [TimeEntryController::class, 'index'])->name('time-entries.index');
Route::get('/time-entries/create', [TimeEntryController::class, 'create'])->name('time-entries.create');
Route::post('/time-entries', [TimeEntryController::class, 'store'])->name('time-entries.store');
Route::get('/get-tasks/{project_id}', [TimeEntryController::class, 'getTasks']);

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/filter', [ReportController::class, 'filter'])->name('reports.filter');

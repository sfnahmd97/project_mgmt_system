<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectIds = Project::pluck('id')->toArray();

        $tasks = [
            ['project_id' => $projectIds[0], 'name' => 'Task 1', 'status' => 'Active'],
            ['project_id' => $projectIds[0], 'name' => 'Task 2', 'status' => 'Active'],
            ['project_id' => $projectIds[0], 'name' => 'Task 3', 'status' => 'Active'],
            ['project_id' => $projectIds[3], 'name' => 'Task 4', 'status' => 'Active'],
            ['project_id' => $projectIds[3], 'name' => 'Task 5', 'status' => 'Active'],
        ];

        Task::insert($tasks);
    }
}

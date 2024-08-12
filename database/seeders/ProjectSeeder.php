<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ['name' => 'Project 1', 'status' => 'Active'],
            ['name' => 'Project 2', 'status' => 'Inactive'],
            ['name' => 'Project 3', 'status' => 'Active'],
            ['name' => 'Project 4', 'status' => 'Active'],
            ['name' => 'Project 5', 'status' => 'Active'],
        ];

        Project::insert($projects);
    }
}

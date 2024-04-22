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
        for ($i=0; $i<10; $i++) { 

            $newProject = new Project();

            $newProject-> name ='Progetto 1';
            $newProject-> description = 'Descrizione del Progetto 1';
            $newProject-> technologies_used = 'html,css,js';
            $newProject-> github_link = 'https://github.com/progetto1';

            $newProject->save();
        }
    }
}

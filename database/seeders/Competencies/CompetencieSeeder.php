<?php

namespace Database\Seeders\Competencies;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencies\Competencies;

class CompetencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competencies::query()->truncate();
        Competencies::factory(10)->create();
    }
}

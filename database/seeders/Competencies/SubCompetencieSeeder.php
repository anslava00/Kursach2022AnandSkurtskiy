<?php

namespace Database\Seeders\Competencies;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencies\SubCompetencies;

class SubCompetencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCompetencies::query()->truncate();
        SubCompetencies::factory(random_int(10, 20))->create();
    }
}

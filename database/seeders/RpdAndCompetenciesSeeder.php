<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rpdAndCompetencies;

class RpdAndCompetenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rpdAndCompetencies::query()->truncate();
        rpdAndCompetencies::factory(5)->create();
    }
}

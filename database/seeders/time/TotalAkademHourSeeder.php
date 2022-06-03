<?php

namespace Database\Seeders\time;

use App\Models\time\TotalAkademHours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TotalAkademHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TotalAkademHours::query()->truncate();
        TotalAkademHours::factory(10)->create();
    }
}

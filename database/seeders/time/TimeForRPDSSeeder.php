<?php

namespace Database\Seeders\time;

use App\Models\time\TimeForRPD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeForRPDSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeForRPD::query()->truncate();
        TimeForRPD::factory(10)->create();
    }
}

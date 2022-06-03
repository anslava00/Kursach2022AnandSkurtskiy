<?php

namespace Database\Seeders\time;

use App\Models\time\CreditUnits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CreditUnits::query()->truncate();
        CreditUnits::factory(10)->create();
    }
}

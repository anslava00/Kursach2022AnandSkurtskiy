<?php

namespace Database\Seeders;

use App\Models\RPDS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rpdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RPDS::query()->truncate();
        RPDS::factory(10)->create();
    }
}

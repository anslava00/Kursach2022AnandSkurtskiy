<?php

namespace Database\Seeders\basicInformation;

use App\Models\basicInformation\materialTexProduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialTexProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        materialTexProduction::query()->truncate();
        materialTexProduction::factory(10)->create();
    }
}

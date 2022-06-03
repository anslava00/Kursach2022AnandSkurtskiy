<?php

namespace Database\Seeders\basicInformation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\basicInformation\BasicInformation;

class BasicInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasicInformation::query()->truncate();
        BasicInformation::factory(10)->create();
    }
}

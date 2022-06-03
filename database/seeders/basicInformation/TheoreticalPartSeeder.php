<?php

namespace Database\Seeders\basicInformation;

use App\Models\basicInformation\theoreticalPart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TheoreticalPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        theoreticalPart::query()->truncate();
        theoreticalPart::factory(10)->create();
    }
}

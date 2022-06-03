<?php

namespace Database\Seeders\basicInformation;

use App\Models\basicInformation\practicalAndIndependentPart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticalAndIndependentPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        practicalAndIndependentPart::query()->truncate();
        practicalAndIndependentPart::factory(10)->create();
    }
}

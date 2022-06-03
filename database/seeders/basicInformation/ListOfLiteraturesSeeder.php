<?php

namespace Database\Seeders\basicInformation;

use App\Models\basicInformation\listOfLiteratures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListOfLiteraturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        listOfLiteratures::query()->truncate();
        listOfLiteratures::factory(10)->create();
    }
}

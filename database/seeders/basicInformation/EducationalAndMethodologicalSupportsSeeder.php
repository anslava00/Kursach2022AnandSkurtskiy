<?php

namespace Database\Seeders\basicInformation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\basicInformation\EducationalAndMethodologicalSupports;

class EducationalAndMethodologicalSupportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationalAndMethodologicalSupports::query()->truncate();
        EducationalAndMethodologicalSupports::factory(10)->create();
    }
}

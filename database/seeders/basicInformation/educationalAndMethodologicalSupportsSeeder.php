<?php

namespace Database\Seeders\basicInformation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\basicInformation\educationalAndMethodologicalSupports;

class educationalAndMethodologicalSupportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        educationalAndMethodologicalSupports::query()->truncate();
        educationalAndMethodologicalSupports::factory(10)->create();
    }
}

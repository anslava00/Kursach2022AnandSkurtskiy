<?php

namespace Database\Seeders\basicInformation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\basicInformation\methodologicalInstructions;

class MethodologicalInstructionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        methodologicalInstructions::query()->truncate();
        methodologicalInstructions::factory(10)->create();
    }
}

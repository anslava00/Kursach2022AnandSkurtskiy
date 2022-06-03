<?php

namespace Database\Seeders\time;

use App\Models\time\FormControl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormControlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormControl::query()->truncate();
        FormControl::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\departaments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        departaments::query()->truncate();
        departaments::factory(10)->create();
    }
}

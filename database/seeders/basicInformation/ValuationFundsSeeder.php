<?php

namespace Database\Seeders\basicInformation;

use App\Models\basicInformation\valuationFunds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValuationFundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        valuationFunds::query()->truncate();
        valuationFunds::factory(10)->create();
    }
}

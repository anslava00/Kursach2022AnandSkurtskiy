<?php

namespace Database\Seeders;

use App\Models\SubCompetencies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\basicInformation\BasicInformationSeeder;
use Database\Seeders\basicInformation\educationalAndMethodologicalSupportsSeeder;
use Database\Seeders\basicInformation\ListOfLiteraturesSeeder;
use Database\Seeders\basicInformation\MaterialTexProductionSeeder;
use Database\Seeders\basicInformation\MethodologicalInstructionsSeeder;
use Database\Seeders\basicInformation\PracticalAndIndependentPartSeeder;
use Database\Seeders\basicInformation\TheoreticalPartSeeder;
use Database\Seeders\basicInformation\ValuationFundsSeeder;
use Database\Seeders\Competencies\CompetencieSeeder;
use Database\Seeders\Competencies\SubCompetencieSeeder;
use Database\Seeders\time\CreditUnitsSeeder;
use Database\Seeders\time\FormControlsSeeder;
use Database\Seeders\time\TimeForRPDSSeeder;
use Database\Seeders\time\TotalAkademHourSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // rpdsSeeder::class,
            // CompetencieSeeder::class,
            // SubCompetencieSeeder::class,

            // RpdAndCompetenciesSeeder::class,

//             BasicInformationSeeder::class,
//             educationalAndMethodologicalSupportsSeeder::class,
//             ListOfLiteraturesSeeder::class,
//             MaterialTexProductionSeeder::class,
//             MethodologicalInstructionsSeeder::class,
//             PracticalAndIndependentPartSeeder::class,
//             TheoreticalPartSeeder::class,
//             ValuationFundsSeeder::class,

//             CreditUnitsSeeder::class,
//             FormControlsSeeder::class,
//             TimeForRPDSSeeder::class,
//             TotalAkademHourSeeder::class,
//             departamentsSeeder::class,
        ]);
    }
}

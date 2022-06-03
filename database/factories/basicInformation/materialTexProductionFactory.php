<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\materialTexProduction>
 */
class materialTexProductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'place' => $this->faker->word,
            'equipment' => $this->faker->realText(),
            'licensed_software' => $this->faker->realText(),
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

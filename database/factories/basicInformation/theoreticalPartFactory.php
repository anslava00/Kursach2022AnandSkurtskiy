<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\theoreticalPart>
 */
class theoreticalPartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lectures' => $this->faker->word,
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

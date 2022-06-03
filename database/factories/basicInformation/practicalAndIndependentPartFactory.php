<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\practicalAndIndependentPart>
 */
class practicalAndIndependentPartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'laboratory' => $this->faker->word,
            'tasks_for_independent_work' => $this->faker->word,
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

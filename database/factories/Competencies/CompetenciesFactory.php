<?php

namespace Database\Factories\Competencies;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompetenciesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'type_competencies' => $this->faker->word,
            'task' => $this->faker->word,
            'object' => $this->faker->word,
            'type_group' => $this->faker->word,
        ];
    }
}

<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\educationalAndMethodologicalSupport>
 */
class educationalAndMethodologicalSupportsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'graph_for_independent_work' => $this->faker->word,
            'recomendation_for_independent_work' => $this->faker->realText(),
            'metodic_recomendation_for_independent_work' => $this->faker->realText(),
            'grade_for_independent_work' => $this->faker->realText(),
            'metodic_recomendation_for_ecce' => $this->faker->realText(),
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

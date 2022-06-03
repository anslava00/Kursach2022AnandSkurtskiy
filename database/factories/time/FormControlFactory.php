<?php

namespace Database\Factories\time;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FormControlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'examination' => $this->faker->numberBetween(1,10),
            'zachet' => $this->faker->numberBetween(1,10),
            'zachet_with_grade' => $this->faker->numberBetween(1,10),
            'KP' => $this->faker->numberBetween(1,10),
            'KR' => $this->faker->numberBetween(1,10),
            'control' => $this->faker->numberBetween(1,10),
            'RGR' => $this->faker->numberBetween(1,10),
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

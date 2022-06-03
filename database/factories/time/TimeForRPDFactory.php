<?php

namespace Database\Factories\time;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TimeForRPDFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course' => $this->faker->numberBetween(1,10),
            'semester' => $this->faker->numberBetween(1,10),
            'c_u' => $this->faker->numberBetween(1,10),
            'lectures' => $this->faker->numberBetween(1,10),
            'laboratory' => $this->faker->numberBetween(1,10),
            'laboratory_inter' => $this->faker->numberBetween(1,10),
            'practice' => $this->faker->numberBetween(1,10),
            'practice_inter' => $this->faker->numberBetween(1,10),
            'KSP' => $this->faker->numberBetween(1,10),
            'OK' => $this->faker->numberBetween(1,10),
            'SP' => $this->faker->numberBetween(1,10),
            'control' => $this->faker->numberBetween(1,10),
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

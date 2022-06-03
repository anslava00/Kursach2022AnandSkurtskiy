<?php

namespace Database\Factories\time;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CreditUnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fackts' => $this->faker->numberBetween(1,10),
            'experts' => $this->faker->numberBetween(1,10),
            'hour_in_c_u' => $this->faker->numberBetween(1,10),
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

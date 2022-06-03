<?php

namespace Database\Factories\time;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TotalAkademHoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'experts' => $this->faker->numberBetween(1,10),
            'to_plan' => $this->faker->numberBetween(1,10),
            'control_work' => $this->faker->numberBetween(1,10),
            'SR' => $this->faker->numberBetween(1,10),
            'kontrol' => $this->faker->numberBetween(1,10),
            'inter_hour' => $this->faker->numberBetween(1,10),
            'pr_podgot' => $this->faker->numberBetween(1,10),
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

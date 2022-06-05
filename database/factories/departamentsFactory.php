<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\departaments>
 */
class departamentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'abbreviathion' => $this->faker->word,
            'title' => $this->faker->word,
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

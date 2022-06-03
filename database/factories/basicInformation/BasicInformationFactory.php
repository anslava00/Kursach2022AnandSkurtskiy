<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BasicInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'purpose' => $this->faker->word,
            'task' => $this->faker->realText(),
            'r_p_d_s_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

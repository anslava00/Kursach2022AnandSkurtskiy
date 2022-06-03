<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\methodologicalInstructions>
 */
class methodologicalInstructionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'metodic_instruction' => $this->faker->word,
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listOfLiterature>
 */
class listOfLiteraturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'list_literature' => $this->faker->word,
            'more_literature' => $this->faker->realText(),
            'list_internet' => $this->faker->realText(),
            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

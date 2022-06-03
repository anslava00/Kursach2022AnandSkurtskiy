<?php

namespace Database\Factories\basicInformation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\valuationFunds>
 */
class valuationFundsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'evaluation_tools' => $this->faker->word,
            'general_information' => $this->faker->realText(),
            'general_evaluation_tools' => $this->faker->realText(),
            'methodological_instructions' => $this->faker->realText(),
            'questions_offset' => $this->faker->realText(),
            'grade_questions_offset' => $this->faker->realText(),
            'oral_question' => $this->faker->realText(),
            'grade_oral_question' => $this->faker->realText(),
            'presentation' => $this->faker->realText(),
            'grade_presentation' => $this->faker->realText(),
            'ecce' => $this->faker->realText(),
            'grade_ecce' => $this->faker->realText(),
            'laboratory' => $this->faker->realText(),
            'grade_laboratory' => $this->faker->realText(),
            'coontrol_word' => $this->faker->realText(),
            'grade_control_work' => $this->faker->realText(),
            'creative_task' => $this->faker->realText(),
            'grade_creative_task' => $this->faker->realText(),

            'basic_information_id' => $this->faker->unique()->numberBetween(1,10),
        ];
    }
}

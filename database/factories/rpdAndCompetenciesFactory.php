<?php

namespace Database\Factories;

use App\Models\RPDS;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use App\Models\Competencies\Competencies;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rpdAndCompetencies>
 */
class rpdAndCompetenciesFactory extends Factory
{
    private $competencieIds;
    private $rdpIds;
    public function __construct($count = null, ?Collection $states = null, ?Collection $has = null, ?Collection $for = null, ?Collection $afterMaking = null, ?Collection $afterCreating = null, ?Collection $connection = null)
    {
        parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection);
        $this->rdpIdsIds = RPDS::pluck('id')->all();
        $this->competencieIds = Competencies::pluck('id')->all();
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'r_p_d_s_id' => $this->faker->randomElement($this->rdpIdsIds),
            'competencies_id' => $this->faker->randomElement($this->competencieIds),
        ];
    }
}

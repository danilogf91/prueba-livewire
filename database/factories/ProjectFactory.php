<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'pda_code' => $this->faker->unique()->word,
            'rate' => $this->faker->randomFloat(2, 0, 100),
            'state' => $this->faker->randomElement(['planification', 'execution', 'finished']),
            'investments' => $this->faker->randomElement([
                'innovation',
                'efficiency_&_saving',
                'replacement_&_restructuring',
                'quality_&_hygiene',
                'health_&_safety',
                'environment',
                'maintenance',
                'capacity_increase'
            ]),
            'justification' => $this->faker->randomElement(['normal_capex', 'special_project']),
            'start_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
        ];
    }
}

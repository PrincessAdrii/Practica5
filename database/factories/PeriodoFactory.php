<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPeriodo' => fake()->bothify("?#"),,
            'periodo' => fake()->name(),
            'descCorta' => fake()->lastName(),
            'fechaIni' => fake()->date(),
            'fechaFin' => fake()->date(),
        ];
    }
}

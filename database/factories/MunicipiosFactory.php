<?php

namespace Database\Factories;

use App\Models\Estados;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MunicipiosModel>
 */
class MunicipiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return[
                'nombre'=>$this->faker->name(),
                'cp'=>$this->faker->numberBetween(0,2136367),
                'id_estado' => Estados::all()->random()->id_estado,
            ];

    }
}

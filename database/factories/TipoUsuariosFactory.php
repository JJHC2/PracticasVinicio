<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TipoUsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'clave'=>$this->faker->randomNumber(6),
            'nombre_tipo'=>$this->faker->randomElement(['Administrador','Usuario','Supervisor','SuperUsuario','empleado']),
            'detalle'=>$this->faker->text(10),
            
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\TipoUsuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuariosFactory extends Factory
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
            'nombre'=>$this->faker->name(),
            'app'=>$this->faker->name(),
            'apm'=>$this->faker->name(),
            'fn'=>$this->faker->date('Y-m-d','now'),
            'gn'=>$this->faker->randomElement(['Masculino','Femenino']),
            'imagen'=>$this->faker->text(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password(6,20),
            'tipousua_id' => TipoUsuarios::all()->random()->id,
            'activo'=>$this->faker->boolean(),
        ];
    }
   
}

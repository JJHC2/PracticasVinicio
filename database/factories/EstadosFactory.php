<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstadosModel>
 */
class EstadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $estados = [
                ['nombre_e' => 'Aguascalientes'],
                ['nombre_e' => 'Estado De Mexico'],
                ['nombre_e' => 'Baja California'],
                ['nombre_e' => 'Baja California Sur'],
                ['nombre_e' => 'Campeche'],
                ['nombre_e' => 'Chiapas'],
                ['nombre_e' => 'Chihuahua'],
                ['nombre_e' => 'Coahuila'],
                ['nombre_e' => 'Colima'],
                ['nombre_e' => 'Cuidad De Mexico'],
                ['nombre_e' => 'Guanajuato'],
                ['nombre_e' => 'Guerrero'],
                ['nombre_e' => 'Hidalgo'],
                ['nombre_e' => 'Jalisco'],
                ['nombre_e' => 'Michoacán'],
                ['nombre_e' => 'Morelos'],
                ['nombre_e' => 'Nayarit'],
                ['nombre_e' => 'Oaxaca'],
                ['nombre_e' => 'Nuevo Leon'],
                ['nombre_e' => 'Puebla'],
                ['nombre_e' => 'Queretaro'],
                ['nombre_e' => 'Quintana Roo'],
                ['nombre_e' => 'San Luis Potosí'],
                ['nombre_e' => 'Sinaloa'],
                ['nombre_e' => 'Sonora'],
                ['nombre_e' => 'Tabasco'],
                ['nombre_e' => 'Tamaulipas'],
                ['nombre_e' => 'Tlaxcala'],
                ['nombre_e' => 'Veracruz'],
                ['nombre_e' => 'Yucatán'],
                ['nombre_e' => 'Zacatecas'],
            ];
            DB::table('estados')
            ->orderBy('nombre_e') // Ordena los registros por el campo 'nombre'
            ->insert($estados);
    }
}

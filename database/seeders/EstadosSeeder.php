<?php

namespace Database\Seeders;

use App\Models\Estados;
use App\Models\EstadosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::factory()->count(32)->create();
    }
}

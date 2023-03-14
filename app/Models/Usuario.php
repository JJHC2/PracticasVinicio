<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table='usuario';
    protected $fillable=[
        'matricula',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'gen',
        'id_estado',
        'id_municipio',
        'direccion',
    ];
}

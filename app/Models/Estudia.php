<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudia extends Model
{
    use HasFactory;
    protected $table='estudia';
    protected $fillable=[
        'grado','universidad','carrera','usuario_id',
    ];
}

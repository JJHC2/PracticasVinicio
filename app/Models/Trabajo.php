<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;
    protected $table='trabajo';
    protected $fillable=[
        'horast',
        'empresa',
        'dirt',
        'diast',
        'usuario_id',
    ];
}

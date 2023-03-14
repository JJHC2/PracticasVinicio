<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table='tb_usuarios';
    protected $fillable=[
        'clave',
        'nombre',
        'app',
        'apm',
        'fn',
        'gen',
        'imagen',
        'email',
        'password',
        'tipousua_id',
        'activo',
    ];
    public function TipoUsuarios()
    {
        return $this->belongsTo(TipoUsuarios::class);
    }
}

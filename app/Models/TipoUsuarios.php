<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuarios extends Model
{
    use HasFactory;
    protected $table='tb_tipo_usuarios';
    protected $fillable=[
        'clave',
        'nombre',
        'detalle',
    ];
    public function usuarios()
    {
        return $this->belongsTo(UsuariosModel::class);
    }
}

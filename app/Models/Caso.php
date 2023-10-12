<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'fecha_registro',
        'usuario_registra',
        'fecha_solucion',
        'descripcion_caso',
        'usuario_asignado',
        'estado',
        'estado_caso',
        'tipo_urgencia',
    ];
}

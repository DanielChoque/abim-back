<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asociado extends Model
{
    use HasFactory;

    protected $table = 'asociado';
    protected $fillable = [
        'grado',
        'diplomado',
        'arma_origen',
        'especialidad_ingenieria',
        'nombres',
        'ap_p',
        'ap_m',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'ci',
        'exp',
        'estado_civil',
        'carnet_militar',
        'cuidad_residencia_actual',
        'direccion_actual',
        'telefono',
        'celular',
        'correo',
        'nombres_apellidos_esposoa',
        'nombre_hijos_edad',
        'numero_emergencia',
        'telefono_persona_contacto',
        'numeroboleta',
        'reparticion',
        'fuerza',
        'situacion_militar',
        'lugar_registro',
        'fecha_registro',
        'con_file',
        'observacion'
    ];
}

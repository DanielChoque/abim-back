<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asociado', function (Blueprint $table) {
            $table->id();
            $table->string('grado');
            $table->string('diplomado');
            $table->string('arma_origen');
            $table->string('especialidad_ingenieria');
            $table->string('nombres');
            $table->string('ap_p');
            $table->string('ap_m');
            $table->string('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('ci');
            $table->string('exp');
            $table->string('estado_civil');
            $table->string('carnet_militar');
            $table->string('cuidad_residencia_actual');
            $table->string('direccion_actual');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->string('nombres_apellidos_esposoa');
            $table->string('nombre_hijos_edad');
            $table->string('numero_emergencia');
            $table->string('telefono_persona_contacto');
            $table->string('numeroboleta');
            $table->string('reparticion');
            $table->string('fuerza');
            $table->string('situacion_militar');
            $table->string('lugar_registro');
            $table->string('fecha_registro');
            $table->string('con_file');
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asociado');
    }
};

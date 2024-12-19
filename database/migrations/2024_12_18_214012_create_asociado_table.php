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
            $table->string('grado')->nullable()->default(null);
            $table->string('diplomado')->nullable()->default(null);
            $table->string('arma_origen')->nullable()->default(null);
            $table->string('especialidad_ingenieria')->nullable()->default(null);
            $table->string('nombres')->nullable()->default(null);
            $table->string('ap_p')->nullable()->default(null);
            $table->string('ap_m')->nullable()->default(null);
            $table->string('fecha_nacimiento')->nullable()->default(null);
            $table->string('lugar_nacimiento')->nullable()->default(null);
            $table->string('ci')->nullable()->default(null);
            $table->string('exp')->nullable()->default(null);
            $table->string('estado_civil')->nullable()->default(null);
            $table->string('carnet_militar')->nullable()->default(null);
            $table->string('cuidad_residencia_actual')->nullable()->default(null);
            $table->string('direccion_actual')->nullable()->default(null);
            $table->string('telefono')->nullable()->default(null);
            $table->string('celular')->nullable()->default(null);
            $table->string('correo')->nullable()->default(null);
            $table->string('nombres_apellidos_esposoa')->nullable()->default(null);
            $table->string('nombre_hijos_edad')->nullable()->default(null);
            $table->string('numero_emergencia')->nullable()->default(null);
            $table->string('telefono_persona_contacto')->nullable()->default(null);
            $table->string('numeroboleta')->nullable()->default(null);
            $table->string('reparticion')->nullable()->default(null);
            $table->string('fuerza')->nullable()->default(null);
            $table->string('situacion_militar')->nullable()->default(null);
            $table->string('lugar_registro')->nullable()->default(null);
            $table->string('fecha_registro')->nullable()->default(null);
            $table->string('con_file')->nullable()->default(null);
            $table->string('observacion')->nullable()->default(null);
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

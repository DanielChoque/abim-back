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
        Schema::create('aporte', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_transaccion')->nullable()->default(null);
            $table->decimal('cost', 5,2)->nullable()->default(0);
            $table->string('ci')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aporte');
    }
};

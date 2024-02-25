<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->string('diagnostico', 255);
            $table->string('CI10', 255);
            $table->string('CPN', 255);
            $table->string('EG', 255);
            $table->string('codigo_atencion', 255);
            $table->date('fecha_registro');
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('empleado_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('establecimiento_otro', 100)->nullable();
            $table->string('medico_otro', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordens');
    }
};

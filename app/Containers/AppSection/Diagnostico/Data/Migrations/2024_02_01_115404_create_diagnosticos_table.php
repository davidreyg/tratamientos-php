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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_finalizacion', 100)->nullable();
            $table->boolean('estado');
            // $table->date('fecha');
            $table->string('observaciones', 100)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('financiamiento_id')->constrained();

            // Claves foráneas que referencia a la tabla personas para medico y paciente
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('personas');

            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('personas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
    }
};

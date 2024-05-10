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
        Schema::create('examen_unidad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->constrained()->cascadeOnDelete();
            $table->foreignId('unidad_id')->constrained();
            $table->float('minimo');
            $table->float('maximo')->nullable();
            $table->string('tipo', 100);
            $table->string('operador', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_unidad');
    }
};

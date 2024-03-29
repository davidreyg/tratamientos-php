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
        Schema::create('examen_orden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_id')->constrained();
            $table->foreignId('examen_id')->constrained();
            $table->foreignId('unidad_id')->nullable()->constrained();
            $table->float('resultado')->nullable();
            $table->date('fecha_resultado')->nullable();
            $table->boolean('is_canceled')->default(false);
            $table->string('motivo', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_orden');
    }
};

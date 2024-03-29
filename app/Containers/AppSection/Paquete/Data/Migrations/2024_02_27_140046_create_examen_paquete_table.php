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
        Schema::create('examen_paquete', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paquete_id')->constrained()->cascadeOnDelete();
            $table->foreignId('examen_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_paquete');
    }
};

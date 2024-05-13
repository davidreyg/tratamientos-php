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
        Schema::create('item_orden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_id')->constrained()->cascadeOnDelete();
            $table->foreignId('item_id')->constrained();
            $table->foreignId('unidad_id')->nullable()->constrained();
            $table->string('resultado')->nullable();
            $table->foreignId('respuesta_id')->nullable()->constrained();
            $table->boolean('is_canceled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_orden');
    }
};

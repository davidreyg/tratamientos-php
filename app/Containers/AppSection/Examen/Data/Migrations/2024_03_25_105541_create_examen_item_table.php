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
        Schema::create('examen_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->constrained()->cascadeOnDelete();
            $table->foreignId('item_id')->constrained();
            // $table->float('minimo');
            // $table->float('maximo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_item');
    }
};

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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->unsigned()->unique();
            $table->string('nombre', 200);
            $table->float('precio');
            $table->foreignId('categoria_id')->constrained();
            $table->boolean('is_active');
            $table->string('tipo', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};

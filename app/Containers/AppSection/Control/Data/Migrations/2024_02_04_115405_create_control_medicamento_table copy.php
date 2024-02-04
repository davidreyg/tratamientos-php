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
        Schema::create('control_medicamento', function (Blueprint $table) {
            $table->unsignedBigInteger('control_id');
            $table->foreign('control_id')->references('id')->on('controls');
            $table->unsignedBigInteger('medicamento_id');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_medicamento');
    }
};

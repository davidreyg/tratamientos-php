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
        Schema::create('diagnostico_enfermedad', function (Blueprint $table) {
            $table->id();
            // $table->string('nombre', 100);

            $table->unsignedBigInteger('diagnostico_id');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos')->onDelete('cascade');
            $table->unsignedBigInteger('enfermedad_id');
            $table->foreign('enfermedad_id')->references('id')->on('enfermedads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostico_enfermedad');
    }
};

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
        Schema::create('complicacion_control', function (Blueprint $table) {
            $table->unsignedBigInteger('control_id');
            $table->foreign('control_id')->references('id')->on('controls')->onDelete('cascade');
            $table->unsignedBigInteger('complicacion_id');
            $table->foreign('complicacion_id')->references('id')->on('complicacions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complicacion_control');
    }
};

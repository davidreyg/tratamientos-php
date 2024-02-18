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
        Schema::create('control_signo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('control_id');
            $table->foreign('control_id')->references('id')->on('controls')->onDelete('cascade');
            $table->unsignedBigInteger('signo_id');
            $table->foreign('signo_id')->references('id')->on('signos');
            $table->float('valor')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_signo');
    }
};

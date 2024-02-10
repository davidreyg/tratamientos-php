<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\PermissionRegistrar;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('privilegios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // $table->string('abbreviation')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('icono')->nullable();
            $table->string('ruta')->nullable();
            // $table->string('tipo');
            $table->unsignedBigInteger('parent_id')->nullable();
            // $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')->on('privilegios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privilegios');
    }
};

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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->bigInteger('numero_documento')->unsigned()->unique();
            $table->date('fecha_nacimiento');
            $table->integer('edad')->unsigned();
            $table->string('sexo', 10);
            $table->string('direccion', 200);
            $table->bigInteger('telefono')->unsigned()->nullable();
            $table->string('historia_clinica', 50)->unique();

            // Claves foráneas que referencia a la tabla personas para tipo documento y tipo persona
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

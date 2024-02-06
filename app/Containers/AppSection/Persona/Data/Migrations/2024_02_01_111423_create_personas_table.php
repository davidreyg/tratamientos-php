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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->integer('numero_documento')->unsigned()->unique();
            $table->date('fecha_nacimiento');
            $table->integer('edad')->unsigned();
            $table->string('sexo', 10);
            $table->string('direccion', 50);
            $table->integer('codigo_establecimiento')->unsigned()->nullable();
            $table->integer('telefono')->unsigned()->nullable();
            $table->integer('historia_clinica')->unsigned()->unique();

            // Claves foráneas que referencia a la tabla personas para tipo documento y tipo persona
            $table->unsignedBigInteger('tipo_persona_id');
            $table->foreign('tipo_persona_id')->references('id')->on('tipo_personas');
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

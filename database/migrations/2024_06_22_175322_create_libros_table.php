<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->string('isbn', 16)->primary();
            $table->string('titulo_libro', 150);
            $table->string('anio_publicacion', 45);
            $table->string('autor', 150);
            $table->string('clasificacion', 45);
            $table->string('cantidad_paginas', 45);
            $table->unsignedBigInteger('id_tipo_pasta');
            $table->foreign('id_tipo_pasta')->references('id_tipo_pasta')->on('tipo_pasta');
            $table->timestamps();

            // Indexes
            $table->index('autor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}

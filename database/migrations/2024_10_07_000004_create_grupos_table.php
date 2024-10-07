<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grupos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('portada');
            $table->string('contenido');
            $table->unsignedBigInteger('cursos_id');
            $table->timestamps();
            $table->foreign('cursos_id')->references('id')->on('Cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Grupos');
    }
}

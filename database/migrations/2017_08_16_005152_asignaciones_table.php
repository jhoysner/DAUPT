<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->integer('tiempo_id')->unsigned();
            $table->integer('dia_id')->unsigned();
            $table->timestamps();



            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->foreign('tiempo_id')->references('id')->on('tiempos');
            $table->foreign('dia_id')->references('id')->on('dias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaciones');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquipoAsignacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_asignacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aula_id')->unsigned();
            $table->integer('equipo_id')->unsigned();
            $table->integer('cantidad');
            $table->timestamps();

             $table->foreign('aula_id')->references('id')->on('aulas');
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_asignacion');
    }
}

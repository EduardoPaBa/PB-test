<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();

            $table->string('codigo');
            $table->string('nombre');
            $table->string('edad');
            $table->string('sexo');
            /* $table->string('grado_id'); necesita foranea*/
            $table->unsignedBigInteger('grado_id');
            $table->string('observacion');
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->timestamps();





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

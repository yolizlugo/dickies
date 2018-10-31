<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->integer('edad');
            $table->string('domicilio');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('celular');
            $table->string('lugar_nac');
            $table->string('fecha_nac');
            $table->string('pais');
            $table->string('genero');
            $table->string('vives_con');
            $table->double('estatura');
            $table->integer('peso');
            $table->string('estado_civil');
            $table->string('curp');
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
        Schema::dropIfExists('aspirantes');
    }
}

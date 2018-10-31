<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aspirante_id')->unsigned();
            $table->string('name_school');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->string('address_school');
            $table->string('certificado');

            $table->foreign('aspirante_id')->references('id')->on('aspirantes');
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
        Schema::dropIfExists('schools');
    }
}

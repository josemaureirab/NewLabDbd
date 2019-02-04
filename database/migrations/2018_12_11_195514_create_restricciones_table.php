<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestriccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restricciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_restriccion');
            $table->longText('descripcion_restriccion');
            $table->longText('sancion_restriccion');
            $table->unsignedInteger('id_ciudad');
            $table->timestamps();

            

            $table->foreign('id_ciudad')
                ->references('id')
                ->on('ciudades')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restricciones');
    }
}

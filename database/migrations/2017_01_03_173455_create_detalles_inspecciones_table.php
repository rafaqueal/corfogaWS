<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesInspeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_inspecciones', function (Blueprint $table) {
            $table->integer('detalle_id')->unsigned();
            $table->integer('inspeccion_id')->unsigned()->nullable();
            $table->string('animal_codigo')->nullable();
            $table->string('comentario')->nullable();
            $table->timestamps();

            $table->foreign('detalle_id')->references('id')->on('detalles')->onDelete('cascade');
            $table->foreign('inspeccion_id')->references('id')->on('inspecciones')->onDelete('cascade');
            $table->foreign('animal_codigo')->references('codigo')->on('animales')->onDelete('cascade');
            $table->primary('detalle_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_inspecciones');
    }
}

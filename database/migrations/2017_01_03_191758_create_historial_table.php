<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_animales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('animal_registro')->nullable();
            $table->integer('detalle_id')->unsigned()->nullable();
            $table->tinyInteger('numero_inspeccion')->nullable();
            $table->timestamps();

            $table->foreign('animal_registro')->references('registro')->on('animales')->onDelete('cascade');
            $table->foreign('detalle_id')->references('id')->on('detalles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_animales');
    }
}

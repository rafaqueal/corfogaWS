<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_asocebu', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_emitido')->nullable();
            $table->integer('propietario_id')->nullable();
            $table->string('animal_registro')->nullable();
            $table->timestamps();

            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreign('animal_registro')->references('registro')->on('animales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_asocebu');
    }
}

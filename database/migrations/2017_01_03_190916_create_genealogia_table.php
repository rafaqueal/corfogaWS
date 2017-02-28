<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenealogiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genealogia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('animal_registro')->nullable();
            $table->string('registro_padre')->nullable();
            $table->string('registro_madre')->nullable();
            $table->timestamps();

            $table->foreign('animal_registro')->references('registro')->on('animales')->onDelete('cascade');
            $table->foreign('registro_padre')->references('registro')->on('progenitores')->onDelete('cascade');
            $table->foreign('registro_madre')->references('registro')->on('progenitores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genealogia');
    }
}

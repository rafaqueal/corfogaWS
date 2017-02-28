<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFincasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fincas', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nombre')->nullable();
            $table->enum('region', ['Central', 'Chorotega', 'Pacífico Central', 'Brunca', 'Huetar Atlántica', 'Huetar Norte']);
            $table->integer('propietario_id')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('propietario_id')->references('id')->on('propietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fincas');
    }
}

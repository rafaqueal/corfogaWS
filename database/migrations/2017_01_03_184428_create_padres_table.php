<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progenitores', function (Blueprint $table) {
            $table->string('registro');
            $table->string('codigo')->nullable();
            $table->enum('sexo', ['M', 'H'])->nullable();
            $table->timestamps();

            $table->primary('registro');
            $table->index('codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padres');
    }
}

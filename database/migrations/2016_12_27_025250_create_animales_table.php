<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->string('registro');
            $table->string('codigo');
            $table->string('nombre')->nullable();
            $table->string('raza')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('sexo', ['M', 'H'])->nullable();
            $table->tinyInteger('origen_reproductivo')->nullable();
            $table->date('fecha_destete')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('animales');
    }
}

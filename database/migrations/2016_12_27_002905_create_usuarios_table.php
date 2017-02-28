<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            
          $table->integer('id');
          //  $table->increments('id');
            $table->string('cedula')->nullable();
            $table->string('nombre')->nullable();
            $table->string('contrasenia')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->enum('rol', ['admin', 'criador', 'inspector']);
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('cor_id');
            $table->integer('marca_id');
            $table->string('nome', 100);
            $table->string('placa', 8);
            $table->string('ano', 4)->nullable();
            $table->string('modelo', 4)->nullable();
            $table->string('renavam', 20)->nullable();
            $table->string('chassi', 40)->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}

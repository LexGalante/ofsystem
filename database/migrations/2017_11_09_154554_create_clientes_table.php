<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['F', 'J'])->default('F');
            $table->string('nome', 255);
            $table->string('apelido', 50);
            $table->string('cprf', 20);
            $table->string('inscricao_estadual', 20);
            $table->string('inscricao_municipal', 50);            
            $table->enum('situacao', ['A', 'I']);
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
        Schema::dropIfExists('clientes');
    }
}

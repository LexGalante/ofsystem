<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionario_id')->unsigned();
            $table->enum('tipo', ['E', 'T', 'C', 'S']);
            $table->string('contato', 250);
            $table->timestamps();
        });
        
        Schema::table('funcionario_contatos', function(Blueprint $table){
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionario_contatos', function(Blueprint $table){
            $table->dropForeign(['funcionario_id']);
        });
        
        Schema::dropIfExists('funcionario_contatos');
    }
}

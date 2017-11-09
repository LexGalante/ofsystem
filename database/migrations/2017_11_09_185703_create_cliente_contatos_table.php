<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->enum('tipo', ['E', 'T', 'C', 'S']);
            $table->string('contato', 250);
            $table->timestamps();
        });
        
        Schema::table('cliente_contatos', function(Blueprint $table){
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente_contatos', function(Blueprint $table){
            $table->dropForeign(['cliente_id']);
        });
        
        Schema::dropIfExists('cliente_contatos');
    }
}

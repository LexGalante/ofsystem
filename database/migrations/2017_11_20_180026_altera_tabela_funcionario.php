<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlteraTabelaFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('cargo_id')->unsigned();
            $table->decimal('salario', 8, 2)->nullable();
            $table->integer('filhos')->default(0);
            $table->date('admissao')->nullable();
            $table->date('demissao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->dropColumn(['user_id', 'cargo_id', 'salario', 'filhos', 'admissao', 'demissao']);
        });
    }
}

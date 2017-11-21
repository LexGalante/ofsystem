<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlteraFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->date('nascimento')->nullable()->after('sobrenome');
            $table->enum('genero', ['M', 'F', 'O'])->after('sobrenome')->nullable();
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
            $table->dropColumn(['nascimento', 'genero']);
        });
    }
}

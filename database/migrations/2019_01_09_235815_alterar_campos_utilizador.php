<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarCamposUtilizador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilizadors', function (Blueprint $table) {
            $table->renameColumn('nome_utilizador', 'name');
            $table->renameColumn('password_utilizador', 'password');
            $table->renameColumn('email_utilizador', 'email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

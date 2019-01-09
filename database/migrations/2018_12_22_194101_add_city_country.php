<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('utilizadors', function($table) {
                $table->string('cidade_utilizador');
                $table->string('pais_utilizador');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('utilizadors', function($table) {
            $table->dropColumn('cidade_utilizador');
            $table->dropColumn('pais_utilizador');
        });
    }
}

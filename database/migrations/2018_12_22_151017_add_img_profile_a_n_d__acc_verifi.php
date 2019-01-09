<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgProfileANDAccVerifi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('utilizadors', function($table) {
            $table->string('img_profile_utilizador')->default('/img-default.png');
            $table->string('AccVerifi_utilizador')->default('Nao');
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
            $table->dropColumn('img_profile_utilizador');
            $table->dropColumn('AccVerifi_utilizador');
        });
    }
}

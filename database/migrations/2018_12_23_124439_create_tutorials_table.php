<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id_tutorial');
            $table->integer('id_categoria');
            $table->integer('id_utilizador');
            $table->string('titulo');
            $table->longText('descricao');
            $table->string('img_capa')->default('/img-tutorial-default.png');
            $table->longText('content');
            $table->integer('num_views')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('dificuldade')->default(0);



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
        Schema::dropIfExists('tutorials');
    }
}

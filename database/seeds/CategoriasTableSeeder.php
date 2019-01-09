<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Categoria;


class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        Categoria::create(["nome_categoria"=>"Java"]);
        Categoria::create(["nome_categoria"=>"C++"]);
        Categoria::create(["nome_categoria"=>"C#"]);
        Categoria::create(["nome_categoria"=>"Php"]);
        Categoria::create(["nome_categoria"=>"Vanila Javascript"]);
        Categoria::create(["nome_categoria"=>"jQuery"]);
        Categoria::create(["nome_categoria"=>"AngularJS"]);
        Categoria::create(["nome_categoria"=>"Angular 6"]);

    }
}

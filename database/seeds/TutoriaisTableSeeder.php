<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Tutorial;
class TutoriaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();


        for($i=1 ;$i<=100;$i++){

            Tutorial::create(["id_categoria"=>rand(1,8),
                "id_utilizador"=>rand(1,200),
                "titulo"=>$faker->catchPhrase,
                "descricao"=>$faker->catchPhrase.$faker->catchPhrase,
                "content"=>$faker->paragraph    .$faker->paragraph,
                "num_views"=> rand(1,4000),
                "rating"=>rand(1,5),
                "dificuldade"=> rand(1,3)]);
        }




    }
}

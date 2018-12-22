<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\utilizador;

class UtilizadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        utilizador::create(["tipo_utilizador"=>"admin",
            "nome_utilizador"=>"adminMegaFixe",
            "password_utilizador"=>"batatas",
            "email_utilizador"=>"batatinha@email.pt",
              "cidade_utilizador"=>$faker->city,
                "pais_utilizador"=>$faker->country]);


        for($i=1 ;$i<=100;$i++){

            utilizador::create(["tipo_utilizador"=>"autor",
                "nome_utilizador"=>$faker->name,
                "password_utilizador"=>$faker->password,
                "email_utilizador"=>$faker->email,
                "cidade_utilizador"=>$faker->city,
                "pais_utilizador"=>$faker->country]);

        }

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilizador extends Authenticatable
{
    protected $fillable= ["tipo_utilizador",
        "name",
        "password",
        "email",
        "img_profile_utilizador",
        "AccVerifi_utilizador",
        "cidade_utilizador",
        "pais_utilizador"];


    public function tutoriais()
    {
        return $this->hasMany('App\Tutorial',"id_utilizador","id");
    }



    static function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);

        $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );

        return array($first_name, $last_name);
    }
}


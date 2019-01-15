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

}


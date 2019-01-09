<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $fillable= ["nome_categoria"];


    public function tutoriais()
    {
        return $this->hasMany('App\Tutorial',"id_categoria","id_categoria");
    }

}

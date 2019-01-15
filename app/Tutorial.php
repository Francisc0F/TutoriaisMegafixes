<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
  //  protected $fillable = ['updated_at', 'created_at'];
   // public $timestamps = true;

    public function utilizador()
    {
        return $this->belongsTo('App\Utilizador',"id_utilizador","id");
    }

    public function Categoria()
    {
        return $this->belongsTo('App\Categoria',"id_categoria","id_categoria");
    }


}

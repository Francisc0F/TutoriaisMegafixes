<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilizador extends Model
{
    protected $fillable= ["tipo_utilizador","nome_utilizador","num_tutoriais","password_utilizador","email_utilizador"];





}

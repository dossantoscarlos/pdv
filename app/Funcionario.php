<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Pessoa;

class Funcionario extends Model
{
   public function pessoas(){
   	return $this->hasMany('App\Pessoa','id', 'id_pessoa');
   }
   
}

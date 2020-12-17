<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Prueba extends Model 
  {
   public $timestamps=false;

   protected $fillable = [
        'nombre', 'apellido'
    ];
 
}

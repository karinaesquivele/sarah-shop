<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cliente extends Eloquent
{
    protected $connection = 'mongodb';//Con quien nos vamos a conectar
    protected $collection = 'cliente'; //La colecction que será utilzada
    
        protected $fillable = [
            '_id','nombre','apellidos','email','telefono','estado','ciudad','calle','cp' //Los campos de mi collection
        ];
}

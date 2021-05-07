<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Prueba extends Eloquent
{
    protected $connection = 'mongodb';//Con quien nos vamos a conectar
	protected $collection = 'compra'; //La colecction que será utilzada
    
    	protected $fillable = [
		    '_id', 'imagen','precio' //Los campos de mi collection
		];
}

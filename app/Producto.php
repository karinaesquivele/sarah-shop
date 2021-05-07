<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Producto extends Eloquent
{
    protected $connection = 'mongodb';//Con quien nos vamos a conectar
	protected $collection = 'productos'; //La colecction que será utilzada, en este caso productos
    
    	protected $fillable = [
		    '_id', 'imagen','modelo','talla','color','categoria','precio' //Los campos de la collection
		];
}

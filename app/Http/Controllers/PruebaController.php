<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba; 

class PruebaController extends Controller
{
    
    public function mostrar(){
        $prueba = Prueba::all();
        $registros = Prueba::count();
        return view('home',compact('prueba','registros'));
    }
}

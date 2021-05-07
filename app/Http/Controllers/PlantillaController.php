<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function __construct(){
        if (\Session::has('carro')) \Session::put('carro', array());
    }

    public function mostrar(){
        $carro= \Session::get('carro');

        return view('layout',compact('carro'));

    }
}

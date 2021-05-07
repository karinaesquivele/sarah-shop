<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Producto; 

class PanelProductoController extends Controller
{
    /*public function mostrar(){

    }*/

 

    /*public function index(){
        $productos=DB::table('producto')->get();
        return view('panel.index',[
            'productos'=>$productos]);
          
    }*/

    public function index(){
        $Productos=Producto::all();
        return view('panel.index', compact('productos'));
    }
   


    //Funcion que lleva al formulario de agregar
    public function agregar(){
       
        return view('panel.agregar');
    }


    //Función para insertar productos nuevos
    public function insertar(Request $request){
        function comprobarId($categ){
            $res=Producto::where('categoria', $categ)->count();
            $contador= $res+1; 

            return $contador;
        }
        /*function sigla($categ){
            $sigla = substr($categ, 2);
            return $sigla;
        }¨*/
        $categoria=$request->input('categoria');
        
        $ident=Str::substr($categoria, 0, 2);
        $sku= comprobarId($categoria);
        $id= $ident."".$sku;
        //return $id;
        /*
        $img=$request->input('img');
        $modelo=$request->input('modelo');
        $talla=$request->input('talla');
        $color=$request->input('color');
        $precio=$request->input('precio');
        return compact('id','img','modelo','talla','color','categoria','precio');*/
        
        $producto=new Producto();
        $producto->_id=$id;
        $producto->imagen=$request->input('img');
        $producto->modelo=$request->input('modelo');
        $producto->talla=$request->input('talla');
        $producto->color=$request->input('color');
        $producto->categoria=$request->input('categoria');
        $producto->precio=$request->input('precio');
        $producto->save();
        
        


        return redirect()->action('PanelProductoController@agregar')
                         ->with('status','Producto agregado correctamente');
    }

    //Funcion que lleva al formulario de editar
    public function editar(){
       
        return view('panel.editar');
    }

}

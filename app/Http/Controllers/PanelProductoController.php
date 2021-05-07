<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Producto; //llamamos al modelo Productos para hacer la conexión

class PanelProductoController extends Controller
{
    
    //con esta función mostramos todos los productos en la tabla
    public function mostrar(){
        //consultamos los productos y creamos un objeto
        $productos = Producto::all();

        return view('panel.index',compact('productos'));
        
    }
   


    //Funcion que lleva al formulario de agregar
    public function agregar(){
       //retornamos la vista agregar
        return view('panel.agregar');
    }

    //Función para insertar productos nuevos
    public function insertar(Request $request){
        /*pequeña función para las siglas a utilizar en el id del producto*/
        function comprobarId($categ){
            $res=Producto::where('categoria', $categ)->count();
            $contador= $res+1; 

            return $contador;
        }
       //recibimos el dato seleccionado de categoría
        $categoria=$request->input('categoria');
        //obtenemos las primeras dos letras para el cameo
        $ident=Str::substr($categoria, 0, 2);
        //llamamos a la función y guardamos el resultado
        $sku= comprobarId($categoria);
        //hacemos el cameo para el id
        $id= $ident."".$sku;
        
        //insertamos los datos en la base
        $producto=new Producto();
        $producto->_id=$id;
        $producto->imagen=$request->input('img');
        $producto->modelo=$request->input('modelo');
        $producto->talla=$request->input('talla');
        $producto->color=$request->input('color');
        $producto->categoria=$request->input('categoria');
        $producto->precio=floatval($request->input('precio'));
        $producto->save();
        
        

        //retornamos a la función agregar y enviamos una variable de sesión con un mensaje
        return redirect()->action('PanelProductoController@agregar')
                         ->with('status','Producto agregado correctamente');
    }


    //Funcion que te lleva al formulario de editar
    public function editar($_id){
        //recibimos el id como parámetro y realizamos la consulta guardandola en nuestro objeto
        $productos = Producto::find($_id);
        //retornamos la vista junto con objeto y el id recibido
        return view('panel.editar',compact('productos','_id'));
        
    }

    //Funcion para editar un producto
    public function actualizar(Request $request){
        //recibimos los datos por medio del request enviados por el formulario
        $id=$request->get('id');
        //realizamos la consulta para editar el producto
        $productos=Producto::where('_id',$id)->first();
        //obtenemos los datos nuevos e insertamos
        $productos->_id=$id;
        $productos->imagen=$request->get('img');
        $productos->modelo=$request->get('modelo');
        $productos->talla=$request->get('talla');
        $productos->color=$request->get('color');
        $productos->categoria=$request->get('categoria');
        $productos->precio=$request->get('precio');
        $productos->save();
        //redirigimos a la función mostrar con una variable de sesión con el mensaje
        return redirect()->action('PanelProductoController@mostrar')
                         ->with('status','Producto modificado correctamente');
    }

    //Funcion para borrar un producto

    public function borrar($_id){
        //recibimos el parámetro de id y realizamos la consulta
        $productos=Producto::find($_id);
        //borramos el producto
        $productos->delete();
        //redirigimos a la función mostrar con la variable de sesión y mensaje
        return redirect()->action('PanelProductoController@mostrar')
                         ->with('status','Producto borrado correctamente');
    }
}

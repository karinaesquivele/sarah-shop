<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto; //hacemos uso del modelo de Producto para la conexión a la base

class ProductosController extends Controller
{


    /*Funcion para mostrar el catalogo de productos */
    public function mostrar(){
        //creamos nuestra consulta
        $productos = Producto::all();

        //$productos = Producto::paginate(9); esta línea la comentamos porque la paginación 
        //daba problemas con el filtro

        return view('productos', compact('productos'));
    }




/*-----Función para hacer el filtro y consulta de los productos-------------------------------------------------*/ 
    public function filtrar(Request $request){
        $categoria=$request->input('categoria');
        $talla=$request->input('talla');
        $precio=$request->input('precio');


        /*comprobar rango de precios*/

            /*Productos con costo menor a 100 */
            if ($precio==1){       
                if($categoria=='Categoria' and $talla=='Talla' ){
                    /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>=',1 )->where('precio','<',100 )->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla=='Talla') {
                     /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->where(function($query){
                        $query->where('precio', '>=',1)->where('precio','<',100);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoria' and $talla!='Talla') {
                    /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',1)->where('precio','<',100);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                    /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',1)->where('precio','<',100);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                    /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('productos', compact('productos'));
                }

            /*Productos con costo mayor a 100 y menor que 200 */
            }elseif($precio==2) {
                
                if($categoria=='Categoria' and $talla=='Talla' ){
                    /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>=',100 )->where('precio','<',200 )->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoría' and $talla=='Talla') {
                      /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->orWhere(function($query){
                        $query->where('precio', '>=',100)->where('precio','<',200);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoria' and $talla!='Talla') {
                    /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',100)->where('precio','<',200);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                    /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',100)->where('precio','<',200);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                     /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('productos', compact('productos'));
                }

            /*Productos con costo mayor a 200 y menor que 300 */    
            }elseif($precio==3) {
                if($categoria=='Categoria' and $talla=='Talla' ){
                    /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>=',200 )->where('precio','<',300 )->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoría' and $talla=='Talla') {
                      /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->orWhere(function($query){
                        $query->where('precio', '>=',200)->where('precio','<',300);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoria' and $talla!='Talla') {
                    /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',200)->where('precio','<3',300);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                     /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',200)->where('precio','<',300);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                    /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('productos', compact('productos'));
                }


             /*Productos con costo mayor a 300 y menor que 400 */  
            }elseif($precio==4) {
                if($categoria=='Categoria' and $talla=='Talla' ){
                    /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>=',300)->where('precio','<=',400)->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoría' and $talla=='Talla') {
                    /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->orWhere(function($query){
                        $query->where('precio', '>=',300)->where('precio','<=',400);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoría' and $talla!='Talla') {
                    /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>',300)->where('precio','<',400);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                     /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',300)->where('precio','<',400);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                     /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('productos', compact('productos'));
                }


             /*Productos con costo mayor a 400 y menor que 1000 */  
            }elseif($precio==5) {
                if($categoria=='Categoria' and $talla=='Talla' ){
                     /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>=',400 )->where('precio','<',1000 )->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoría' and $talla=='Talla') {
                    /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->orWhere(function($query){
                        $query->where('precio', '>=',400)->where('precio','<',1000);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoria' and $talla!='Talla') {
                     /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',400)->where('precio','<',1000);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                     /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>=',400)->where('precio','<',1000);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                    /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('productos', compact('productos'));
                }

             /*Si no se selecciona ninguna opción de precio llamará a todos los productos de costo de 0 a 1000
             a esta opción le añadimos el valor 0 desde el input*/ 
            }elseif($precio==0) {
                if($categoria=='Categoria' and $talla=='Talla' ){
                    /*Consulta en caso que no se haya seleccionado la talla o la categoría */
                    $productos=Producto::where('precio','>',0 )->where('precio','<',1000)->get();
                    return view('productos', compact('productos'));
                }elseif($categoria!='Categoría' and $talla=='Talla') {
                       /*Consulta en caso que no se haya seleccionado la talla pero si la categoría */
                    $productos=Producto::where('categoria',$categoria)->where(function($query){
                        $query->where('precio', '>',0)->where('precio','<',10000);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria=='Categoria' and $talla!='Talla') {
                    /*Consulta en caso que no se haya seleccionado la categoría pero si la talla */
                    $productos=Producto::where('talla',$talla)->where(function($query){
                        $query->where('precio', '>',0)->where('precio','<',1000);
                     })->get();
                     return view('productos', compact('productos'));
                }elseif($categoria!='Categoria' and $talla!='Talla') {
                    /*Consulta en caso si se haya seleccionado la talla y categoría */
                    $productos=Producto::where('categoria',$categoria)->where('talla',$talla)->orWhere(function($query){
                        $query->where('precio', '>',0)->where('precio','<',1000);
                     })->get();
                     return view('productos', compact('productos'));
                }else{
                    /*Consulta en caso que no se haya productos con esas caracteristicas muestra todos los productos */
                    $productos = Producto::all();
                    return view('filtro', compact('productos'));
                }
            }

            
        //$res=Producto::where('categoria', $categ)->;  
    }
/*----- FIN DE Función para hacer el filtro y consulta de los productos--------------------------------------------*/
    

/*---- Función para mostrar el de tallado de cada uno de los productos---------------------------------------*/
    public function mostrarDetallado($id){
        $productos=Producto::where('_id',$id)->first();

        return view('producto_individual',compact('productos'));
    }
}

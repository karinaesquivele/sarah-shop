<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto; //hacemos llamada a nuestro modelo de producto

class CarritoController extends Controller
{
    
    /*Constructor con array de sesión para el carrito*/
    public function __construct(){
        if (\Session::has('carro')) \Session::put('carro', array());
    }


    //Función para mostrar carrito

    public function mostrar(){
        //obtenemos el array de sesión carrito con lo productos 
        $carro= \Session::get('carro');
        
    //borraro carro con put        
        //$carro= \Session::put('carro');
        //return $carro;
        //return count($carro);
        //obtenemos el total de la compra
        $total= $this->totales();
        //retornamos a la vista del carrito, el array y el total.
        return view('carrito',compact('carro','total'));
    }

    

    //Añadir producto al carrito
    public function agregar($id){
        //obtenemos el id y realizamos la consulta para obtener sus datos
        $productos=Producto::where('_id',$id)->first();

        //obtenemos el array del carrito
        $carro= \Session::get('carro');
        //le añadimos una campo de cantidad para realizar el cálculo de su total
        //y se lo asignamos como ídice al carro, asi como sus otros campos
        $productos->quantity=1;
        $carro[$productos->_id]= $productos;
        //actualizamos el array
        \Session::put('carro', $carro);
        //Retornamos a la función mostrar
        return redirect()->action('CarritoController@mostrar');
    }



    //Borrar producto del carrito
    public function quitar($id){
        //obtenemos el id y realizamos la consutla
        $productos=Producto::where('_id',$id)->first();
        //obtenemos el array del carro
        $carro= \Session::get('carro');
        //con esto borramos el producto que tenga dicho id del carritp
        unset($carro[$id]);
        //actualizamos el producto
       \Session::put('carro', $carro);
       //redireccionamos a la funcion mostrar
        return redirect()->action('CarritoController@mostrar');
    }

  

    //total de productos del carrito

    private function totales(){
        //obtenemos el carrito
        $carro= \Session::get('carro');
        //declaramos la variable total
        $total=0;
        //pretuntamos si nuestro carrito está vacío para evitar errores en el foreach
        if(empty($carro)){
            $total=0;
        }else{

            foreach ($carro as $items) {
                //recorremos cada elemento del carrito obtener el total de la compra
                $total+= $items->precio * $items->quantity;     
                } 
        }  
        return $total;
    }
}

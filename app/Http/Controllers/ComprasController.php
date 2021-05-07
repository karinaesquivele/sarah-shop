<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Producto; //añadimos nuestro modelo de producto 
use App\Cliente;// añadimos nuestro modelo de cliente
use App\Compra;// añadimos nuestro modelo de compra


class ComprasController extends Controller
{   
    /*Método constructor para nuestro array de carrito*/
    public function __construct(){
        if (\Session::has('carro')) \Session::put('carro', array());
    }


    /*Función que nos lleva a la vista de la compra*/ 
    public function mostrar($total){
        $carro= \Session::get('carro');

        return view('compra', compact('carro','total'));
    }



    /*función para agregar el nuevo cliente*/
    public function agregarCliente(Request $request,$total){
        //función para comprobar que dicho cliente no exita y poder insertar el id
        function comprobarId($categ){
            //consulta
            $res=Cliente::where('email', $categ)->count();
            $contador= $res+1; 

            return $contador;
        }
        //recibimos el dato del email
        $email=$request->input('email');
        //sustraemos las primeras 3 letras para usarlas como id
        $ident=Str::substr($email, 0, 3);
        //obtenemos el id de la función
        $nvoid= comprobarId($email);
        //hacemos el cameo
        $id= $ident."".$nvoid;
        //creamos el objeto cliente para añadir los datos
        $cliente=new Cliente();
        $cliente->_id=$id;
        $cliente->imagen=$request->input('nombre');
        $cliente->modelo=$request->input('apellido');
        $cliente->talla=$request->input('email');
        $cliente->color=$request->input('tel');
        $cliente->categoria=$request->input('estado');
        $cliente->precio=$request->input('ciudad');
        $cliente->precio=$request->input('calle');
        $cliente->precio=$request->input('cp');
        $cliente->save();

        //obtenemos el carrito
        $carro= \Session::get('carro');
        //redireccionamos a la función de mostrar compra
        return redirect()->action('ComprasController@mostrarCompra');
        //return $productos();

    }


    /*Registrar la compra------------------*/ 
        public function mostrarCompra(){
            
            $carro= \Session::get('carro');
            $total= $this->totales();
            /*Comprobamos el id del úlimo cliente*/
            $cliente=Cliente::count();

            /*Recibimos la compra*/
            $compra=new Compra();
            /*Insertamos la compra con los productos del carrito */
            $compra->cliente=$cliente;
            $compra->productos=$carro;
            $compra->total=$total;
            $compra->save();

            /*Redirigimos a la función que muestra la vista de la compra terminada */

            return redirect()->action('ComprasController@compraHecha');

           
            
        }

        /*Función para mostrar la vista de la compra realizada*/ 
        public function compraHecha(){
            /*Borramos los datos del carrito*/
            $carro= \Session::put('carro');
            /*Redirigimos a la vista*/
            return view('compraRealizada');

        }

        /*Función que sirve para calcular el total de la compra*/
        private function totales(){
            $carro= \Session::get('carro');
            $total=0;
            //recorremos el carrito para sumar los precios
            foreach ($carro as $items) {
          
                $total+= $items->precio * $items->quantity; 
                   
                }
                
    
            return $total;
        }

    
}

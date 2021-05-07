@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">
<script src="{{asset('js/carrito.js')}}"></script>

<div class="row carro">
    <h3>Carrito de compras </h3>
</div>

@if(empty($carro))

<div class="row vacio">
    <div class="col-12">
        <p>No hay productos</p>
    <p><a href="{{route('productos')}}" class="btn btn-light">Regresar</a></p>
    </div>

</div>


@else
<div class="row tablas">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 tabla1">
        <table class="table" id="miTabla">
            <thead>
              <tr>
                <th scope="col">Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($carro as $item)
                <tr>
                  <td><img src="{{asset('imagenes/productos/'.$item->imagen)}}" alt=""></td>
                  <td>{{$item->modelo}}</td>
                  <td>
                    {{$item->precio}}
                    <input step="any"  type="hidden" value="{{$item->precio}}">
                  </td>
                  <td>                              
                      {{--<div class="form-group">
                          
                        <div class="input-group-append">
                          
                        </div>
                      </div>--}}
                      <div class="input-group mb-3">
                        {{$item->quantity}}
                        
                      </div>
                   </td>
                  <td>
                    <input step="any" id="total" type="hidden" value="{{number_format($item->precio * $item->quantity,2)}}">
                    {{number_format($item->precio * $item->quantity,2)}}
                  </td>
                  <td><a class="borrar" href="{{route('quitar',$item->_id)}}"><i class="fa fa-close"></i></a></td>
                  
                </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{route('productos')}}" class="btn btn-outline-dark">Seguir comprando</a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tabla2">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Compra</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             

                @foreach ($carro as $item)
                  <tr>
                    <td>{{$item->modelo}}</td>
                    <td>${{number_format($item->precio * $item->quantity,2)}}</td>
                  </tr> 
                @endforeach

            </tbody>
            <tfoot>
              <tr>
                <td>Total</td>
                <td>${{number_format($total,2)}}</td>
              </tr>
            </tfoot>
          </table>
          <a href="{{action('ComprasController@mostrar',$total)}}" class="btn btn-danger btn-lg btn-block">Comprar <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>

@endif
    
@endsection
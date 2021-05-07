@extends('layout')

@section('content')



<link rel="stylesheet" href="{{asset('css/compras.css')}}" >
  <!--EMPIEZA TITULO-->
  <div class="row titulo">
    <div class="col-12">
      <h3><span>Compra realizada</span></h3>
      
    </div>
  </div>
  <!--TERMINA TITULO-->


  <div class="row mensaje">
    <div class="col-12 text-center">
        <h1>Se ha realizado tu pedido</h1>
        <p>Regresa para hacer otra compra</p>
        <a class="btn btn-outline-dark" href="{{route('productos')}}">Regresar al catálogo</a>
    </div>
  </div>
      
 

    
@endsection
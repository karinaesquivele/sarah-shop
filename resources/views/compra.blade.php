@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">


<link rel="stylesheet" href="{{asset('css/compras.css')}}" >
<script src="{{asset('js/compras.js')}}"></script>
  <!--EMPIEZA TITULO-->
  <div class="row titulo">
    <div class="col-12">
      <h3><span>Datos de compra</span></h3>
      
    </div>
  </div>
  <!--TERMINA TITULO-->

<!--ambas COLUMNAS ESTAN EN LA MISMA FILA---->
  <div class="row mensaje">

    <!--PRIMER COLUMNA CON EL FORMULARIO---------------------------------------->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <form action="{{action('ComprasController@agregarCliente',$total)}}" method="POST">
        @csrf
        <!--Nombre-->
        <div class="form-group row">
          <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="nombre" required>
            <span class="nombre_invalido">Debes escribir un nombre válido</span>
          </div>
        </div>
        <!--Apellido-->
        <div class="form-group row">
          <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="apellido" id="apellido"  required>
            <span class="apellido_invalido">Debes escribir un apellido válido</span>
          </div>
        </div>
        <!--E-mail-->
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@gmail.com" required>
            <span class="email_invalido">Debes escribir un email válido</span>
          </div>
        </div>
        <!--Teléfono-->
        <div class="form-group row">
          <label for="tel" class="col-sm-2 col-form-label">Telefono</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="tel" name="tel" id="tel" required>
            <span class="tel_invalido">Debes escribir un teléfono válido</span>
          </div>
        </div>
        <!--Estado-->
        <div class="form-group row">
          <label for="estado" class="col-sm-2 col-form-label">Estado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="estado" id="estado" value="Michoacan" readonly>
          </div>
        </div>
        <!--Ciudad-->
        <div class="form-group row">
          <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
          <div class="col-sm-10">
            <select id="ciudad" name="ciudad" class="form-control" required>
                <option >Morelia</option>
                <option >Ciudad Hidalgo</option>
                <option >Lázaro Cárdenas</option>
                <option >Uruapan</option>
                <option >Apatzingán</option>
            </select>
          </div>
        </div>
        <!--Calle-->
        <div class="form-group row">
          <label for="calle" class="col-sm-2 col-form-label">Calle</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="calle" id="calle" placeholder="" required>
            <span class="calle_invalido">Debes escribir una calle válida</span>
          </div>
        </div>
        <!--C.P-->
        <div class="form-group row">
          <label for="cp" class="col-sm-2 col-form-label">C.P</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="cp" id="cp" placeholder="" required>
            <span class="cp_invalido">Debes escribir un código postal válido</span>
          </div>
        </div>
        <div class="col-12 text-right">
          <button type="submit" class="btn btn-secondary btn-lg registrar">COMPRAR</button>
        </div>
      </form>
    </div>

    <!--FIN PRIMER COLUMNA CON EL FORMULARIO---------------------------------------->

    <!--SEGUNDA COLUMNA CON LA TABLITA---------------------------------------->
    
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs"> 
        <!--EMPIEZA TITULO-->
        <div class="row titulo">
            <div class="col-12">
              <h3><span>Resumen</span></h3> 
            </div>
          </div>
          <!--TERMINA TITULO-->

        <!--EMPIEZA LA TABLA-->
              <table class="table">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Total</th>
          </thead>
          <tbody>
            @foreach ($carro as $item)
            <tr>
              <th scope="row">{{$item->modelo}} x{{$item->quantity}}</th>
              <td>{{$item->precio}}</td>
              </tr>
            <tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th scope="row">Total</th>
              <td>${{$total}}</td>
            </tr>
          </tfoot>
        </table>
        
      </div>




    

      <!--Termina segunda COLUMNA CON LA TABLITA---------------------------------------->
 

    
@endsection
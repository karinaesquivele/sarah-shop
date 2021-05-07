@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">


<link rel="stylesheet" href="{{'css/compras.css'}}" >
  <!--EMPIEZA TITULO-->
  <div class="row titulo">
    <div class="col-12">
      <h3><span>Datos de compra</span></h3>
      
    </div>
  </div>
  <!--TERMINA TITULO-->

<!--ambas COLUMNAS ESTAN EN LA MISMA FILA---->
  <div class="row">

    <!--PRIMER COLUMNA CON EL FORMULARIO---------------------------------------->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <form>
        <!--Nombre-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="" readonly>
          </div>
        </div>
        <!--Apellido-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="" readonly>
          </div>
        </div>
        <!--E-mail-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputPassword" placeholder="example@gmail.com" readonly>
          </div>
        </div>
        <!--Teléfono-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Telefono</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="" readonly>
          </div>
        </div>
        <!--Estado-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="Michoacán" disabled readonly>
          </div>
        </div>
        <!--Ciudad-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
          <div class="col-sm-10">
          <!--  <select name="" id="" class="form-control">
                <option value="">Morelia</option>
                <option value="">Ciudad Hidalgo</option>
                <option value="">Lázaro Cárdenas</option>
                <option value="">Uruapan</option>
                <option value="">Apatzingán</option>
            </select>-->
            <input type="text" class="form-control" name="ciudad" value="" disabled readonly>
          </div>
        </div>
        <!--Calle-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Calle</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="calle"  placeholder="" readonly>
          </div>
        </div>
        <!--C.P-->
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">C.P</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="" readonly>
          </div>
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
            <tr>
              <th scope="row">camisa x1</th>
              <td></td>
              </tr>
            <tr>
              <th scope="row">Subtotal</th>
              <td>200.00</td>
              </tr>
            <tr>
              <th scope="row">Total</th>
              <td>200.00</td>
              </tr>
          </tbody>
        </table>
        <a type="button" class="btn btn-secondary btn-lg btn-block">Comprar</button>
      </div>





  </div>    <!--Termina segunda COLUMNA CON LA TABLITA---------------------------------------->
 

    
@endsection
@extends('layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/productos.css')}}">
<script src="{{asset('js/productos.js')}}"></script>
	<div class='row titulo'>
	<h1>Productos</h1>
	</div>
	<!--Sección de Filtro-->
	<div class="row barrafiltro">
	  	<div class="col-12">
			<p>
				<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					<i style="font-size:15px" class="fa">&#xf067;</i>
					Filtro
				</a>
			</p> 
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<form action="{{action('ProductosController@filtrar')}}" method="POST">
						@csrf
						
						<select class="form-control categoria" name="categoria">
							<option>Categoría</option>
							<option>camisas</option>
							<option>pantalones</option>
							<option>zapatos</option>
							<option>vestidos</option>
							<option>conjuntos</option>
							<option>sueteres</option>
							<option>accesorios</option>
						</select>

						<select class="form-control talla" name="talla">
							<option>Talla</option>
							<option>xs</option>
							<option>s</option>
							<option>m</option>
							<option>l</option>
							<option>xl</option>
						</select>

						<select class="form-control precio" name="precio">
							<option value="0">Precio</option>
							<option value="1">-$100</option>
							<option value="2">+$100 / -$200</option>
							<option value="3">+$200 / -$300</option>
							<option value="4">+$300 / -$400</option>
							<option value="5">+$400</option>
						</select>
						<div class="row text-right">
							<div class="col-12">
								<button class="btn btn-danger">APLICAR FILTRO</button>
							</div>
						</div>
					</form>
				</div>
			</div>
	  	</div>
	</div>
	
	<!--Inicio de la sección de productos-->
	<div class='row catalogo'>
		@foreach ($productos as $producto)
			<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
				<div class="card">	
				<img class="card-img-top" src="{{asset('imagenes/productos/'.$producto->imagen)}}" alt="Card image cap" id="{{$producto->_id}}">
				<div class="contenedor1 text-right">
					<div class="boton">
						<a class="btn btn-white" type="button" href="{{route('producto_individual',$producto->_id)}}" id="{{$producto->_id}}">
							<i class="fa fa-cart-plus" style="font-size:24px"></i>
						</a>
					</div>
				</div>
				<div class="card-body">
					<a class="card-title" type='button' href="">{{$producto->modelo}}</a>
					<input type="hidden" name="" value="{{$producto->_id}}">
					<h6 class="card-subtitle mb-2 text-muted">{{$producto->categoria}}</h6>
					<p class="card-text">${{$producto->precio}}</p>
				</div>
				</div>
			</div>
		@endforeach
	</div>

	<!--Sección Paginación-->
	<div class="row">
		<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'></div>
	
		<div class='paginacion col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center'>
			{{--$productos->links()--}}
		</div>
		
		<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
			
		</div>

	</div>


@endsection 
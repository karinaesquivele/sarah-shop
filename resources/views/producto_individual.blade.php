@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/producto_individual.css')}}">
    <div class="container">
        <div class="row contenedor1">
            <div class="col-lg-6 izq"> 
                {{--Contenedor de Imagen--}} 
                <img class="img-fluid" src="{{asset('imagenes/productos/'.$productos->imagen)}}" alt="Responsive image">
            </div>
            <div class="col-lg-6 der"style="padding-right: 10px;"> {{--Contenedor de Informacion--}}
                <div class="col-md" style=""> {{--Informacion--}}
                    <h1 class="titulo">{{$productos->modelo}}</h1>
                    <br>
                    <br>
                    <h3 class="precio">MXN ${{$productos->precio}}</h3>
                    <br>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta delectus laboriosam cupiditate. Illo accusantium molestiae corporis odit deserunt vel qui voluptatum aperiam adipisci repellendus provident, et, fugit mollitia iusto voluptas!</p>
                    <br>
                    <br>
                    <li>Color: {{$productos->color}}</li>
                    <li>Talla: {{$productos->talla}}</li>
                    <b>Categoria: {{$productos->categoria}}</b>
                    <br>
                    <br>
                    <a class="btn btn-danger" href="{{route('agregar',$productos->_id)}}">
                        <i class="fa fa-cart-plus" style="font-size:24px"></i>
                        AÑADIR AL CARRO
                    </a>
                </div>
                
            </div>
        </div>
        <!--Encabezado Productos relacionados-->
        <!--<div class="row encabezado">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h5>
                    <span>PRODUCTOS RELACIONADOS</span>
                </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            
            </div>
        </div>
        
        Fin encabezado-->

        
       
            
        
    </div>
    

@endsection
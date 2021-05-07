@extends('panel.panellayout')

@section('content')
    
    <link rel="stylesheet" href="{{asset('css/panel/index.css')}}">
    <script src="{{asset('js/panel/agregar.js')}}"></script>

    
         @if(session('status'))
             <div class="row alerta">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                         {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
             </div>
    
         @endif

         <div class="container">
        <!--Titulo--> 
        <div class="row titulo">
            <div class="col-6">
                <span>
                    <h1>TABLA PRODUCTO</h1>
                </span>
            </div>
            <div class="col-6 text-right botonnuevo">
            
                    <a class="btn btn-dark" href="{{action('PanelProductoController@agregar')}}">Nuevo</a>
               
            </div>
        </div>
        <!--Fin titulo-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                
                <table class="table table-stripped">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Modelo</th>
                        <th>Talla</th>
                        <th>Color</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                  @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->_id}}</td>
                        <td>{{$producto->imagen}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td>{{$producto->talla}}</td>
                        <td>{{$producto->color}}</td>
                        <td>{{$producto->categoria}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{action('PanelProductoController@editar',$producto->_id)}}">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{action('PanelProductoController@borrar',$producto->_id)}}">Borrar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
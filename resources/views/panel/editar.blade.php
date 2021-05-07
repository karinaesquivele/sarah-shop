@extends('panel.panellayout')

@section('content')
    
    <link rel="stylesheet" href="{{asset('css/panel/agregar.css')}}">
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
                <div class="col-12">
                    <span>
                        <h3>EDITAR PRODUCTO</h3>
                    </span> 
                </div>                           
            </div>
            <!--Fin Titulo-->
            <!--Formulario-->
            <div class="row formulario">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="{{action('PanelProductoController@actualizar')}}" method="POST">
                    @csrf                         
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" value="{{$productos->_id}}">
                        </div>                      
                        <div class="form-group">
                            <label for="Descripcion">Imágen</label>
                            <input type="file" class="form-control-file" id="img" name="img" value="{{$productos->imagen}}"required>
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" value="{{$productos->modelo}}"required>  
                        </div>            
                        <div class="form-group">
                            <label for="talla">Talla</label>
                            <select class="custom-select my-1 mr-sm-2" id="talla" name="talla" value="{{$productos->talla}}"required>
                                <option disabled>ELIGE UNA TALLA</option>
                                <option >xs</option>
                                <option >s</option>
                                <option>m</option>
                                <option >l</option>
                                <option >xl</option>
                            </select>                    
                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <select class="custom-select my-1 mr-sm-2" id="color" name="color" value="{{$productos->color}}"required>
                                <option disabled>ELIGE UN COLOR</option>
                                <option>azul</option>
                                <option>blanco</option>
                                <option>negro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="custom-select my-1 mr-sm-2" id="categoria"  name="categoria"  value="{{$productos->categoria}}" required>
                                <option disabled>ELIGE UNA CATEGORIA</option>
                                <option >camisas</option>
                                <option >pantalones</option>
                                <option >zapatos</option>
                                <option >vestidos</option>
                                <option >sueteres</option>
                                <option >accesorios</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" step="any" id="precio" value="{{$productos->precio}}" required>
                        </div>
                        <button class="btn btn-secondary">Guardar</button>
                    </form>
                </div>
            </div>
            <!--Fin Formulario-->
         </div>
         <div class="salir">
            <a class="btn btn-secondary" href="{{route('index')}}"><i class="fa fa-sign-out" style="font-size:24px"></i></a>
        </div>

         @endsection
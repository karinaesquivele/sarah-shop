@extends('layout')

@section('title')
    Inicio
@endsection

@section('content')
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
    <script>
        AOS.init();
    </script>
    <script src="{{asset('js/inicio.js')}}"></script>

    {{-- Inicio Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="pause">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('imagenes/inicio/slider/item1.jpg')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block item1">
                <h5>Titulo sobre 
                    <br>nuevo producto</h5>
                <p>
                    <a href="" class="btn btn-white">Ver más</a>
                    <a href="" class="btn btn-danger">Comprar</a>
                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('imagenes/inicio/slider/item2.jpg')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block item2">
                <h5>Titulo sobre 
                    <br>nuevo producto</h5>
                <p>
                    <a href="" class="btn btn-white">Ver más</a>
                    <a href="" class="btn btn-danger">Comprar <i class="fa fa-long-arrow-right"></i></a>
                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('imagenes/inicio/slider/item3.jpg')}}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block item3">
                <h5>Sarah</h5>
                <p>
                    Cupidatat esse minim aute excepteur voluptate s.
                </p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><</span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      {{-- FIN del caroulsel --}}

      
      {{-- INICIO seccion categorias --}}
      
      <section class="row categorias">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="contenedor">
                  <img src="{{asset('imagenes/inicio/sueter.jpg')}}" alt="">
                  <div class="boton text-center bt1">
                    <a href="" class="btn btn-white">SUETÉRES <i class="fa fa-long-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="contenedor">
                <img src="{{asset('imagenes/inicio/accesorios.jpg')}}" alt="">
                <div class="boton text-center bt2">
                  <a href="" class="btn btn-white">ACCESORIOS <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="contenedor">
                <img src="{{asset('imagenes/inicio/camisa.jpg')}}" alt="">
                <div class="boton text-center bt3">
                  <a href="" class="btn btn-white">CAMISAS <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="contenedor">
                <img src="{{asset('imagenes/inicio/zapatos.jpg')}}" alt="">
                <div class="boton text-center bt4">
                  <a href="" class="btn btn-white">ZAPATOS <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
      </section>
      {{-- FINseccion categorias --}}

    {{-- INICIO seccion tendencias --}}

    <section class="tendencias">
        <div class="row encabezado">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h5><span>TENDENCIAS DE LA SEMANA</span></h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                <h6><a class="catalogo" href="{{route('productos')}}"><i class="fa fa-th"></i> VER TODOS LOS PRODUCTOS</a></h6>
            </div>
        </div>
        <div class="row elementos">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img class="card-img-top" src="{{asset('imagenes/inicio/tendencia1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <div class="row">
                          <div class="col-6">
                            <h5 class="card-title">Ca</h5>
                      </div>
                      <div class="col-6">
                        <h5 class="card-title">precio</h5>
                      </div>
                    </div>
                      <p class="card-text">Categoria</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img class="card-img-top" src="{{asset('imagenes/inicio/zapatos.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <div class="row">
                          <div class="col-6">
                            <h5 class="card-title">Ca</h5>
                      </div>
                      <div class="col-6">
                        <h5 class="card-title">precio</h5>
                      </div>
                    </div>
                      <p class="card-text">Categoria</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <img class="card-img-top" src="{{asset('imagenes/inicio/camisa.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <div class="row">
                          <div class="col-6">
                            <h5 class="card-title">Ca</h5>
                      </div>
                      <div class="col-6">
                        <h5 class="card-title">precio</h5>
                      </div>
                    </div>
                      <p class="card-text">Categoria</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     {{-- FIN seccion tendencias --}}

     {{-- INICIO sección parallax --}}
    
     <section class="row parallax">
         <div class="col-12 text-center">
            <h1>Nuevos accesorios</h1>
            <p><a href="" class="parax">VER TODOS</a></p>
         </div>
     </section>


     {{-- Seccion de envio --}}
        <section class="row envio">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center" data-aos="flip-down">
                <p><i class="fa fa-send" style="font-size: 35px;"></i></p>
                <h4>Envío rápido</h4>
                <p>Ad in consequat nostrud id. Enim enim magna eiusmod id ullamco magna eu 
                    nisi Lorem proident et ullamco nostrud commodo. Cillum ea nisi consequat eiusmod nulla
                     deserunt culpa cupidatat fugiat dolore. Ullamco duis do cupidatat proident ex consequat
                      nulla proident ex velit.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center" data-aos="flip-down">
                <p><i class="fa fa-dollar" style="font-size: 35px;"></i></p>
                <h4>Pago seguro</h4>
                <p>Ad in consequat nostrud id. Enim enim magna eiusmod id ullamco magna eu 
                    nisi Lorem proident et ullamco nostrud commodo. Cillum ea nisi consequat eiusmod nulla
                     deserunt culpa cupidatat fugiat dolore. Ullamco duis do cupidatat proident ex consequat
                      nulla proident ex velit.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center text-center" data-aos="flip-down">
                <p><i class="fa fa-cubes" style="font-size: 35px;"></i></p>
                <h4>Devoluciones</h4>
                <p>Ad in consequat nostrud id. Enim enim magna eiusmod id ullamco magna eu 
                    nisi Lorem proident et ullamco nostrud commodo. Cillum ea nisi consequat eiusmod nulla
                     deserunt culpa cupidatat fugiat dolore. Ullamco duis do cupidatat proident ex consequat
                      nulla proident ex velit.
                </p>
            </div>
        </section>

     {{-- fin de sección envio--}}
     
     
     
      


@endsection
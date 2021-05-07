<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Libreria de efectos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>@yield('title','Sarah Shop')</title>
</head>
<body>
  
  <div class="header">

  </div>
  

    <div class="menu">
      {{--Menú de escritorio --}}
      
        <div class="escritorio">
            <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-center ">
              <a class="nav-link opc" href="{{route('inicio')}}">Inicio</a>
              <a class="nav-link opc" href="{{route('productos')}}">Productos</a>
              <a class="nav-link sarah" href="#">Sarah</a>
              <a class="nav-link opc" href="#">About</a>
              <a class="nav-link opc" href="#">Contacto</a>
              <a class="nav-link carrito" href="{{route('carrito')}}">
                <i class="fa fa-shopping-cart" style="font-size:24px"></i>
              
                <span class="badge badge-pill" style="background: #7A043D;color: white" id="monto">
                  {{count((array)session('carro')) ? count((array)session('carro')) : 0}}
                </span>
                
              </a>
          </nav>
        </div>
        {{--FIN Menú de escritorio --}}  

        {{--Menú de MOVIL --}}
        <div class="movil">
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand sarah" href="#">Sarah</a>
            <a class="navbar-brand " href="{{route('carrito')}}">
              <i class="fa fa-shopping-cart" style="font-size:24px;color:black"></i>
              
              <span class="badge badge-pill" style="background: #7A043D;color: white" id="monto">{{count((array)('carro')) ? count((array)session('carro')) : 0}}</span>
              {{--@else
              <span class="badge badge-pill" style="background: #7A043D;color: white" id="monto">0</span>---}}
          
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link opc2" href="{{route('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link opc2" href="{{route('productos')}}">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link opc2" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link opc2" href="#">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        {{-- FIN Menú de movil --}}  
    </div>
    {{--fin del menu --}}

{{--CONTENIDO --}}
<div class="wrapper">

  <span class="ir-arriba "><i class="fa fa-angle-up"></i></span>

  <div class="row banner">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center"><p><i class="fa fa-truck"></i>  Non et proident exercitation incididunt.</p></div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center"><p><i class="fa fa-check"></i> Non et proident exercitation incididunt.</p></div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center"><p><i class="fa fa-heart"></i> Non et proident exercitation incididunt.</p></div>
  </div>

  @yield('content')

</div>

{{--FIN CONTENIDO--}}

{{--Pie de página  --}}

<footer class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <H5>
        Sobre Nosotros
      </H5>

        Esse amet exercitation ullamco quis consequat esse. Sunt pariatur cupidatat nisi dolor ipsum elit officia 
        in. Culpa deserunt nulla sunt aute officia excepteur id minim elit magna deserunt cillum. 
        Velit nostrud elit nisi proident elit eiusmod in consequat eiusmod nisi occaecat ad incididunt.

    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="">Productos</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contacto</a></li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <h5 class="sarah2">Sarah</h5>
      <ul>
        <li>conocido 23#, Morelia, Mich.</li>
        <li>+0000000000</li>
        <li>sarahshop@email.com</li>
      </ul>
    </div>

    <div class="col-12 text-center">
      <p>Copyright 2020 <a href="">&#60 / &#62 ev</a> </p>
    </div>
</footer>

{{--Fin pie de página  --}}


</body>
</html>
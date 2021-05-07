<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Estilos por defecto-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <!--Estilo de plantilla-->
    <link rel="stylesheet" href="{{asset('css/panel/panellayout.css')}}">
    <!--Librerias-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <a class="navbar-brand sarah" href="#" >Sarah</a>
    </nav>

    @yield('content')

</body>
</html>
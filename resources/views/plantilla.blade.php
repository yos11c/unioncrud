<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>@yield('tituloPagina')</title>


</head>
<body>

<div>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="{{ route("transportes.indext") }}">Transportes</a></li>
        <li><a class="dropdown-item" href="{{ route("camiones.indexc") }}">Camiones</a></li>
        <li><a class="dropdown-item" href="{{ route("personas.index") }}">Personas</a></li>
        <li><a class="dropdown-item" href="{{ route("error.indexe") }}">Transportes</a></li>

    </ul>
</div>
<div>
    <a href="{{ route("transportes.indext") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>  Transportes
    </a>
    <a href="{{ route("camiones.indexc") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>  Camiones
    </a>
    </a>
    <a href="{{ route("error.indexe") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>  error
    </a>

    {{--    <a href="{{ route("layout/plantilla") }}" class="btn btn-info">--}}
    {{--        <span class="fas fa-undo-alt"></span> Regresar--}}
    {{--    </a>--}}
</div>
<div class="container">
    <br><br>
    @yield('contenido')
</div>
<div class="container">
    <br>
    @yield('contenidot')
</div>
<div class="container">
    <br>
    @yield('contenidoc')
</div>
</div>
{{--<h1>Hello, world!</h1>--}}
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<script src="{{asset('js/app.js')}}"></script>

@yield('js')
{{--//definiendo un container es decir un espacio dentro de la aplicacion js--}}
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista de @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @section('header')
  
    @show  
    <div class="container">
       @yield('content')
    </div>
    
    @section('footer')
     <hr>
     <p style="text-align:center" >Proyecto Desarrollado por: Braulio Díaz, Esteban Lagos, Sebastian Martinez y Wilmer Rodriguez.</p>
    <center>
      <p>{{ Route::currentRouteName() }}</p>
      @if(Route::currentRouteName() != 'dashboard')
       <a href="/dashboard"><button class='btn btn-success' >Ir a Dashboard</button></a>
      @endif
    </center> @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
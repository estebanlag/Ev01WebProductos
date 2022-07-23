@extends('layouts.master')

@section('content')


<header class="my-5">
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        <div class="alert alert-success" role="alert">
        <h2><center>¡Usuario a ingresado con éxito!</center></h2>
    </div>
      </div>
    </div>
    </header>
    
      <div class="mt-3 d-flex gap-2">
        <a href="/login">
        <button type="button" class="btn btn-secondary">Volver</button>
         </a>
      </div>

@stop
@section('footer')      
@parent
    <h5>Creado por Braulio Díaz</h5>
@stop
      
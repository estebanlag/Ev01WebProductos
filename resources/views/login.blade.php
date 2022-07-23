@extends('layouts.master')

@section('content')

<div class="container mt-3">


    <div class="row">
                    <div class="col-2"></div>
    
    <div class="col-8">
    
    <p></p>
    
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h4 class="card-title">Ingresa</h4>
          <form method="" action="{{ route('ingresado') }}">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required="required">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" name="contraseña" required="required">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </form>
          <a href="#" class="card-link">¿Olvidaste tu contraseña?</a>
        </div>
      </div>
    </div>
    </div>
</div>

@stop
@section('footer')
@parent
   <h5>Creado por Braulio Díaz</h5>
@stop
@extends('layouts.master')

@section('content')

<div class="container mt-3">


    <div class="row">
                    <div class="col-2"></div>
    
    <div class="col-8">
    
    <p></p>
    
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h4 class="card-title">Registrarse</h4>
          <form method="" action="{{ route('registrado') }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
                <input type="tetxt" class="form-control" id="nombre" name="nombre" required="required" placeholder="Victor Jara">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RUT</label>
                <input type="text" class="form-control" id="rut" name="rut" required="required" placeholder="14356401-9">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required="required" placeholder="victor.jara@ciisa.cl">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contraseña" name="contraseña" required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="Rcontraseña" name="Rcontraseña" required="required">
              </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

@stop
@section('footer')
@parent
   {{-- Braulio --}}
@stop
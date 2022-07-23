@extends('layouts.master')
@section('title','Productos')



@section('content')

<div class="container-fluid">
  <br>
<div class="row">
  <div class="col-8">
    <h2>Productos</h2>
  </div>
  <div class="col-4">
   <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="SKU, Nombre, o Sucursal" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</div>
<div class="row">




@for ($i = 2; $i < 8; $i++)
@component('components.productos')
@slot('nombre')
producto{{$i}}
@endslot
@slot('cantidad')
{{$i}}
@endslot
@slot('id')
producto{{$i}}
@endslot
@endcomponent
@endfor

</div>
</div>

@stop

@section('footer')
@parent

@stop 

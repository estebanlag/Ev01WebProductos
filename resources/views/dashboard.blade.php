@extends('layouts.master')
@section('title','Productos')



@section('header')
 <h2>Producto</h2>
@stop

@section('content')

<div class="container-fluid">
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

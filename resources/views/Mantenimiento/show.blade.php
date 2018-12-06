@extends('layouts.layout')
@section('content')
<h1>
 {{ $mantenimiento->nombre}}
</h1>
 
<p>Nombre: {{ $mantenimiento->nombre}}</p>
<p>Descripción: {{ $mantenimiento->descripcion }}</p>
<p>Costo: {{ $mantenimiento->costo}}</p>

 
<a class="btn btn-default" href="{{ route('mantenimiento.index') }}">Volver al listado</a>
<a class="btn btn-default" href="{{ route('mantenimiento.show', $mantenimiento->id) }}">Recargar</a>

@stop

@extends('layouts.layout')
@section('content')
<div class="row">
<section class="content">
	 	 <div class="col-md-8 col-md-offset-2">
	 	 	 @if (count($errors) > 0)
	 	 	 <div class="alert alert-danger">
	 	 	 	 <strong>Error!</strong> Revise los campos obligatorios.<br><br>
	 	 	 	 <ul>
	 	 	 	 	 @foreach ($errors->all() as $error)
	 	 	 	 	 <li>{{ $error }}</li>
	 	 	 	 	 @endforeach
	 	 	 	 </ul>
	 	 	 </div>
	 	 	 @endif
	 	 	 @if(Session::has('success'))
	 	 	 <div class="alert alert-info">
	 	 	 	 {{Session::get('success')}}
	 	 	 </div>
	 	 	 @endif
	 	 	 <div class="panel panel-default">
	 	 	 	 <div class="panel-heading">
	 	 	 	 	 <h3 class="panel-title">Actualizar Registro</h3>
	 	 	 	 </div>
	 	 	 	 <div class="panel-body">	 	 	 	 	 

	 	 	 	 	 <div class="table-container">
	 	 	 	 	 		 <form method="POST" action="{{ route('cliente.update',$cliente->id) }}" role="form">
	 	 	 	 	 	 	 {{ csrf_field() }}
<input name="_method" type="hidden"
value="PATCH">
	 	 	 	 	 	 	 <div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="nombre" id="nombre" class="form-control input-sm" value="{{$cliente->nombre}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="apellidos" id="apellidos" class="form-control input-sm" value="{{$cliente->apellidos}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="celular" id="celular" class="form-control input-sm" value="{{$cliente->celular}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="dni" id="dni" class="form-control input-sm" value="{{$cliente->dni}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="form-group">
	 	 	 	 	 	 	 	 <textarea name="autor" class="formcontrol
input-sm" placeholder="sexo">{{$cliente->sexo}}</textarea>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 colmd-12">
	 	 	 	 	 	 	 	 	 <input type="submit"
value="Actualizar" class="btn btn-success btn-block">
<a
href="{{ route('cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 

	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection
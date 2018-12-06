@extends('layouts.layout')
@section('content')
<div class="row">
<section class="content">
	 	 <div class="colcol-md-offset-2">
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
	 	 	 <div class="panel panel-default" style="padding-left:600px;">
	 	 	 	 <div class="panel-heading">
	 	 	 	 	 <h3 class="panel-title">Nuevo Cliente</h3>
	 	 	 	 </div>
	 	 	 	 <div class="panel-body">	 	 	 	 	 

	 	 	 	 	 <div class="table-container">
	 	 	 	 	 	 <form method="POST"
action="{{ route('cliente.store') }}" role="form">
{{ csrf_field() }}
<div class="row">
	 <div class="col-xs-6 col-sm-6 colmd-6">

	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 <div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del Cliente">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos del Cliente">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="celular" id="celular" class="form-control input-sm" placeholder="Celular del Cliente">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="dni" id="dni" class="form-control input-sm" placeholder="Dni del Cliente">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
									<div class="form-group">
	 	 	 	 	 	 	 	 <select name="sexo" id="sexo">
									<option value="M">M</option>
									<option value="F">F</option>
								</select>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 colmd-12">
	 	 	 	 	 	 	 	 	 <input type="submit"
value="Guardar" class="btn btn-success btn-block">
<a
href="{{ route('cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 
</div>
	 	 	 	 	 	 </form>
	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection
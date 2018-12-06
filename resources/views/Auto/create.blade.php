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
	 	 	 	 	 <h3 class="panel-title">Nuevo Auto</h3>
	 	 	 	 </div>
	 	 	 	 <div class="panel-body">	 	 	 	 	 

	 	 	 	 	 <div class="table-container">
	 	 	 	 	 	 <form method="POST"
action="{{ route('auto.store') }}" role="form">
{{ csrf_field() }}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="idcl" id="idcl" class="form-control input-sm" placeholder="Id del Cliente">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="idau" id="idau" class="form-control input-sm" placeholder="Id del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="placa" id="placa" class="form-control input-sm" placeholder="Placa del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="marca" id="marca" class="form-control input-sm" placeholder="Marca del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 		 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="color" id="color" class="form-control input-sm" placeholder="Color del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="modelo" id="modelo" class="form-control input-sm" placeholder="Modelo del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 col-md-12">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="año" id="año" class="form-control input-sm" placeholder="Año del Auto">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>

	 	 	 	 	 	 	 </div>
<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 colmd-12">
	 	 	 	 	 	 	 	 	 <input type="submit"
value="Guardar" class="btn btn-success btn-block">
<a
href="{{ route('auto.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 
</div>
	 	 	 	 	 	 </form>
	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection
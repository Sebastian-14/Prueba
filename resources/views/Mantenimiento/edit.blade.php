@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-oﬀset-2">
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
					<h3 class="panel-title">Nuevo Mantenimiento</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">

						<form method="POST" action="{{ route('mantenimiento.update', $mantenimiento->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 colmd-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$mantenimiento->nombre}}">
									</div>
								</div>
							</div>

							<div class="form-group">
								<textarea name="descripcion" class="form-control input-sm"  placeholder="Resumen">{{$mantenimiento->descripcion}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 colmd-6">
									<div class="form-group">
										<input type="text" name="costo" id="costo" class="form-control input-sm" value="{{$mantenimiento->costo}}">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 colmd-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('mantenimiento.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection

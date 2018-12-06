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
					<h3 class="panel-title">Nuevo User</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('user.store') }}"  role="form">
							{{csrf_field()}}
							<div class="row">
								<div class="col-xs-6 col-sm-6 colmd-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
							</div>

							<div class="form-group">
								<textarea name="email" class="form-control input-sm" placeholder="email"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 colmd-6">
									<div class="form-group">
										<input type="text" name="password" id="password" class="form-control input-sm" placeholder="contraseña">
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 colmd-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('user.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
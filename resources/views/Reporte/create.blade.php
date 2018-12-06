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

			<div class="panel panel-default" style="padding-left:400px;">
				
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Reporte</h3>
				</div>
				<div style="padding-top:140px;"></div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('reporte.store') }}" action="{{ route('auto.create') }}"  role="form">
							{{csrf_field()}}
							<div class="row">
								<div class="col-xs-6 col-sm-6 colmd-6">
									<div class="form-group" style="width:1400px;">											
								
										<label for="">Seleccione cliente:</label>
										<select name="cliente" id="cliente">
												@foreach($autos as $auto)
												<option value="{{$auto->cliente}}">
													<p>{{$auto->cliente}}</p>                      
												</option>  
												@endforeach
										</select>									
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-xs-6 col-sm-6 colmd-6">
										<div class="form-group" style="width:1400px;">											
											<!--<input type="text" name="idR" id="idR" class="form-control input-sm" placeholder="Nombre">-->
											<label for="">Seleccione vehiculo:</label>
											<select name="auto" id="auto">
													@foreach($autos as $auto)
													@if($auto->cliente="Jerly")
													<option value="{{$auto->placa}}">
														<p>{{$auto->placa}}</p>                      
													</option>  
													@endif
													@endforeach
											</select>									
										</div>
									</div>
								</div>
								<div class="row">
										<div class="col-xs-6 col-sm-6 colmd-6">
											<div class="form-group" style="width:1400px;">											
												<!--<input type="text" name="idR" id="idR" class="form-control input-sm" placeholder="Nombre">-->
												<label for="">Seleccione Mantenimiento:</label>
												<select name="mant" id="mant">
														@foreach($mantenimientos as $mantenimiento)
														<option value="{{$mantenimiento->descripcion}}">
															<p>{{$mantenimiento->descripcion}}</p>                      
														</option>  
														@endforeach
												</select>									
											</div>
										</div>
									</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 colmd-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('reporte.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
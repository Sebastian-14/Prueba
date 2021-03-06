@extends('layouts.layout')
@section('content')
<div class="row" style="padding-left:500px;">
 <section class="content">
 <div class="col-lg-12 margin-tb">
 <div class="panel panel-default">
 <div class="pull-left"><h3>Lista de Autos</h3></div>
 <div class="pull-right">
 <div class="btn-group">
 <a href="{{ route('auto.create') }}" class="btn btn-info" >Añadir Auto</a>
 </div>
 <br>
 </div>
 <br>
 <div class="table" >
 	<table id="mytable" class="table table-bordred table-striped">
 <thead>
 <td>Propietario</td>
 <th>Nro Placa</th>
 <th>Marca</th>
 <th>Color</th>
 <th>Modelo</th>
 <th>Año</th>
 <th>Editar</th>
 <th>Eliminar</th>
 </thead>
 <tbody>
 @if($autos->count())
 @foreach($autos as $auto)
 <tr>
<!--<td>{{$auto->idcl}}</td>-->
 <td>{{$auto->cliente}}</td>
 <td>{{$auto->placa}}</td>
 <td>{{$auto->marca}}</td>
 <td>{{$auto->color}}</td>
 <td>{{$auto->modelo}}</td>
 <td>{{$auto->año}}</td>	
 <td><a class="btn btn-primary btn-xs" href="{{action('AutoController@edit', $auto->id)}}" ><span class="far fa-edit""></span></a></td>
 <td>
 <form action="{{action('AutoController@destroy', $auto->id)}}" method="post">
 {{csrf_field()}}
 <input name="_method" type="hidden" value="DELETE">
 <button class="btn btn-danger btn-xs" type="submit"><span class="far fa-trash-alt"></span></button>
 </form>
 </td>
 </tr>
 @endforeach 
@else
 <tr>
 <td colspan="8">No hay registro !!</td>
 </tr>
 @endif
 </tbody>
 </table>
 </div>
 </div>

 </div>
 </div>
</section>
@endsection
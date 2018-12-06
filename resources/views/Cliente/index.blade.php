@extends('layouts.layout')
@section('content')
<div class="row" style="padding-left:500px;">
 <section class="content">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-body">
 <div class="pull-left"><h3>Lista de Clientes</h3></div>
 <div class="pull-right">
 <div class="btn-group">
 <a href="{{ route('cliente.create') }}" class="btn btn-info" >Añadir Cliente</a>
 
 </div>
 
 </div>
 <br>
 <div class="table-container">
 	<table id="mytable" class="table">
 <thead class="bg-info">
 <!--<th>Id</th>-->
 <th>Nombre</th>
 <th>Apellidos</th>
 <th>Celular</th>
 <th>Dni</th>
 <th>Sexo</th>
 <th>Editar</th>
 <th>Eliminar</th>
 </thead>
 <tbody>
 @if($clientes->count())
 @foreach($clientes as $cliente)
 <tr>
 <!--<td>{{$cliente->idcl}}</td>-->
 <td>{{$cliente->nombre}}</td>
 <td>{{$cliente->apellidos}}</td>
 <td>{{$cliente->celular}}</td>
 <td>{{$cliente->dni}}</td>
 <td>{{$cliente->sexo}}</td>
 <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $cliente->id)}}" ><span class="far fa-edit"></span></a></td>
 <td>
 <form action="{{action('ClienteController@destroy', $cliente->id)}}" method="post">
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
 <div>
 	<a href="{{}}"></a>
 </div>
 </div>
</section>
@endsection
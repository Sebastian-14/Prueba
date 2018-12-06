@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-oﬀset-2" >
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Mantenimientos</h3>
          </div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('mantenimiento.create') }}" class="btn btn-info" >Añadir Mantenimiento</a>
            </div>
          </div>
          <div class="table-container" style="position:center;">
            <br>
            <table id="mytable" class="table" style="text-align:center;">
             <thead class="thead-dark">
               <th style="width:400px;">Nombre</th>
               <th style="width:400px;">Descripcion</th>
               <th style="width:400px;">Costo</th>
               <th style="width:400px;">Ver</th>
               <th style="width:400px;">Editar</th>
               <th style="width:400px;">Eliminar</th>
             </thead>
             <tbody>
              <!-- 
              <p>{{$var1}}</p>
              <p>{{$total}}</p>
              -->
              <!--
              @foreach($reportes as $reporte)
              <p>{{$reporte->fecha}}</p>
              @endforeach
              -->            
              @if($mantenimientos->count())  
              @foreach($mantenimientos as $mantenimiento)  
              <tr>
                <td>{{$mantenimiento->nombre}}</td>
                <td>{{$mantenimiento->descripcion}}</td>
                <td>{{$mantenimiento->costo}}</td>
                <td><a href="{{route('mantenimiento.show',$mantenimiento->id)}}" class="btn btn-info">Ver</a></td>
                <td><a class="btn btn-primary btn-xs" href="{{action('MantenimientoController@edit', $mantenimiento->id)}}" ><span class="far fa-edit"></span></a></td>
                <td>
                  <form action="{{action('MantenimientoController@destroy', $mantenimiento->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Estas seguro de eliminar?')"><span class="far fa-trash-alt"></span></button>
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

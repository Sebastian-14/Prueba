@extends('layouts.layout')
@section('content')

<div class="row" style="margin:auto; width:2000px; padding-left:300px;" >
  <section class="content">
    <div  class="col-md-8 col-md-oﬀset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Reportes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('reporte.create') }}" class="btn btn-info" >Añadir Reporte</a>
            </div>
          </div>
          <br>
          <div class="table-container">

            <table id="mytable" class="table table-dark">
             <thead>
               
               <th style="width:300px;">Fecha-Hora</th>
               <th style="width:200px;">Cliente</th>
               <th>Vehiculo</th>
               <th style="width:500px;">Detalle del Mantenimiento</th>
               <th>Costo</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($reportes->count())  
              <!--@for ($i = 1; $i < 3; $i++)
              <td>{{$i}}</td>
              @endfor
              -->

              @foreach($reportes as $reporte) 
              <td>{{$reporte->created_at}}</td>             
              <td>{{$reporte->cliente}}</td>
              <td>{{$reporte->auto}}</td>
              <td>{{$reporte->mant}}<td>                
              </td>     
              <td><a class="btn btn-primary btn-xs" href="{{action('ReporteController@edit', $reporte->id)}}" ><span class="far fa-edit"></span></a></td>
                <td>
                  <form action="{{action('ReporteController@destroy', $reporte->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('¿Estas seguro de eliminar?')"><span class="far fa-trash-alt"></span></button>
                  </form>
                 </td> 
                </tr> 
                @endforeach 
                <td>Total</td>
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

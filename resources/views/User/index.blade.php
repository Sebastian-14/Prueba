@extends('layouts.layout')
@section('content')

<div class="row" style="margin-left:450px;">
  <section class="content">
    <div class="col-md-8 col-md-oﬀset-2">
      <div class="panel panel-center">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de empleados</h3></div>
          <div class="pull-right">
            <!--
            <div class="btn-group">
              <a href="{{ route('user.create') }}" class="btn btn-info" >Añadir User</a>
            </di<v
            -->
          </div>
          <div class="table-container">
           
            <table id="mytable" class="table">
            <thead class="thead-dark">        
               <th >Nombre</th>
               <th>Email</th>
               <th style="width:500px;">Fecha de Creacion</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($users->count())  
              @foreach($users as $user)  
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('UserController@edit', $user->id)}}" ><span class="far fa-edit"></span></a></td>
                <td>
                  <form action="{{action('UserController@destroy', $user->id)}}" method="post">
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

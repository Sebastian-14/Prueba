@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            @if(Auth::user()->hasRole('admin'))
        <div class="col-md-6" >
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    <div>Acceso como administrador</div>
                    <a href="mantenimiento" style="font-size:50px;">Mantenimientos</a>
                    <!--<a href="mantenimiento">Clintes</a>
                    <br>
                    <a href="user">Empleados</a>
                    <br>
                    <a href="mantenimiento">Mantenimientos</a>
                    <br>
                    <a href="reporte">Reportes</a>
                    <br>
                    -->
                
                </div>
            </div>
        </div>

        <div class="col">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <a href="user" style="font-size:50px;">Empleados</a>
                        <!--<a href="mantenimiento">Clintes</a>
                        <br>
                        <a href="user">Empleados</a>
                        <br>
                        <a href="mantenimiento">Mantenimientos</a>
                        <br>
                        <a href="reporte">Reportes</a>
                        <br>
                        -->
                      
                    </div>
                </div>
        </div>
        <div class="col" style="padding-top:20px;">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <a href="reporte" style="font-size:50px;">Reportes</a>
                        <!--<a href="mantenimiento">Clintes</a>
                        <br>
                        <a href="user">Empleados</a>
                        <br>
                        <a href="mantenimiento">Mantenimientos</a>
                        <br>
                        <a href="reporte">Reportes</a>
                        <br>
                        -->                      
                    </div>
                </div>
        </div>
        <div class="col" style="padding-top:20px;">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <a href="cliente" style="font-size:50px;">Clientes</a>
                        <!--<a href="mantenimiento">Clintes</a>
                        <br>
                        <a href="user">Empleados</a>
                        <br>
                        <a href="mantenimiento">Mantenimientos</a>
                        <br>
                        <a href="reporte">Reportes</a>
                        <br>
                        -->                      
                    </div>
                </div>
        </div>
    </div>
    @else
    <div>Acceso usuario</div>
    @endif
</div>
@endsection

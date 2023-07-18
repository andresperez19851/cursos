@extends('adminlte::page')
@section('title', 'Docentes')
@section('content_header')
    <h1>Lista Docentes</h1>
   
@stop
@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>
            {{session('mensaje')}} 
            </strong>
        </div>
    @endif
   
        <div class="card-header">
        <a href="{{route('docente.create')}}" class="btn btn-primary">Crear registro</a>
        </div>
    
   <div class="card">
    <div class="card-body">
        <table id="productos" class="table table-striped">
            <thead>
                <tr style="text-align:center;">
               
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Correo</th>
                  <th colspan="2">Acciones</th>
               
                </tr>
                <tbody>
                    @foreach ($docentes as $lista)
                        <tr style="text-align:center;">
                            <td>{{$lista->id}}</td>
                            <td>{{$lista->nombre}}</td>
                            <td>{{$lista->documento}} 
                            <td>{{$lista->correo}}</td>
                            <td><a href="{{route('docente.edit', $lista)}}" class="btn btn-primary btn-sm">Gestionar</a></td>
                            <td>
                               
                                        <form action="{{route('docente.destroy',  $lista)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" onclick="return aceptar();">
                                        </form>
                                  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
       
    </div>
   </div>
@stop
@section('js')
        <script>
        function aceptar() {
             
            if(confirm('¿Esta seguro de eliminar el registro?')){
                return true;
            }else{
                return false;
            }
        }
        </script>
@stop

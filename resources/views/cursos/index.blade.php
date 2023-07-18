@extends('adminlte::page')
@section('title', 'Cursos')
@section('content_header')
    <h1>Lista Cursos</h1>
   
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
        <a href="{{route('curso.create')}}" class="btn btn-primary">Crear registro</a>
        </div>
    
   <div class="card">
    <div class="card-body">
        <table id="productos" class="table table-striped">
            <thead>
                <tr style="text-align:center;">
                  <th>ID</th>
                  <th>Curos</th>
                  <th>Descripción</th>
                  <th>Duración</th>
                  <th>Precio</th>
                  <th>Fecha</th>
                  <th>Docente</th>
                  <th colspan="2">Acciones</th>
               
                </tr>
                <tbody>
                    @foreach ($cursos as $lista)
                        <tr style="text-align:center;">
                            <td>{{$lista->id}}</td>
                            <td>{{$lista->curso}}</td>
                            <td>{{$lista->descripcion}} 
                            <td>{{$lista->duracion}}</td>
                            <td>{{$lista->precio}}</td>
                            <td>{{$lista->fecha}}</td>
                            <td>{{$lista->docente}}</td>
                            <td><a href="{{route('curso.edit', $lista)}}" class="btn btn-primary btn-sm">Gestionar</a></td>
                            <td>
                               
                                        <form action="{{route('curso.destroy',  $lista)}}" method="POST">
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

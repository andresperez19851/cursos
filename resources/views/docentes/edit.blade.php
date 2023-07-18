@extends('adminlte::page')

@section('title', 'Editar registro')

@section('content_header')
    <h1>Editar registro</h1>
    <span class="text-primary"><b>Nombre: </b>{{($docente->nombre) }}</span>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>
            {{session('mensaje')}} 
            </strong>
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($docente,['route'=>['docente.update', $docente], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Nombre','Nombre: *') !!} 
                            {!! Form::text('nombre' , null , ['class' => 'form-control', 'required']) !!}
                            @error('nombre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('documento','Documento: *') !!} 
                            {!! Form::text('documento' , null , ['class' => 'form-control', 'required',]) !!}
                            @error('documento')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">   
                        <div class="form-group">
                            {!! Form::label('Correo','Correo: *') !!} 
                            {!! Form::text('correo' , null , ['class' => 'form-control', 'required']) !!}
                            @error('correo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    {!! Form::submit('Actualizar registro',['class'=>'btn btn-primary', 'onclick'=>'return aceptar();']) !!}   
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('js')
        <script>
        function aceptar() {
             
            if(confirm('¿Esta seguro de realizar el cambio?')){
                return true;
            }else{
                return false;
            }
        }
        </script>
@stop
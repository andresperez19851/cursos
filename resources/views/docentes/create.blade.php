@extends('adminlte::page')

@section('title', 'Crear registro')

@section('content_header')
    <h1>Crear registro</h1>
    <span class="text-primary">
        <b>Crear registro</b>
    </span>
@stop

@section('content')
   
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'docente.store', 'enctype'=>'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Nombre','Nombre: *') !!} 
                            {!! Form::text('nombre' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Nombre']) !!}
                            @error('nombre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Documento','Documento: *') !!} 
                            {!! Form::text('documento' , null , ['class' => 'form-control', 'required', 'placeholder' =>'# Documento']) !!}
                            @error('documento')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Correo','Correo: *') !!} 
                            {!! Form::email('correo' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Correo']) !!}
                            @error('correo')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
            
                {!! Form::submit('Crear registro',['class'=>'btn btn-primary', 'onclick'=>'return aceptar();']) !!} 
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('js')
        <script>
        function aceptar() {
             
            if(confirm('¿Esta seguro de crear el registro?')){
                return true;
            }else{
                return false;
            }
        }
        </script>
@stop



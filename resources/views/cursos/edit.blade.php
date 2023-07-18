@extends('adminlte::page')

@section('title', 'Editar registro')

@section('content_header')
    <h1>Editar registro</h1>
    <span class="text-primary"><b>Nombre: </b>{{($curso->curso) }}</span>
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
            {!! Form::model($curso,['route'=>['curso.update', $curso], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Curso','Curso: *') !!} 
                            {!! Form::text('curso' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Curso']) !!}
                            @error('curso')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Descripcion','Descripción *') !!} 
                            {!! Form::text('descripcion' , null , ['class' => 'form-control', 'placeholder' =>'# Documento']) !!}
                            @error('descripcion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Duracion','Duración: *') !!} 
                            {!! Form::number('duracion' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Duración']) !!}
                            @error('duracion')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Precio','Precio: *') !!} 
                            {!! Form::number('precio' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Precio', 'maxlength' => 10 ,'step'=>'0.01' , 'onkeyup'=>"/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':this.value=''" ]) !!}
                            @error('precio')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Fecha','Fecha: *') !!} 
                            {!! Form::date('fecha' , null , ['class' => 'form-control', 'required', 'placeholder' =>'Fecha']) !!}
                            @error('fecha')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Docente','Docente: *') !!} 
                            {!! Form::select('docente', $arr, null, ['class' => 'form-control']) !!}
                            @error('documento')
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
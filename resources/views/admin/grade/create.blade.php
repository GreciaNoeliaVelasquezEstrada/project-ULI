@extends('adminlte::page')
@section('title', 'Grade')

@section('content_header')
    <h1>Create new grade</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.grades.store']) !!}
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del grado']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el nombre del grado']) !!}

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Crear Curso', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

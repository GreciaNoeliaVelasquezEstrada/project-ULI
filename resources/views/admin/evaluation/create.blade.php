@extends('adminlte::page')
@section('title', 'Evaluation')

@section('content_header')
    <h1>Create New Evaluation</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.evaluations.store']) !!}
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del evaluation']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">
                    {!! Form::label('description', 'Descripcion') !!}
                    {!! Form::text('description', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese la descripcion de la Evaluacion']) !!}

                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form group">
                    {!! Form::label('date', 'Fecha') !!}
                    {!! Form::date('date', null, ['class'=> 'form-control', 'placeholder'=>'Inserte la fecha de  la evaluacion']) !!}

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form group">
                    {!! Form::label('cualification', 'Calificacion') !!}
                    {!! Form::text('cualification', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese la calificacion de la evaluacion']) !!}

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Crear Evaluacion', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

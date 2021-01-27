@extends('adminlte::page')
@section('title', 'Activities')

@section('content_header')
    <h1>Create new Activitie</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.activities.store']) !!}
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id de la actividad']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">
                    {!! Form::label('title', 'Titulo') !!}
                    {!! Form::text('title', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el titulo de la Actividad']) !!}

                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form group">
                    {!! Form::label('description', 'Descripcion') !!}
                    {!! Form::text('description', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese la descripcion de la Actividad']) !!}

                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Crear Actividad', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

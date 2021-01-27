@extends('adminlte::page')
@section('title', 'Assistance')

@section('content_header')
    <h1>Create new Assistance</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.assistances.store']) !!}
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id de asistencia']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">
                    {!! Form::label('date', 'Fecha') !!}
                    {!! Form::date('date', null, ['class'=> 'form-control', 'placeholder'=>'Inserte la fecha de asistencia']) !!}

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Crear Asistencia', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

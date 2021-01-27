@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new matter</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.matters.store']) !!}
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id de la materia']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el nombre de la materia']) !!}

                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Crear Materia', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

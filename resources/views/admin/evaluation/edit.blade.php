@extends('adminlte::page')
@section('title', 'Uli')

@section('content_header')
    <h1>Editar  Evaluacion</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong >
        {{(session('info'))}}
    </strong>
</div>
@endif
    <div class="card">
        <div class="card-body">

            {!! Form::model($evaluation, ['route' => ['admin.evaluations.update', $evaluation], 'method'=>'POST']) !!}
            @csrf
            @method('PUT')
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id de la evaluacion']) !!}

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
                    {!! Form::text('date', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese la fecha de la Actividad']) !!}

                    @error('date')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form group">

    {!! Form::label('cualification', 'Calificacion') !!}
        {!! Form::text('cualification', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese la calificacion para editar']) !!}

    @error('description')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>

                <br>
                {!! Form::submit('Actualizar Evaluacion', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
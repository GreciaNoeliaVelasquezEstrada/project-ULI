@extends('adminlte::page')
@section('title', 'EditGrade')

@section('content_header')
    <h1>Edit Grade</h1>
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

            {!! Form::model($grade, ['route' => ['admin.grades.update', $grade], 'method'=>'POST']) !!}
            @csrf
            @method('PUT')
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
                {!! Form::submit('Update Grade', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
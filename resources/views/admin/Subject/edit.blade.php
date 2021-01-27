@extends('adminlte::page')
@section('title', 'Uli')

@section('content_header')
    <h1>Editar Temas</h1>
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

            {!! Form::model($subject, ['route' => ['admin.subjects.update', $subject], 'method'=>'POST']) !!}
            @csrf
            @method('PUT')
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del tema']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form group">



                    {!! Form::label('title_subject', 'Title') !!}
                    {!! Form::text('title_subject', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el titulo del tema']) !!}

                    @error('title_subject')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                {!! Form::submit('Actualizar Temas, ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
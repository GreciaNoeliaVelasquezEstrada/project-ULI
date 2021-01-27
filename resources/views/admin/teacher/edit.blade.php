@extends('adminlte::page')
@section('title', 'Editteacher')

@section('content_header')
    <h1>Edit Teacher</h1>
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

            {!! Form::model($teacher, ['route' => ['admin.teachers.update', $teacher], 'method'=>'POST']) !!}
            @csrf
            @method('PUT')
            <div class="form group">
                    {!! Form::label('id', 'Id') !!}
                    {!! Form::number('id', null, ['class'=> 'form-control', 'placeholder'=>'Ingrese el id del Teacher']) !!}

                    @error('id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                
                <br>
                {!! Form::submit('Update Teacher', ['class' => 'btn btn-primary']) !!}
            
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
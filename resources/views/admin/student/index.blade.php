@extends('adminlte::page')
 @section('title', 'Student')

@section('content_header')
    <h1>Lista de Estudiantes</h1>
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
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.students.create')}}">Add Student</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               
               <th colspan="2">Actions</th>
             </tr>
            </thead>
            <tbody >
            @foreach ($students as $student)
         
            <tr>
                <td>{{$student->id}}</td>
               
                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.students.edit', $student)}}" >Editar</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.students.destroy', $student)}}" method="POST">
                       @csrf 
                    @method('delete')
                   <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop


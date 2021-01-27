@extends('adminlte::page')
 @section('title', 'Dashboard')

@section('content_header')
    <h1>List de Teacher</h1>
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
            <a class="btn btn-secondary" href="{{route('admin.teachers.create')}}">Add Teacher</a>
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
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
          
               

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.teachers.edit', $teacher)}}" >Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.teachers.destroy',$teacher)}}" method="POST">
                       @csrf 
                    @method('delete')
                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop

@extends('adminlte::page')
 @section('title', 'Dashboard')

@section('content_header')
    <h1>List de activitie</h1>
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
            <a class="btn btn-secondary" href="{{route('admin.activities.create')}}">Add Activities</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>title</th>
               <th>description</th>
               <th colspan="2">Actions</th>
             </tr>
            </thead>
            <tbody >
            @foreach ($activities as $activitie)
            <tr>
                <td>{{$activitie->id}}</td>
                <td>{{$activitie->title}}</td>
                <td>{{$activitie->description}}</td>
               

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.activities.edit', $activitie)}}" >Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.activities.destroy',$activitie)}}" method="POST">
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


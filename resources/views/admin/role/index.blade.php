@extends('adminlte::page')
 @section('title', 'IndexRole')

@section('content_header')
    <h1>List de role</h1>
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
            <a class="btn btn-secondary" href="{{route('admin.roles.create')}}">Add Role</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>name</th>
               <th colspan="2">Actions</th>
             </tr>
            </thead>
            <tbody >
            @foreach ($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->description}}</td>
                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $role)}}" >Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
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


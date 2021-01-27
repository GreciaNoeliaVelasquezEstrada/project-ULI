@extends('adminlte::page')
 @section('title', 'Dashboard')

@section('content_header')
    <h1>List de evaluation</h1>
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
            <a class="btn btn-secondary" href="{{route('admin.evaluations.create')}}">Add Evaluation</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>description</th>
               <th>date</th>
               <th>cualification</th>
               <th colspan="4">Actions</th>
             </tr>
            </thead>
            <tbody >
            @foreach ($evaluations as $evaluation)
            <tr>
                <td>{{$evaluation->id}}</td>
                <td>{{$evaluation->description}}</td>
                <td>{{$evaluation->date}}</td>
                <td>{{$evaluation->cualification}}</td>
               

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.evaluations.edit', $evaluation)}}" >Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.evaluations.destroy',$evaluation)}}" method="POST">
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


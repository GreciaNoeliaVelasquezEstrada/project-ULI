@extends('adminlte::page')
 @section('title', 'Dashboard')

@section('content_header')
    <h1>List de Subject</h1>
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
            <a class="btn btn-secondary" href="{{route('admin.subjects.create')}}">Add Subject</a>
        </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>
               <th>id</th>
               <th>title_subject</th>
               <th>description</th>
               <th colspan="3">Actions</th>
             </tr>
            </thead>
            <tbody >
            @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->title_subject}}</td>
                <td>{{$subject->description}}</td>

                <td width="10px">
                    <a class="btn btn-primary btn-sm" href="{{route('admin.subjects.edit', $subject)}}" >Edit</a>
                </td>
                <td width="10px">
                    <form action="{{route('admin.subjects.destroy',$subject)}}" method="POST">
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


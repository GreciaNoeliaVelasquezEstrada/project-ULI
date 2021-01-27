@extends('admin.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
           
                    <div class="card">
                     <div class="card-header">{{ __('Lista de Personas') }}</div>
           
                         <div class="car-body">
                              
            
                                  <table class="table">
                                     
                                        <thead >
                                            <tr>
                                                    <td>Id</td>
                                                    <td>Name</td>
                                                    <td>Actions</td>
                                            </tr>

                                        </thead> 
                                            <tbody>
                                            @foreach($persons as $person)
                                            <tr>
                                                <td>{{ $person->id }}</td>
                                                <td>{{ $person->name }}</td>

                                                <td>
                                                   <div class="d-flex align-items-center">
                                                        <a href="{{ route('person.edit',$person) }}" class="badge badge-success mr-3">Editar</a>
                                                        <form action="{{ route('person.destroy',$person) }}" method="POST">
                                                            @csrf 
                                                            @method('DELETE')
                                                            <button class="badge badge-danger" style="border: none;">Eliminar</button>
                                                        </form>
                                                   </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                     </table>
                                    
                         </div>
                    </div>  

                </div>
        </div>
</div>
 @endsection
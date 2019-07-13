@extends('layouts.app')

@section('users-section')
<div class="container">
    <h1 class="text-center"> Lista de Usuarios </h1>

    @foreach($users as $user)
        <div>
            <h2>Nombre del Usuario:</h2>
            <p>{{ $user->name }}</p>
            <h3>Correo del Usuario </h3>
            <p>{{ $user->email }}</p>
            <br>
            
            <h4>Ingrese la modificación que desea relizar al usuario</h4>
           
            <label for="usuarioUpdateName">Nombre</label>
                <input type="text" id='usuarioUpdateName' class="form-control">
            <label for="usuarioUpdateEmail">Correo</label>
                <input type="text" id='usuarioUpdateEmail' class="form-control">
            <br>
            <div class="text-center">
            <button id="btnUpdateUser" class="btn btn-primary" dataUsuarioId="{{ $user->id }}">Modificar</button>
            <button id="btnDeleteUser" class="btn btn-danger" dataUsuarioId= "{{ $user->id }}">Eliminar</button>
            </div>
            <br>
            <br>
            
        </div>
    @endforeach 
</div>
@endsection

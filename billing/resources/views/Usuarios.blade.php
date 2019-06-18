@extends('layouts.app')

@section('users-section')
<div class="container">
    <p>Lista de Usuarios</p>

    @foreach($users as $user)
        <div>
        <p>{{ $user->name }}</p>
        <button class='btnDeleteUser' dataUsuarioId="{{ $user->id }}">ELIMINAR</button>
        </div>
    @endforeach
</div>
@endsection

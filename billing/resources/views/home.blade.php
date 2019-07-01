@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
<div >
    <a href="productos" class="list-group-item active">Nuestros Productos</a>
    <a href="usuarios" class="list-group-item active">Nuestros Usuarios</a>
    <a href=""class="list-group-item active">Nuestras Facturas</a>
</div>

@endsection
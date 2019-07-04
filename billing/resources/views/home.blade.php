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

<br>
<div class="text-center">
    <h1>Nuestras opciones</h4>
</div>

<nav class="navbar navbar-dark bg-light">
    <a href="productos" class="btn btn-outline-primary my-2 my-sm-0">Nuestros Productos</a>
    <a href="usuarios" class="btn btn-outline-primary my-2 my-sm-0">Nuestros Usuarios</a>
    <a href="facturas"class="btn btn-outline-primary my-2 my-sm-0">Nuestras Facturas</a>
  <!-- Navbar content    list-group-item active -->
</nav>


@endsection
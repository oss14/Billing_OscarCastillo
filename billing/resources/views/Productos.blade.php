@extends('layouts.app')

@section('productos-section')

<div class="col-sm-12">

@if(session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div>
@endif
</div>


    <div class="container">
        <h1 class="text-center">Información sobre nuestros productos</h1>

        <div class="text-right">
                <a href="{{ route('addproductos.create') }}" class="btn btn-success">Nuevo Producto</a>

        </div>
        
        

    @foreach($tbl_producto as $productos)
        <div>
        <h2>Nombre del Producto </h2>
            <p>{{ $productos->nombre_producto }}</p>
        <h2> Detalle: </h2>
            <p>{{ $productos->detalle_producto }}</p>
        <h2>Precio del producto</h2>
            <p>{{$productos->precio_producto}}</p>
        <h3 for="productosUpdate">Ingrese la modificación que desea relizar al producto</h3>
            <input type="text" id='productoUpdate'class="form-control">
        <br>
        <button id= "buttonProductosModificar" class= "btn btn-primary"  productoInfoIdUpdate="{{$productos->id_producto}}">Modificar</button>  
        <button id="buttonProductoEliminar" class= "btn btn-danger" productoInfoIdEliminar="{{ $productos->id_producto}}">Eliminar</button>
        <br>
        <br>
        </div>
    @endforeach
</div>
@endsection

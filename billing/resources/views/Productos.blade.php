@extends('layouts.app')

@section('productos-section')
    <div class="container">
        <h1>Información sobre nuestros productos</h1>

    @foreach($tbl_productos as $productos)
        <div>
        <h2>Nombre del Producto </h2>
            <p>{{ $productos->nombre_producto }}</p>
        <h2> Detalle: </h2>
            <p>{{ $productos->detalle_producto }}</p>
        <h3 for="productosUpdate">Ingrese la modificación que desea relizar al producto</h3>
            <input type="text" id='productoUpdate'class="form-control">
        <br>
        <button id= "buttonProductosModificar" class= "btn btn-primary"  productoInfoIdUpdate="{{$productos->id}}">Modificar</button>  
        <button id="buttonProductoEliminar" class= "btn btn-danger" productoInfoIdEliminar="{{ $productos->id }}">Eliminar</button>
        <br>
        <br>
        </div>
    @endforeach
</div>
@endsection

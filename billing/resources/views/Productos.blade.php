@extends('layouts.app')

@section('productos-section')
    <div class="container">
        <p>Información sobre nuestros productos</p>

    @foreach($tbl_productos as $productos)
        <div>
        <p>{{ $productos->nombre_producto }}</p>
        <br>
        <p> Detalle: </p>
        <p>{{ $productos->detalle_producto }}</p>
        <label for="productosUpdate">Ingrese la modificación que desea relizar al producto</label>
        <input type="text" class='productoUpdate' txtProductoUpdate="{{$productos->detalle_producto }}">
        <button class='buttonProductosModificar' productoInfoId="{{$productos->id}}">Modificar</button>
        <br>
        <button class='buttonProductoEliminar' productoInfoId="{{ $productos->id }}">Eliminar</button>
        </div>
    @endforeach
</div>
@endsection

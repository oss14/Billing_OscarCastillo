@extends('layouts.app')

@section('productos-section')
    <div class="container">
        <h1>Información sobre nuestros productos</h1>

    @foreach($tbl_productos as $productos)
        <div>
            <p>{{ $productos->nombre_producto }}</p>
            <br>
            <h2> Detalle: </h2>
            <p>{{ $productos->detalle_producto }}</p>
            <h3 for="productosUpdate">Ingrese la modificación que desea relizar al producto</h3>
                <input type="text" id='productoUpdate'class="form-control">
                <br>
                <button id= "buttonProductosModificar" class= "btn btn-primary"  productoInfoId="{{$productos->id}}">Modificar</button>  
                <button id='buttonProductoEliminar'class= "btn btn-danger" productoInfoId="{{ $productos->id }}">Eliminar</button>
        </div>
    @endforeach
</div>
@endsection

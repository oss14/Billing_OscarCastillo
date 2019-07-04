@extends('layouts.app')

@section('facturas-section')
<div>
    <div class="container">
    <h1>Información sobre las facturas</h1>
    
        @foreach($tbl_facturas as $facturas)
            <div>

            <h2>Detalle de la factura</h2>
            <p>{{$facturas->detalle_factura}}</p>

            <h2>Código de la factura</h2>
            <p>{{$facturas->codigo_factura}}</p>
                
            <h2>Ingrese la modificación que desea realizar al detalle de la factura:</h2>
                <input type="text" id="facturaUpdateDetalle" class="form-control">
                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
            <br>
            <button id="buttonFacturasModificar" class= "btn btn-primary" facturaModificarId="{{ $facturas->id_facturas }}">Modificar</button>
            <button id="buttonFacturasEliminar" class= "btn btn-danger" facturaEliminarId="{{ $facturas->id_facturas }}">Eliminar</button>
            <br>
            <br>
            </div>
        @endforeach

    </div>
</div>
@endsection
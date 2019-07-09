@extends('layouts.app')

@section('facturas-section')

<div class="col-sm-12">

@if(session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div>
@endif
</div>

<div>
    <div class="container">
    
    <h1 class="text-center">Información sobre las facturas</h1> 
    
    <div class="text-right">
        <a href="{{ route('addfacturas.create') }}" class="btn btn-success">Nueva Factura</a>
    </div>
        

        @foreach($tbl_facturas as $facturas)
            <div>

            <h2>Detalle de la factura</h2>
            <p>{{$facturas->detalle_factura}}</p>

            <h2>Código de la factura</h2>
            <p>{{$facturas->codigo_factura}}</p>
                
            <h2>Ingrese la modificación que desea realizar al detalle de la factura:</h2>
                <input type="text" id="facturaUpdateDetalle" class="form-control">
               
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
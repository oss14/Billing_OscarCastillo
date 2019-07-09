@extends('layouts.base')

@section('addfactura')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Insertar Factura</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('addfacturas.store') }}"> 
          @csrf
          <div class="form-group">    
              <label for="detalle_factura">Detalle (Encabezado de la Factura):</label>
              <input type="text" class="form-control" name="detalle_factura"/>
          </div>

          <div class="form-group">
              <label for="codigo_factura">Código de la factura:</label>
              <input type="text" class="form-control" name="codigo_factura"/>
          </div>

          <button type="submit" class="btn btn-primary"> Agregar Factura</button>
      </form>
  </div>
</div>
</div>

@endsection

 
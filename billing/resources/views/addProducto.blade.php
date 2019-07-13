@extends('layouts.base')

@section('addproducto')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Insertar Producto</h1>
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
      <form method="post" action="{{ route('addproductos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="nombre_producto">Nombre del Producto:</label>
              <input type="text" class="form-control" name="nombre_producto"/>
          </div>

          <div class="form-group">
              <label for="detalle_producto">Detalle del Producto:</label>
              <input type="text" class="form-control" name="detalle_producto"/>
          </div>

          <div class="form-group">
              <label for="precio_producto">Precio del Producto:</label>
              <input type="text" class="form-control" name="precio_producto"/>
          </div>
          <div class="form-group">
              <label for="codigo_producto">Código del Producto:</label>
              <input type="text" class="form-control" name="codigo_producto"/>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-info"> Agregar Producto</button>
          </div>
          
      </form>
  </div>
</div>
</div>

@endsection

 
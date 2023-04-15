@extends('template')

@section('content')
    <h1>Añadir producto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4 mt-2">
            <label class="form-label" for="nombre">Nombre del producto</label>
            <input class="form-control" type="text" id="nombre" name="nombre">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="descripcion">Descripcion</label>
            <input class="form-control" type="text" id="descripcion" name="descripcion">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="foto">Foto (URL)</label>
            <input class="form-control" type="text" id="foto" name="foto">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio">Precio</label>
            <input class="form-control" type="text" id="precio" name="precio">
        </div>

        <div class="mb-4">
            <label class="form-label" for="stock">Stock</label>
            <input class="form-control" type="text" id="stock" name="stock">
        </div>
        
        <input class="btn btn-success" type="submit" value="Agregar">
    </form>
@endsection

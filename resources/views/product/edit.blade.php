@extends('template')

@section('content')
    <h1>Editar producto</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4 mt-2">
            <label class="form-label" for="nombre">Nombre del superheroe</label>
            <input class="form-control" type="text" id="nombre" name="nombre" value="{{ old('nombre', $product->nombre) }}">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="descripcion">Nombre real</label>
            <input class="form-control" type="text" id="descripcion" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="foto">Foto (URL)</label>
            <input class="form-control" type="text" id="foto" name="foto" value="{{ old('foto', $product->foto) }}">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio">Precio</label>
            <input class="form-control" type="text" id="precio" name="precio" value="{{ old('precio', $product->precio) }}">
        </div>

        <div class="mb-4">
            <label class="form-label" for="stock">Stock</label>
            <input class="form-control" type="text" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
        </div>
        
        <input class="btn btn-warning" type="submit" value="Editar">
    </form>
@endsection
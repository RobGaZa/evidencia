@extends('template')
@section('content')
<div class="container">
    <h1>Lista de productos</h1>

    <a class="btn btn-success mt-2" href="{{ route('products.create') }}" class=>Añadir producto</a>
    <a class="btn btn-primary mt-2" href="{{ route('orders.index') }}" class=>Ordenes</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Foto del producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->descripcion }}</td>
                <td>
                    <img src="{{ $product->foto }}" alt="" style="width: 150px;">
                </td>
                <td>{{ $product->precio }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Desea eliminar este producto?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('template')
@section('content')
<div class="container">
    <h1>Ordenes</h1>

    <a class="btn btn-success mt-2" href="{{ route('orders.create') }}">Añadir orden</a>
    <a class="btn btn-primary mt-2" href="{{ route('products.index') }}">Productos</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id del producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Precio total</th>
                <th scope="col">Estatus de pedido</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->cantidad }}</td>
                <td>{{ $order->precio_unitario }}</td>
                <td>{{ $order->precio_total }}</td>
                <td>{{ $order->estatus }}</td>
                <td>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST">
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
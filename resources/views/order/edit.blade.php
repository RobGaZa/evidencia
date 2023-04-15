@extends('template')

@section('content')
    <h1>Editar orden</h1>

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4 mt-2">
            <label class="form-label" for="product_id">Id del producto</label>
            <input class="form-control" type="text" id="product_id" name="product_id" value="{{ old('product_id', $order->product_id) }}">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="cantidad">Cantidad</label>
            <input class="form-control" type="text" id="cantidad" name="cantidad"value="{{ old('cantidad', $order->cantidad) }}">
        
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio_unitario">Precio unitario</label>
            <input class="form-control" type="text" id="precio_unitario" name="precio_unitario"value="{{ old('precio_unitario', $order->precio_unitario) }}">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio_total">Precio total</label>
            <input class="form-control" type="text" id="precio_total" name="precio_total"value="{{ old('precio_total', $order->precio_total) }}">
        </div>

        <div class="mb-4">
            <label class="form-label" for="estatus">Estatus</label>
            <input class="form-control" type="text" id="estatus" name="estatus"value="{{ old('estatus', $order->estatus) }}">
        </div>
        
        <input class="btn btn-warning" type="submit" value="Editar">
    </form>
@endsection
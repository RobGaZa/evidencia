@extends('template')

@section('content')
    <h1>Añadir orden</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="mb-4 mt-2">
            <label class="form-label" for="product_id">Id del producto</label>
            <input class="form-control" type="text" id="product_id" name="product_id">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="cantidad">Cantidad</label>
            <input class="form-control" type="text" id="cantidad" name="cantidad">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio_unitario">Precio unitario</label>
            <input class="form-control" type="text" id="precio_unitario" name="precio_unitario">
        </div>
        
        <div class="mb-4">
            <label class="form-label" for="precio_total">Precio total</label>
            <input class="form-control" type="text" id="precio_total" name="precio_total">
        </div>

        <div class="mb-4">
            <label class="form-label" for="estatus">Estatus</label>
            <input class="form-control" type="text" id="estatus" name="estatus">
        </div>
        
        <input class="btn btn-success" type="submit" value="Agregar">
    </form>
@endsection
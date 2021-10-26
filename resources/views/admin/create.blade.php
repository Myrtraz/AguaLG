@extends('layouts.adminPanel')
@section('body')
<style>
    input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
  	-webkit-appearance: none;
  	margin: 0;
}

    input[type=number] { -moz-appearance:textfield; }
</style>
<section class="py-4 d-block d-sm-block d-md-none">
    <div class="container">
        <form action="{{ route('created') }}" method="POST">
            @csrf
            <div class="">
                <label for="">Nombre del Producto</label>
                <input type="text" name="name" class="form-control mb-2" placeholder="Nombre del Producto" value="{{ old('name') }}">
    
                <label for="">Precio Unitario</label>
                <input type="number" name="price" class="form-control mb-2" placeholder="Precio Unitario" value="{{ old('price') }}">

                <label for="">Cantidad</label>
                <input type="number" name="stock" class="form-control mb-2" placeholder="Cantidad" value="{{ old('stock') }}">
    
                <label for="">Categoria</label>
                <select name="type" id="type" class="form-control mb-2">
                    <option disabled selected>Seleccione la categoria</option>
                    <option value="Filtro">Filtro</option>
                    <option value="Accesorio">Accesorio</option>
                    <option value="Termo">Termo</option>
                </select>
    
                <label for="">Url Imagen</label>
                <input type="text" name="cover" class="form-control mb-2" placeholder="Url Imagen" value="{{ old('cover') }}">
            </div>
            <button type="submit" class="btn btn-success float-right">Subir</button>
        </form>
    </div>
</section>

<section class="py-4 d-none d-sm-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="mx-4 my-3">
                        <form action="{{ route('created') }}" method="POST" class="py-4">
                            @csrf
                            <div class="">
                                <label for="">Nombre del Producto</label>
                                <input type="text" name="name" class="form-control mb-2" placeholder="Nombre del Producto" value="{{ old('name') }}">
                    
                                <label for="">Precio Unitario</label>
                                <input type="number" name="price" class="form-control mb-2" placeholder="Precio Unitario" value="{{ old('price') }}">
                
                                <label for="">Cantidad</label>
                                <input type="number" name="stock" class="form-control mb-2" placeholder="Cantidad" value="{{ old('stock') }}">
                    
                                <label for="">Categoria</label>
                                <select name="type" id="type" class="form-control mb-2">
                                    <option disabled selected>Seleccione la categoria</option>
                                    <option value="Filtro">Filtro</option>
                                    <option value="Accesorio">Accesorio</option>
                                    <option value="Termo">Termo</option>
                                </select>
                    
                                <label for="">Url Imagen</label>
                                <input type="text" name="cover" class="form-control mb-2" placeholder="Url Imagen" value="{{ old('cover') }}">
                            </div>
                            <button type="submit" class="btn btn-success float-right">Subir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
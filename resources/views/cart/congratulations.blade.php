@extends('layouts.app')
@section('title', 'Felicidades | Agualogic')
@section('background')
@section('body')
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Felicidades:</h4>
                    <ul class="alert-success">
                        <li>Su compra ha sido exitosa</li>
                    </ul>
                    <a href="{{ route('index') }}" class="text-decoration-none">Volver a la página principal</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
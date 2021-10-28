@extends('layouts.app')
@section('title', 'Felicidades | Agualogic')
@section('background')
@section('body')
    <section class="py-4 d-block d-sm-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Felicidades:</h4>
                        <ul class="alert-success">
                            <li>Su compra ha sido exitosa</li>
                        </ul>
                        <a href="{{ route('close') }}" class="text-decoration-none">Volver a la página principal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Felicidades:</h4>
                        <ul class="alert-success">
                            <li>Su compra ha sido exitosa</li>
                        </ul>
                        <a href="{{ route('close') }}" class="text-decoration-none">Volver a la página principal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

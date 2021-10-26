@extends('layouts.adminPanel')
@section('body')
    <section class="py-4 d-block d-sm-block d-md-none">
        <div class="container">
            <div class="row">
                @if (! empty($products) )
                    @foreach ($products as $product)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¡Estás Seguro!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¡Estas seguro! , ¿Que desea recuperar el producto?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('returned', ['id' => $product->id]) }}"
                                            class="btn btn-success mb-1">Recuperar</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ $product->cover }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success float-right mb-1" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Recuperar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        En estos momentos no hay ningun producto para recuperar,
                                        este atento a los cambios correspondiente.
                                        En cualquier caso, contacté con el administrador.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->is_product_on == false)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¡Estás Seguro!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¡Estas seguro! , ¿Que desea recuperar el producto?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('returned', ['id' => $product->id]) }}"
                                            class="btn btn-success mb-1">Recuperar</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ $product->cover }}" height="200" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                            <button type="button" class="btn btn-success float-right mb-1" data-toggle="modal"
                                            data-target="#exampleModal1">
                                            Recuperar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

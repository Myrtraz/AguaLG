@extends('layouts.adminPanel')
@section('body')
    <section class="py-4 d-block d-sm-block d-md-none">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->is_product_on == true)
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
                                        ¡Estas seguro! , ¿Que desea eliminar el producto?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('suspend', ['id' => $product->id]) }}"
                                            class="btn btn-danger float-right">Eliminar</a>
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
                                        <a href="{{ route('edit', ['id' => $product->id]) }}"
                                            class="btn btn-warning">Editar</a>
                                        <button type="button" class="btn btn-danger float-right mb-1" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Eliminar
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

    <section class="py-4 d-none d-sm-none d-md-block">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->is_product_on == true)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¡Estás Seguro!</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¡Estas seguro! , ¿Que desea eliminar el producto?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('suspend', ['id' => $product->id]) }}"
                                            class="btn btn-danger float-right">Eliminar</a>
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
                                        <a href="{{ route('edit', ['id' => $product->id]) }}"
                                            class="btn btn-warning mx-1">Editar</a>
                                        <button type="button" class="btn btn-danger float-right mb-1" data-toggle="modal"
                                            data-target="#exampleModal1">
                                            Eliminar
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

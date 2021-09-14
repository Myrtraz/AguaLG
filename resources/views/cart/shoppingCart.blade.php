@extends('layouts.app')
@section('title', 'Carrito | Agualogic')
@section('background')
@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="">
                <a href=" #" class="text-dark text-decoration-none">
                    <i class="fas fa-arrow-left" style="font-size: 25px"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <div class="" style=" background-color: #fff; width: 70px;border-radius: 25px;
                                        box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important;">
                                        <img src="{{ $product->cover }}" width="100%" style="border-radius: 25px;" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mx-3">
                                        <span class="mx-1">{{ $product->name }}</span><br>
                                        <span class="mx-1">{{ $product->price }}
                                            X{{ $qty }}</span><br>
                                    </div>
                                </div>

                            </div>
                            <i class="fas fa-times-circle float-end"
                                style=" background: #fff;color: #ec8571 !important;"></i>
                        </div>
                        <div class="">
                            <h3>
                                <span style=" color:
                            #666 !important; font-size: 20px">Resumen</span>
                            <br>
                            <span style="color: #333 !important; font-size: 30px;">Subtotal:</span><br>
                            <span style="color: #333 !important">${{ $product->price }}</span>
                            </span>
                            </h3>
                        </div>
                    @endforeach
                </div>
                <div class=" mb-2">
                    <small class="mb-2" style="color: #607d8b !important">En el siguiente paso se calculan los
                        costos de envío segun su direción.</small>
                    <div class="d-grid gap-2 py-2">
                        <a href="{{ route('checkout', compact('uid', 'pid', 'qty')) }}" class="btn btn-secondary "
                            style="background: #607d8b !important;border-radius: 10px !important;">Continuar</a>
                    </div>
                </div>
            </div>

            <div class="text-center py-2">
                <a href="{{ route('usProducts') }}" class="text-decoration-none p-2 text-center "
                    style="background-color: #dfdcde;color: #515151;border-radius: 10px;">
                    Ver todos nuestros productos
                </a>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Tambien te puede interesar</h5>
                    <div class="row">
                        <div class="col-3" style="width: 50%">
                            <div>
                                <div
                                    style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                    <div>
                                        <img src="{{ asset('images/Vidrio-Corrugado-1-e1617942772277.png') }}"
                                            width="100%" height="40%" alt="">
                                    </div>
                                </div>
                                <span style="font-size: 0.8rem !important; color: #666;">$375,000.00</span>
                                <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Vidrio Corrugado</h2>
                            </div>
                        </div>

                        <div class="col-3" style="width: 50%">
                            <div>
                                <div
                                    style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                    <div>
                                        <img src="{{ asset('images/AZUL-JASPEADO-e1617942876146.png') }}" width="100%"
                                            height="40%" alt="">
                                    </div>
                                </div>

                                <span style="font-size: 0.8rem !important; color: #666;">$375,000.00</span>
                                <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Peltre - Azul Jaspeado</h2>
                            </div>
                        </div>

                        <div class="col-3" style="width: 50%">
                            <div>
                                <div
                                    style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                    <div>
                                        <img src="{{ asset('images/Turquesa-e1617942161513.png') }}" width="100%"
                                            height="40%" alt="">
                                    </div>
                                </div>
                                <span style="font-size: 0.8rem !important; color: #666;">$375,000.00</span>
                                <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Peltre - Azul Turquesa</h2>
                            </div>
                        </div>

                        <div class="col-3" style="width: 50%">
                            <div>
                                <div
                                    style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                    <div>
                                        <img src="{{ asset('images/Plastico-1-e1617942847158.png') }}" width="100%"
                                            height="40%" alt="">
                                    </div>
                                </div>
                                <span style="font-size: 0.8rem !important; color: #666;">$165,900.00</span>
                                <h2 style="font-size: 0.8rem !important; color: #666;">Unidad plastica - Blanco</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

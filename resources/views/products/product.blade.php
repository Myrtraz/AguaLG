@extends('layouts.app')
@section('title', "$name | Agualogic")
@section('background')
@section('body')
    <style>
        input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
        }

        input:focus {
            outline: none;
        }

    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{ $product->cover }}" width="100%" alt="">
                </div>
                <div class="col-6">
                    <div class="">
                        <h1 class="p-0 m-0" style="color: #666">{{ $product->name }}</h1>
                        <span class="h3">${{ $product->price }}</span>
                        <div class="mb-4"></div>

                        <form action=""
                            style="background: initial !important; border: initial !important;border-radius: initial !important;margin: 1rem 0 !important;">
                            @csrf
                            <div class="mb-5">
                                <div style="background: white;border: 2px solid #607d8b;border-radius: 10px;width: 100%;">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#" class="text-secondary">
                                                <i class="fas fa-minus text-gray mx-2" style="vertical-align: middle;"></i>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <div class="" style="float: initial !important;
                                                        display: inline-block !important;">
                                                <input type="number" step="1" min="1" max="5" name="quantity" value="1"
                                                    title="qty" size="4" placeholder="" inputmode="numeric">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="text-secondary">
                                                <i class="fas fa-plus text-gray" style="vertical-align: middle;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1"></div>
                                <a href="{{ route('shoppingCart') }}" class="text-decoration-none btn bg-lg"
                                    style="border: 2px solid #607d8b;border-radius: 10px !important; width: 100%; background-color: #607d8b; color: #fff; padding: .5rem;">
                                    Comprar
                                </a>
                            </div>
                    </div>
                    </form>
                </div>

                <div class="mb-2">
                    <div style="background: #4caf50;color: #fff;text-align: center; border-radius: 10px; align-vertical: middle;">
                        <p class="py-2" style="font-weight: 600;">Envio gratis en Bogotá <i class="fas fa-shipping-fast"></i></p>
                    </div>
                    <span class="text-muted">
                        Envío incluido solo para filtros en la ciudad de Bogotá – Colombia.
                        Contáctenos a través de nuestros canales de servicio al cliente
                        para conocer el valor de su envío fuera de la ciudad de Bogotá.
                    </span>
                </div>

                <div class="mb-2">
                    <span>Fabricado en acero al carbono revestido con una cubierta vítrea en color
                        (interior/exterior).</span>
                    <span>Incluye: Unidad de almacenamiento peltre, tapa, filtro cerámico, grifo dispensador en acero
                        inoxidable.</span>
                    <span>Capacidad de 20 litros, incluyendo volumen del filtro cerámico.</span>
                    <span>Dimensiones aproximadas: 42 cm Alto – 32,5 cm diámetro.</span>
                    <span>Peso: 7 kilogramos aproximadamente.</span>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Tambien te puede interesar</h5>
                    <div class="row">
                        <div class="col-3" style="width: 25%">
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

                        <div class="col-3" style="width: 25%">
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

                        <div class="col-3" style="width: 25%">
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

                        <div class="col-3" style="width: 25%">
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
                    <a href="{{ route('usProducts') }}" class="text-decoration-none p-2"
                        style="background-color: #dfdcde;color: #515151; border-radius: 10px">
                        Ver todos nuestros productos
                    </a>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(() => {
            jQuery('.down-qty').on('click', function(e) {
                e.preventDefault()

                let input = jQuery('input[type="number"]')
                const min = Number(input.attr('min'))
                const value = Number(input.val())

                input.val(value > min ? value - 1 : value)
            })

            jQuery('.up-qty').on('click', function(e) {
                e.preventDefault()

                let input = jQuery('input[type="number"]')
                const max = Number(input.attr('max'))
                const value = Number(input.val())

                input.val(value < max ? value + 1 : value)
            })
        })
    </script>
@endsection

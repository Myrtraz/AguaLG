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
    <section class="py-4 d-block d-sm-block d-md-none">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ $product->cover }}" width="100%" alt="">
                    </div>
                    <div class="col">
                        <h1 class=" p-0 m-0" style="color: #666">{{ $product->name }}
                        </h1>
                        <span class="h3">${{ $product->price }}</span>
                        <div class="mb-4"></div>

                        <form action="{{ route('add_cart') }}"
                            style="background: initial !important; border: initial !important;border-radius: initial !important;">
                            @csrf
                            <input type="hidden" name="pid" value="{{ $product->id }}">
                            <div class="mb-3">
                                <div style="background: white;border: 2px solid #607d8b;border-radius: 10px; width: 100%;">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="#" class="text-secondary">
                                                        <i class="fas fa-minus mx-2 py-2"
                                                            style="vertical-align: middle; font-size: 20px; color: #607d8b"></i>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <div class="" style=" float: initial !important; display: inline-block
                                                                    !important;">
                                                        <input type="number" class="" step=" 1" min="1"
                                                            max="5" name="quantity" value="1" title="qty" size="4"
                                                            placeholder="" inputmode="numeric"
                                                            style="font-size: 20px; color: #607d8b">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#" class="text-secondary">
                                                        <i class="fas fa-plus text-gray py-2"
                                                            style="vertical-align: middle; font-size: 20px"
                                                            style=" color: #607d8b"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="text-decoration-none btn bg-lg py-1"
                                                style="border: 2px solid #607d8b; width: 100%; background-color: #607d8b; color: #fff; padding: 2rem;">
                                                Comprar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="">
                        <div style=" background: #4caf50;color: #fff;text-align: center;
                                    border-radius: 10px; align-vertical: middle;">
                            <p class="py-2" style="font-weight: 600;">Envio gratis en Bogotá <i
                                    class="fas fa-shipping-fast"></i></p>
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
        </section>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Tambien te puede interesar</h5>
                        <div class="row">
                            @foreach ($filters as $filter)
                                @if ($filter->stock != 0)
                                    @if ($filter->is_product_on == true)
                                        <div class="col-3" style="width: 50%">
                                            <a href="{{ route('getProduct', ['name' => $filter->name]) }}"
                                                class="text-decoration-none">
                                                <div>
                                                    <div
                                                        style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                                        <div>
                                                            <img src="{{ $filter->cover }}" width="100%" height="40%"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <span
                                                        style="font-size: 0.8rem !important; color: #666;">${{ $filter->price }}</span>
                                                    <h2 style="font-size: 0.8rem !important; color: #666;">
                                                        {{ $filter->name }}</h2>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-3" style="width: 50%">
                                        <div>
                                            <div
                                                style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                                <div>
                                                    <img src="{{ $filter->cover }}" width="100%" height="40%" alt="">
                                                </div>
                                            </div>
                                            <div class="mb-2"></div>
                                            <span class="badge badge-warning mx-3"
                                                style="font-size: 0.8rem !important; color: #666;">No hay stocks</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ $product->cover }}" width="100%" alt="">
                    </div>
                    <div class="col-6">
                        <h1 class=" p-0 m-0" style="color: #666">{{ $product->name }}
                        </h1>
                        <span class="h3">${{ $product->price }}</span>
                        <div class="mb-4"></div>

                        <form action="{{ route('add_cart') }}"
                            style="background: initial !important; border: initial !important;border-radius: initial !important;">
                            @csrf
                            <input type="hidden" name="pid" value="{{ $product->id }}">
                            <div class="mb-3">
                                <div style="background: white;border: 2px solid #607d8b;border-radius: 10px; width: 100%;">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="button" value="-" id="moins" onclick="minus()">
                                                </div>
                                                <div class="col-4">
                                                    <div class=""
                                                        style="float: initial !important; display: inline-blockimportant">
                                                        <input type="text" size="25" value="1" name="quantity" id="count" style="font-size: 20px; color: #607d8b">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <input type="button" value="+" id="plus" onclick="plus()">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="text-decoration-none btn bg-lg py-1"
                                                style="border: 2px solid #607d8b; width: 100%; background-color: #607d8b; color: #fff; padding: 2rem;">
                                                Comprar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <div class="py-2">
                                    <div style=" background: #4caf50;color: #fff;text-align: center;
                                                border-radius: 10px; align-vertical: middle;">
                                        <p class="py-2" style="font-weight: 600;">Envio gratis en Bogotá <i
                                                class="fas fa-shipping-fast"></i></p>
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
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Tambien te puede interesar</h5>
                        <div class="row">
                            @foreach ($filters as $filter)
                                @if ($filter->stock != 0)
                                    @if ($filter->is_product_on == true)
                                        <div class="col-3">
                                            <a href="{{ route('getProduct', ['name' => $filter->name]) }}"
                                                class="text-decoration-none">
                                                <div>
                                                    <div
                                                        style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                                        <div>
                                                            <img src="{{ $filter->cover }}" width="100%" height="40%"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <span
                                                        style="font-size: 0.8rem !important; color: #666;">${{ $filter->price }}</span>
                                                    <h2 style="font-size: 0.8rem !important; color: #666;">
                                                        {{ $filter->name }}</h2>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    @if ($filter->is_product_on == true)
                                        <div class="col-3">
                                            <div>
                                                <div
                                                    style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                                    <div>
                                                        <img src="{{ $filter->cover }}" width="100%" height="40%" alt="">
                                                    </div>
                                                </div>
                                                <div class="mb-2"></div>
                                                <span class="badge badge-warning py-2 mx-2"
                                                    style="font-size: 0.8rem !important; color: #666;">No hay stocks
                                                    disponibles</span>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                            @endforeach
                        </div>
                        <div class="mb-3"></div>
                        <a href="{{ route('usProducts') }}" class="text-decoration-none p-2"
                            style="background-color: #dfdcde;color: #515151; border-radius: 10px">
                            Ver todos nuestros producto
                        </a>
                        <div class="mb-3"></div>
                    </div>
                </div>
            </div>

        </section>
    </section>

    <script>
          var count = 1;
        var countEl = document.getElementById("count");
        function plus(){
            count++;
            countEl.value = count;
        }
        function minus(){
        if (count > 1) {
            count--;
            countEl.value = count;
        }  
        }
    </script>
@endsection

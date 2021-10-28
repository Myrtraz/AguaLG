@extends('layouts.app')
@section('title', 'Carrito | Agualogic')
@section('background')
@section('body')
    <section class="py-4 d-block d-sm-block d-md-none">
        <section class="">
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
                                            <img src="{{ $product->product_cover }}" width="100%"
                                                style="border-radius: 25px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="mx-3">
                                            <span class="mx-1">{{ $product->product_name }}</span><br>
                                            <span class="mx-1">{{ $product->product_price }}
                                                X{{ $product->product_qty }}</span><br>
                                        </div>
                                    </div>

                                </div>
                                <i class="fas fa-times-circle float-end"
                                    style=" background: #fff;color: #ec8571 !important;"></i>
                            </div>
                        @endforeach
                        <div class="">
                            <h3>
                                <span style=" color:
                                    #666 !important; font-size: 20px">Resumen</span>
                                <br>
                                <span style="color: #333 !important; font-size: 30px;">Subtotal:</span><br>
                                <span style="color: #333 !important; font-size: 30px;">${{ $subtotal }}</span>
                                </span>
                            </h3>
                        </div>
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
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <section>
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <div class="" style=" background-color: #fff; width: 140px;border-radius: 25px;
                                                box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important;">
                                        <img src="{{ $product->product_cover }}" width="140" style="border-radius: 25px;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <span class="mx-1">{{ $product->product_name }}</span><br>
                                        <span class="mx-1">${{ $product->product_price }}
                                            X{{ $product->product_qty }}</span><br>
                                    </div>
                                    <i class="fas fa-times-circle float-end"
                                        style=" background: #fff;color: #ec8571 !important;"></i>
                                </div>
                        
                    @endforeach
                    <div class="col-6">
                        <div class="">
                            <h3>
                                <span style=" color:
                                        #666 !important; font-size: 20px">Resumen</span>
                                <br>
                                <span style="color: #333 !important; font-size: 30px;">Subtotal:</span><br>
                                <span style="color: #333 !important; font-size: 30px;">${{ $subtotal }}</span>
                                </span>
                            </h3>
                        </div>
                        <div class=" mb-2">
                            <small class="mb-2" style="color: #607d8b !important">En el siguiente paso se calculan los
                                costos de envío segun su direción.</small>
                            <div class="d-grid gap-2 py-2">
                                <a href="{{ route('checkout', compact('uid', 'pid', 'qty')) }}" class="btn btn-secondary btn-lg btn-block"
                                    style="background: #607d8b !important;border-radius: 10px !important;">Continuar</a>
                            </div>
                        </div>
                        <div class="float-end py-2">
                            <a href="{{ route('usProducts') }}" class="text-decoration-none btn-lg btn-block"
                                style="background-color: #dfdcde;color: #515151;border-radius: 10px;">
                                Ver todos nuestros productos
                            </a>
                        </div>
                    </div>
                </div>
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
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

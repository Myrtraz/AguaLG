@extends('layouts.app')
@section('title', "Carrito | Agualogic")
@section('background')
@section('body')
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <i class="fas fa-arrow-left" style="font-size: 30px"></i>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-3" style="background-color: #fff">
                        <img src="{{ asset('/images/AZUL-JASPEADO-e1617942876146.png') }}" alt="" style="border-radius: 25px;width: 80px;height: 80px;">
                    </div>
                    <div class="col-4">
                        <h5>
                            <span>Unidad Peltre - Azul Jaspeado</span>
                            <br>
                            <span>
                                $ <span>375.001</span> <span>X1</span>
                            </span>
                        </h5>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-times-circle" style="vertical-align: bottom"></i>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3>
                    <span class="text-muted h3">Resumen</span>
                    <br>
                    <span>Subtotal:</span>
                    <span>$ <span> 375.001</span>
                    </span>
                </h3>
                <small class="text-muted">En el siguiente paso se calculan los costos de envío segun su direción.</small>
                <div class="d-grid gap-2">
                    <a href="{{ route('checkout') }}" class="btn btn-secondary btn-lg" style="background: #607d8b !important;border-radius: 10px !important;">Continuar <i class="fas fa-arrow-right" style="font-size: 20px; color: #fff"></i></a>
                    <a href="{{ route('usProducts') }}" class="text-decoration-none p-2 text-center" style="background-color: #dfdcde;color: #515151;border-radius: 10px;">
                        Ver todos nuestros productos
                    </a>
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
                    <div class="col-3">
                        <div>
                            <div style="background-color: #fff; height: 180px; width: 180px; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                <div>
                                    <img src="{{ asset('/images/Vidrio-Corrugado-1-e1617942772277.png') }}" width="180" height="180" alt="">
                                </div>
                            </div>
                            <span>$
                                <span>489,000.00</span>
                            </span>
                            <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Vidrio Corrugado</h2>
                        </div>
                    </div>
    
                    <div class="col-3">
                        <div>
                            <div style="background-color: #fff; height: 180px; width: 180px; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                <div>
                                    <img src="{{ asset('/images/AZUL-JASPEADO-e1617942876146.png') }}" width="180" height="180" alt="">
                                </div>
                            </div>
                            <span>$
                                <span>375,000.00</span>
                            </span>
                            <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Peltre - Azul Jaspeado</h2>
                        </div>
                    </div>

                    <div class="col-3">
                        <div>
                            <div style="background-color: #fff; height: 180px; width: 180px; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                <div>
                                    <img src="{{ asset('/images/Turquesa-e1617942161513.png') }}" width="180" height="180" alt="">
                                </div>
                            </div>
                            <span>$
                                <span>375,000.00</span>
                            </span>
                            <h2 style="font-size: 0.8rem !important; color: #666;">Unidad Peltre - Azul Turquesa</h2>
                        </div>
                    </div>

                    <div class="col-3">
                        <div>
                            <div style="background-color: #fff; height: 180px; width: 180px; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                <div>
                                    <img src="{{ asset('/images/Plastico-1-e1617942847158.png') }}" width="180" height="180" alt="">
                                </div>
                            </div>
                            <span>$
                                <span>165,900.00</span>
                            </span>
                            <h2 style="font-size: 0.8rem !important; color: #666;">Unidad plastica - Blanco</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
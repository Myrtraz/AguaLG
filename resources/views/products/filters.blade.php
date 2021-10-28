@extends('layouts.app')
@section('title', 'Filtros | Agualogic')
@section('background')
@section('body')
    <section class="py-4 d-block d-sm-block d-md-none">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
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
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
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
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

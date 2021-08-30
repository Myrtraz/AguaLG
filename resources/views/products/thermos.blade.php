@extends('layouts.app')
@section('title', 'Termos | Agualogic')
@section('background')
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($thermos as $thermo)
                            <div class="col-4" style="width: 33.3%">
                                <a href="{{ route('getProduct', ['name' => $thermo->name]) }}"
                                    class="text-decoration-none">
                                    <div>
                                        <div
                                            style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                            <div>
                                                <img src="{{ $thermo->cover }}" width="100%" height="40%" alt="">
                                            </div>
                                        </div>
                                        <span
                                            style="font-size: 0.8rem !important; color: #666;">${{ $thermo->price }}</span>
                                        <h2 style="font-size: 0.8rem !important; color: #666;">{{ $thermo->name }}</h2>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

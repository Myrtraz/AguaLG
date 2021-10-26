@extends('layouts.adminPanel')
@section('body')
    <style>
        @media (min-width: 768px) {
            .column {
                width: 100%;
            }
        }

    </style>
    <!-- SmartPhone -->
    <section class="py-4 d-block d-sm-block d-md-none">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="https://i.imgur.com/Q4RUMPt.png" height="80" alt="" class="">
            </div>
            <form action="{{ route('loggedIn') }}" method="POST" class="py-4">
                @csrf
                <div class="col-md-6">
                    <label for="">Correo</label>
                    <input type="email" class="form-control column mb-2" name="email" placeholder="Correo"
                        value="{{ old('email') }}">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control column" name="password" placeholder="Contraseña">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success float-right">Acceder</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Desktop -->
    <section class="py-4 d-none d-sm-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <img src="https://i.imgur.com/Q4RUMPt.png" height="80" alt="" class="">
                    </div>
                    <form action="{{ route('loggedIn') }}" method="POST" class="py-4">
                        @csrf
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <label for="">Correo</label>
                                <input type="email" class="form-control mb-2" name="email" placeholder="Correo"
                                    value="{{ old('email') }}">

                                <label for="">Contraseña</label>
                                <input type="password" class="form-control mb-3" name="password" placeholder="Contraseña">
                                <button type="submit" class="btn btn-success float-right">Acceder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

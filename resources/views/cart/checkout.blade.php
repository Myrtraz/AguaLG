@extends('layouts.app')
@section('title', "Checkout | Agualogic")
@section('background')
@section('body')
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

    /* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-0 m-0" style="background-color: #edbb17">
                    <span>Ten en cuenta antes de realizar tu compra que nuestra operación continúa de manera normal en Bogotá, ciudades principales del país y algunos municipios aledaños a estas locaciones.</span>
                    <span>Si necesitas validar cobertura y costo de envío cercanos a tu localización, puedes comunicarte a los teléfonos 320 444 1550 – 350 446 6093 – 300 258 9820 – 302 286 8697.</span>
                    <span>Agradecemos de antemano tu comprensión y confianza en nuestros productos.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Cedula <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="document">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label>Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="col-6">
                            <label>Apellido <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Company name <span>(optional)</span></label>
                    <input type="text" class="form-control" name="company_name">
                </div>

                <div class="form-group">
                    <label>Street address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="street">
                </div>

                <div class="form-group">
                    <label>State / County <span class="text-danger">*</span></label>
                    <select name="state" id="state" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Town / City <span class="text-danger">*</span></label>
                    <select name="city" id="city" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Phone <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="telephone">
                </div>
                
                <div class="form-group">
                    <label>Email address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

            <div class="col-6">
                <div class="" style="border: 1px solid rgba(0,0,0,.1)">
                    <div class="p-2 m-2" >
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <div class="" style="background-color: #fff; width: 90px; height: 90px;border-radius: 25px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important;">
                                        <img src="{{ asset('/images/Vidrio-Corrugado-1-e1617942772277.png') }}" width="80" height="80" style="border-radius: 25px;" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <span>Unidad Peltre - Azul Jaspeado</span><br>
                                    <span>$375,001 X1</span><br>
                                    <span class="text-muted">$375,001</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="border-top: 1px solid rgba(0,0,0,.1); border-bottom: 1px solid rgba(0,0,0,.1); ">
                            <div class="row">
                                <div class="col-3">
                                    <p>
                                        <b>Subtotal</b>
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="mx-3">
                                        <b> <span>$</span>375,001 X1 </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 1px solid rgba(0,0,0,.1);">
                            <div class="row">
                                <div class="col-3">
                                    <p>
                                        <b>Shipping</b>
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="mx-3" style="font-weight: 600">
                                        4-8 Días Hábiles
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <p>
                                        <b>Total</b>
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="mx-3">
                                        <b> <span>$</span>375,001 </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                        I have read and agree to the website terms and conditions <span class="text-danger">*</span>
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <a href="{{ route('checkout') }}" class="btn btn-secondary btn-lg" style="background: #607d8b !important;border-radius: 10px !important;">Ir a Pagar <i class="fas fa-arrow-right" style="font-size: 20px; color: #fff"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
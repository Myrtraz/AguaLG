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

    .input-form {
        border: 2px solid #607d8b !important;
        border-radius: 10px !important;
        height: 2.2rem !important;
        font-size: 1.1rem !important;
        outline: none !important;
    }
</style>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: #edbb17; padding: 0px; margin: 0px;">
                    <span style="">Ten en cuenta antes de realizar tu compra que nuestra operación continúa de manera normal en Bogotá, ciudades principales del país y algunos municipios aledaños a estas locaciones.</span>
                    <span style="">Si necesitas validar cobertura y costo de envío cercanos a tu localización, puedes comunicarte a los teléfonos 320 444 1550 – 350 446 6093 – 300 258 9820 – 302 286 8697.</span>
                    <span style="">Agradecemos de antemano tu comprensión y confianza en nuestros productos.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-3">
    <div class="container">
        <div class="row">
            <form action="{{ route('create', compact('uid', 'pid')) }}" method="POST">
                @csrf
                
                <div class="col-12">
                    <div class="form-group">
                        <label>Cedula <span class="text-danger">*</span></label>
                        <input type="number" class="form-control input-form" name="document">
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-form" name="first_name">
                            </div>
    
                            <div class="col-6">
                                <label>Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control input-form" name="last_name">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label>Company name <span>(optional)</span></label>
                        <input type="text" class="form-control input-form" name="company_name">
                    </div>
    
                    <div class="form-group">
                        <label>Street address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control input-form" name="street_address">
                    </div>
    
                    <div class="form-group">
                        <label>State / County <span class="text-danger">*</span></label>
                        <select name="country" id="country" class="form-control input-form">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Town / City <span class="text-danger">*</span></label>
                        <select name="city" id="city" class="form-control input-form">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label>Phone <span class="text-danger">*</span></label>
                        <input type="number" class="form-control input-form" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label>Email address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control input-form" name="email">
                    </div>
                </div>
    
                <div class="col-12">
                    <div class="" style="border: 1px solid rgba(0,0,0,.1)">
                        <div class="p-2 m-2" >
                            @foreach ($checkouts as $checkout)
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="" style="background-color: #fff; width: 70px;border-radius: 25px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important;">
                                            <img src="{{ $checkout->product_cover }}" width="100%" style="border-radius: 25px;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="mx-3">
                                            <span class="mx-1">{{ $checkout->product_name }}</span><br>
                                            <span class="mx-1">${{ $checkout->product_price }} X{{ $checkout->product_qty}}</span><br>
                                            <span class="text-muted mx-1">${{ $checkout->product_price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group" style="border-top: 1px solid rgba(0,0,0,.1); border-bottom: 1px solid rgba(0,0,0,.1); ">
                                <div class="row">
                                    <div class="col-3">
                                        <p>
                                            <b>Subtotal</b>
                                        </p>
                                    </div>
                                    <div class="col-9">
                                        <p class="mx-4">
                                          <span class="text-center" style="font-weight: 600">${{ $subtotal }}</span>
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
                                        <p class="text-center mx-4" style="font-weight: 600">
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
                                        <p class="mx-3 text-center" style="font-weight: 600">
                                            <span>${{ $subtotal }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-check py-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" style="color: #607d8b !important; font-size: 1.2rem">  
                            I have read and agree to the website <a href="#" style="color: #479ad5;">terms and conditions</a> <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-secondary btn-lg" style="background: #607d8b !important;border-radius: 10px !important;">Ir a Pagar <i class="fas fa-arrow-right" style="font-size: 20px; color: #fff"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
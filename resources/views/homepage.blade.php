@extends('layouts.app')
@section('title')
@section('background')
@section('body')
<section class="py-4 d-block d-sm-block d-md-none">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <img src="images\fotos-ambientadas-agualogic.jpg" width="100%" height="100%" alt="">
                    </div>
                
                    <div style="row">
                            <a href="https://wa.me/573022868697" class="text-decoration-none text-dark" style="">
                                <i class="fab fa-whatsapp" style="font-size: 32px;"></i>
                            </a>
                            <a href="https://www.instagram.com/agualogicfiltro/" class="text-decoration-none text-dark">
                                <i class="fab fa-instagram" style="font-size: 32px;"></i>
                            </a>
                            <a href="https://www.facebook.com/Agualogicfiltro/" class="text-decoration-none text-dark">
                                <i class="fab fa-facebook" style="font-size: 32px;"></i>
                            </a>                    
    
                        <div class="float-end">
                            <a href="{{ route('usProducts') }}" class="btn" style="background: #479ad5;color: white;padding: .5rem; border-radius: 10px; text-decoration: none;  margin: 0.5rem 0;">
                                Ver todos nuestros filtros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-2">
            <h2 style="font-size: 1.2rem; text-align: center">Protege tu salud y la de tu familia</h2>
            <h2 style="font-size: 1.8rem; color: #ea7d68; text-align: center;">tomando agua pura y segura</h2>
        </div>
    </section>
    <section>
        <div style="background-color: #607d8b">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-2"></div>
                        <div class="py-2">
                            <a href="{{ route('filters') }}" class="text-decoration-none">
                                <div class="card" style="border-radius: 25px">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="images/filtro_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                        </div>
                                        <div class="col-6">
                                            <div class="card-text py-2">
                                                <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Filtros</h4>
                                                <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
    
                        <div class="py-1">
                            <a href="{{ route('accesories') }}" class="text-decoration-none">
                                <div class="card" style="border-radius: 25px">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="images/mesa_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                        </div>
                                        <div class="col-6">
                                            <div class="card-text py-2">
                                                <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Accesorios</h4>
                                                <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
    
                        <div class="py-2">
                            <a href="{{ route('thermos') }}" class="text-decoration-none">
                                <div class="card" style="border-radius: 25px">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="images/termo_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                        </div>
                                        <div class="col-6">
                                            <div class="card-text py-2">
                                                <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Termos</h4>
                                                <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="py-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-3">
                        <div class="text-center">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uj43MIlYtAo?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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
                    <h5 class="mb-4">Más vendidos</h5>
                    <div class="row">
                        @foreach ($filters as $filter)
                        <div class="col-3" style="width: 50%">
                            <a href="{{ route('getProduct', ['name' => $filter->name ]) }}" class="text-decoration-none">
                                <div>
                                    <div
                                        style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                        <div>
                                            <img src="{{ $filter->cover  }}"
                                                width="100%" height="40%" alt="">
                                        </div>
                                    </div>
                                    <span style="font-size: 0.8rem !important; color: #666;">${{ $filter->price  }}</span>
                                    <h2 style="font-size: 0.8rem !important; color: #666;">{{ $filter->name  }}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 1.2rem; text-align: center;"><b>Filtro cerámico seguro y</b></p>
                    <p style="font-size: 1.2rem; text-align: center;"><b>confiable, utilizado en más de</b></p>
                    <p style="font-size: 1.8rem;color: #ea7d68;text-align: center;">50 países alrededor del mundo</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div style="background-color: #cccccc !important">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2 style="font-size: 1.6em; text-align: center;">¿Quieres ser distribuidor?</h2>
    
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-dark">
                                Saber más
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="py-4 d-none d-sm-none d-md-block">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <img src="images\fotos-ambientadas-agualogic.jpg" class="card-img-top" alt="">
                    </div>
                
                    <div style="row">
                            <a href="https://wa.me/573022868697" class="text-decoration-none text-dark" style="">
                                <i class="fab fa-whatsapp" style="font-size: 32px;"></i>
                            </a>
                            <a href="https://www.instagram.com/agualogicfiltro/" class="text-decoration-none text-dark">
                                <i class="fab fa-instagram" style="font-size: 32px;"></i>
                            </a>
                            <a href="https://www.facebook.com/Agualogicfiltro/" class="text-decoration-none text-dark">
                                <i class="fab fa-facebook" style="font-size: 32px;"></i>
                            </a>                    
    
                        <div class="float-end">
                            <a href="{{ route('usProducts') }}" class="btn" style="background: #479ad5;color: white;padding: .5rem; border-radius: 10px; text-decoration: none;  margin: 0.5rem 0;">
                                Ver todos nuestros filtros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-2">
            <h2 style="font-size: 1.2rem; text-align: center">Protege tu salud y la de tu familia</h2>
            <h2 style="font-size: 1.8rem; color: #ea7d68; text-align: center;">tomando agua pura y segura</h2>
        </div>
    </section>
    <section>
        <div style="background-color: #607d8b">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-2"></div>
                        <div class="py-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('filters') }}" class="text-decoration-none">
                                        <div class="card" style="border-radius: 25px">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="images/filtro_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-text py-2">
                                                        <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Filtros</h4>
                                                        <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('accesories') }}" class="text-decoration-none">
                                        <div class="card" style="border-radius: 25px">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="images/mesa_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-text py-2">
                                                        <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Accesorios</h4>
                                                        <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('thermos') }}" class="text-decoration-none">
                                        <div class="card" style="border-radius: 25px">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="images/termo_reducido.jpg" width="80" height="80" class="mx-3 my-2" alt="" style="border-radius: 25px">
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-text py-2">
                                                        <h4 class="" style="font-size: 1.2em !important; font-weight: 600; color: #333; color: #607d8b;">Termos</h4>
                                                        <h3 class="" style="font-size: 1.4em !important;font-weight: 600;color: #333;font-weight: initial !important;">Encuentra tu modelo ideal</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-3">
                        <div class="text-center">
                            <iframe width="1000" height="500" src="https://www.youtube.com/embed/uj43MIlYtAo?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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
                    <h5 class="mb-4">Más vendidos</h5>
                    <div class="row">
                        @foreach ($filters as $filter)
                            <div class="col-3">
                                <a href="{{ route('getProduct', ['name' => $filter->name ]) }}" class="text-decoration-none">
                                    <div>
                                        <div
                                            style="background-color: #fff; height: 30%; width: 100%; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                            <div>
                                                <img src="{{ $filter->cover }}"
                                                    width="100%" height="40%" alt="">
                                            </div>
                                        </div>
                                        <span style="font-size: 0.8rem !important; color: #666;">${{ $filter->price }}</span>
                                        <h2 style="font-size: 0.8rem !important; color: #666;">{{ $filter->name }}</h2>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 1.2rem; text-align: center;"><b>Filtro cerámico seguro y</b></p>
                    <p style="font-size: 1.2rem; text-align: center;"><b>confiable, utilizado en más de</b></p>
                    <p style="font-size: 1.8rem;color: #ea7d68;text-align: center;">50 países alrededor del mundo</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div style="background-color: #cccccc !important">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4">
                        <h2 style="font-size: 1.6em; text-align: center;">¿Quieres ser distribuidor?</h2>
    
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-dark">
                                Saber más
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
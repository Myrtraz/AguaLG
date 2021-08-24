@extends('layouts.app')
@section('title', 'Productos | Agualogic')
@section('background')
@section('body')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-4 py-2">
                        <a href="{{ route('getProduct', ['name' => $product->name]) }}" class="text-decoration-none">
                            <div style="background-color: #fff; height: 300px; width: 300px; border-radius: 20px; box-shadow: 0px 2px 5px rgb(0 0 0 / 26%) !important">
                                <div>
                                    <img src="{{ $product->cover }}" width="300" height="300" alt="">
                                </div>
                            </div>
                            <span class="text-dark" style="font-size: 1.4rem !important;">
                                $<span class="text-dark">{{ $product->price }}</span>
                            </span>
                            <h2 style="font-size: 0.8rem !important; color: #666;">{{ $product->name }}</h2>
                        </a>
                    </div>
                @endforeach

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {!! $products->links() !!}
                    </ul>
                  </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layout.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <main class="py-5 home">
        <div class="container">
            <h1 class="mb-4">Akcie</h1>
            <div class="row">
                @foreach($products as $product)
                <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                    <a class="product-link" href="/products/{{$product->id}}">
                        <picture>
                            {{-- {{$a = (array_key_exists('images',$product['item'])) ? 'true' : 'false'}} --}}
                            {{-- {{dd(count($product->images))}} --}}
                            <source media="(max-width:480px)" srcset="{{ asset('storage/productsimages/images150/'.(count($product->images) ? $product->images[0]->file : 'placeholder.jpeg'))}}">
                            <img src="{{ asset('storage/productsimages/images200/'.(count($product->images) ? $product->images[0]->file : 'placeholder.jpeg'))}}" alt="Iphone">
                        </picture>
                        <p class="product-name">{{$product->name}}</p>
                        <p class="price">{{$product->price}}€</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection

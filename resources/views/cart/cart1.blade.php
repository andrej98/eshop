@extends('layout.app')

@section('content')

<main class="py-5 cart-1">
    <div class="container-xl">
        <h1>Nákupný košík</h1>
        @include('layout.partials.cart-steps')


        <div class="row">
            <h2 class="col-12 my-3">Položky v košíku</h2>
        </div>

        @if(Session::has('cart') && Session::get('cart')->quantity)

            @foreach($products as $product)
            {{-- {{dd($product['item']->images[0])}} --}}

                <div class="row align-items-center">
                    <div class="col-sm-6 d-flex flex-row align-items-center">
                        <img src="{{asset('storage/productsimages/images100/'.(count($product['item']->images) ? $product['item']->images[0]->file : 'placeholder.jpeg'))}}" alt="">
                    <a href="/products/{{$product['item']->id}}" class="product-name mx-2">{{$product['item']->name}}</a>
                    </div>
                    <div class="col-sm-6">
                        <div class="row align-items-center">
                            <div class="col-7 col-lg-9">
                                <div class="amount d-flex flex-row align-items-center">
                                <form class="amount-form" method="post" action="{{route('cart.add', ['id' => $product['item']->id ]) }}">
                                    @csrf
                                    {{-- <a href="javascript:void(0)"> --}}
                                        <button class="hide" type="submit" name="button" value="remove"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-minus remove" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                                <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                                </svg></button>
                                    {{-- </a> --}}
                                    <input class="form-control my-3" type="number" name="show" aria-label="Počet" value="{{$product['qty']}}" disabled>
                                    <input type="hidden" name="amount" aria-label="Počet" value="1" disabled>
                                    {{-- <a href="{{route('cart.add', ['id' => $product['item']->id ]) }}"> --}}
                                        <button class="hide" type="submit" name="button" value="add"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-plus add" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                                                </svg></button>
                                    {{-- </a> --}}
                                    <button class="hide" type="submit" name="button" value="delete">
                                        <svg class="ml-3" width="2em" height="2em" viewBox="0 0 16 16" fill="#be3144" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                          </svg>
                                    </button>
                                </form>

                                </div>
                            </div>
                            <div class="col-5 col-lg-3">
                            <p class="my-0"><strong class="single-price">{{number_format((float)$product['price'], 2, '.', '')}}€</strong><wbr></p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="clearfix w-100">
            @endforeach



            <div class="row align-items-center">
                <div class="col-3">
                    <p><strong>Spolu:</strong></p>
                </div>
                <div class="col-9 text-right">
                <p><strong class="single-price">{{number_format((float)$totalPrice, 2, '.', '')}}€</strong><wbr> s DPH</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="/" class="btn btn-outline-light m-2 btn-back btn-lg">Späť</a>
                <a href="{{route('cart2')}}" class="btn btn-outline-light m-2 btn-next btn-lg">Pokračovať</a>
            </div>
        @else
            <p>V nákupnom košíku nemáte zatiaľ žiadne položky.</p>

            <div class="row justify-content-center">
                <a href="/" class="btn btn-outline-light m-2 btn-next btn-lg">Nakupovať</a>
            </div>
        @endif



    </div>
</main>

@endsection

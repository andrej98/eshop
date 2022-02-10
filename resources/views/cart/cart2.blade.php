@extends('layout.app')

@section('content')

<main class="py-5 cart-2">
    <div class="container-xl">
        <h1>Nákupný košík</h1>
        @include('layout.partials.cart-steps')


        <div class="row">
            <h2 class="col-12 my-3">Doprava a platba</h2>
        </div>

        <div>
            <form id="form" action="{{ route('cart.delivery.payment')}}" method="post">
                @csrf
                <fieldset>
                    <div class="row">
                        <legend class="col-12 mb-3">Vyberte spôsob dopravy:</legend>

                        @foreach($deliveries as $delivery)
                            <label for="{{$delivery->name}}" class="col-10 d-flex flex-row align-items-center font-weight-bold">
                                <img src="{{asset('storage/'.$delivery->icon)}}" alt="">
                                <p class="m-0 p-0 mx-2">{{$delivery->name . ' ('.$delivery->price . '€)'}}</p>
                            </label>
                            <input class="col-2" type="radio" id="{{$delivery->name}}" name="doprava" value="{{$delivery->name}}" required {{ (Session::has('delivery') && Session::get('delivery')->name == $delivery->name) ? 'checked' : '' }}>
                            <hr class="clearfix w-100">

                        @endforeach
                    </div>
                </fieldset>

                <fieldset>
                    <div class="row">
                        <legend class="col-12 mb-3">Vyberte spôsob platby:</legend>
                        @foreach($payments as $payment)
                            <label for="{{$payment->name}}" class="col-10 d-flex flex-row align-items-center font-weight-bold">
                                <img src="{{asset('storage/'.$payment->icon)}}" alt="">
                                <p class="m-0 p-0 mx-2">{{$payment->name . ' ('.$payment->price . '€)'}}</p>
                            </label>
                        <input class="col-2" type="radio" id="{{$payment->name}}" name="platba" value="{{$payment->name}}" required {{ (Session::has('payment') && Session::get('payment')->name == $payment->name) ? 'checked' : '' }}>
                        <hr class="clearfix w-100">

                        @endforeach

                    </div>
                </fieldset>
            </form>
        </div>

        <div class="row align-items-center">
            <div class="col-3">
                <p><strong>Spolu:</strong></p>
            </div>
            <div class="col-9 text-right">
                <p><strong class="single-price">{{$totalPrice + $pPrice + $dPrice}}€</strong><wbr> s DPH</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <a href="{{route('cart1')}}" class="btn btn-outline-light m-2 btn-back btn-lg">Späť</a>
            <a href="{{route('cart3')}}" class="btn btn-outline-light m-2 btn-next btn-lg">Pokračovať</a>
        </div>

    </div>
</main>


@endsection

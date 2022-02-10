@extends('layout.app')

@section('content')

<main class="py-5 cart-1">
    <div class="container-xl">
        <h1>Ďakujeme za Váš nákup!</h1>

        <div class="row">
            <h2 class="col-12 my-3">Prehľad objednávky:</h2>
        </div>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Názov</th>
                    <th scope="col">Počet kusov</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="/products/{{$product['item']->id}}" class="product-name">{{$product['item']->name}}</a></td>
                    <td><p>Počet kusov: {{$product['qty']}}</p></td>
                    <td>
                        {{number_format((float)$product['price'], 2, '.', '')}}€
                    </td>
                </tr>
            @endforeach
                <tr>
                    <td>{{$delivery->name}}</td>
                    <td></td>
                    <td>{{number_format((float)$delivery->price, 2, '.', '')}}€</td>
                </tr>
                <tr>
                    <td>{{$payment->name}}</td>
                    <td></td>
                    <td>{{number_format((float)$payment->price, 2, '.', '')}}€</td>
                </tr>
                <tr>
                    <td><strong>Zaplatiť:</strong></td>
                    <td></td>
                    <td><strong class="single-price">{{number_format((float)$order->total, 2, '.', '')}}€</strong><wbr> s DPH</td>
                </tr>
            </tbody>
        </table>


        <div class="row justify-content-center">
            <a href="/" class="btn btn-outline-light m-2 btn-next btn-lg">Domov</a>
        </div>

    </div>
</main>

@endsection

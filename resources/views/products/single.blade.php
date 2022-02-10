@extends('layout.app')

@section('content')

<main class="py-5 single">
    <div class="container-xl">
    <h1 class="mb-4">{{ $product->name }}</h1>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    {{-- <ol class="carousel-indicators">
                        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                        </ol> --}}
                    <div class="carousel-inner">
                        @if(count($images) > 0 )
                            @foreach($images as $image)
]                                <div class="carousel-item {{ ($loop->index == 0) ? 'active' : '' }} ">
                                    <img src="{{asset('storage/productsimages/images500/'.$image->file)}}" class="d-block w-100" alt="">
                                </div>
                            @endforeach
                            @if(count($images) > 1)
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            @endif
                        @else
                            <div class="carousel-item active">
                                <img src="{{asset('storage/productsimages/images500/placeholder.jpeg')}}" class="d-block w-100" alt="">
                            </div>
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="product-description">
                    <h3 class="mt-2 mt-md-0">Popis:</h3>
                    <p>
                        {{ $product->description }}
                    </p>
                </div>

                <div class="row">

                    <div class="col-6">
                        <h4>Množstvo:</h4>
                    <form class="my-2 my-lg-0" method="post" action="{{ route('cart.add', ['id' => $product->id]) }}">
                        @csrf
                            <div class="amount d-flex flex-row align-items-center"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-minus minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                              </svg>
                                <input class="form-control my-3" name="amount" value="1" type="number" min="1" max="99" aria-label="Počet">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-plus plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                              </svg></div>
                            <button type="submit" class="btn btn-outline-light my-2 btn-next">Pridať do košíka</button>
                        </form>
                    </div>

                    <div class="col-6">
                        <h4>Cena:</h4>
                    <p><strong class="single-price">{{ $product->price}}€</strong><wbr> s DPH</p>
                        <p>{{number_format((float)$product->price * 0.8, 2, '.', '')}}€ bez DPH</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    {{-- <div class="row mt-5"></div>
    <div class="container-xl">
        <h2 class="mb-4">Podobné produkty</h2>
        <div class="row">
            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="./single-product.html">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/Iphone-150.jpg">
                        <img src="./img/Iphone-200.jpg" alt="Iphone">
                    </picture>
                    <p class="product-name">Apple iPhone 6S 64GB SILVER GREY ORIGINAL NEW</p>
                    <p class="price">699.99€</p>
                </a>
            </div>

            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="#">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/samsung-150.jpg">
                        <img src="./img/samsung-200.jpg" alt="Samsung">
                    </picture>
                    <p class="product-name">Samsung Galaxy S7 edge </p>
                    <p class="price">699.99€</p>
                </a>
            </div>

            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="#">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/lenovo-150.png">
                        <img src="./img/lenovo-200.png" alt="Lenovo">
                    </picture>
                    <p class="product-name">Lenovo A6 Note black</p>
                    <p class="price">699.99€</p>
                </a>
            </div>

            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="#">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/samsung2-150.jpg">
                        <img src="./img/samsung2-200.jpg" alt="Samsung">
                    </picture>
                    <p class="product-name">Samsung Galaxy Star Advance</p>
                    <p class="price">699.99€</p>
                </a>
            </div>

            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="#">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/xiaomi-150.jpg">
                        <img src="./img/xiaomi-200.jpg" alt="Xiaomi">
                    </picture>
                    <p class="product-name">Xiaomi Mi 9 6GB/128GB Dual Sim</p>
                    <p class="price">699.99€</p>
                </a>
            </div>

            <div class="product col-6 col-md-4 col-lg-2 mr-lg-5 mr-xl-4">
                <a class="product-link" href="#">
                    <picture>
                        <source media="(max-width:480px)" srcset="./img/Xiaomi2-150.jpg">
                        <img src="./img/xiaomi2-200.jpg" alt="Xiaomi">
                    </picture>
                    <p class="product-name">Xiaomi Mi 9T Pro 8GB RAM</p>
                    <p class="price">699.99€</p>
                </a>
            </div> --}}
        </div>
    </div>
</main>

@endsection

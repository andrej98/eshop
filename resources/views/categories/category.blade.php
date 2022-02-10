@extends('layout.app')

@section('content')
    <main class="py-5 category ">

        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-10 d-sm-none">
                    <button class="w-100 btn-next btn-outline-light my-2 btn" data-toggle="collapse" data-target="#product-filter">
                        Zobraziť filter
                    </button>
                </div>

                <div id="product-filter" class="col-sm-3 col-lg-2 border-right border-left d-sm-flex collapse">
                    <form id="filter" method="get" action='{{route('category',['id'=>request('id')])}}'>
                        <h4>Filter</h4>
                        <fieldset>
                            <legend>Cena</legend>
                            <label for="lowest-price">od</label>
                            <input type="number" name="price0" id="lowest-price" class="w-50" min="0" value="{{request()->has('price0') ? request()->price0 : ''}}"><br>
                            <label for="highest-price">do</label>
                            <input type="number" name="price1" id="highest-price" class="w-50" min="1" value="{{request()->has('price1') ? request()->price1 : ''}}">
                        </fieldset>
                        <fieldset>
                            <legend>Značka</legend>
                            <input type="checkbox" name="brand[]" id="apple" value="Apple" {{(request()->has('brand') && in_array("Apple",request('brand'))) ? 'checked' : ''}}>
                            <label for="apple">Apple</label><br>
                            <input type="checkbox" name="brand[]" id="samsung" value="Samsung" {{(request()->has('brand') && in_array("Samsung",request('brand'))) ? 'checked' : ''}}>
                            <label for="samsung">Samsung</label><br>
                            <input type="checkbox" name="brand[]" id="Lenovo" value="Lenovo" {{(request()->has('brand') && in_array("Lenovo",request('brand'))) ? 'checked' : ''}}>
                            <label for="Lenovo">Lenovo</label><br>
                            <input type="checkbox" name="brand[]" id="long" value="Land Rover" {{(request()->has('brand') && in_array("Land Rover",request('brand'))) ? 'checked' : ''}}>
                            <label for="long">Land Rover</label><br>
                            <input type="checkbox" name="brand[]" id="Xiaomi" value="Xiaomi" {{(request()->has('brand') && in_array("Xiaomi",request('brand'))) ? 'checked' : ''}}>
                            <label for="Xiaomi">Xiaomi</label><br>
                            <input type="checkbox" name="brand[]" id="lg" value="LG" {{(request()->has('brand') && in_array("LG",request('brand'))) ? 'checked' : ''}}>
                            <label for="lg">LG</label><br>
                        </fieldset>

                        <fieldset>
                            <legend>Farba</legend>
                            <input type="checkbox" name="color[]" id="color1" value="Biela" {{(request()->has('color') && in_array("Biela",request('color'))) ? 'checked' : ''}}>
                            <label for="color1">Biela</label><br>
                            <input type="checkbox" name="color[]" id="color2" value="Čierna" {{(request()->has('color') && in_array("Čierna",request('color'))) ? 'checked' : ''}}>
                            <label for="color">Čierna</label><br>
                            <input type="checkbox" name="color[]" id="color3" value="Sivá" {{(request()->has('color') && in_array("Sivá",request('color'))) ? 'checked' : ''}}>
                            <label for="color3">Sivá</label><br>
                            <input type="checkbox" name="color[]" id="color4" value="Modrá" {{(request()->has('color') && in_array("Modrá",request('color'))) ? 'checked' : ''}}>
                            <label for="color4">Modrá</label><br>
                            <input type="checkbox" id="color5" name="color[]" value="Červená" {{(request()->has('color') && in_array("Červená",request('color'))) ? 'checked' : ''}}>
                            <label for="color5">Červená</label><br>
                        </fieldset>

                        <button type="submit" class="w-100 btn-next btn-outline-light my-2 btn">Filtrovať</button>
                        <a href="{{route('category',['id'=>request('id')])}}" class="w-100 btn-back btn-outline-light my-2 btn">Zrušiť filter</a>
                    </form>
                </div>

                <div class="col-sm-9 col-lg-10">
                    <h1 class="mb-4">
                        @if (request('id') == 1)
                            Mobilné telefóny
                        @elseif (request('id') == 2)
                            Notebooky
                        @else
                            Príslušenstvo
                        @endif
                    </h1>

                    <div class="row mx-2">
                        <nav id="order" class="w-100 text-center">
                            <ul class="pagination">
                                <li class="page-item w-100"><a class="page-link {{(request()->order=='alp' || !request()->has('order')) ? 'active' : ''}}"
                                                               href="{{route('category',['id'=>request('id'),'price0'=>request('price0'), 'price1'=>request('price1'), 'brand'=>request('brand'), 'color'=>request('color'), 'order'=>'alp'])}}">Abecedne</a></li>
                                <li class="page-item w-100"><a class="page-link  {{(request()->order=='asc') ? 'active' : ''}}"
                                                               href="{{route('category',['id'=>request('id'),'price0'=>request('price0'), 'price1'=>request('price1'), 'brand'=>request('brand'), 'color'=>request('color'), 'order'=>'asc'])}}">Najlacnejšie</a></li>
                                <li class="page-item w-100"><a class="page-link {{(request()->order=='desc') ? 'active' : ''}}"
                                                               href="{{route('category',['id'=>request('id'),'price0'=>request('price0'), 'price1'=>request('price1'), 'brand'=>request('brand'), 'color'=>request('color'), 'order'=>'desc'])}}">Najdrahšie</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="row">
                        @foreach($products as $product)
                        <div class="product col-6 col-md-4 col-lg-3 col-xl-2 mr-md-5">
                            <a class="product-link" href="../products/{{$product->id}}">
                                <picture>
                                    <source media="(max-width:480px)" srcset="{{ asset('storage/productsimages/images150/'.(count($product->images) ? $product->images[0]->file : 'placeholder.jpeg'))}}">
                                    <img src="{{ asset('storage/productsimages/images200/'.(count($product->images) ? $product->images[0]->file : 'placeholder.jpeg'))}}" alt="Iphone">
                                </picture>
                                <p class="product-name">{{$product->name}}</p>
                                <p class="price">{{$product->price}}€</p>
                            </a>
                        </div>

                        @endforeach
                    </div>

                    <div class="row position-absolute w-100 pag-wrapper">
                        <nav id="pagination" class="mx-auto">
                            {{$products->links()}}
                        </nav>
                    </div>


                </div>
            </div>

        </div>
    </main>
@endsection

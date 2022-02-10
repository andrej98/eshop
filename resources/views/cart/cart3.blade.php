@extends('layout.app')

@section('content')
    <main class="py-5 cart-1">
        <div class="container-xl">
            <h1>Nákupný košík</h1>
            @include('layout.partials.cart-steps')

            <div class="row">
                <h2 class="col-12 my-3">Vaše údaje</h2>
            </div>

            <div class="row">

                @guest
                    <div class="col-md-5">

                        <form class="form1" id="login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <legend>Ak už máte vytvorené konto, prihláste sa:</legend>

                                <label for="email">E-mailová adresa:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password">Heslo:</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link btn-right" href="{{ route('password.request') }}">
                                        Zabudli ste heslo?
                                    </a>
                                @endif

                                <button type="submit" class="btn btn-outline-light my-2 btn-next">Prihlásiť
                                    sa</button>
                            </fieldset>
                            <p style="text-align:right"> Ešte nie ste zaregistrovaný?
                                <a href="{{ route('register') }}">Zaregistrujte sa!</a>
                            </p>
                        </form>
                    </div>

                    <div class="col-md-7 border-left">
                        <form class="form1" id="personal-data" method="POST" action="/orders">
                            @csrf
                            <fieldset>
                                <legend>Vyplňte Vaše dodacie údaje:</legend>

                                <label for="name">Meno a priezvisko:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="email2">E-mailová adresa:</label>
                                <input id="email2" type="email" class="form-control @error('email2') is-invalid @enderror"
                                    name="email2" value="{{ old('email') }}" required autocomplete="email">

                                @error('email2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="phone">Telefón (09xxxxxxxx):</label>
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required autocomplete="phone" pattern="[0-9]{10}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="address" class="my-2">Dodacia Adresa:</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input @error('terms') is-invalid @enderror"
                                        id="terms" required name="terms">
                                    <label class="custom-control-label my-4" for="terms">
                                        Súhlasím s obchodnými podmienkami e-shopu a so spracovaním osobných údajov</label>
                                    @error('terms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </fieldset>
                        </form>

                    </div>
                @else
                    <div class="col">
                        <form class="form1" id="personal-data" method="POST" action="/orders">
                            @csrf
                            <fieldset>
                                <legend>Vyplňte Vaše dodacie údaje:</legend>

                                <label for="name">Meno a priezvisko:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="phone">Telefón (09xxxxxxxx):</label>
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" pattern="[0-9]{10}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="hidden" id="email2" class="form-control"
                                    name="email2" value="{{ Auth::user()->email }}" required>

                                <label for="address" class="my-2">Dodacia Adresa:</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                    name="address" value="{{ Auth::user()->address }}" required autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input @error('terms') is-invalid @enderror"
                                        id="terms" required name="terms">
                                    <label class="custom-control-label my-4" for="terms">
                                        Súhlasím s obchodnými podmienkami e-shopu a so spracovaním osobných údajov</label>
                                    @error('terms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </fieldset>
                        </form>

                    </div>

                @endguest

            </div>


            <hr class="clearfix w-100">

            <div class="row align-items-center">
                <div class="col-3">
                    <p><strong>K úhrade:</strong></p>
                </div>
                <div class="col-9 text-right">
                    <p><strong class="single-price">{{ $totalPrice + $pPrice + $dPrice }}€</strong><wbr> s DPH</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="{{ route('cart2') }}" class="btn btn-outline-light m-2 btn-back btn-lg">Späť</a>
                <button type="submit" class="btn btn-outline-light m-2 btn-next btn-lg"
                    form="personal-data">Pokračovať</button>
            </div>

        </div>
    </main>

@endsection

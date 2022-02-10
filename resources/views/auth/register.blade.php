@extends('layout.app')

@section('content')

    <main class="py-5 registration">
        <div class="container">
            <form class="form1" id="personal-data" method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset>
                    <h1 class="mb-4">Registrácia</h1>
                    <label for="name">Meno a priezvisko:</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="email">E-mailová adresa:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="phone">Telefón (09xxxxxxxx):</label>
                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ old('phone') }}" required autocomplete="phone" pattern="[0-9]{10}">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password" class="my-2">Heslo:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password-confirm" class="my-2">Potvrdiť heslo:</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">

                    <label for="birth_date" class="my-2">Dátum narodenia:</label>
                    <input id="birth_date" name="birth_date" class="form-control mr-sm-2 @error('birth_date') is-invalid @enderror" type="date" required value="{{ old('date') }}">
                    @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="address" class="my-2">Adresa:</label>
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input @error('terms') is-invalid @enderror" id="terms" required name="terms">
                        <label class="custom-control-label my-4" for="terms">
                            Súhlasím s obchodnými podmienkami e-shopu a so spracovaním osobných údajov</label>
                        @error('terms')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary my-4 btn-lg btn-block btn-next">Registrovať</button>
                </fieldset>
            </form>

        </div>
    </main>

@endsection

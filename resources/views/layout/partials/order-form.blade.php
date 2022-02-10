<form class="form1" id="personal-data" method="POST" action="{{ route('register') }}">
    @csrf
    <fieldset>
        <legend>Vyplňte Vaše dodacie údaje:</legend>

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

        <label for="address" class="my-2">Dodacia Adresa:</label>
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

    </fieldset>
</form>

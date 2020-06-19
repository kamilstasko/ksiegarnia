@extends('layouts.app')

@section('contentView')
    <section class="login-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="login-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            <form method="POST" class="form-content" action="{{ route('login') }}">
                                @csrf

                                <div class="form-partial">
                                    <div class="input">
                                        <label for="email" class="req">{{ __('Adres e-mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ ($errors->has('email') or $errors->has('password'))  ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required  placeholder="Adres e-mail">
                                    </div>

                                    <div class="input">
                                        <label for="password" class="req">{{ __('Hasło') }}</label>
                                        <input id="password" type="password" class="form-control{{ ($errors->has('email') or $errors->has('password')) ? ' is-invalid-input' : '' }}" name="password" required placeholder="Hasło">
                                        @if ($errors->has('email'))
                                            <span class="formError is-invalid">Niepoprawny login lub hasło</span>
                                        @endif
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">{{ __('Zapamiętaj mnie') }}</label>
                                    </div>

                                </div>

                                <div class="buttons">
                                    @if (Route::has('password.request'))
                                        <a class="forget" href="{{ route('password.request') }}">
                                            {{ __('Zapomniałem hasła') }}
                                        </a>
                                    @endif

                                    <button type="submit" class="button ttu button--no-icon blue">
                                        {{ __('Zaloguj się') }}
                                    </button>
                                </div>
                                <hr>
                                <div class="register">
                                    <a href="{{ route('register') }}" class="button ttu button--no-icon blue">
                                        {{ __('Zarejestruj się') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('contentView')
    <section class="login-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="login-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" class="form-content" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-partial">
                                    <div class="input">
                                        <label for="email" class="req">{{ __('Adres e-mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email')  ? ' is-invalid-input' : '' }}" name="email" value="{{ $email ?? old('email') }}" required  placeholder="Adres e-mail">
                                        @if ($errors->has('email'))
                                            <span class="formError is-invalid">Podany adres e-mail nie istnieje w systemie</span>
                                        @endif
                                    </div>

                                    <div class="input">
                                        <label for="password" class="req">{{ __('Hasło') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid-input' : '' }}" name="password" required placeholder="Hasło">
                                    </div>

                                    <div class="input">
                                        <label for="password-confirm" class="req">{{ __('Powtórz hasło') }}</label>
                                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid-input' : '' }}" name="password_confirmation" required placeholder="Powtórz hasło">
                                        @if ($errors->has('password'))
                                            <span class="formError is-invalid">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="buttons">
                                    <button type="submit" class="button ttu button--no-icon blue" style="width: 100%;">
                                        {{ __('Resetuj') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

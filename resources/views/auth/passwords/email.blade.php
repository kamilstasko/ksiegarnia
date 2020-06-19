@extends('layouts.app')

@section('contentView')
    <section class="login-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="login-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    Link został wysłany na Twój adres e-mail
                                </div>
                            @endif
                            <form method="POST" class="form-content" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-partial">
                                    <div class="input">
                                        <label for="email" class="req">{{ __('Adres e-mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ ($errors->has('email') or $errors->has('password'))  ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required  placeholder="Adres e-mail">
                                        @if ($errors->has('email'))
                                            <span class="formError is-invalid">Podany adres e-mail nie istnieje w systemie</span>
                                        @endif
                                    </div>
                                </div><br/>
                                <div class="buttons">
                                    <button type="submit" class="button ttu button--no-icon blue" style="width: 100%">
                                        {{ __('Przypomnij hasło') }}
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

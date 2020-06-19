@extends('layouts.app')
@section('contentView')
    <section class="account-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="account-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            <form class="form-content">
                                <div class="form-partial">
                                    <div class="input">
                                        <label for="name" class="req">{{ __('Imię') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid-input' : '' }}" name="name" value="{{ Auth::user()->name }}" disabled required  placeholder="Imię">
                                    </div>
                                    <div class="input">
                                        <label for="surname" class="req">{{ __('Nazwisko') }}</label>
                                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid-input' : '' }}" name="surname" value="{{ Auth::user()->surname }}" disabled required  placeholder="Nazwisko">
                                    </div>
                                    <div class="input">
                                        <label for="email" class="req">
                                            {{ __('E-mail') }}
                                            @if(Auth::user()->email_verified_at == NULL)
                                                <b style="color: red;">{{ __(' - nie zweryfikowano') }}</b>
                                            @endif
                                        </label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid-input' : '' }}" name="email" value="{{ Auth::user()->email }}" disabled required  placeholder="E-mail">
                                    </div>
                                    @if (session('resent'))
                                        <p><strong>
                                                {{ __('Nowy link weryfikacyjny został wysłany.') }}
                                            </strong></p>
                                    @elseif(Auth::user()->email_verified_at == NULL)
                                        <div class="verify_button">
                                            <a href="{{ route('verification.resend') }}" class="button ttu button--no-icon blue">
                                                {{ __('Zweryfukuj') }}
                                            </a>
                                        </div>
                                    @endif
                                    <div class="input">
                                        <label for="address" class="req">{{ __('Adres') }}</label>
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid-input' : '' }}" name="address" value="{{ Auth::user()->address }}" disabled required  placeholder="Adres">
                                    </div>
                                    <div class="input">
                                        <label for="code" class="req">{{ __('Kod pocztowy') }}</label>
                                        <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid-input' : '' }}" name="code" value="{{ Auth::user()->code }}" disabled required  placeholder="Kod pocztowy">
                                    </div>
                                    <div class="input">
                                        <label for="locality" class="req">{{ __('Miejscowość') }}</label>
                                        <input id="locality" type="text" class="form-control{{ $errors->has('locality') ? ' is-invalid-input' : '' }}" name="locality" value="{{ Auth::user()->locality }}" disabled required  placeholder="Miejscowość">
                                    </div>
                                    <div class="input">
                                        <label for="phone" class="req">{{ __('Telefon') }}</label>
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid-input' : '' }}" name="phone" value="{{ Auth::user()->phone }}" disabled required  placeholder="Telefon">
                                    </div>
                                </div>
                                <div class="verify_button">
                                    <a href="{{ url('client/edit') }}" class="button ttu button--no-icon blue">
                                        {{ __('Edytuj dane') }}
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
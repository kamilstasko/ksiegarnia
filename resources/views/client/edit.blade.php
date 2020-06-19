@extends('layouts.app')
@section('contentView')
    <section class="account-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="account-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            <form method="POST" class="form-content" action="{{ route('client.edit') }}">
                                @csrf

                                <div class="form-partial">
                                    <div class="input">
                                        <label for="name" class="req">{{ __('Imię') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid-input' : '' }}" name="name" value="{{ old('name') ?? Auth::user()->name }}" required  placeholder="Imię">
                                        @if ($errors->has('name'))
                                            <span class="formError is-invalid">{{  $errors->first('name') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="surname" class="req">{{ __('Nazwisko') }}</label>
                                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid-input' : '' }}" name="surname" value="{{ old('surname') ?? Auth::user()->surname }}" required  placeholder="Nazwisko">
                                        @if ($errors->has('surname'))
                                            <span class="formError is-invalid">{{  $errors->first('surname') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="email" class="req">{{ __('E-mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') ?? Auth::user()->email }}" required  placeholder="E-mail">
                                        @if ($errors->has('email'))
                                            <span class="formError is-invalid">{{  $errors->first('email') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="address" class="req">{{ __('Adres') }}</label>
                                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid-input' : '' }}" name="address" value="{{ old('address') ?? Auth::user()->address }}" required  placeholder="Adres">
                                        @if ($errors->has('address'))
                                            <span class="formError is-invalid">{{  $errors->first('address') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="code" class="req">{{ __('Kod pocztowy') }}</label>
                                        <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid-input' : '' }}" name="code" value="{{ old('code') ?? Auth::user()->code }}" required  placeholder="Kod pocztowy">
                                        @if ($errors->has('code'))
                                            <span class="formError is-invalid">{{  $errors->first('code') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="locality" class="req">{{ __('Miejscowość') }}</label>
                                        <input id="locality" type="text" class="form-control{{ $errors->has('locality') ? ' is-invalid-input' : '' }}" name="locality" value="{{ old('locality') ?? Auth::user()->locality }}" required  placeholder="Miejscowość">
                                        @if ($errors->has('locality'))
                                            <span class="formError is-invalid">{{  $errors->first('locality') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="phone" class="req">{{ __('Telefon') }}</label>
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid-input' : '' }}" name="phone" value="{{ old('phone') ?? Auth::user()->phone }}" required  placeholder="Telefon">
                                        @if ($errors->has('phone'))
                                            <span class="formError is-invalid">{{  $errors->first('phone') }} </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="buttons">
                                    <button type="submit" class="button ttu button--no-icon blue">
                                        {{ __('Zapisz') }}
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
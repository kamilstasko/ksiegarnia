@extends('layouts.app')
@section('contentView')
    <section class="account-view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="account-form">
                        <div class="form-component">
                            <h2 class="heading page-title bigger">{{ $data['title'] }}</h2>
                            <form method="POST" class="form-content" action="{{ route('client.change_password') }}">
                                @csrf

                                <div class="form-partial">
                                    <div class="input">
                                        <label for="password_old" class="req">{{ __('Aktualne hasło') }}</label>
                                        <input id="password_old" type="password" class="form-control{{ $errors->has('password_old')  ? ' is-invalid-input' : '' }}" name="password_old" required  placeholder="Aktualne hasło">
                                        @if ($errors->has('password_old'))
                                            <span class="formError is-invalid">{{  $errors->first('password_old') }} </span>
                                        @endif
                                    </div>
                                    <div class="input">
                                        <label for="password" class="req">{{ __('Nowe hasło') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password')  ? ' is-invalid-input' : '' }}" name="password" required  placeholder="Nowe hasło">
                                    </div>
                                    <div class="input">
                                        <label for="password_confirmation" class="req">{{ __('Powtórz nowe hasło') }}</label>
                                        <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password')  ? ' is-invalid-input' : '' }}" name="password_confirmation" required  placeholder="Powtórz nowe hasło">
                                        @if ($errors->has('password'))
                                            <span class="formError is-invalid">{{  $errors->first('password') }} </span>
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
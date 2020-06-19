@extends('layouts.app')

@section('contentView')
    <section class="standard-page standard-page--padding racing-team">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="standard-content standard-content--invert cke-content">
                    <div class="right-content">
                        @if (session('resent'))
                            <p><strong>
                                {{ __('Nowy link weryfikacyjny został wysłany na Twój adres e-mail.') }}
                                </strong></p>
                        @endif

                        <p>{{ __('Zanim przejdziesz dalej, sprawdź pocztę e-mail pod kątem linku weryfikacyjnego.') }}</p>
                            <p>{{ __('Jeśli nie dostałeś e-maila') }}, <strong><a href="{{ route('verification.resend') }}">{{ __('kliknij tutaj, aby wysłać kolejnego') }}</a></strong>.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

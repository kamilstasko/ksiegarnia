@extends('layouts.app')

@section('contentView')
    <section class="standard-page standard-page--padding racing-team">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="standard-content standard-content--invert cke-content">
                    <div class="right-content">
                        <p>{{ $data['content'] }}</p>

                        @if (\Illuminate\Support\Facades\Auth::user()->email_verified_at == NULL)
                            <br />
                            @if (session('resent'))
                                <p><strong>{{ __('Nowy link weryfikacyjny został wysłany na Twój adres e-mail.') }}</strong></p>
                            @else
                                <p><strong>{{ __('Uwaga! Zmieniłeś adres e-mail lub Twój adres e-mail nie został jeszcze zweryfikowny!') }}</strong></p>
                            @endif

                            <p>{{ __('Zanim przejdziesz dalej, sprawdź pocztę e-mail pod kątem linku weryfikacyjnego.') }}</p>
                            <p>{{ __('Jeśli nie dostałeś e-maila') }}, <strong><a href="{{ route('verification.resend') }}">{{ __('kliknij tutaj, aby wysłać kolejnego') }}</a></strong>.</p>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

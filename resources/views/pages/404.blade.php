<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.head')

    <body>

    <div id="full-container">
        <div class="error-page" data-scale>
            <div class="error-image" data-scale-image style="background-image: url('/images/back.jpg')"></div>
            <div class="wrapper first">
                <div class="wrapper">
                    <div class="errore-page__content">
                        <div class="main-header__logotype">
                            <a href="{{ url('') }}" class="logotype"><img src="{{  url('/images/logotype.png') }}" alt="{{ config('service_name') }}"></a>
                        </div>
                        <div class="books"><img src="{{  url('/images/books_error.png') }}"></div>
                        <div class="errore__helper">
                            <div class="errore">4<span>0</span>4</div>
                            <span class="text">Podana strona nie została znaleziona.<br>Powrót do <a href="{{ url('') }}">strony głównej</a>.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.components.tail')

    </body>
</html>


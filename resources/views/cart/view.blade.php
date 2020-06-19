@extends('layouts.app')

@section('contentView')
    <section class="container">
        <div class="content section">
            <div class="wrapper first">
                <div class="wrapper">
                    @if ($step != 3 and (!Session::has('cart') or !Session::get('cart')->totalQuantity))
                        <div class="msg-wrap">
                            <div class="msg">Brak produktów w koszyku</div>
                        </div>
                    @else
                        <div class="shoppingCart">
                            @include('cart.components.steps')
                            @if ($step == 1)
                                @include('cart.components.viewForm')
                            @elseif ($step == 2)
                                @include('cart.components.summaryForm')
                            @elseif ($step == 3)
                                <div class="cart-info">
                                    <p>
                                        Dziękujemy za dokonanie zamówienia!
                                    </p>
                                    <p>
                                        Produkt będzie dla Ciebie dostępny od dnia rezerwacji w naszej placówce.
                                        Opłaty należy dokonać przy odbiorze.
                                    </p>
                                    <p>
                                        Historię Twoich wypożyczeń możesz sprawdzić w <a href="{{ url('client/orders') }}">Twoim profilu</a>.
                                    </p>
                                    <p>
                                        Zapraszamy do korzystania z naszej księgarni w przyszłości!
                                    </p>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

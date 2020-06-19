@extends('layouts.app')
@section('contentView')
    <section class="column-view client-view">
        <div class="wrapper first">
            <div class="wrapper">
                <main class="full-side" >
                    <div class="ordersList">
                        @if (sizeof($orders))
                            @include("components.order-table")
                        @else
                            <div class="msg-wrap">
                                <div class="msg">Nie znaleziono żadnych zamówień.</div>
                            </div>
                        @endif
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection
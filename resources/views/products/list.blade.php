@extends('layouts.app')

@section('contentView')
    <section class="column-view" id="productList">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="product-list-contonent">
                    <form class="product-settings" hidden>
                        <input type="hidden" id="product-url" value="{{ $data['slug'] }}">
                    </form>
                    @include('products.components.sorting')
                    <aside class="left-side">
                        @include('products.components.left-side')
                    </aside>
                    <div class="close-filters" id="close-filter">
                        <button class="button">OK</button>
                    </div>
                    <main class="product-list-container right-side">
                        <div class="hide-for-tablet text-center">
                            <button class="button" id="showFilters">Filtry</button>
                        </div>
                        <ul class="product-list">
                            @foreach ($products as $product)
                                @include('products.components.product-item')
                            @endforeach
                            @if (!sizeof($products))
                                <div class="msg-wrap"><div class="msg msg--error">Nie znaleziono produktów <a href="{{ url('product/'.$data['slug']) }}" class="wipe">(wyczyść filtry)</a> </div></div>
                            @endif
                        </ul>
                        <div class="pagination-container" ref="numbers">
                            @include('products.components.pagination')
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection

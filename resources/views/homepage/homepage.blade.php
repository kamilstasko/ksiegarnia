@extends('layouts.app')

@section('topContent')
    @include('homepage.components.slider')
@endsection

@section('contentView')
    <div class="products-slider parallax">
        @include('components.recommended-products')
    </div>
    @include('homepage.components.about-us')
@endsection
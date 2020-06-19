<form id="cartViewForm" action="{{ url('/cart/save') }}" method="post" class="relative summary-view">
    @csrf
    @include('cart.components.cartBox')
    @include('cart.components.summaryInfo')
</form>
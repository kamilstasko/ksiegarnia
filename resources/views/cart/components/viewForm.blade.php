<form id="cartViewForm" action="{{ url('/cart/summary') }}" method="post" class="relative">
    @csrf
    @include('cart.components.cartBox')
    @include('cart.components.cartSettings')
</form>
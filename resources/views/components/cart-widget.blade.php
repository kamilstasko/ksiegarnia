<div class="cartWrapper">
    <a href="{{ url('/cart/view') }}" class="cart-item-first" class="cart-item-first">
        <span class="cart-name">KOSZYK</span>
        <i class="icon icon-svg-01" alt="KOSZYK"></i>
        <span class="badge" data-quantity>{{ Session::has('cart') ? Session::get('cart')->totalQuantity : 0 }}</span>
    </a>
</div>
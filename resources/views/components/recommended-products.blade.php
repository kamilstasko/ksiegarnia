<div class="more-products">
    <div class="wrapper first">
        <div class="wrapper">
            <h1 class="heading"><span>Polecane</span>Produkty</h1>
            <div class="swiper-container" style="opacity: 0;">
                <div class="swiper-wrapper">
                    @foreach ($recommended as $product)
                        <div class="swiper-slide">@include('products.components.product-item')</div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button swiper-button-next"><i class="icon icon-right-arrow"></i></div>
            <div class="swiper-button swiper-button-prev"><i class="icon icon-right-arrow"></i></div>
        </div>
    </div>
</div>
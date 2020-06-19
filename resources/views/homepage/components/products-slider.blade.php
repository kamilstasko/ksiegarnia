<div class="products-slider parallax">
    <div class="wrapper first">
        <div class="wrapper">
            <div class="flex">
                <h1 class="header"><span>Polecane</span>produkty</h1>
                <a href="{{ url('product/list') }}" class="swiper-btn button">WIĘCEJ PRODUKTÓW<span class="icon icon-right-arrow"></span></a>
            </div>
            <div class="swiper-container products-slider-content" style="opacity: 0;">
                <div class="swiper-wrapper">
                    @foreach ($recommended as $recommendedItem)
                        <div class="swiper-slide product-item">
                            <div data-href="{{ url("product/" . $recommendedItem->slug . '/' . $recommendedItem->id . '/' . $recommendedItem->item) }}" class="data-href product-container">
                                <div class="card">
                                    <div class="product-item__flags">
                                        @if ($recommendedItem->is_promotion)
                                            <div class="flag sale txt" title="Promocja">Promocja</div>
                                        @endif
                                        @if ($recommendedItem->is_novelty)
                                            <div class="flag new txt" title="Nowość">Nowość</div>
                                        @endif
                                        @if ($recommendedItem->is_bestseller)
                                            <div class="flag bestseller" title="Bestseller">Bestseller</div>
                                        @endif
                                        @if ($recommendedItem->is_sellout)
                                            <div class="flag sellout" title="Wyprzedaż">Wyprzedaż</div>
                                        @endif
                                    </div>
                                    <span class="image">
                                        <img class="my-slider" src="{{ $recommendedItem->img_href }}" alt="{{ $recommendedItem->img_alt }}">
                                    </span>
                                    <div class="bottom">
                                        <h2 class="title">{{ $recommendedItem->name }}</h2>
                                        <span class="variants">
                                            <span class="variant-item">{{ $recommendedItem->author }}</span>
                                            <span class="variant-item">{{ $recommendedItem->publishing }}</span>
                                        </span>
                                        <span class="price">
                                            @if ($recommendedItem->is_promotion)
                                                <span class="promoted-price">
                                                    <span class="price-first">Cena:</span>
                                                    <span class="price-second">{{ $recommendedItem->promotion_price }} zł</span>
                                                </span>
                                                <span class="previous-price">
                                                    <span class="price-first">Poprzednia cena:</span>
                                                    <span class="price-second">{{ $recommendedItem->price }} zł</span>
                                                </span>
                                            @else
                                                <span class="price-first">Cena:</span>
                                                <span class="price-second">{{ $recommendedItem->price }} zł</span>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button swiper-button-next"><i class="icon icon-right-arrow"></i></div>
                <div class="swiper-button swiper-button-prev"><i class="icon icon-right-arrow"></i></div>
            </div>
        </div>
    </div>
</div>
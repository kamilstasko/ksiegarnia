<li class="product-item">
    <div data-href="{{ url("product/" . $product->slug . '/' . $product->id . '/' . $product->item) }}" class="data-href product-container">
        <div class="product-item__flags">
            @if ($product->is_promotion)
                <div class="flag sale">Promocja</div>
            @endif
            @if ($product->is_novelty)
                <div class="flag new">Nowość</div>
            @endif
            @if ($product->is_bestseller)
                <div class="flag bestseller">Bestseller</div>
            @endif
            @if ($product->is_sellout)
                <div class="flag sellout">Wyprzedaż</div>
            @endif
        </div>
        <div class="card">
            <span class="image">
                <img src="{{ $product->img_href }}" alt="{{ $product->img_alt }}">
            </span>
            <div class="bottom">
                <h2 class="title"><a>{{ $product->name }}</a></h2>
                <strong class="subtitle">{{ $product->author }}</strong>
                <strong class="subtitle">{{ $product->publishing }}</strong>
                <div class="price-box">
                    @if ($product->is_promotion)
                        <span class="promoted-price">
                            <span class="price-first">Cena:</span>
                            <span class="price-second">{{ $product->promotion_price }} zł</span>
                        </span>
                        <span class="previous-price">
                            <span class="price-first">Poprzednia cena:</span>
                            <span class="price-second">{{ $product->price }} zł</span>
                        </span>
                    @else
                        <span class="price-first">Cena:</span>
                        <span class="price-second">{{ $product->price }} zł</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</li>
@extends('layouts.app')

@section('contentView')
    <section class="product-details" id="productDetails">
        <div class="top clearfix">
            <div class="wrapper inner">
                <div class="right-side">
                    <h1 class="product-title">{{ $product['name'] }}</h1>
                </div>
                <div class="left-side">
                    <div class="preview">
                        <div class="product-item__flags">
                            @if ($product['is_promotion'])
                                <div class="flag sale txt" title="Promocja">Promocja</div>
                            @endif
                            @if ($product['is_novelty'])
                                <div class="flag new txt" title="Nowość">Nowość</div>
                            @endif
                            @if ($product['is_bestseller'])
                                <div class="flag bestseller" title="Bestseller">Bestseller</div>
                            @endif
                            @if ($product['is_sellout'])
                                <div class="flag sellout" title="Wyprzedaż">Wyprzedaż</div>
                            @endif
                        </div>
                        <div class="previewSlider">
                            <div class="swiper-container swiper-container-horizontal swiper-container-autoheight">
                                <div class="swiper-wrapper" style="height: 654px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" style="height: 654px; width: 607px;">
                                        <a data-fancybox="gallery" href="{{ $product['img_href'] }}" style="height: 100%">
                                            <img src="{{ $product['img_href'] }}" class="zoom"  alt='{{ $product['img_alt'] }}' style="height: 100%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <form id="changeItem" hidden>
                        @csrf
                        <input type="hidden" id="link-site" value="{{ $slug }}">
                    </form>
                    <form id="addToCartForm">
                        @csrf
                        <div class="parametrs">
                            <div class="parametrs__group">
                                <div class="price-container">
                                    <div class="right">
                                        <div class="current-price">
                                            <h4 class="label">Cena (za tydzień):</h4>
                                            <div class="price-box" id="current-price">
                                                <strong><span> @if ($product['is_promotion']) {{ $product['promotion_price'] }} @else {{ $product['price'] }} @endif</span><span> zł</span>
                                                    @if ($product['is_promotion'])
                                                        <span class="previous-price"><span>{{ $product['price'] }}</span><span> zł</span></span>
                                                    @endif
                                                </strong>
                                            </div>
                                        </div>
                                        @if ($quantity > 0)
                                            <div class="current-cost current-price">
                                                <h4 class="label">Koszt zamówienia:</h4>
                                                <div class="price-box">
                                                    <strong><span id="final-price">0.00</span><span> zł</span></strong>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="quanity-msg" transition="fade" style="display: none">Nie ma wystarczającej ilości produktów w magazynie lub błędna wartość.</div>
                                <div class="priceRow" @if ($quantity == 0) style="justify-content: flex-start" @endif>
                                    <div class="price-mybox" @if ($quantity == 0) style="width: 25%;" @endif>
                                        @if ($quantity > 0)
                                            <div class="priceRow__helper">
                                                <h4 class="label">Egzemplarz:</h4>
                                                <select name="item" id="details-item">
                                                    @foreach ($items as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $data['slug_item']) selected @endif>
                                                            {{ $item->serial }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="priceRow__helper">
                                                <h4 class="label">Data rozpoczęcia:</h4>
                                                <input type="text" id="date_start" name="date_start" autocomplete="off">
                                                <input type="hidden" id="disabledDays" value="{{ $disabled_days }}">
                                            </div>
                                            <div class="error_value">
                                                <span id="error_start"></span>
                                            </div>
                                            <div class="priceRow__helper">
                                                <h4 class="label">Data zakończenia:</h4>
                                                <input type="text" id="date_end" name="date_end" disabled autocomplete="off">
                                            </div>
                                            <div class="error_value">
                                                <span id="error_end"></span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="buy-box--helper">
                                        <div class="offer--helper">
                                            @guest
                                                <div class="offer">
                                                    <div id="login_cart" class="button blue bigger ttu">
                                                        <span>Zaloguj się aby dokonać zamówienia</span>
                                                    </div>
                                                </div>
                                            @else
                                                @if ($quantity > 0)
                                                    <div class="offer">
                                                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                                        <button id="product-add-to-cart" class="button blue bigger ttu">
                                                            <span>Dodaj do koszyka</span>
                                                        </button>
                                                    </div>
                                                @else
                                                    <div class="offer">
                                                        <div class="danger-info" >Produkt aktualnie niedostępny</div>
                                                    </div>
                                                @endif
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <section class="small-tabs tabs-container r-tabs" id="tab-respon">
                        <ul class="tabs r-tabs-nav">
                            @foreach ($descriptions as $description)
                                <li @if ($description['id'] == 1) class="r-tabs-tab r-tabs-state-active" @else class="r-tabs-tab" @endif>
                                    <a href="#tabhas{{ $description['id'] }}" class="r-tabs-anchor">
                                        <h2 class="r-tabs-title">{{ $description['title'] }}</h2>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        @foreach ($descriptions as $description)
                            <div @if ($description['id'] == 1) class="r-tabs-accordion-title r-tabs-state-active" @else class="r-tabs-accordion-title r-tabs-state-default" @endif>
                                <a href="#tabhas{{ $description['id'] }}" class="r-tabs-anchor">
                                    <h2 class="r-tabs-title">{{ $description['title'] }}</h2>
                                </a>
                            </div>
                            <div id="tabhas{{ $description['id'] }}" @if ($description['id'] == 1) class="r-tabs-panel r-tabs-state-active" style="display: block;" @else class="r-tabs-state-default r-tabs-panel" @endif>
                                {!!  $description['content'] !!}
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
            <div id="productSummaryPopup">
                <div class="productSummary">
                    <div class="productSummary__top">
                        <div class="productSummary__title">Dodano do koszyka</div>
                        <a href="{{ url($data['slug_full']) }}" class="closeAllPopups"></a>
                    </div>
                    <div class="productSummary__item">
                        <div class="leftColumn">
                            <img src="{{ $product['img_href'] }}" >
                        </div>
                        <div class="rightColumn">
                            <div class="productSummary__item-title">{{ $product['name'] }}</div>
                            <div class="productSummary__item-price">
                                Cena: <strong> <span id="cost-popup"></span> zł</strong>
                            </div>
                            <div class="productSummary__item-price">
                                Koniec rezerwacji w koszyku: <strong> <span id="hour-popup"></span></strong>
                            </div>
                        </div>
                        <div class="rightColumn">
                            <div class="productSummary__item-buttons">
                                <a href="{{ url('/product/list') }}" class="button blue ttu closeFancy">Kontynuuj zakupy</a>
                                <a href="{{ url('/cart/view') }}" class="button blue ttu">
                                    <span>Przejdź do kasy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid">
            @include('components.recommended-products')
        </div>
    </section>
@endsection

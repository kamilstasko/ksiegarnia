<section class="slider">
    <div class="swiper-container home-slider">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-wrapper">
            @foreach ($slider as $slide)
                <div class="swiper-slide">
                    <div class="swiper-back-image swiper-lazy swiper-desktop" data-scale-image></div>
                    <div class="wrapper first">
                        <div class="wrapper">
                            <div class="swiper-content">
                                <div class="swiper-content-left">
                                    <h1 class="swiper-head">{{ $slide['title'] }}</h1>
                                    <div class="swiper-desc">{{ $slide['description'] }}</div>
                                    <a href="{{ $slide['link'] }}" class="swiper-btn button no-hover">{{ $slide['button_description'] }}<span class="icon icon-right-arrow"></span></a>
                                </div>
                                <div class="swiper-content-right">
                                    <div class="swiper-image" data-scale-image>
                                        <img src="{{ $slide['img_href'] }}" alt="{{ $slide['img_alt'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="about-us-section">
    <div class="about-us-left">
        <div class="about-us-left-image" style="background-image: url('{{ $infobox['img_url'] }}')"></div>
    </div>
    <div class="about-us-right">
        <h1 class="about-us-right-head">{{ $infobox['sub_title'] }}<span>{{ $infobox['title'] }}</span></h1>
        <div class="about-us-right-desc">
            {{ $infobox['content'] }}
        </div>
        <a href="{{ $infobox['redirect_url'] }}" class="button">{{ $infobox['redirect_desc'] }}</a>
    </div>
</section>

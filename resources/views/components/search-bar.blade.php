<section class="search-bar">
    <span class="search-trigger" data-fancybox="search-form" data-src="#search-form"><span class="text-name">
            @if (isset($phrase) and $phrase != '')
                {{ $phrase }}
            @else
                SZUKAJ W KSIĘGARNI ...
            @endif
        </span> <span class="icon icon-svg-02"></span></span>
    <form action="{{ url('product/list') }}"  method="get" id="search-form" style="display: none;">
        <div class="inputHelper search">
            <input type="text" class="input type-1" name="phrase" id="phrase" value="@if (isset($phrase)) {{ $phrase }} @endif" autocomplete="off">
            <button><i class="icon icon-svg-02"></i></button>
        </div>
    </form>
</section>
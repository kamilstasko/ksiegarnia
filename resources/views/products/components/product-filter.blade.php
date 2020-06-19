<form class="product-filter">
    @foreach ($filters as $filter)
        @if (in_array($filter['desc'],['Cena', 'Rok wydania']))
            <div class="filter-box price-range-box">
                <div class="heading">
                    <div class="filter-head section-title">{{ $filter['desc'] }}</div>
                </div>
                <input id="{{ $filter['name'] }}" name="{{ $filter['name'] }}" type="text" value="{{ request()->get($filter['name']) }}">
                <input id="{{ $filter['min_name'] }}" type="hidden" value="{{ $filter['min_value'] }}">
                <input id="{{ $filter['max_name'] }}" type="hidden" value="{{ $filter['max_value'] }}">
            </div>
        @else
            <div class="filter-box">
                <div class="heading">
                    <div class="filter-head section-title">{{ $filter['desc'] }}</div>
                </div>
                <div class="search-params-scroll">
                    <ul class="filter-list filter-list--size w100p">
                        @foreach ($filter['options'] as $option)
                            <li>
                                <div class="field field--with-label">
                                    <label class="checkbox-helper type-2">
                                        <input type="checkbox" name="{{ $filter['name'] }}" value="{{ $option->value }}" @if (in_array($option->value, explode(',', request()->get($filter['name'])))) checked @endif>
                                        <span class="square"></span>
                                        <span class="text">
                                            <span class="newsletter_agree_text">{{ $option->value_desc }}</span>
                                        </span>
                                    </label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    @endforeach

    <div class="buttons">
        <a href="{{ url('product/'.$data['slug']) }}" class="wipe">Wyczysc filtry</a>
        <div id="filtr" class="button blue pad" id="Filters">Filtruj</div>
    </div>
</form>
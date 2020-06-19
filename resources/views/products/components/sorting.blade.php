<form method="GET" class="sort-box" action="{{ url('product/' . $data['slug']) }}">
    <div class="select-helper">
        <label for="">Sortuj według:</label>
        <select name="sort" id="sort">
            @foreach ($sorting as $sort)
                <option value="{{ $sort->value }}" @if ($sort->value == request()->get('sort')) selected @endif>
                    {{ $sort->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="select-helper">
        <label for="">Produktów na stronie:</label>
        <select name="limit" id="limit">
            @foreach ($limits as $limit)
                <option value="{{ $limit->value }}" @if ($limit->value == $products->perPage()) selected @endif>
                    {{ $limit->value }}
                </option>
            @endforeach
        </select>
    </div>
</form>
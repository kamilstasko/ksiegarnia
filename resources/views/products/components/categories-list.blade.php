<ul>
    <li>
        <a href="{{ url('product/list') }}" @if ($data['slug'] == 'list' and $phrase == '') class="lvl1 active" @else class="lvl1" @endif>Wszystkie produkty</a>
        <ul>
            @foreach ($categories as $categoryList)
                <li>
                    <a href="{{ url('product/' . $categoryList['slug']) }}" @if($categoryList['isActive']) class="lvl1 active" @else class="lvl1" @endif>{{ $categoryList['name'] }}</a>
                    @if ($categoryList['children'])
                        <ul>
                        @foreach ($categoryList['children'] as $child)
                            <li><a href="{{ url('product/' . $child['slug']) }}" @if($child['isActive']) class="lvl1 active" @else class="lvl1" @endif>{{ $child['name'] }}</a></li>
                        @endforeach
                        </ul>
                    @endif
                 </li>
            @endforeach
        </ul>
    </li>
</ul>
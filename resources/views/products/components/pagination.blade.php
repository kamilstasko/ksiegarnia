@if ($products->total() > $products->perPage())
    <ul class="pagination" role="navigation" aria-label="Pagination">
        @if ($products->currentPage() > 1)
            <li class="pagination-previous"><a href="{{ $products->previousPageUrl() }}&limit={{ $products->perPage() }}&sort={{ request()->get('sort') }}&priceRange={{ request()->get('priceRange') }}&author={{ request()->get('author') }}&publishing={{ request()->get('publishing') }}&dateRange={{ request()->get('dateRange') }}"><span>Poprzednia</span></a></li>
        @else
            <li class="pagination-previous disabled"><span>Poprzednia</span></li>
        @endif
            <li class="number">
                @if ((float)($products->total() / $products->perPage()) <= 5)
                    @for ($i = 1; (float)$i-1 < (float)($products->total() / $products->perPage()); ++$i)
                        <div class="pager">
                            <a @if ($products->currentPage() == $i) class="active" @else href="{{ $products->url($i) }}&limit={{ $products->perPage() }}&sort={{ request()->get('sort') }}&priceRange={{ request()->get('priceRange') }}&author={{ request()->get('author') }}&publishing={{ request()->get('publishing') }}&dateRange={{ request()->get('dateRange') }}" @endif>{{ $i }}</a>
                        </div>
                    @endfor
                @else
                    @for ($i = 1; (float)$i-1 < (float)($products->total() / $products->perPage()); ++$i)
                        @if ($products->currentPage() > 3 and $i == 2)
                            <div class="pager no-click">
                                <div>...</div>
                            </div>
                        @endif
                        @if ($products->currentPage() < $products->lastPage() - 2 and $i == ($products->lastPage() - 1))
                            <div class="pager no-click">
                                <a>...</a>
                             </div>
                        @endif
                        @if (in_array($i, [1, $products->currentPage() - 1, $products->currentPage(), $products->currentPage() + 1, $products->lastPage()]) )
                            <div class="pager">
                                <a @if ($products->currentPage() == $i) class="active" @else href="{{ $products->url($i) }}&limit={{ $products->perPage() }}&sort={{ request()->get('sort') }}&priceRange={{ request()->get('priceRange') }}&author={{ request()->get('author') }}&publishing={{ request()->get('publishing') }}&dateRange={{ request()->get('dateRange') }}" @endif>{{ $i }}</a>
                            </div>
                         @endif
                    @endfor
                @endif
            </li>
            @if ($products->hasMorePages())
                <li class="pagination-next"><a href="{{ $products->nextPageUrl() }}&limit={{ $products->perPage() }}&sort={{ request()->get('sort') }}&priceRange={{ request()->get('priceRange') }}&author={{ request()->get('author') }}&publishing={{ request()->get('publishing') }}&dateRange={{ request()->get('dateRange') }}"><span>Następna</span></a></li>
            @else
                <li class="pagination-next disabled"><span>Następna</span></li>
        @endif
    </ul>
@endif
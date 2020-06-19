<form id="updateRateForm" hidden>
    @csrf
</form>
<table data-accordion border="0" cellspacing="0" cellpadding="0">
    <tbody>
    @foreach($orders as $order)
        <tr class="title">
            <td>
                <div class="cell">
                    <i class="icon toggle"></i>
                </div>
            </td>
            <td>
                <div class="cell">
                    <div class="dataWrap">
                        <div class="label">ID</div>
                        <div class="data">{{ $order->id }}</div>
                    </div>
                </div>
            </td>
            <td>
                <div class="cell">
                    <div class="dataWrap">
                        <div class="label">Data złożenia</div>
                        <div class="data">{{ $order->date }}</div>
                    </div>
                </div>
            </td>
            <td>
                <div class="cell">
                    <div class="dataWrap">
                        <div class="label">Wartość</div>
                        <div class="data total-price">{{ $order->totalPrice }} zł</div>
                    </div>
                </div>
            </td>

            <td>
                <div class="cell">
                    <i class="icon circle status" style="color: @if ($order->paid_status) green @else red @endif">•</i>
                    <div class="dataWrap">
                        <div class="label">Status</div>
                        <div class="data">
                            @if ($order->paid_status)
                                Zapłacono
                            @else
                                Nie zapłacono
                            @endif
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr class="content" style="display: none;">
            <td colspan="5">
                <div class="accordion-content-view">
                    <div class="row" data-accordion>
                        <div class="order-details__data">
                            <div class="title">Szczegóły zamówienia</div>
                            <div class="data-row">
                                <div class="col">
                                    @if ($order->comments)
                                        <b>Uwagi:</b><br>
                                        {{ $order->comments }}
                                        <br>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <table class="content itemsList">
                            <tr>
                                <th>Produkt</th>
                                <th>Data rezerwacji</th>
                                <th>Cena</th>
                                <th>Ocena</th>
                            </tr>
                            @foreach ($order->items as $orderItems)
                                <tr class="data">
                                    <td data-head="Nazwa">
                                        <div class="img"><img src="{{ $orderItems->img_href }}" alt="{{ $orderItems->img_alt }}"></div>
                                        <div class="right-side-order">
                                            <a href="{{ url('/product/'.$orderItems->slug.'/'.$orderItems->id_product.'/'. $orderItems->id_item) }}">
                                                <b>{{ $orderItems->name }}</b>
                                            </a><br>
                                            <span>{{ $orderItems->author }}</span>
                                            <span>{{ $orderItems->publishing }}</span>
                                            <span>{{ $orderItems->serial }}</span>
                                        </div>
                                    </td>
                                    <td data-head="Data rezerwacji">
                                        {{ $orderItems->date_rental . ' - ' . $orderItems->date_return }}
                                    </td>
                                    <td data-head="Cena">
                                        {{ $orderItems->price }} zł
                                    </td>
                                    <td data-head="Ocena">
                                        <input class="rate-product" hidden value="{{ $orderItems->id_orders_table }}">
                                        <select name="rate" class="rate">
                                            <option value="0" disabled hidden @if ($orderItems->rate == 0) selected @endif>
                                                Wybierz ocenę..
                                            </option>
                                            <option value="1" @if ($orderItems->rate == 1) selected @endif>
                                                Okropne
                                            </option>
                                            <option value="2" @if ($orderItems->rate == 2) selected @endif>
                                                Nie podoba mi się
                                            </option>
                                            <option value="3" @if ($orderItems->rate == 3) selected @endif>
                                                Nie mam zdania
                                            </option>
                                            <option value="4" @if ($orderItems->rate == 4) selected @endif>
                                                Podoba mi się
                                            </option>
                                            <option value="5" @if ($orderItems->rate == 5) selected @endif>
                                                Uwielbiam
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="cartSettings clearfix">
    <div class="two-columns">
        <div class="box comments">
            <div class="heading"><strong>Uwagi do zamówienia</strong></div>
            <textarea class="element" name="comments" autocomplete="none"></textarea>
        </div>
        <div class="box half">
            <div class="heading">
                <strong>Podsumowanie</strong>
            </div>
            @if ($reservation)
                <div class="error-reservation">
                    Zanim złożysz zamówienie usuń produkty których rezerwacja wygasła.
                </div>
            @endif
            <div class="total-summary">
                <div class="line second">
                    <div class="left-side"><span>Do zapłaty:</span><span class="price">{{ Session::get('cart')->totalPrice }} zł</span></div>
                    <div class="right-side"><input @if ($reservation) disabled @endif type="submit" name="submitOrder" value="Złóż zamówienie" class="button button--green"/></div>
                </div>
            </div>
        </div>
    </div>
</div>
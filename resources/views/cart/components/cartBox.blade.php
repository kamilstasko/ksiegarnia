<div class="summaryTable">
     <table class="cardItems">
          @foreach (Session::get('cart')->products as $key => $cartItem)
               @if ($step == 1)
                    <tr class="reservation-row">
                         @if ($cartItem['reservation'])
                              <th>Rezerwacja wygasa: <span>{{ $cartItem['reservation'] }}</span></th>
                         @else
                              <th class="end-reservation">Rezerwacja wygasła. Usuń produkt.</th>
                         @endif
                    </tr>
               @endif
               <tr @if ($cartItem['reservation']) class="items-row" @else class="items-row end-reservation-row" @endif>
                    <td class="image">
                         <div class="img"><img src="{{ $cartItem['product']->img_href }}" class="responsive" alt=""></div>
                    </td>
                    <td class="details">
                         <a @if ($step == 1) href="{{ url('/product/'.$cartItem['product']->slug.'/'.$cartItem['product']->id_products.'/'. $cartItem['product']->id_item) }}" @else style="cursor: text" @endif class="name"><strong>{{ $cartItem['product']->name }}</strong></a>
                         <div class="variant">
                              {{ $cartItem['product']->author }}
                         </div>
                         <div class="variant">
                              {{ $cartItem['product']->publishing }}
                         </div>
                         <div class="variant">
                              {{ $cartItem['product']->serial }}
                         </div>
                         <div class="hide-for-tablet">
                              <div>Data rezerwacji: {{ $cartItem['date_rental'] . ' - ' . $cartItem['date_return'] }}</div>
                              <div class="total-value-item">Cena: {{ $cartItem['price'] }} zł</div>
                              @if ($step == 1)
                                   <button type="submit" name="remove" value="{{ $key }}" title="Usuń">✖</button>
                              @endif
                         </div>
                    </td>
                    <td class="reservation">
                         <span class="hidden">Data rezerwacji:</span>
                         <span>{{ $cartItem['date_rental'] . ' - ' . $cartItem['date_return'] }}</span>
                    </td>
                    <td class="price total">
                         <span class="hidden">Cena:</span>
                         <span>{{ $cartItem['price'] }} zł</span>
                    </td>
                    @if ($step == 1)
                         <td class="remove">
                              <button type="submit" name="remove" value="{{ $key }}" title="Usuń">Usuń</button>
                         </td>
                    @endif
               </tr>
          @endforeach
     </table>
     <table class="cardItems summary-table">
          <tr class="summary-row summary-row--blue">
               <td class="summary-label">Do zapłaty:</td>
               <td class="summary-price">{{ Session::get('cart')->totalPrice }} zł</td>
          </tr>
     </table>
</div>

<div class="cart-steps">
    <div class="flex-container">
        <div class="step @if ($step == '1') active @else prev @endif">
            <div class="num"><span>I</span></div>
            <div class="label"><strong>Koszyk</strong></div>
        </div>
        <div class="step @if ($step == '2') active @elseif ($step == '3') prev @endif">
            <div class="num"><span>II</span></div>
            <div class="label"><strong>Podsumowanie</strong></div>
        </div>
        <div class="step @if ($step == '3') active @endif">
            <div class="num"><span>III</span></div>
            <div class="label"><strong>Finalizacja</strong></div>
        </div>
    </div>
</div>
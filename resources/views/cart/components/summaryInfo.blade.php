<div class="summary-box">
    <div class="full-side">
        <span class="summary-box__title">Uwagi:</span>
        <p>@if ($comments) {{ $comments }} @else Brak uwag @endif</p>
        <textarea hidden name="comments">{{ $comments }}</textarea>
    </div>
</div>
<div class="bottom-form">
    <a href="{{ url('cart/view') }}" class="button button--white">Powrót</a>
    <button class="button overLoad">Potwierdzam rezerwację</button>
</div>
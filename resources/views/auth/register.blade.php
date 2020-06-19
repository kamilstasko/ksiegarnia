@extends('layouts.app')

@section('contentView')
    <section class="register_view" id="formEngine">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="wrapper--helper">
                    <div id="register-form">
                        <div class="form-component">
                            <div class="heading">
                                <h2 class="title title--slab text-center">{{ $data['sub_title'] }}</h2>
                            </div>

                            <form method="POST" class="form-content register-form" action="{{ route('register') }}">
                                @csrf

                                <section class="register-form__body">
                                    <div class="register_content">
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="name" class="req">{{ __('Imię') }}</label>
                                                <input id="name" type="text" class="form-control{{ $errors->has('name')  ? ' is-invalid-input' : '' }}" name="name" value="{{ old('name') }}" required  placeholder="Imię">
                                                @if ($errors->has('name'))
                                                    <span class="formError is-invalid">{{  $errors->first('name') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="surname" class="req">{{ __('Nazwisko') }}</label>
                                                <input id="surname" type="text" class="form-control{{ $errors->has('surname')  ? ' is-invalid-input' : '' }}" name="surname" value="{{ old('surname') }}" required  placeholder="Nazwisko">
                                                @if ($errors->has('surname'))
                                                    <span class="formError is-invalid">{{  $errors->first('surname') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="email" class="req">{{ __('Adres e-mail') }}</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email')  ? ' is-invalid-input' : '' }}" name="email" value="{{ old('email') }}" required  placeholder="Adres e-mail">
                                                @if ($errors->has('email'))
                                                    <span class="formError is-invalid">{{  $errors->first('email') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="password" class="req">{{ __('Hasło') }}</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password')  ? ' is-invalid-input' : '' }}" name="password" required  placeholder="Hasło">
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="password_confirmation" class="req">{{ __('Powtórz hasło') }}</label>
                                                <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password')  ? ' is-invalid-input' : '' }}" name="password_confirmation" required  placeholder="Powtórz hasło">
                                                @if ($errors->has('password'))
                                                    <span class="formError is-invalid">{{  $errors->first('password') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="address" class="req">{{ __('Adres') }}</label>
                                                <input id="address" type="text" class="form-control{{ $errors->has('address')  ? ' is-invalid-input' : '' }}" name="address" value="{{ old('address') }}" required  placeholder="Adres">
                                                @if ($errors->has('address'))
                                                    <span class="formError is-invalid">{{  $errors->first('address') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="code" class="req">{{ __('Kod pocztowy') }}</label>
                                                <input id="code" type="text" class="form-control{{ $errors->has('code')  ? ' is-invalid-input' : '' }}" name="code" value="{{ old('code') }}" required  placeholder="Kod pocztowy">
                                                @if ($errors->has('code'))
                                                    <span class="formError is-invalid">{{  $errors->first('code') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="locality" class="req">{{ __('Miejscowość') }}</label>
                                                <input id="locality" type="text" class="form-control{{ $errors->has('locality')  ? ' is-invalid-input' : '' }}" name="locality" value="{{ old('locality') }}" required  placeholder="Miejscowość">
                                                @if ($errors->has('locality'))
                                                    <span class="formError is-invalid">{{  $errors->first('locality') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="input-helper cell small-12 medium-undefined">
                                            <div class="field field--with-label">
                                                <label for="phone" class="req">{{ __('Telefon') }}</label>
                                                <input id="phone" type="number" class="form-control{{ $errors->has('phone')  ? ' is-invalid-input' : '' }}" name="phone" value="{{ old('phone') }}" required  placeholder="Telefon">
                                                @if ($errors->has('phone'))
                                                    <span class="formError is-invalid">{{  $errors->first('phone') }} </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="agreements">
                                    <div class="input w100p">
                                        <div class="field field--with-label">
                                            <label for="agreement1" class="checkbox-helper type-2 expandable">
                                                <input type="checkbox" id="agreement1" true-value="1" false-value="0" name="agreement1" class="">
                                                <span class="square"></span>
                                                <span class="text">
                                                        <span class="newsletter_agree_text">
                                                            Zapoznałem się i akceptuję
                                                            <a href="{{ url('regulations') }}" target="_blank"> regulamin</a>
                                                             i
                                                            <a href="{{ url('privacy-policy') }}" target="_blank">  politykę prywatności</a>
                                                             księgarni. Wyrażam zgodę na wykorzystaniei przetwarzanie moich danych osobowych w celu realizacji Zamówienia (zgodnie z przepisami ustawy o ochronie danych osobowych z dnia 29.08.1997)
                                                        </span>
                                                    </span>
                                            </label>
                                            @if ($errors->has('agreement1'))
                                                <span class="formError is-invalid">{{  $errors->first('agreement1') }} </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="input w100p">
                                        <div class="field field--with-label">
                                            <label for="agreement2" class="checkbox-helper type-2 expandable">
                                                <input type="checkbox" id="agreement2" true-value="1" false-value="0" name="agreement2" class="">
                                                <span class="square"></span>
                                                <span class="text">
                                                        <span class="newsletter_agree_text">
                                                            Zgodnie z wymaganiami ogólnego rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych „RODO” rozumiem, że podanie moich danych osobowych jest niezbędne w celu dokonania rejestracji oraz utworzenia i korzystania z konta klienta Sklepu, w tym w celu realizacji umowy sprzedaży zakupionych w Sklepie produktów.
                                                        </span>
                                                    </span>
                                            </label>
                                            @if ($errors->has('agreement2'))
                                                <span class="formError is-invalid">{{  $errors->first('agreement2') }} </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="input w100p">
                                        <div class="field field--with-label">
                                            <label for="agreement3" class="checkbox-helper type-2 expandable">
                                                <input type="checkbox" id="agreement3" true-value="1" false-value="0" name="agreement3" class="">
                                                <span class="square"></span>
                                                <span class="text">
                                                        <span class="newsletter_agree_text">
                                                            Zapoznałem się z
                                                            <a href="{{ url('privacy-policy') }}" target="_blank">  klauzulą informacyjną</a>
                                                             w zakresie danych osobowych zgodnie z wymaganiami RODO i rozumiem, iż podanie moich danych osobowych jest dobrowolne i mam prawo do dostępu do treści swoich danych oraz prawo ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo wniesienia sprzeciwu, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania którego dokonano na podstawie zgody przed jej cofnięciem, prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (dawniej GIODO).
                                                        </span>
                                                    </span>
                                            </label>
                                            @if ($errors->has('agreement3'))
                                                <span class="formError is-invalid">{{  $errors->first('agreement3') }} </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <button type="submit" class="button ttu button--no-icon blue">
                                        {{ __('Zarejestruj się') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

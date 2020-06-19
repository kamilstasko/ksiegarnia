@extends('layouts.app')

@section('contentView')
    <section class="contact-form-container">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="wrapper--helper">
                    <div id="contact-form">
                        <div class="form-component">
                            <div class="heading">
                                <h2 class="title title--slab text-center">{{ $data['sub_title'] }}</h2>
                            </div>

                            {!! Form::open(['route' => 'contact.store', 'class' => 'form-content']) !!}

                            <section class="contact-form__body">
                                <!--<div class="load-more abs bg"></div>-->
                                <div class="left">
                                    <div class="input-helper cell small-12 medium-undefined">
                                        <div class="field field--with-label">
                                            {!! Form::label('name', 'Imię i nazwisko', ['class' => 'req']) !!}
                                            {!! Form::text('name', null, $attributes = $errors->has('name') ? array('placeholder' => "Imię i nazwisko", 'id' => "name", 'class' => 'is-invalid-input') : array('placeholder' => "Imię i nazwisko", 'id' => "name")) !!}
                                            @if ($errors->has('name'))
                                                <span class="formError is-invalid">Pole nie może być puste</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="input-helper cell small-12 medium-undefined">
                                        <div class="field field--with-label">
                                            {!! Form::label('email', 'Email', ['class' => 'req']) !!}
                                            {!! Form::text('email', null, $attributes = $errors->has('email') ? array('placeholder' => "Email", 'id' => "email", 'class' => 'is-invalid-input') : array('placeholder' => "Email", 'id' => "email")) !!}
                                            @if ($errors->has('email'))
                                                <span class="formError is-invalid">Niepoprawny adres email</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="input-helper cell small-12 medium-undefined">
                                        <div class="field field--with-label">
                                            {!! Form::label('subject', 'Temat Wiadomości', ['class' => 'req']) !!}
                                            {!! Form::text('subject', null, $attributes = $errors->has('subject') ? array('placeholder' => "Temat Wiadomości", 'id' => "subject", 'class' => 'is-invalid-input') : array('placeholder' => "Temat Wiadomości", 'id' => "subject")) !!}
                                            @if ($errors->has('subject'))
                                                <span class="formError is-invalid">Pole nie może być puste</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="input-helper cell small-12 medium-undefined">
                                        <div class="field field--with-label">
                                            {!! Form::label('message', 'Treść Wiadomości', ['class' => 'req']) !!}
                                            {!! Form::textarea('message', null, $attributes = $errors->has('message') ? array('placeholder' => "Treść Wiadomości", 'id' => "message", 'class' => 'is-invalid-input') : array('placeholder' => "Treść Wiadomości", 'id' => "message")) !!}
                                            @if ($errors->has('message'))
                                                <span class="formError is-invalid">Pole nie może być puste</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="agreements">
                                <div class="input-helper cell small-12 medium-undefined">
                                    <div class="field field--with-label">
                                        <label for="agreement" class="checkbox-helper type-2 expandable">
                                            {!! Form::checkbox('agreement', '1', null, ['id' => "agreement"]) !!}
                                            <span class="square"></span>
                                            <span class="text">
                                                    <span class="newsletter_agree_text">
                                                        Zgodnie z wymaganiami ogólnego rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych „RODO” WYRAŻAM ZGODĘ na przetwarzanie moich danych osobowych w celu skorzystania z formularza kontaktowego i nawiązania kontaktu ze Sprzedawcą.
                                                    </span>
                                                </span>
                                        </label>
                                        @if ($errors->has('agreement'))
                                            <span class="formError is-invalid">Musisz zaakceptować regulamin</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-helper cell small-12 medium-undefined">
                                    <div class="field field--with-label">
                                        <label for="rodo" class="checkbox-helper type-2 expandable">
                                            {!! Form::checkbox('rodo', '1', null, ['id' => "rodo"]) !!}
                                            <span class="square"></span>
                                            <span class="text">
                                                    <span class="newsletter_agree_text">
                                                        Zapoznałem się z
                                                        <a href="{{ url('privacy-policy') }}" target="_blank">klauzulą informacujną</a>
                                                         w zakresie danych osobowych zgodnie z wymaganiami RODO i rozumiem, iż podanie moich danych osobowych jest dobrowolne i mam prawo do dostępu do treści swoich danych oraz prawo ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo wniesienia sprzeciwu, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania którego dokonano na podstawie zgody przed jej cofnięciem, prawo wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (dawniej GIODO).
                                                    </span>
                                                </span>
                                        </label>
                                        @if ($errors->has('rodo'))
                                            <span class="formError is-invalid">Musisz zaakceptować oświadczenie o przetwarzaniu danych osobowych</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                {!! Form::submit('Wyślij', ['class' => 'button progress-button error', 'data-unique' => "0"]) !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper first">
        <div class="wrapper">
            <div class="contact-boxes">
                <div class="contact-box">
                    <div class="contact-box__icon">
                        <i class="icon icon-pointer"></i>
                    </div>
                    <div class="contact-box__content">
                        <h3>{{ $config['firm'] }}</h3>
                        {{ $config['address'] }},<br>
                        {{ $config['town'] }}
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-box__icon">
                        <i class="icon icon-clip"></i>
                    </div>
                    <div class="contact-box__content">
                        <div>
                            <b>Numer KRS:</b> {{ $config['krs'] }}
                            <br>{{ $config['krs_text'] }}
                            <div>
                                {{ $config['krs_text2'] }}
                            </div>
                        </div>

                        <div>
                            <b>NIP</b> {{ $config['nip'] }}
                            <b>REGON</b> {{ $config['regon'] }}
                        </div>

                        <div>
                            <b class="special">Bank:</b> {{ $config['bank_name'] }}
                            <div>
                                <b class="special">Nr rachunku:</b> {{ $config['bank_number'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-box__icon">
                        <i class="icon icon-svg-01"></i>
                    </div>
                    <div class="contact-box__content">
                        <span><h3>Dział handlowy</h3></span>
                        <span>{{ $config['office_person'] }}</span><br>
                        <a href="tel:{{ $config['office_phone'] }}">{{ $config['office_phone'] }}</a><br>
                        <a href="mailto:{{ $config['office_email'] }}">{{ $config['office_email'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
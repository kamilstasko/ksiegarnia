@extends('admin.layouts.app')

@section('contentView')
    <div class="con">
        <div class="container">
            <form action="{{ route('admin.auth.loginAdmin') }}" method="post">
                @csrf
                <div class="logo">
                    <img src="/images/logotype.png">
                </div>
                <div class="content">
                    <h1>Panel administracyjny</h1>
                    @if ($errors->has('bad-data'))
                        <p class="errors">{{ $errors->first('bad-data') }}</p>
                    @endif
                    <div class="group">
                        <label for="username" class="label-username"></label>
                        <input id="username" type="text" name="login" placeholder="Login" autocomplete="off" required>
                    </div>
                    <div class="group">
                        <label for="password" class="label-password"></label>
                        <input id="password" type="password" name="password" placeholder="Hasło" required>
                    </div>

                    <input type="submit" class="button" value="Zaloguj się">
                </div>
            </form>
        </div>
        <div class="footer">
            Masz pytania? Skontaktuj się z naszym działem technicznym
            <span>tel. +48 000 000 000 / <a href="mailto: biuro@ksiegarnia-internetowa.licencjat">biuro@ksiegarnia-internetowa.licencjat</a></span>
        </div>
    </div>
@endsection

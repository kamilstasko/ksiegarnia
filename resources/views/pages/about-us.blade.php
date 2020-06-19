@extends('layouts.app')
@section('contentView')
    <section class="standard-page standard-page--padding racing-team">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="standard-content standard-content--invert cke-content">
                    <div class="right-content">
                        <p><strong>{{ $data['preface'] }}</strong></p>
                        <p style="text-align: center"><img src="{{ $data['img_url'] }}" alt="{{ $data['img_alt'] }}" style="width: 70%"></p>
                        {!! $data['content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
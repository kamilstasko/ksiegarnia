@extends('layouts.app')
@section('contentView')
    <section class="standard-page standard-page--padding racing-team">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="standard-content standard-content--invert cke-content">
                    <div class="right-content">
                        {!! $data['content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.components.head')
    <body{{ $isHomepage ? '' : ' class=page' }}>
        <div class="page-image"></div>

        <main class="content-container overflow" id="full-container" data-scale>
            @include('partials.header')

            <div class="main-app--helper{{ $isHomepage ? ' no-padding' : '' }}">

                @section('topContent')
                    @if (!$isHomepage)
                        @include("components.top-banner")
                    @endif
                @show

                @section('contentView')
                @show

            </div>


            @section('footer')
                @include('partials.footer')
            @show
        </main>

        @include('layouts.components.tail')
    </body>
</html>



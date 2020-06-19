<footer>
    <div class="wrapper first">
        <div class="wrapper">
            <div class="top">
                <div class="one">
                    <span>{{ $config['firm'] }}</span>
                    <span>{{ $config['address'] }}</span>
                    <span>{{ $config['town'] }}</span>
                </div>
                <div class="one">
                    <a href="mailto:{{ $config['email'] }}">{{ $config['email'] }}</a>
                    <a href="tel:{{ $config['phone'] }}">Tel: {{ $config['phone'] }}</a>
                </div>
                <div class="one">
                    {{ \App\Http\Controllers\Menu\Menu::generateMenuFooter(1) }}
                </div>
                <div class="one">
                    {{ \App\Http\Controllers\Menu\Menu::generateMenuFooter(2) }}
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrapper first">
            <div class="wrapper">
                <div class="flex">
                    <div class="left">
                        <span>Copyright ⓒ 2019</span><br/>
                    </div>
                    <div class="realization">
                        <span>Realizacja: </span>Kamil Staśko
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
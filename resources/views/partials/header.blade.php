<header class="">
    <section class="wrapper">
        <div class="header-flex">
            <span class="logotypeContainer">
                <a href="{{ url('') }}">
                    <img src="/images/logotype.png" alt="{{ config('service_name') }}">
                </a>
            </span>

            <div class="phone-flex">
                @include('components/search-bar')
                <div class="rightContainer">
                    <span class="menuTrigger">
                        <span class="burger"></span>
                    </span>

                    @guest
                        <a href="{{ route('login') }}" class="accountAnchor">
                            <span class="normal">
                                <span class="user-name">LOGOWANIE / REJESTRACJA</span>
                                <i class="icon icon-person1" alt="LOGOWANIE / REJESTRACJA"></i>
                            </span>
                        </a>
                    @else
                        <span href="urlAction.client.account" class="accountAnchor">
                        <span class="normal">
                            <span class="userName">{{ Auth::user()->name }}</span>
                            <i class="icon icon-padlock" alt="Moje konto"></i>
                        </span>
                        <span class="dropdown-usermenu">
                            <a href="{{ url('client/account') }}" class="header">Moje konto</a>
                            <ul class="items-menu">
                                <li><a href="{{ url('client/orders') }}" class="active" >Historia wypożyczeń</a></li>
                                <li><a href="{{ url('client/edit') }}">Edycja danych</a></li>
                                <li><a href="{{ url('client/change-password') }}">Zmiana hasła</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </span>

                    </span>
                    @endguest


                </div>
                <div class="rightContainer">
                    @include('components/cart-widget')
                </div>
            </div>

        </div>
    </section>
    <div class="wrapper">
        <div class="menu-wrapper">
            {{ \App\Http\Controllers\Menu\Menu::generateMenuHeader() }}
        </div>
    </div>
</header>

<div class="mobile-container"></div>
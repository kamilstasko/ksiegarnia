<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrator</title>
        <meta name="theme-color" content="#1a3958">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="72x72" href="/favicon/favicon-72x72.png">
        <link rel="icon" type="image/png" sizes="152x152"  href="/favicon/favicon-152x152.png">

        <!-- Scripts -->
        <script src="{{ asset('js/appAdmin.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/appAdmin.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" />
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,600,700|Roboto:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>
    <body @if (Route::current()->getName() == 'admin.auth.login') class="page-image" @endif id="page-top">
        @if (Route::current()->getName() != 'admin.auth.login')
            <div id="wrapper">
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Administrator</div>
                    </a>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        Użytkownik
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                            <i class="far fa-user"></i>
                            <span>{{ $login }}</span>
                        </a>
                        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span>Wyloguj</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        Zarządzanie
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Informacje</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading">
                        Baza danych
                    </div>
                    @foreach ($tables as $table)
                        @if ($table->TABLE_NAME != 'migrations' and $table->TABLE_NAME != 'recommendation_category' and $table->TABLE_NAME != 'recommendation_products')
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{ $table->TABLE_NAME }}" aria-expanded="true" aria-controls="collapse{{ $table->TABLE_NAME }}">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>{{ ucfirst(str_replace('_', ' ', $table->TABLE_NAME)) }}</span>
                                </a>
                                <div id="collapse{{ $table->TABLE_NAME }}" class="collapse" aria-labelledby="heading{{ $table->TABLE_NAME }}" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Zarządzaj:</h6>
                                        <a class="collapse-item" href="{{ url('admin/show').'/'.$table->TABLE_NAME }}">
                                            <i class="fas fa-fw fa-table"></i>
                                            <span>Wyświetl</span>
                                        </a>
                                        @if ($table->TABLE_NAME != 'admins' and $table->TABLE_NAME != 'users')
                                            <a class="collapse-item" href="{{ url('admin/add').'/'.$table->TABLE_NAME }}">
                                                <i class="fas fa-fw fa-wrench"></i>
                                                <span>Dodaj</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </ul>
                <div id="content-wrapper" class="d-flex flex-column">

                    @section('contentView')
                    @show

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Kamil Staśko 2019</span>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Chcesz się wylogować?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Wybierz "Wyloguj" jeśli jesteś gotowy na zakończenie bieżącej sesji</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Anuluj</button>
                            <a class="btn btn-primary" href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Wyloguj
                            </a>
                            <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @section('contentView')
            @show
        @endif
    </body>
</html>
@section('links')
<link rel="stylesheet" href="{{asset('css/navBO.css')}}">
@endsection

<nav>
    <div class="dashboard_container">
        <div class="navigation">
            <ul>
                <a href="{{ asset('/') }}">
                    <li>
                        <span class="icon" id="logo">
                            <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="width:200px;" alt="">
                        </span>
                    </li>
                </a>
                <li>
                    <a href="{{ asset('dashboardBO') }}">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                        </span>
                        <span class="titulo">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/users') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="titulo">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('admin/pedprof') }}">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                            <box-icon type='solid' name='user-check'></box-icon>
                        </span>
                        <span class="titulo">Pedidos Professores</span>
                    </a>
                </li>


                <li>
                    <a href="{{ asset('admin/modalidades') }}">
                        <span class="icon">
                            <ion-icon name="share-social-outline"></ion-icon>
                        </span>
                        <span class="titulo">Modalidades</span>
                    </a>
                </li>


                <li>
                    <a href="{{ asset('admin/patrocinio') }}">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="titulo">Patrocínios</span>
                    </a>
                </li>


                <li>
                    <a href="{{ asset('eventos/') }}">
                        <span class="icon">
                            <ion-icon name="ticket-outline"></ion-icon>
                        </span>
                        <span class="titulo">Eventos</span>
                    </a>
                </li>


                <li>
                    <a href="{{ asset('/') }}">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="titulo">Sair</span>
                    </a>
                </li>

            </ul>
        </div>
</nav>
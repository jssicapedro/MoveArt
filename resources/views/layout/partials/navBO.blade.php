@section('links')
<link rel="stylesheet" href="{{asset('css/navBO.css')}}">
@endsection



<!--NavbBO-->
<nav>
<div class="dashboard_container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon" id="logo">
                    <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="width:200px;" alt="">
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="apps-outline"></ion-icon>
                    </span>
                    <span class="titulo">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="titulo">Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                    <box-icon type='solid' name='user-check'></box-icon>
                    </span>
                    <span class="titulo">Pedidos Professores</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="share-social-outline"></ion-icon>
                    </span>
                    <span class="titulo">Modalidades</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="reader-outline"></ion-icon>
                    </span>
                    <span class="titulo">Patrocínios</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="ticket-outline"></ion-icon>
                    </span>
                    <span class="titulo">Eventos</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="titulo">Sair</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
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
                    <img src="{{ asset('img/eventosBO/dashboard.png') }}" style="width:30px; height:; " alt="">
                    </span>
                    <span class="titulo">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                    <img src="{{ asset('img/eventosBO/group.png') }}" style="width:35px; height:; " alt="">
                    </span>
                    <span class="titulo">Utilizadores</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                    <img src="{{ asset('img/eventosBO/interview.png') }}" style="width:30px; height:; " alt="">
                    </span>
                    <span class="titulo">Pedidos Professores</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                    <img src="{{ asset('img/eventosBO/dancing.png') }}" style="width:40px; height:; " alt="">
                    </span>
                    <span class="titulo">Modalidades</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                    <img src="{{ asset('img/eventosBO/agreement.png') }}" style="width:35px; height:; " alt="">
                    </span>
                    <span class="titulo">Patrocínios</span>
                </a>
            </li>

            <li>
                <a href="{{ asset('evento') }}" >
                    <span class="icon">
                    <img src="{{ asset('img/eventosBO/calendar.png') }}" style="width:35px; height:; " alt="">
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
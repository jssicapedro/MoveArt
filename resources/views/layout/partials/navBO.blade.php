<!--NavbBO-->
<nav>
    <div class="dashboard_container">
        <div class="navigation">
            <ul><a href="{{ asset('/') }}">
                    <li>
                        <span class="icon" id="logo">

                            <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="width:200px;" alt="">

                        </span>
                    </li>
                </a>
                <li class="about_admin">
                    <div class="imagem">
                        <img src="{{ url('storage/professores/'.Auth::user()->foto) }}" alt="user">
                    </div>
                    <p>Olá, {{ Auth::user()->primeiro }}</p>
                </li>
                <hr>
                <li>
                    <a href="{{ asset('dashboardBO') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/dashboard.png') }}" style="width:30px;" alt="">
                        </span>
                        <span class="titulo">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/users') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/group.png') }}" style="width:35px;" alt="">
                        </span>
                        <span class="titulo">Utilizadores</span>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('admin/pedprof') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/interview.png') }}" style="width:30px;" alt="">
                        </span>
                        <span class="titulo">Pedidos Professores</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/modalidades') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/dancing.png') }}" style="width:40px;" alt="">
                        </span>
                        <span class="titulo">Modalidades</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/patrocinio') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/agreement.png') }}" style="width:35px;" alt="">
                        </span>
                        <span class="titulo">Patrocínios</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('evento') }}">
                        <span class="icon">
                            <img src="{{ asset('img/eventosBO/calendar.png') }}" style="width:35px;" alt="">
                        </span>
                        <span class="titulo">Eventos</span>
                    </a>
                </li>
                <hr>
                <div class="logout">

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();"><span class="icon">
                                <img src="{{ asset('img/eventosBO/logout.png') }}" style="width:35px;" alt="">
                            </span>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </ul>
        </div>
</nav>
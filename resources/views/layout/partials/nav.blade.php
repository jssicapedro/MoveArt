<nav class="navbar navbar-default navbar-expand-lg py-2 navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ asset('/') }}">
      <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="height: 50px;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nave navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('/') }}">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Danças
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ asset('ballet') }}">Ballet</a></li>
            <li><a class="dropdown-item" href="{{ asset('hiphop') }}">Hip-hop</a></li>
            <li><a class="dropdown-item" href="{{ asset('espanhola') }}">Dança Espanhola</a></li>
            <li><a class="dropdown-item" href="{{ asset('oriental') }}">Danças Orientais</a></li>
            <li><a class="dropdown-item" href="{{ asset('folclore') }}">Folclore</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('eventos') }}">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('mapaaulas') }}">Mapa de Aulas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('faqs') }}">Faqs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ asset('contactos') }}">Contactos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="http://moveloja.epizy.com">Loja</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscreve-te
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ asset('inscricoes') }}">Aluno</a></li>
            <li><a class="dropdown-item" href="{{ asset('professor') }}">Professor</a></li>
            <li><a class="dropdown-item" href="{{ asset('patrocinio') }}">Patrocínio</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Olá, {{ Auth::user()->primeiro }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{ asset('perfil') }}"> Perfil</a>

              @if(Auth::user()->perfil == 'Administrador')
              <a class="dropdown-item" href="{{ asset('dashboardBO') }}"> Administração</a>
              @endif

              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

            </li>
          </ul>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
    </div>
    @else
    <a class="nav-link" href="{{ asset('login') }}">Login/Registar</a>
    @endauth
    </li>
    </ul>
    <!-- <img id="mode" src="img/darkMode/moon.png"
                alt="botão para alterar o tema do site"> -->
  </div>
  </div>
</nav>
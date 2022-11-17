<nav class="navbar navbar-default navbar-expand-lg py-2 navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ asset('/') }}">
          <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="height: 50px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nave navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/') }}">Início</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link" href="{{ asset('aulas') }}">Mapa de Aulas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('contactos') }}">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Loja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('inscricoes') }}">Inscrição</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
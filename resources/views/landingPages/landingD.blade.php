<datagrid></datagrid>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <title>Document</title>
  <link href="{{asset('css/landingD.css')}}" rel="stylesheet">
  <!-- biblioteca bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <!-- primera pagina -->
  <div class="primeiro_espaco">
    <div class="primeiro_espaco_texto">
      <h1>moveArt</h1>
      <h2>Escola de dança</h2>
      <p>Temos aulas grátis para você experimentar</p>
      <div class="ponto-1">
        <button class="custom-btn btn-6"><span>Saiba</span></button>
      </div>
    </div>

    <div class="figura_1">
      <div class="img_figura_1">
        <img src="{{asset('img/landingpages/landingD/dancarina_1.png')}}" alt="hehe">
      </div>

    </div>
  </div>

  <!-- primeira pagina responsivo -->
  <div class="primeiro_espaco_escondido">
    <div class="figura_1_escondido">
      <div class="img_figura_1_escondido">
        <img src="{{asset('img/landingpages/landingD/dancarina_2.png')}}" alt="hehe">
      </div>
      <div class="img_figura_2_escondido">
        <img src="{{asset('img/landingpages/landingD/dancarina_1.png')}}" alt="hehe">
      </div>
    </div>

    <div class="primeiro_espaco_texto_escondido">
      <h1>moveArt</h1>
      <h2>Escola  de dança</h2>
      <p>Temos aulas grátis para você experimentar</p>
      <div class="ponto-1">
        <button class="custom-btn btn-6"><span>Saiba</span></button>
      </div>
    </div>

  </div>

  <div class="espaco"></div>

  <!-- estilos de dança -->
  <div class="cards_todos_estilos_de_dança">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/landingpages/landingD/estilos/hipop.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">HipPop</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/landingpages/landingD/estilos/danca espanhola.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Dança Espanhola</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/landingpages/landingD/estilos/ballet.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Ballet</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/landingpages/landingD/estilos/dancas_orientais.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Dança Oriental</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('img/landingpages/landingD/estilos/Folclore.png')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Folclore</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
  </div>

  <div class="espaco"></div>

  <!-- assessórios -->
  <div>
    <div class="segundo_espaço">
      <div class="segundo_espaço_testo">
        <h3>Acessórios</h3>
        <p>Temos Acessórios e vestuários para todas as idades</p>
        <div class="ponto-2">
          <button class="custom-btn btn-6 "><span>Saiba</span></button>
        </div>
      </div>
      <div class="congunto_de_figuras">
        <div class="figura_2">
          <div class="img_figura_2">
            <img src="{{asset('img/landingpages/landingD/assesorios/vestuario.png')}}" alt="hehe">
          </div>
        </div>
        <div class="congunto_de_figuras_pequenas">
          <div class="figura_3">
            <div class="img_figura_3">
              <img src="{{asset('img/landingpages/landingD/assesorios/brincos.png')}}" alt="hehe">
            </div>
          </div>
          <div class="figura_4">
            <div class="img_figura_4">
              <img src="{{asset('img/landingpages/landingD/assesorios/polseira.png')}}" alt="hehe">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="espaco"></div>

  <!-- formolario -->
  
  <div class="formolario_testo_inicial">
    <h4>Crie a sua conta</h4>
  </div>
  <form>
    <div class="container">
      <div class="Caixa_formulario">
        <div class="row">
          <div class="form-group col-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="espaco_form">
          <div class="row ">
            <div class="col-5">
              <label for="First name">Primeiro Nome</label>
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-5">
              <label for="Last name">Ultimo Nome</label>
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
        </div>

        <div class="espaco_form">
          <div class="row ">
            <div class="col-4">
              <label for="inputNumber">Telemóvel</label>
              <input type="number" class="form-control" placeholder="number" min="9" max="9">
            </div>
            <div class="col-4">
              <label for="inputNumber">Telefone</label>
              <input type="number" class="form-control" placeholder="number" min="9" max="9">
            </div>
          </div>
        </div>

        <div class="btn-formolario espaco_form">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </div>
    </div>
  </form>

  <div class="espaco"></div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="{{ asset('/') }}" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1 logotipo_da_landingpage">
          <img src="{{asset('img/landingpages/landingD/logotipo/Logo Balle')}}t Preto.png">
        </a>
        <span class="text-muted"> © 2022 Company, Inc </span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <a href="" class="espaco_icons_footer"><img src="{{asset('img/landingpages/landingD/icons/instagram.png')}}" alt="instagram"></a>
        <a href="" class="espaco_icons_footer"><img src="{{asset('img/landingpages/landingD/icons/facebook-circular-logo.png')}}" alt="facebook"></a>
        <a href="" class="espaco_icons_footer"><img src="{{asset('img/landingpages/landingD/icons/twitter.png')}}" alt="twitter"></a>
      </ul>
    </footer>
  </div>

  <!-- biblioteca bootstrap -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>
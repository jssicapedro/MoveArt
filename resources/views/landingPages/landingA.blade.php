<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link rel="stylesheet" href="{{asset('js/splide/dist/css/splide.min.css')}}">
  <script src="{{asset('js/splide/dist/js/splide.min.js')}}"></script>

  <link rel="stylesheet" href="{{asset('css/landingA.css')}}">
  <title>Landing Page MoveArt</title>
</head>

<body>
  <div class="logo">
    <img src="{{asset('img/landingpages/landingAdr/Logo.png')}}" alt="">
  </div>
  <section id="inicio">
    <div class="title">
      <h1>MoveArt</h1>
      <p>Escola de Dança</p>
      <div class="btn_inicio">
        <a class="inicio_link" href="#">Ver Site <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="img-title">
      <img src="{{asset('img/landingpages/landingAdr/danca.png')}}" alt="">
      <!-- <div class="circles"></div> -->
    </div>
  </section>
  <section id="tipo_danca">
    <div class="titulo">
      <h2>Tipo de Danças</h2>
      <p>Estes são os estilos de dança que ensinamos!</p>
    </div>
    <section class="splide" aria-labelledby="carousel-heading">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="card_slide">
              <div class="img">
                <img src="{{asset('img/landingpages/landingAdr/ballet.jpg')}}" alt="">
              </div>
            </div>
            <div class="txt">
                Ballet
              </div>
          </li>
          <li class="splide__slide">
            <div class="card_slide">
              <div class="img">
                <img src="{{asset('img/landingpages/landingAdr/espanhola.jpg')}}" alt="">
              </div>
            </div>
            <div class="txt">
              Dança Espanhola
            </div>
          </li>
          <li class="splide__slide">
            <div class="card_slide">
              <div class="img">
                <img src="{{asset('img/landingpages/landingAdr/folclore.jpg')}}" alt="">
              </div>
            </div>
            <div class="txt">Folclore</div>
          </li>
          <li class="splide__slide">
            <div class="card_slide">
              <div class="img">
                <img src="{{asset('img/landingpages/landingAdr/hiphop.jpg')}}" alt="">
              </div>
            </div>
            <div class="txt">Hip-Hop</div>
          </li>
          <li class="splide__slide">
            <div class="card_slide">
              <div class="img">
                <img src="{{asset('img/landingpages/landingAdr/oriental.jpg')}}" alt="">
              </div>
            </div>
            <div class="txt">Dança Oriental</div>
          </li>
        </ul>
      </div>
    </section>
    <div class="btn_increver">
      <a class="increver_link" href="#">Inscrever <i class="fas fa-arrow-right"></i></a>
    </div>
  </section>
  <section id="horario">
    <div class="title-hor">
      <h2>Horário</h2>
      <p><span>*</span>Estes horários correspondem as aulas experimentais!</p>
    </div>
    <div class="body-hor">
      <table>
        <tr>
          <td><b>Seg-</b></td>
          <td>00H00-></td>
          <td>00H00</td>
          <td><span>(Hip-Hop)</span></td>
        </tr>
        <tr>
          <td><b>Ter-</b></td>
          <td>00H00-></td>
          <td>00H00</td>
          <td><span>(Ballet)</span></td>
        </tr>
        <tr>
          <td><b>Qua-</b></td>
          <td>00H00-></td>
          <td>00H00</td>
          <td><span>(Folclore)</span></td>
        </tr>
        <tr>
          <td><b>Qui-</b></td>
          <td>00H00-></td>
          <td>00H00</td>
          <td><span>(Espanhola)</span></td>
        </tr>
        <tr>
          <td><b>Sex-</b></td>
          <td>00H00-></td>
          <td>00H00</td>
          <td><span>(Oriental)</span></td>
        </tr>
      </table>
    </div>
    <div class="btn_horario">
      <a class="horario_link" href="#">Experimentar <i class="fas fa-arrow-right"></i></a>
    </div>
  </section>
  <section id="loja">
    <h2>Loja</h2>
    <div class="prod_desc">
      <div class="products">
        <div class="grid-container">
          <div class="prod">
            <img class='grid-item grid-item-1' src="{{asset('img/landingpages/landingAdr/merchedazing.png')}}" alt=''>
            <p>Merchandising</p>
          </div>
          <div class="prod">
            <img class='grid-item grid-item-2' src="{{asset('img/landingpages/landingAdr/acessorios.jpg')}}" alt=''>
            <p>"Acessórios"</p>
          </div>
          <div class="prod">
            <img class='grid-item grid-item-3' src="{{asset('img/landingpages/landingAdr/calçado.jpg')}}" alt=''>
            <p>Calçado</p>
          </div>

          <div class="prod">
            <img class='grid-item grid-item-4' src="{{asset('img/landingpages/landingAdr/vestuario.jpg')}}" alt=''>
            <p>Vestuário</p>
          </div>
          <div class="prod">
            <img class='grid-item grid-item-5' src="{{asset('img/landingpages/landingAdr/bilhete.png')}}" alt=''>
            <p>Bilhetes para eventos</p>
          </div>
          <div class="prod">
            <img class='grid-item grid-item-7' src="{{asset('img/landingpages/landingAdr/CAIXA.png')}}" alt=''>
            <p>Pacote de aulas</p>
          </div>
        </div>
      </div>
      <div class="text">
        <p>Aproveite todos os produtos que temos disponíveis para si, na nossa loja online! <br>
          Fique atento ás promoções que temos para si!</p>
          <div class="btn_loja">
            <a class="loja_link" href="#">Ver Loja <i class="fas fa-arrow-right"></i></a>
          </div>
      </div>
    </div>
  </section>
  <section id="sobre">
    <div class="card">
      <div class="card_icon">
        <i class="fa-solid fa-people-group"></i>
        <h2>Sobre nós</h2>
      </div>
      <p class="card_body">Esta instituição de dança foi planeada e desenvolvida para guiar os utilizadores
        potencialmente interessados pela dança, ao se inscrever no website será lhe oferecido não só aulas práticas, mas
        também a opção de compra do vestuário necessário oferta de pacotes de aulas e até bilhetes para espetáculos.</p>
      <p class="card_apply">
        <a class="card_link" href="#">Saber mais <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
  </section>
  <footer>
    <div class="footer_">
      <div class="info">
        <div class="contactos">
          <h4>Contactos</h4>
          <p>Telefone: <span>+351 244 000 000</span></p>
          <p>Email: <span>exemplo@gmail.com</span></p>
          <p>Horário Atendimento: <br>
            <span>Seg-Sex 00H00->00H00</span>
          </p>
          <div class="redes_sociais">
            <div class="title_redes">
              <h5>Redes Sociais</h5>
            </div>
            <div class="icons">
              <img src="{{asset('img/landingpages/landingAdr/facebook.png')}}" alt="">
              <img src="{{asset('img/landingpages/landingAdr/instagram.png')}}" alt="">
              <img src="{{asset('img/landingpages/landingAdr/tiktok.png')}}" alt="">
              <img src="{{asset('img/landingpages/landingAdr/twitter.png')}}" alt="">
            </div>
          </div>
        </div>
        <div class="localizacao">
          <h4>Localização</h4>
          <div class="mapa">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12272.338000994427!2d-8.82525095!3d39.7377527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22735a4e067afb%3A0xcfaf619f4450fa76!2sPolit%C3%A9cnico%20de%20Leiria%20%7C%20ESTG%20-%20Escola%20Superior%20de%20Tecnologia%20e%20Gest%C3%A3o_Edif%C3%ADcio%20D!5e0!3m2!1spt-PT!2spt!4v1665416729414!5m2!1spt-PT!2spt"
              width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <form action="">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentário:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
    <div class="copy">
      <p>&copy; Copyright 2022 MoveArt Inc.</p>
    </div>
  </footer>
  <script>
    var splide = new Splide('.splide', {
      type: 'loop',
      drag: 'free',
      perPage: 3,
    });

    splide.mount();
  </script>
</body>

</html>
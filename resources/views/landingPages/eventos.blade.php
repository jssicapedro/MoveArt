<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
  <title>A Bela Adormecida</title>

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- page css -->
  <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">
</head>

<body>

  <!-- start navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light p-md-2">
    <div class="container">
      <a class="navbar-brand p-0" href="{{ asset('/') }}">
        <img src="{{asset('img/landingpages/landingB/Logo.png')}}" alt="" height="70">
      </a>
    </div>
  </nav>
  <!-- end navbar -->



  <!-- start banner image -->
  <div class="banner-image d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-black display-2">A Bela Adormecida</h1>
      <h6 id="dot">• <a href="#" class="text-black">EVENTOS</a> •</h6>
    </div>
  </div>
  <!-- end banner image -->







  <!-- start content first area -->
  <div class="container d-grid ">
    <hr style="width:60px; height:23px; text-align:left;margin-left:0" id="first-hr">
    <h2 class="pb-4">A Bela Adormecida</h2>
    <div class="row">
      <div class="col-xl-6 col-sm-12">
        <div class="pb-2">
          <p>Uma princesa enfeitiçada cai num sono profundo e só dele acordará quando o príncipe perfeito a
            despertar
            com um beijo de verdadeiro amor. </p>
        </div>
        <div class="pb-2">
          <p><b>A Bela Adormecida</b> é um dos balés mais respeitados e produzidos da História da Dança,
            considerado a
            obra
            prima clássica idealizada e coreografada por <b>Marius Petipa</b>, com música de <b>Piotr
              Ilyitch
              Tchaikovsky</b>.</p>
        </div>

        <div class="pb-2">
          <p>A relação da música de <b>Tchaikovsky</b> com a coreografia de <b>Marius Petipa</b> é de tal
            forma perfeita
            que seria
            difícil imaginar outra leitura da partitura. </p>
        </div>

        <div class="pb-2">
          <p>Por isso, música e coreografia numa simbiose genial fizeram com que esta peça fosse considerada a
            obra
            emblemática da dança clássica.</p>
        </div>

        <div class="pb-2">
          <p>Uma grande produção clássica e irresistível que representa um momento imperdível e memorável. Um
            espetáculo
            único que irá perdurar na memória do público. <b>A não perder!</b></p>
        </div>

        <div class="pb-2">
          <p><a href="#saibamais">Mais informações <i class="bi bi-arrow-right"></i></a>
          </p>
        </div>


      </div>
      <div class="col-xl-6 col-sm-12 columslider">
        <div class="slider">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/landingpages/landingB/1.jpg')}}" class="d-block w-100" alt="A bela adormecida espetáculo">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/landingpages/landingB/2.jpg')}}" class="d-block w-100" alt="A bela adormecida espetáculo">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/landingpages/landingB/3.jpg')}}" class="d-block w-100" alt="A bela adormecida espetáculo">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/landingpages/landingB/4.jpg')}}" class="d-block w-100" alt="A bela adormecida espetáculo">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/landingpages/landingB/5.jpeg')}}" class="d-block w-100" alt="A bela adormecida espetáculo">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end content first area -->



  <!-- start content second area -->
  <div class="container d-grid" style="margin-top: 44px; margin-bottom: 80px;">
    <hr style="width:60px; height:23px; text-align:center;margin:16px auto 16px auto">
    <h2 class="pb-3" style="text-align: center;">Protagonistas</h2>
    <div class="row">
      <div class="col-xl-3 col-md-6 col-sm-12 mb-4 pro text-center img-box">
        <img src="{{asset('img/landingpages/landingB/protagonista1.jpg')}}" alt="A bela adormecida" class="img-fluid">
        <figcaption class="text-center" style="margin-top: 20px;"><b>Bela Adormecida</b><br>Maria Costa
        </figcaption>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-12 mb-4 pro text-center img-box">
        <img src="{{asset('img/landingpages/landingB/protagonista2.jpg')}}" alt="A bela adormecida" class="img-fluid ">
        <figcaption class="text-center" style="margin-top: 20px;"><b>Príncipe Phillip</b><br>Bruno Sousa
        </figcaption>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-12 mb-4 pro text-center img-box">
        <img src="{{asset('img/landingpages/landingB/protagonista3.jpg')}}" alt="A bela adormecida" class="img-fluid ">
        <figcaption class="text-center" style="margin-top: 20px;"><b>Malévola</b><br>Leonor Andrade</figcaption>
      </div>
      <div class="col-xl-3 col-md-6 col-sm-12 mb-4 pro text-center img-box">
        <img src="{{asset('img/landingpages/landingB/protagonista4.jpg')}}" alt="A bela adormecida" class="img-fluid ">
        <figcaption class="text-center" style="margin-top: 20px;"><b>Fada Madrinha</b><br>Barbara Loureiro
        </figcaption>
      </div>
    </div>
  </div>
  <!-- end content second area -->



  <!-- start content third area -->
  <div class="container-fluid info d-grid align-items-center" style="background-color: #9a796bd4;">
    <div class="container d-grid" style="margin-top: 44px; margin-bottom: 80px;">
      <hr id="hr" style="width:60px; height:23px; text-align:center;margin:16px auto 16px auto">
      <h2 class="pb-3" style="text-align: center;">Informações</h2>

      <div class="row">

        <div class="col-xl-4 col-md-6 col-sm-12 mb-4 pro text-center" style="margin-top: 44px;">
          <i class="bi bi-calendar-event info-icons"></i>
          <h5 class="text-center" style="margin-top: 20px;"><b>DATA E HORÁRIO</b></h5>
          <p class="text-center" style="margin-top: 25px;">21 de Outubro de 2022 às 21:30</p>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-12 mb-4 pro text-center" style="margin-top: 44px;">
          <i class="bi bi-geo-alt-fill info-icons"></i>
          <h5 class="text-center" style="margin-top: 20px;"><b>LOCAL</b></h5>
          <p id="local" class="text-center" style="margin-top: 25px;">Teatro-Cine de Torres Vedras
          </p>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-12 mb-4 pro text-center" style="margin-top: 44px;">
          <i class="bi bi-currency-exchange info-icons"></i>
          <h5 class="text-center" style="margin-top: 20px;"><b>PREÇO</b></h5>
          <p class="text-center" style="margin-top: 25px;">9€</p>
        </div>

      </div>

    </div>
  </div>
  <!-- end content third area -->



  <!-- start form -->
  <div class="container-fluid form d-grid align-items-center" id="saibamais">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-sm-12 saibamais">
          <h2>Saiba Mais</h2>
          <div>
            <p style="color: #d4d4d4; font-size: 13px;">Para mais informações sobre o evento previamente
              anunciado
              insira o seu email para
              poder receber um email como todos os detalhes.
            </p>
          </div>
        </div>
        <div class="col-xl-6 col-sm-12 justify-content-center align-items-center d-flex">
          <div class="input-group">
            <input type="email" class="form-control sbms" placeholder="O teu email">
            <span class="input-group-btn">
              <button class="btn sbmsb" type="submit">Saiba Mais</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end form -->

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- jquery -->
  

  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 50) {
        nav.classList.add('bg-light', 'shadow');
      } else {
        nav.classList.remove('bg-light', 'shadow');
      }
    });
  </script>
  
</body>

</html>
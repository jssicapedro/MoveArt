<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <title>moveArt</title>

    <!-- bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">

    <!-- splide -->
    <link rel="stylesheet" href="{{asset('js/splide/dist/css/splide.min.css')}}">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/notifications.css')}}" />
</head>

<body>
    <header>
        <img src="{{asset('img/logo/logoBallet_p.png')}}" alt="logótipo moveArt" class="logotipo">
       <!--<img src="https://place-hold.it/50x50" alt="logótipo moveArt">--> 
   </header>
   <main>
       <div class="intro">
           <div class="slogan_">
               <h1>moveArt</h1>
               <h2>A escola dos <br> teus movimentos</h2>
               <a href="{{ asset('mapaaulas') }}" data-aos="fade-up">
                   <span>Aulas grátis</span>
               </a>
           </div>
           <img src="{{asset('img/landingpages/notifications/Choreographer-unscreen.gif')}}"
               alt="gif três pessoas a dançar hip-hop">
       </div>

       <div class="modalidades" data-aos="fade-left">
           <h3>Modalidades</h3>
           <div class="baralho">
               <a href="{{ asset('ballet') }}">
                   <div class="card ballet">
                       <div class="img">
                           <img src="{{asset('img/landingpages/notifications/ballet.png')}}" class="card-img-top"
                               alt="...">
                       </div>
                       <div class="card-body">
                           <p class="card-text">Treina para te tornares num
                               dançarino
                               contemporâneo.</p>
                       </div>
                   </div>
               </a>
               <a href="{{ asset('hiphop') }}">
                   <div class="card hiphop">
                       <div class="img">
                           <img src="{{asset('img/landingpages/notifications/hiphop.png')}}" class="card-img-top"
                               alt="...">
                       </div>
                       <div class="card-body">
                           <p class="card-text">Expressa-te ao som da música com o hip-hop.</p>
                       </div>
                   </div>
               </a>
               <a href="{{ asset('folclore') }}">
                   <div class="card rancho">
                       <div class="img">
                           <img src="{{asset('img/landingpages/notifications/rancho.png')}}" class="card-img-top"
                               alt="...">
                       </div>
                       <div class="card-body">
                           <p class="card-text">Leva a tradição sempre contigo.</p>
                       </div>
                   </div>
               </a>
               <a href="oriental">
                   <div class="card oriental">
                       <div class="img">
                           <img src="{{asset('img/landingpages/notifications/oriental.png')}}" class="card-img-top"
                               alt="...">
                       </div>
                       <div class="card-body">
                           <p class="card-text">Não te fiques pelo que conheces.
                           </p>
                       </div>
                   </div>
               </a>
               <a href="espanhola">
                   <div class="card espanhola">
                       <div class="img">
                           <img src="{{asset('img/landingpages/notifications/espanhola.png')}}" class="card-img-top"
                               alt="...">
                       </div>
                       <div class="card-body">
                           <p class="card-text">Encanta-te com a música e encanta o
                               mundo.</p>
                       </div>
                   </div>
               </a>
           </div>
       </div>

       <div class="professores" data-aos="fade-right">
           <h3>Professores</h3>
           <div class="prof">
               <div class="card_p">
                   <img src="{{asset('img/landingpages/notifications/orientadores(5).png')}}" alt="professor">
                   <div class="cont">
                       <h1>Jéssica Pedro</h1>
                       <h2>ballet</h2>
                   </div>
               </div>
               <div class="card_p baixo">
                   <img src="{{asset('img/landingpages/notifications/orientadores(1).png')}}" alt="professor ">
                   <div class="cont">
                       <h1>Diogo Santos</h1>
                       <h2>hip-hop</h2>
                   </div>
               </div>
               <div class="card_p">
                   <img src="{{asset('img/landingpages/notifications/orientadores(2).png')}}" alt="professor">
                   <div class="cont">
                       <h1>Adriana Valente</h1>
                       <h2>folclore</h2>
                   </div>
               </div>
               <div class="card_p baixo">
                   <img src="{{asset('img/landingpages/notifications/orientadores(3).png')}}" alt="professor ">
                   <div class="cont">
                       <h1>Beatriz Gameiro</h1>
                       <h2>danças espanholas</h2>
                   </div>
               </div>
               <div class="card_p">
                   <img src="{{asset('img/landingpages/notifications/orientadores(4).png')}}" alt="professor">
                   <div class="cont">
                       <h1>Tiago Migueis</h1>
                       <h2>danças orientais</h2>
                   </div>
               </div>
           </div>
       </div>

       <div class="eventos" data-aos="fade-left">
           <h3>Os nossos eventos</h3>
           <div class="card_event">
               <div class="even baixo">
                   <div class="img-even evento">
                       <div class="dia">
                           <p>27<br>out</p>
                       </div>
                   </div>
                   <div class="desc-even">
                       <h1>Dança ao ar livre</h1>
                       <h2>
                           <span>
                               <img src="{{asset('img/landingpages/notifications/icons/pin_drop.svg')}}"
                                   alt="icon localização">
                           </span>
                           Jardim Luís de Camões
                       </h2>
                       <a href="">Sabe mais</a>
                   </div>
               </div>
               <div class="even">
                   <div class="img-even evento1">
                       <div class="dia">
                           <p>23<br>abr</p>
                       </div>
                   </div>
                   <div class="desc-even">
                       <h1>Não pares</h1>
                       <h2>
                           <span>
                               <img src="{{asset('img/landingpages/notifications/icons/pin_drop.svg')}}"
                                   alt="icon localização">
                           </span>
                           Jardim Almuinha Grande
                       </h2>
                       <a href="">Sabe mais</a>
                   </div>
               </div>
               <div class="even baixo">
                   <div class="img-even evento2">
                       <div class="dia">
                           <p>7<br>jan</p>
                       </div>
                   </div>
                   <div class="desc-even">
                       <h1>Mover-te!</h1>
                       <h2>
                           <span>
                               <img src="{{asset('img/landingpages/notifications/icons/pin_drop.svg')}}"
                                   alt="icon localização">
                           </span>
                           Galerias Jardins do Lis
                       </h2>
                       <a href="">Sabe mais</a>
                   </div>
               </div>
           </div>
       </div>

       <div class="novidades" data-aos="fade-right">
           <h3>Receba todas as novidades!</h3>
           <div class="form">
               <div class="squar">
                   <img src="{{asset('img/landingpages/notifications/Choreographer34.gif')}}"
                       alt="gif animado de mulheres a dançar">
               </div>
               <div class="form_form">
                   <div class="form_cont">
                       <h1 class="novidades_h1">Receba as novidades dos nossos
                           eventos!</h1>

                       <div class="dados">
                           <div class="mb-3">
                               <label>Nome:</label>
                               <input type="text" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Email:</label>
                               <input type="email" class="form-control"
                                   id="inputEmail4">
                           </div>
                       </div>
                       <div class="btn">
                           <button type="submit">Notifique-me</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <footer>
       <img src="{{asset('img/logo/logoBallet_p.png')}}" alt="logótipo moveArt" class="logotipo">
       <div class="redes">
           <a href="">
               <img src="{{asset('img/landingpages/notifications/icons/facebook.svg')}}" alt="icon facebook">
           </a>
           <a href="">
               <img src="{{asset('img/landingpages/notifications/icons/instagram.svg')}}" alt="icon instagram">
           </a>
           <a href="">
               <img src="{{asset('img/landingpages/notifications/icons/tiktok.svg')}}" alt="icon tiktok">
           </a>
           <a href="">
               <img src="{{asset('img/landingpages/notifications/icons/twitter.svg')}}" alt="icon twitter">
           </a>
       </div>
       <div class="hr"></div>
       <p>©️ Copyright 2022 moveArt Inc.</p>
   </footer>

   <!-- splide -->
   <script src="{{asset('js/splide/dist/js/splide.min.js')}}"></script>
   <script>
       var splide = new Splide('.splide', {
           perPage: 1,
           focus: 0,
           omitEnd: false,
       });

       splide.mount();
   </script>

   <!-- AOS -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
       AOS.init({
           offset: 250,
           duration: 900
       });
   </script>

   <!-- bootstrap -->
   <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
       crossorigin="anonymous">
       </script>

</body>

</html>
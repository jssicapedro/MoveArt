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

    <link rel="stylesheet" href="{{asset('css/festival.css')}}" />
</head>

<body>
    <header>
        <a href="{{ asset('/') }}">
            <img src="{{asset('img/logo/logoBallet_p.png')}}" alt="logótipo moveArt" class="logotipo">
        </a>
   </header>
   <main>
       <div class="intro">
           <div class="slogan_">
               <h1>Festival de Dança 2023</h1>
               <p>Musica ao vivo, apresentações de dança e muita diversão garantida.<br>Vem connosco e enche-te de movimento!</p>
               <a href="{{ asset('professor') }}" data-aos="fade-up">
                   <span>Junta-te a nós</span>
               </a>
           </div>
           <img src="{{asset('img/landingpages/notifications/Choreographer-unscreen.gif')}}"
               alt="gif três pessoas a dançar hip-hop">
       </div>
       <div class="novidades" data-aos="fade-right">
           <h3>Inscreve-te!</h3>
           <div class="form">
               <div class="squar">
                   <img src="{{asset('img/landingpages/notifications/Choreographer34.gif')}}"
                       alt="gif animado de mulheres a dançar">
               </div>
               <div class="form_form">
                   <div class="form_cont">
                       <h1 class="novidades_h1">Inscreve-te no maior festival de dança da cidade</h1>

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
                           <button type="submit">Inscrever</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <footer>
       <a href="{{ asset('/') }}">
            <img src="{{asset('img/logo/logoBallet_p.png')}}" alt="logótipo moveArt" class="logotipo">
        </a>
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
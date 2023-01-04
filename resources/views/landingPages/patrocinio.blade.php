<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/patro.css')}}" />
    <title>moveArt</title>
</head>

<body>
    <header>
        <a href="{{ asset('/') }}">
            <img src="{{asset('img/logo/logoBallet_p.png')}}" alt="logótipo moveArt" class="logotipo">
        </a>
    </header>
    <main>
        <div class="sobre">
            <h1>Apoie-nos</h1>
            <div class="apre">
                <div class="txt">
                    <p>&nbsp; Quer apoiar uma escola de dança que dá tradição e transpira vontade?</p>
                    <a href="#"><span>Seja patrocinador</span></a>
                </div>
                <img src="https://place-hold.it/400x400" alt="">
            </div>
        </div>
        <div class="vantagens">
            <h2>Vantagens</h2>
            <div class="sobre">
                <div class="gratis">
                    <span class="material-symbols-outlined">
                        check
                    </span>
                    <h3>Grátis</h3>
                    <ul>
                        <li>3 aulas por semana</li>
                        <li>Eventos com preço igual ou inferior a 20€</li>
                    </ul>
                </div>
                <div class="descontos">
                    <span class="material-symbols-outlined">
                        check
                    </span>
                    <h3>Descontos</h3>
                    <ul>
                        <li>Eventos especiais</li>
                        <li>Em toda a loja</li>
                    </ul>
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
</body>

</html>
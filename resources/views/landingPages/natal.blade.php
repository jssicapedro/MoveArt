<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/natal.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Natal com Hip-Hop</title>
    </head>
    <body>

    <!--Banner-->
    <header class="header">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/landingpages/landingT/Logo_Hip-Hop_Preto.png') }}" width="190" height="190" alt="">
        </a> 
    </header>
    
    <div class="banner">
        <div class="titulo"></div>
        <div class="titulo">
            <div class="textos">
                <div class="titulos1">
                    <h1>Natal com<br>Hip-Hop</h1>
                    <p>Desconto em todos os produtos da categoria Hip-Hop</p>
                    <i class="fas fa-heart"></i>
                </div>
                <div class="titulos1">
                    <div class="promocao">
                        <h1>Promoção de Natal</h1>
                        <a href="#" class="shopnow-btn">Loja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Main-->
    <main class="main">

        <!--Destaques-->
        <section class="destaques section container" id="destaques">
            <h2 class="section__titulo">
                Destaques
            </h2>

            <div class="destaques__container grid">
                <article class="destaques__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/calcasH.jpeg') }}" alt="" class="destaques__img">
                    <div class="destaques__data">
                        <h3 class="destaques_titulo">Calças de Danças Urbanas Homem</h3>
                        <span class="preco_produtos"> ̶2̶0̶€̶   17€</span>
                    </div>
                </article>

                <article class="destaques__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/hoodie.jpg') }}" alt="" class="destaques__img">
                    <div class="destaques__data">
                        <h3 class="destaques_titulo">Calças de Danças Urbanas Homem</h3>
                        <span class="preco_produtos"> ̶30̶€̶   19,5€</span>
                    </div>
                </article>

                <article class="destaques__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/casaco.jpeg') }}" alt="" class="destaques__img">
                    <div class="destaques__data">
                        <h3 class="destaques_titulo">Casaco Danças Urbanas Unisexo</h3>
                        <span class="preco_produtos"> ̶35€̶   22€</span>
                    </div>
                </article>
            </div>
        </section> 

        <!--Outros Produtos-->
        <section class="produtos section container" id="produtos">
            <h2 class="section__titulo">
                Mais produtos
            </h2>

            <div class="produtos__container grid">
                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/jc.jpg') }}" alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Calças Danças Urbanas Criança</h3>
                    <span class="preco_produtos"> ̶25€̶    20,5€</span>
                </article>

                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/calcasH.jpg') }}"alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Calças Danças Urbanas Mulher</h3>
                    <span class="preco_produtos"> ̶22€̶   20,5€</span>
                </article>

                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/cho.jpg') }}" alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Calças Danças Urbanas Homem</h3>
                    <span class="preco_produtos"> ̶22€̶   20,5€</span>
                </article>

                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/sw.jpg') }}" alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Camisola Danças Urbanas Homem</h3>
                    <span class="preco_produtos"> ̶27€̶   24,5€</span>
                </article>

                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/sg.jpg') }}" alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Camisola Danças Urbanas Mulher</h3>
                    <span class="preco_produtos"> ̶23€̶   20,5€</span>
                </article>

                <article class="produtos__card">
                    <span class="destaques__tag">Saldo</span>
                    <img src="{{ asset('img/landingpages/landingT/cu.jpg') }}" alt="" class="produtos__img">
                    <h3 class="produtos_titulo">Casaco Danças Urbanas Homem</h3>
                    <span class="preco_produtos"> ̶22€̶   20,5€</span>
                </article>
            </div>
        </section>

        <!--Subscrever Newsletter-->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">Subscreve a nossa <br> Newsletter</h2>
                </div>

                <form action="" class="newsletter_subscreve">
                    <input type="email" placeholder="Insira o seu email" class="newsletter__input">
                    <button class="button">
                        SUBSCREVER
                    </button>
                </form>
            </div>
        </section>
        </main>

        <!--Footer-->
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1" >&#169; MoveArt. Todos os direitos reservados</p>
        </footer>


        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </body>
</html>
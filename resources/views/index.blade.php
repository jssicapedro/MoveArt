@extends('layout.master')

@section('title', 'MoveArt - Início')

@section('links')
<link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
@endsection

@section('hero')
<section id="hero_image">
    <div class="hero_img">
        <div class="container ">
            <div class="row ">
                <div class="col col-xl-6 col-sm-12">
                    <div id="hero_text">
                        <h1>Vanha-Nos Visitar!</h1>
                        <p>A dança para nós não é só uma atividade é um estilo de vida!</p>
                        <div class="hero_btn">
                            <a href="#">
                                <div class="button">Saiba Mais</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('main')
     <!-- start about us -->
    <section id="about_us">

        <div class="container">

            <div class="row sli_all  d-flex align-items-center justify-content-center">

                <div class="col-xl-6 col-md-6 columslider">


                    <div id="carouselExampleControls" class="carouselHero carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="{{ asset('img/inicio/first1.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>
                            
                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first2.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first4.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first5.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first6.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first7.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first8.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first10.png') }}" class="d-block w-100" alt="Escola de dança MoveArt">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('img/inicio/first12.jpg') }}" class="d-block w-100" alt="Escola de dança MoveArt">
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

                <div class="col-xl-6 col-md-6 order-xl-last order-md-last order-first" id="about_text">

                    <div>
                        <hr style="width:60px; height:23px; text-align:left; padding-bottom: 5px;" id="first-hr">
                        <h2 class="pb-2">Sobre Nós</h2>

                        <div class="pb-2 p_about">
                            <p>Esta instituição de dança foi planeada e desenvolvida para guiar os utilizadores
                                potencialmente interessados pela dança, ao se inscrever no website será lhe oferecido
                                não só
                                aulas práticas, mas também a opção de compra do vestuário necessário oferta de pacotes
                                de
                                aulas e até bilhetes para espetáculos.</p>
                        </div>

                        <div class="d-flex justify-content-start">
                            <a href="#">
                                <div class="button">Saiba Mais</div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- end about us -->




    <!-- start our team -->

    <section id="our_team">
        <div class="container-fluid group_equipa">

            <div class="row p-0">
                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa6.png') }}" class="img-fluid" alt="funcionário">
                </div>
                
                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa2.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa3.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa10.png') }}" class="img-fluid" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa5.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-4 col-md-4 col-12 img_box text_box p-0">
                    <div class="text-center" style="margin: 50px;">
                        <hr style="width:60px; height:23px; text-align:center; padding-bottom: 5px;" class="hr_all">
                        <h2>A Nossa Equipa</h2>
                        <p>Trabalhamos em equipa para tornar a sua experiência inesquecivel.</p>
                    </div>
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa7.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa8.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa9.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa11.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa12.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa13.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa14.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa15.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-2 col-md-2 col-6 img_box p-0">
                    <img src="{{ asset('img/inicio/pessoa16.png') }}" class="img-fluid float-end" alt="">
                </div>
            </div>
        </div>






        <div class="container-fluid group_equipa22">
            <div class="row">
                <div class="col-12 img_box text_box p-0">
                    <div class="text-center" style="margin: 70px 20px 40px 20px;">
                        <hr style="width:60px !important; height:23px !important; text-align:center !important; padding-bottom: 20px ;" class="hr_all">
                        <h2>A Nossa Equipa</h2>
                        <p>Trabalhamos em equipa para tornar a sua experiência inesquecivel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid group_equipa2 ">
            <div class="box-container">
                <div class="row p-0 ">

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa6.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa10.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa7.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa8.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa9.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa11.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa12.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa13.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa14.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa15.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-6 img_box p-0 box">
                        <img src="{{ asset('img/inicio/pessoa16.png') }}" class="img-fluid float-end" alt="">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div id="load-more"> Carregar Mais </div>
            </div>
        </div>
    </section>
    <!-- end our team -->




    <!-- start modalidades -->
    <div class="container mod d-grid" style="margin-top: 100px; margin-bottom: 0;">
        <hr style="width:60px !important; height:23px !important; text-align:center !important;" class="hr_all">
        <h2 style="text-align: center;">Modalidades</h2>
    </div>
    <div class="container spl" style="padding-bottom: 120px;">
        <section class="splide" id="splide1" aria-labelledby="carousel-heading ">

            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset('img/inicio/Ballet.jpg') }}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">Ballet</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                   <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset('img/inicio/Hip-Hop.jpg') }}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">Hip-Hop</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset('img/inicio/Dança_Oriental.jpg') }}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">Dança Oriental</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset('img/inicio/Dança_Espanhola.jpg') }}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">Dança Espanhola</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset('img/inicio/Folclore.jpg') }}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">Folclore</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- end modalidades -->




    <!-- start join us -->
    <section id="join_us">

        <div class="banner-image ">

            <div class="banner-image d-flex justify-content-center align-items-center">
                <div>
                    <div class="row ban-row" style="background-color: white;">

                        <div class="col-xl-4 col-sm-12 col_h2 pb-2">
                            <hr style="width:60px; height:23px;" id="left_hr">
                            <h2>Junta-te A Nós!</h2>
                        </div>
                        <div class="col-xl-4 col-sm-12 col_p d-flex justify-content-center align-items-center">
                            <p>Deixa a dança fazer parte da tua vida e junta-te a nós!</p>
                        </div>
                        <div class="col-xl-4 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="pink_btn">
                                <a href="#">
                                    <div class="button">Saiba Mais</div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end join us -->




    <!-- start events -->
    <section id="events">
        <div class="container d-grid events_cont">
            <hr style="width:60px; height:23px; text-align:center;margin:16px auto 16px auto">
            <h2 class="pb-4" style="text-align: center;">Eventos</h2>

            <div class="row">


                <div class="col-xl-4 col-md-4 col-sm-12 car_col">
                    <div class="card">
                        <div class="card-body">
                            <div class="details_event d-flex justify-content-start">
                                <h6><i class="bi bi-calendar4-event"></i> 12/12/2022</h6>
                                <h6><i class="bi bi-clock"></i> 20:30</h6>
                                <h6><i class="bi bi-geo-alt-fill"></i> Leiria</h6>
                            </div>
                            <h3>A Bela Adormecida</h3>
                        </div>
                        <div class="img_event position-relative" style="border-radius: 4px;">
                            <img src="{{ asset('img/inicio/evento1.jpg') }}" class="card-img-top position-absolute bottom-0"
                                alt="Evento-A bela adormecida">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-12 car_col">
                    <div class="card">
                        <div class="card-body">
                            <div class="details_event d-flex justify-content-start">
                                <h6><i class="bi bi-calendar4-event"></i> 03/12/2022</h6>
                                <h6><i class="bi bi-clock"></i> 14:45</h6>
                                <h6><i class="bi bi-geo-alt-fill"></i> Leiria</h6>
                            </div>
                            <h3>House vs Hip-Hop</h3>
                        </div>
                        <div class="img_event" style="border-radius: 4px;">
                            <img src="{{ asset('img/inicio/evento2.jpg') }}" class="card-img-top" alt="Evento de Hip-Hop">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-12 car_col">
                    <div class="card">
                        <div class="card-body">
                            <div class="details_event d-flex justify-content-start">
                                <h6><i class="bi bi-calendar4-event"></i> 29/11/2022</h6>
                                <h6><i class="bi bi-clock"></i> 16:00</h6>
                                <h6><i class="bi bi-geo-alt-fill"></i> Leiria</h6>
                            </div>
                            <h3>Dança Espanhola</h3>
                        </div>
                        <div class="img_event" style="border-radius: 4px;">
                            <img src="{{ asset('img/inicio/evento3.jpg') }}" class="card-img-top" alt="Evento de dança espanhola">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end events -->

@endsection

@section('links')
<script src="{{ asset('js/inicio/inicio.js') }}"></script>
@endsection
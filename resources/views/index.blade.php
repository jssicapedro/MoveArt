@extends('layout.master')

@section('title', 'MoveArt - Início')

@section('links')
<link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('script')
<script src="{{ asset('js/inicio/inicio.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
@endsection

@section('hero')
<section id="hero_image">
    <div class="hero_img">
        <div class="container ">
            <div class="row ">
                <div class="col col-xl-6 col-sm-12">
                    <div data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom" id="hero_text">
                        <h1>Venha-Nos Visitar!</h1>
                        <p>A dança para nós não é só uma atividade é um estilo de vida!</p>
                        <div class="hero_btn">
                            <a href="#show">
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
 
     <div class="section-padding" id="show">
    <div id="about_us">

        <div class="container d-flex align-items-center justify-content-center">

            <div class="row sli_all  d-flex align-items-center justify-content-center">

                <div class="col-xl-6 col-md-6 columslider d-flex justify-content-end">


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
                        <div class="text32  hr_class1">
                            <h2>Sobre Nós</h2>
                            <hr style="width:85px; height:2px; text-align:center; margin:0 0 25px 0;">
                    </div>

                        <div class="pb-2 p_about">
                            <p>Esta escola de dança foi planeada e desenvolvida para guiar os utilizadores
                                potencialmente interessados pela dança, ao se inscrever no website será lhe oferecido
                                não só
                                aulas práticas, mas também a opção de compra do vestuário necessário oferta de pacotes
                                de
                                aulas e até bilhetes para espetáculos.</p>
                        </div>

                        <div class="d-flex justify-content-start">
                            <a href="{{ asset('contactos') }}">
                                <div class="button">Saiba Mais</div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

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
                    <div class="text-center margin_img_people">
                        <div class="text31  hr_class1">
                        <h2 style="text-align: center;">A Nossa Equipa</h2>
                        <hr style="width:85px; height:1px; text-align:center;margin:0px auto 2px auto;">
                </div>
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
                        <div class="text31  hr_class1">
                            <h2 style="text-align: center;">A Nossa Equipa</h2>
                            <hr style="width:85px; height:1px; text-align:center;margin:0px auto 2px auto;">
                    </div>
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
        <div class="text31  hr_class1">
            <h2 style="text-align: center;">Modalidades</h2>
            <hr style="width:85px; height:2px; text-align:center;margin:0px auto 2px auto;">
    </div>
    </div>
    <div class="container spl text-center" style="padding-bottom: 120px;">
        <section class="splide" aria-labelledby="carousel-heading ">

            <div class="splide__track">
                <ul class="splide__list">
                    @if (count($modalidade))
                    @foreach($modalidade as $modalidades)
                    <li class="splide__slide img-box">
                        <div class="containe">
                            <div class="content">
                                <a href="{{ asset('.$modalidades->modalidade.') }}" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img src="{{ url('storage/modalidades/'.$modalidades->foto_mensal) }}" class="content-image"
                                    alt="{{$modalidades->modalidade}}">
                                    <div class="content-details fadeIn-bottom">
                                        <h2 class="content-title">{{$modalidades->modalidade}}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <h6>Não existem categorias registadas</h6>
                    @endif    
                  
                </ul>
            </div>
        </section>
    </div>
    <!-- end modalidades -->

       
            <!-- start join us -->
            <section id="join_us">

                <div class="banner-image1">
        
                    <div class="banner-image1 d-flex justify-content-center align-items-center">
                        <div>
                            <div class="row text-center" style="background-color: white;">
        
                                <div class="col-xl-12 col-sm-12 col_h21">
                                   
                                    <div class="text31  hr_class1">
                                        <h2 style="text-align: center;">Junta-te A Nós!</h2>
                                        <hr style="width:85px; height:2px; text-align:center;margin:0px auto 2px auto;">
                                </div>
                                    <p>Deixa a dança fazer parte da tua vida e junta-te a nós!</p>
                                    <div class="pink_btn">
                                        <a href="{{ asset('inscricoes') }}">
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
            <div class="text31  hr_class1">
                <h2 style="text-align: center;">Eventos</h2>
                <hr style="width:85px; height:2px; text-align:center; margin:0px auto 25px auto;">
        </div>

            <div class="row">

                @if (count($evento))
                @foreach($evento as $eventos)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 car_col d-flex justify-content-center align-items-top">
                    <div class="card">
                        <div class="card-body">
                            <div class="details_event d-flex justify-content-start">
                                <h6><i class="bi bi-calendar4-event"></i> {{ date('d-m-Y', strtotime($eventos->data))}}</h6>
                                <h6><i class="bi bi-clock"></i> {{ date('H:m', strtotime($eventos->data))}}</h6>
                                <h6><i class="bi bi-geo-alt-fill"></i> {{$eventos->localizacao}}</h6>
                            </div>
                            <h3>{{$eventos->nome}}</h3>
                        </div>
                        <div class="img_event position-relative" style="border-radius: 4px;">
                            <img src="{{ url('storage/eventos/'.$eventos->foto) }}"
                                alt="{{$eventos->nome}}">
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h6>Não existem categorias registadas</h6>
                @endif
                

               
            </div>
        </div>
    </section>
    <!-- end events -->

@endsection


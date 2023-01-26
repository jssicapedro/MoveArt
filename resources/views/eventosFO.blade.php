@extends('layout.master')

@section('title', 'MoveArt - Eventos')

@section('links')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('main')
<section class="home" id="home">

    <div class="content">
        <h3>É hora de te divertires! <span>Vem dançar connosco</span></h3>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/pexels-allan-mas-5368984.jpg')}}" alt=""></div>
        </div>
    </div>

</section>

<br>
<br>

<section class="service" id="service">

    <h1 class="heading"> Serviços nos <span>nossos Eventos</span> </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Comida e Bebida</h3>
            <p>Em todos os nossos eventos temos comida e bebida para si.</p>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>Fotos</h3>
            <p>Em todos os nosso eventos, poderá levar uma foto como recordação.</p>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>Acessórios</h3>
            <p>Em todos os nossos eventos, receberá um acessório para se juntar a nós.</p>
        </div>

    </div>

</section>

<br>
<br>

<section>
    <h1 class="heading">Próximos<span> Eventos</span> </h1>
<div class="container">
    <div class="row">
        <div class="column">
          <div class="card">
            <div class="img">
                <span>Evelynn</span>
            </div>
            <div class="content">
                <span class="title">O abraço da agonia</span>
                <p class="desc">. Ela atrai presas com sua voluptuosa aparência de fêmea humana</p>
            </div>
            <div class="arrow">
                <span>&#8673;</span>
            </div>
          </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/eventosFO/eventosFO.js') }}"></script>
@endsection

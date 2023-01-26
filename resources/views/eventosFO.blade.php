@extends('layout.master')

@section('title', 'MoveArt - Eventos')

@section('links')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- custom css file link  -->
<link rel="stylesheet" href="css/eventosFO.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection



@section('main')
<section class="home" id="home">

    <div class="content">
        <h3>É hora de te divertires! <span>Vem dançar connosco</span></h3>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (1).jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (2).jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (3).jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (4).jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (5).jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('img/eventosFO/1 (6).jpg')}}" alt=""></div>
        </div>
    </div>

</section>

<br>
<br>

<section class="service" id="service">

    <h2 class="section__title">Serviços nos nossos Eventos</span></h2>

    <div class="box-container">
        <div class="box">
        <i class="bi bi-geo-alt-fill"></i>
            <h3>Comida e Bebida</h3>
            <p>Em todos os nossos eventos temos comida e bebida para si.</p>
        </div>

        <div class="box">
        <i class="bi bi-geo-alt-fill"></i>
            <h3>Fotos</h3>
            <p>Em todos os nosso eventos, poderá levar uma foto como recordação.</p>
        </div>

        <div class="box">
        <i class="bi bi-geo-alt-fill"></i>
            <h3>Acessórios</h3>
            <p>Em todos os nossos eventos, receberá um acessório para se juntar a nós.</p>
        </div>

    </div>

</section>

<br>
<br>

<section>
<h2 class="section__title">Próximos<span> Eventos</span></h2>
<div class="container">
    <div class="row">
    @if (count($evento))
        @foreach($evento as $eventos)
        <div class="column">
          <div class="card">
            <div class="img">
                <img src="{{asset('img/eventosBO/'.$eventos->foto)}}">
            </div>
            <div class="content">
            <h3>{{$eventos->nome}}</h3><hr>
            <h6><i class="bi bi-calendar4-event"></i> {{ date('d-m-Y', strtotime($eventos->data))}}</h6><hr>
            <h6><i class="bi bi-geo-alt-fill"></i> {{$eventos->localizacao}}</h6><hr>
            </div>
            <div class="arrow">
                <span>&#8673;</span>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <h6>Não há nenhum evento agendado</h6>
        @endif
    </div>
</div>
</section>

<section id="mapaaulas_imagem">
    <div>
        <div id="textoimagem">
            <h2 class="section__title">
                Vem Dançar
            </h2>
            <button>Comprar Bilhetes</button>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/eventosFO/eventosFO.js') }}"></script>
@endsection
